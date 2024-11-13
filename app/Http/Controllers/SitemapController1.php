<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
// use App\Models\Blog;
// use App\Models\Course;
  
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($value='')
    {
        $posts = Post::latest()->get();
  
        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}