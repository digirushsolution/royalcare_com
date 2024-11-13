<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = BlogCategory::orderBy('category_name', 'asc');

        $categories = $categories->paginate(15);
        return view('admin.blog.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));

        $category = new BlogCategory;
        $category->category_name = $request->category_name;
        $category->slug = strtolower($slug);
        $category->save();

        return redirect()->route('blog-category')->with('success', 'Blog category has been created successfully');
    }


    public function edit($id)
    {
        $categories = BlogCategory::find($id);
        $all_categories = BlogCategory::all();

        return view('admin.blog.category.edit',  compact('categories', 'all_categories'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));

        $category = BlogCategory::find($id);
        $category->category_name = $request->category_name;
        $category->slug = strtolower($slug);
        $category->save();

        return redirect()->route('blog-category')->with('success', 'Blog category has been updated successfully');

    }

    public function destroy($id)
    {
        BlogCategory::find($id)->delete();
        return redirect()->route('blog-category')->with('success', 'Blog category has been delete successfully');
    }

    //  Frontend blog category

    public function blogs_category($slug){

        $blog_category = BlogCategory::where('slug', $slug)->first();

            if ($blog_category) {
                $blogs = Blog::where('category_id', $blog_category->id)->get();
            } 

        $blog_categories = BlogCategory::all();
        $blogs_f = Blog::take(4)->get();

        return view('frontend.category.details', compact('blog_category', 'blogs', 'blogs_f', 'blog_categories'));
    }

}
