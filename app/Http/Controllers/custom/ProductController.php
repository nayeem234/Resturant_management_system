<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        $data=Product::latest()->get();
        return view('backend.product', compact('data'));
    }
    function productform(){
        return view('backend.add_product');
    }
    function store(Request $request){
        //return $request->all();
        $product = new Product();
        $product->name = $request->name;
        $product->title = $request->title;
       // $product->image=$request->image;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->save();
        return redirect()->route('product');



    }
    public function delete($id)
    {
        Product::FindOrFail($id)->delete();
        return "delete suceess";
    }

    public function preview($id){
        return Product::where('id', '=', $id)->get();
    }

}
