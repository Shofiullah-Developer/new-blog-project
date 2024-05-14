<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class IslamicblogController extends Controller
{
    private $recentBlogs;
    private $blog;
    private $categories;

    public function index(){
        $this->recentBlogs = Blog::where('status',1)->orderBy('id','desc')->take('3')->get();
        return view('website.home.home',['recent_blogs'=>$this->recentBlogs]);
    }
    public function category(){
        $this->categories = Category::all();
        return view('website.category.category',['categories'=>$this->categories]);
    }
    public function detail($id){
        $this->blog = Blog::find($id);
        return view('website.detail.detail',['blog'=>$this->blog]);
    }
    public function contact(){
        return view('website.contact.contact');
    }
}
