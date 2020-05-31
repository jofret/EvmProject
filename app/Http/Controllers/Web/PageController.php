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

        /*Product::select('product.name')
       ->join('categories', 'products.category_id', '=', 'categories.id')
       ->whereRaw("products.created_at = (SELECT MAX(products.created_at) FROM products)")
       ->get();*/
        /*$products = Category::addSelect([
                                        "ultimo_anadido" => function($query) {
                                        $query->select("name")
                                                ->from("posts")
                                                ->whereColumn("category_id", "categories.id")
                                                ->take(1)
                                                ->latest(); }
                                        ])->get();
*/
        $products = Category::addSelect(["ultimo_anadido" => function($query) {
                    $query->select("name")
                          ->from("posts")
                          ->whereColumn("category_id", "categories.id")
                          ->limit(1)
                          ->latest();
                }])->get();
                    

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
