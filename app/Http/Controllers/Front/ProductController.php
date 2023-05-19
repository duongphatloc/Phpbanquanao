<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Brand;
use App\Models\ProductCategory;


class ProductController extends Controller
{
    public function index(){
        
     
        $guarded['products']=Product::all();
        return view ('front.product.index')->with("guarded",$guarded);
    }
    public function search(){
        $search_text =$_GET['query'];
        $products=Product::where('name','LIKE','%'.$search_text.'%')->get();
        return view('front.product.search',compact('products'));
    }
   
 
}
