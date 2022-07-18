<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $orders = Order::select('*')->count();
        $customers = Customer::select('*')->count();
        $suppliers = Supplier::select('*')->count();
        $employees = Employee::select('*')->count();

        // dd($orders);

        return view('home.home',compact('orders','customers','suppliers','employees'));
    }
}
