<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {

        if (Auth::check()) {
            //orders
            $orderCount = Order::select('*')->count();
            $orders = Order::select('*')->get();

            $customers = Customer::select('*')->count();
            $suppliers = Supplier::select('*')->count();
            $employees = Employee::select('*')->count();


            return view('home.home', compact('orderCount', 'customers', 'suppliers', 'employees', 'orders'));
        }

        return redirect()->route('login');
    }
}
