<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index(){

        $data = Contact::latest()->get();
        return view('backend.contact', compact('data'));
    }
    function add_modal()
    {
        return view('backend.add_contact');
    }
    function store(Request $request){
       // return $request->all();
         $contact=new Contact();
         $contact->email=$request->email;
        $contact->contact_number=$request->contact_number;
        $contact->address=$request->address;
        $contact->save();
        return redirect()->route('contact');



    }
    function delete($id){
        Contact::findorFail($id)->delete();
        return "delete success";
    }
    }

