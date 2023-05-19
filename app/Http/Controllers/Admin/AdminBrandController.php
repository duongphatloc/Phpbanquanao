<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class AdminBrandController extends Controller
{
    public function index(){
        $guarded['brands']=Brand::All();
        return view('dashboard.brand.index')->with("guarded",$guarded);
        }
    public function store(Request $request)
        {
        $request->validate([
        "name" => "required|max:255",
     
        ]);
        $creationData = $request->only(["name",]);
     
      
        Brand::create($creationData);
    
        return back();
    
        }
    public function create(){
        return view('dashboard.brand.create');
    }
    public function delete($id)
    {
    Brand::destroy($id);
    return back();
    }
    public function edit($id){
   
        $guarded['brands']=Brand::findOrFail($id);
        return view('dashboard.brand.edit')->with("guarded",$guarded);
    }
    public function update(Request $request,$id){
        $request->validate([
            "name" => "required|max:255",
    
 
        ]);
        $brand=Brand::findOrFail($id);
        $brand->setName($request->input('name'));
       
        $brand->save();
        return redirect()->route('dashboard.brand.index');



    }
  
}
