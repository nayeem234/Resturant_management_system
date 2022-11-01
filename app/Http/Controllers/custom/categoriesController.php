<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class categoriesController extends Controller
{
    function index(){
        $data=Categories::latest()->get();
        return view('backend.categories', compact('data'));
    }
    function add_modal()
    {
        return view('backend.add_categories');
    }
    function store(Request $request){
       // return $request->all();
        $categories= new Categories();
        $categories->product_id=$request->product_id;
        $categories->name=$request->name;
        $categories->title=$request->title;
        $categories->image=$request->image;
        $categories->description=$request->description;
        $categories->save();
        return redirect()->route('categories');

    }
    function delete($id){
        Categories::findOrFail($id)->delete();
        return "delete succesfully";

    }
}
