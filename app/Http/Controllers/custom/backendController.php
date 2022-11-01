<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class backendController extends Controller
{
    public function backend(){
        $data=Order::latest()->get();

        return view('backend.dashboard',compact('data'));
    }
}
