<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index(){

        $orders = Order::select('*')->get();

        return view('order.index',compact('orders'));
    }

    public function create(){

        return view('order.create');
    }

    public function edit(){

        return view('order.edit');
    }

    public function delete(){

        return view('order.delete');
    }

}
