<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;
use App\tag;

class homeController extends Controller
{
    //

    public function index(){

        $projects = post::all()->where('category_id', '=', 2)->take(6);
        $blogs = post::all()->where('category_id', '=', 1)->take(4);


        return view('home.index', compact('projects','blogs'));
    }

    public function blogList(){

        $blogs = post::all()->where('category_id', '=', 1);

        $tags = tag::whereHas('posts', function ($query){
            $query->where('category_id', '=', 1);
        })->get();

        return view('home.blog-list', compact('blogs', 'tags'));
    }

    public function blogListByTag($tagSlug){

        $tagId = tag::where('slug', '=', $tagSlug)->get()->first()->id;

        $blogs = post::all()->where('tag_id', '=', $tagId);

        $tags = tag::whereHas('posts', function ($query){
            $query->where('category_id', '=', 1);
        })->get();

        return view('home.blog-list', compact('blogs', 'tags'));

    }

    public function projectList(){

        $projects = post::all()->where('category_id', '=', 2);

        return view('home.project-list',compact('projects'));
    }

    public function viewPost($tagSlug, $postSlug){
        $post = post::where('slug', '=', $postSlug)->first();
        return view('home.post', compact('post'));
    }
}
