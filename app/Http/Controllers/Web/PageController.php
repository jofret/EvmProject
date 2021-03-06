<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;

class PageController extends Controller
{
    
    public function catalogo(){

        $products = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id',1)->get();

        $categories = Category::all();

        $plans = Tag::all(); 

        return view('web.products', compact('categories','products','plans'));
    }


    public function post($slug){
    	$product = Post::where('slug', $slug)->first();

        $category = Post::where('slug', $slug)->pluck('category_id')->first();

        $excepto = Post::where('slug',$slug)->pluck('id')->first();

        $productsRelations = Post::orderBy('category_id', 'DESC')->where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->where('id', '<>', $excepto)->get();

    	return view('web.product', compact('product','category','productsRelations','excepto'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $categories = Category::all();

        $plans = Tag::all(); 

        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->get();

        return view('web.posts', compact('posts','category','categories','plans'));
    }

    public function tag($slug){ 
        
        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        $category = Category::where('slug', $slug)->pluck('id')->first();

        $categories = Category::all();

        $plans = Tag::all();

        return view('web.posts', compact('posts','category','categories','plans'));
    }


   
     public function admin(){
        return view('admin.index');
    }
  
}
