<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;
use \DomDocument;
use Image;
use Storage;

class adminController extends Controller
{
    //
    public function index(){

        return view('admin.index');
    }

    public function viewCategories(){

        $categories = category::all();

        return view('admin.viewCategories', compact('categories'));
    }

    public function createCategory(){

        return view('admin.createCategory');
    }

    public function storeCategory(Request $request){

        $category = new category;
        $category->title = $request->title;

        $category->save();

        return redirect('/admin');
    }

    public function editCategory($id){

        $category = category::find($id);

        return view('admin.editCategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $category = category::find($id);

        $category->name = $request->name;

        $category->save();
        return redirect('/view-categories');
    }



    public function createPost(){

        return view('admin.createPost');
    }

    public function storePost(Request $request){

        $post = new post;
        $post->title = $request->title;

        $message=$request->input('content');

       $dom = new DomDocument();

       $dom->loadHTML("<div>$message</div>");

       $container = $dom->getElementsByTagName('div')->item(0);

       $container = $container->parentNode->removeChild($container);

       while ($dom->firstChild) {
         $dom->removeChild($dom->firstChild);
       }

       while ($container->firstChild ) {
         $dom->appendChild($container->firstChild);
       }

       $images = $dom->getElementsByTagName('img');
       // foreach <img> in the submited message
       foreach($images as $img){
          $src = $img->getAttribute('src');
 
           // if the img source is 'data-url'
          if(preg_match('/data:image/', $src)){ 
          preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
          $mimetype = $groups['mime']; 
          // Generating a random filename
          $filename = uniqid();
          $filepath = "/images/blog_images/$filename.$mimetype";
          // You can put your directory to upload image 
          $image = Image::make($src)
          // resize if required
          /* ->resize(300, 200) */
            ->encode($mimetype, 100) // encode file to the specified mimetype
            ->save(public_path($filepath)); 
            $new_src = $filepath;
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
            } // <!--endif
        } // 
        $post->content = $dom->saveHTML();
        $post->save();

        return redirect('/admin');
    }

    public function showPost(post $post){

    
    }

    public function updatePost(Request $request, post $post){

    }

    public function destroy(post $post){
        
    }



}
