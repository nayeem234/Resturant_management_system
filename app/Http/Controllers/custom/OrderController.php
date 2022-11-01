<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function index(){
        $data=Order::get();
        return view('backend.orders',compact('data'));
    }
    function orderform(){
        return view('backend.add_orders');

    }
}
