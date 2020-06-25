<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Product;
use App\Model\Slider;
use App\Model\Category;

class FrontEndManagement extends Controller
{
    public function homepage()
    {
    	$products = Product::where('status', 'Published') -> latest() -> paginate(8);
        return view('frontend.home', [
            'products'      => $products
        ]);
    }

    public function blog()
    {

        $all_post = Post::where('status','Published') -> latest() -> paginate(4);
    	return view('frontend.blog', [
            'all_post'  => $all_post
        ]);
    }



     public function contact()
    {

        $all_post = Post::where('status','Published') -> latest() -> paginate(2);
        return view('frontend.contact', [
            'all_post'  => $all_post
        ]);
    }



    public function shop()
    {
        $products = Product::where('status', 'Published') -> latest() -> paginate(8);
        return view('frontend.products', [
            'products'      => $products
        ]);
    }


    public function popupSingleProduct($id)
    {
        $single_product = Product::find($id);

        return $single_product;

    }




    public function searchByCategoryItems($slug)
    {
       $data = Category::where('slug', $slug) -> first();
        return view('frontend.category', [
            'category_product'  => $data
        ]);

        
    }


    public function productSearch(Request $val)
    {
        $search = $val -> search;

        $data = Product::where('name','like', '%'.$search.'%') -> latest() -> get();

        return view('frontend.search', [
            'search_product'       => $data
        ]);

    }

}
