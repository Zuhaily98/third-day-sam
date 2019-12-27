<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PublicController extends Controller
{
    public function index(){
        //$blogs = Blog::all();
        $blogs = Blog::paginate(10);
        //$blogs = Blog::latest()->first()::paginate(10);
        // dd($blogs);
        return view('template.home')->with(compact('blogs'));
    }

    public function show(Blog $blogx){
        return view('template.post')->with(compact('blog'));

    }
}
