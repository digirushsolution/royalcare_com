<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Upload;
use App\Models\BlogCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    // admin blog list
    public function index(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog.list', compact('blogs'));
    }

    // create new blogs
    public function create(){
        $blog_categories = BlogCategory::all();
        return view('admin.blog.create', compact('blog_categories'));
    }
    
    // blog detail
    public function blogdetail($slug) {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) {
            abort(404); 
        }
        $metakeyword = $blog->meta_keywords; 
        $metatitle = $blog->meta_title; 
        $metaDescription = $blog->meta_description; 
        $base_url = config('app.url');
        $meta_img = !empty($blog->meta_img) ? $base_url . '/public/' . $blog->meta_img : null; 
        return view('frontend.blog-detail', compact('blog', 'metakeyword', 'meta_img', 'metatitle', 'metaDescription'));
    }
    
    
    // store blogs
    public function store(Request $request){
        
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $blog = new Blog;

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->banner = 'uploads/' . $filename;
        }

        if ($request->hasFile('meta_img')) {

            $file = $request->file('meta_img');
            $filename = time() . '_meta.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->meta_img = 'uploads/' . $filename;
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower(trim($slug, '-'));
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->banner_alt = $request->banner_alt;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;

        $blog->save();
        $this->addUrlToSitemap($blog);

        return redirect()->route('admin.blog')->with('success', 'Blog post has been created successfully');
    }

    // edit blogs in admin
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_categories = BlogCategory::all();
        return view('admin.blog.edit',  compact('blog', 'blog_categories'));
    }

    // delete blogs in admin
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $this->removeUrlFromSitemap($blog); 
            $blog->delete();
            return redirect()->route('admin.blog')->with('success', 'Blog post has been deleted successfully');
        }
    }

    // update blogs in admin
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $blog = Blog::find($id);
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $newSlug = strtolower(trim($slug, '-'));
        if ($blog->slug !== $newSlug) {

            $this->removeUrlFromSitemap($blog);
        }

        if ($request->hasFile('banner')) {
           
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->banner = 'uploads/' . $filename;
        }

        if ($request->hasFile('meta_img')) {
            
            $file = $request->file('meta_img');
            $filename = time() . '_meta.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->meta_img = 'uploads/' . $filename;
        }
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower(trim($slug, '-'));
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->banner_alt = $request->banner_alt;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->save();
        $this->addUrlToSitemap($blog);

        return redirect()->route('admin.blog')->with('success', 'Blog post has been updated successfully');
    }

    // Frontend Blogs
    public function show()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        $blog_categories = BlogCategory::all();

        $metaDesc = Setting::where('type', 'like', 'description_blog')->first();
        $metaTitle = Setting::where('type', 'like', 'title_blog')->first();
        $metaKey = Setting::where('type', 'like', 'keyword_blog')->first();

        return view('frontend.blog', compact('blogs','blog_categories','metaDesc', 'metaTitle', 'metaKey'));
    }

    // Blog details in frontend
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog_categories = BlogCategory::all();        

        return view("frontend.blogs.blog-details", compact('blog','blog_categories'));
    }

    // Upload image function
    public function uploadimage(Request $request){

            if($request->hasFile('upload')){

                $originalName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();

                $fileName = $fileName.'_'.time().'.'.$extension;
                
                $request->file('upload')->move(public_path('blog_image'), $fileName);
                $url = asset('blog_image/'.$fileName);

                return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
            }

    }

    // Blog page in frontend
    public function blog_page(Request $request)
    {
        $categories = BlogCategory::all();
        $blogs = Blog::with('category')->orderBy('id', 'desc');
    
        if ($request->has('type')) {
            $blogs->whereHas('category', function($query) use ($request) {
                $query->where('slug', $request->input('type'));
            });
        }
    
        if ($request->has('search') && !empty($request->input('search'))) {
            $searchTerm = $request->input('search');
            $blogs->where('title', 'like', '%' . $searchTerm . '%');
        }
        $blogs = $blogs->get();
        $settings = setting::all()->keyBy('type');
        $metaDescription = $settings['description_blog_page']->value ?? '';
        $metatitle = $settings['title_blog_page']->value ?? '';
        $metakeyword = $settings['keyword_blog_page']->value ?? '';
    
        return view('frontend.blog-page', compact('blogs', 'categories', 'metaDescription', 'metatitle', 'metakeyword'));
    }

    // add url in sitemap
    private function addUrlToSitemap($blog)
    {
        $sitemapPath = 'sitemap.xml';
        if (file_exists($sitemapPath)) {
            $sitemap = simplexml_load_file($sitemapPath);
        } else {
            $sitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
        }
    
       
        $blogUrl = url('blogs/' . $blog->slug);
        $urlExists = false;
    
        foreach ($sitemap->url as $urlElement) {
            if ((string)$urlElement->loc === $blogUrl) {
                $urlExists = true;
                break;
            }
        }
        if (!$urlExists) {
            $urlElement = $sitemap->addChild('url');
            $urlElement->addChild('loc', $blogUrl);
            $urlElement->addChild('lastmod', now()->toAtomString());
            $urlElement->addChild('priority', '0.64'); 
        }
        $sitemap->asXML($sitemapPath);
    }
    

    // remove url in sitemap
    private function removeUrlFromSitemap($blog)
    {
        $sitemapPath = 'sitemap.xml';
    
        if (file_exists($sitemapPath)) {
          
            $sitemapContent = simplexml_load_file($sitemapPath);
          
            $urlToRemove = url('blogs/' . $blog->slug);
    
          
            $newSitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
    
           
            $urlFound = false;
    
            foreach ($sitemapContent->url as $urlElement) {
                if ((string)$urlElement->loc === $urlToRemove) {
                    $urlFound = true; 
                    continue; 
                }
                $newUrlElement = $newSitemap->addChild('url');
                $newUrlElement->addChild('loc', (string)$urlElement->loc);
                $newUrlElement->addChild('lastmod', (string)$urlElement->lastmod);
                if (isset($urlElement->priority)) {
                    $newUrlElement->addChild('priority', (string)$urlElement->priority);
                }
            }
    
            
            $newSitemap->asXML($sitemapPath);
    
            return $urlFound; 
        }
    
        return false; 
    }
    

    
}