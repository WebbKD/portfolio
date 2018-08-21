<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function createCategory(){
        return view('admin.createCategory');
    }

    public function storeCategory(Request $request){

        return redirect('/admin');
    }

    public function createPost(){

        return view('admin.createPost');
    }

    public function storePost(Request $request){

        return redirect('/admin');
    }

    public function showPost(post $post){

    
    }

    public function updatePost(Request $request, post $post){

    }

    public function destroy(post $post){
        
    }

    public function editorUpload(Request $request){
        $image = $request->file();
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'. $filename);
    }


}
