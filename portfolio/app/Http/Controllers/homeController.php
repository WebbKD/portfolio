<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class homeController extends Controller
{
    //

    public function index(){

        return view('home.index');
    }

    public function blogList(){
        return view('home.blog-list');
    }

    public function projectList(){
        return view('home.project-list');
    }

    public function viewPost(){
        $post = post::find(2);
        return view('home.post', compact('post'));
    }
}
