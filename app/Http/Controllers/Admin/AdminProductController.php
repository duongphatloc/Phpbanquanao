<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class AdminProductController extends Controller
{
    public function index(){
      
        $guarded['products']=Product::All();
        return view('dashboard.product.index')->with('guarded',$guarded);
    }
    public function store(Request $request)
    {
    $request->validate([
        
    "name" => "required|max:255",
    "brand"=>"required",
    "catagory"=>"required",


   
    "price" => "required|numeric|gt:0",
    "discount"=>"required",
    "weight"=>"required",
    "sku"=>"required",
    "tag"=>"required",

    "description" => "required",
    "image"=>"image"
 
    ]);
    $newProduct = new Product();
    $newProduct->setName($request->input('name'));
    $newProduct->setBrandId($request->input('brand'));
    $newProduct->setproductCategoryId($request->input('catagory'));
    $newProduct->setPrice($request->input('price'));

    $newProduct->setDiscount($request->input('discount'));
    $newProduct->setWeight($request->input('weight'));
    $newProduct->setSku($request->input('sku'));

    $newProduct->setTag($request->input('tag'));
    $newProduct->setDescription($request->input('description'));
    $newProduct->setImage("game.png");
   
    $newProduct->save();
    if ($request->hasFile('image')) {
        $imageName = $newProduct->getId().".".$request->file('image')->extension();
        Storage::disk('public')->put($imageName,
        file_get_contents($request->file('image')->getRealPath())
        );
        $newProduct->setImage($imageName);
        $newProduct->save();
    }

   
  
   

    return back();

    }

    public function create(){
       
        $guarded['products']=Product::All();
        return view('dashboard.product.create')->with('guarded',$guarded);
    }
    public function delete($id)
    {
    Product::destroy($id);
    return back();
    }
    //eidt
    public function edit($id){
   
        $guarded['products']=Product::findOrFail($id);
        return view('dashboard.product.edit')->with("guarded",$guarded);
    }
    public function update(Request $request,$id){
        $request->validate([
            "name" => "required|max:255",
    "price" => "required|numeric|gt:0",
    "discount"=>"required",
    "weight"=>"required",
    "sku"=>"required",
    "tag"=>"required",
    "description" => "required",
    "image"=>"image"
 
        ]);
        $product=Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setPrice($request->input('price'));
        $product->setDiscount($request->input('discount'));
        $product->setWeight($request->input('weight'));
        $product->setSku($request->input('sku'));
        $product->setTag($request->input('tag'));
        $product->setDescription($request->input('description'));
        if($request->hasFile('image')){
            $imageName=$product->getId() . "." .$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
    
        }
      
        $product->save();

        return redirect()->route('dashboard.product.index');



    }
   

}
