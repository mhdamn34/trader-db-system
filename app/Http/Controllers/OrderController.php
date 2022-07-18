<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Shipper;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {

        $orders = Order::select('*')->get();

        return view('order.index', compact('orders'));
    }

    public function create(Request $request)
    {
        $orders = Order::select('*')->get();
        $statusOrder = OrderStatus::select('*')->get();
        $shipper = Shipper::select('*')->get();
        $employee = Employee::select('*')->get();
        $customer = Customer::select('*')->get();

        if ($request->action == 'Save') {

            $insert = Order::insert([

                'status_id' =>  $request->status,
                'shipper_id' => $request->shipper,
                'employee_id' =>  $request->employee,
                'customer_id' =>  $request->customer,
                'order_date' =>  $request->order_date,
                'shipped_date' =>  $request->shipped_date,
                'paid_date' =>  $request->paid_date,
                'ship_name' => $request->ship_name,
                'ship_address' =>  $request->address,
                'ship_city' =>  $request->city,
                'ship_state' =>  $request->state,
                'ship_postal_code' => $request->postal_code,
                'ship_country' =>  $request->country,
                'shipping_fee' =>  $request->fee,
                'notes' => $request->notes,
                'order_name' => $request->order_name

            ]);

            return redirect()->route('order.index',compact('orders'))->with('success', 'order has been added');
        }

        return view('order.create', compact('statusOrder', 'shipper', 'employee', 'customer'));
    }

    public function edit()
    {

        return view('order.edit');
    }

    public function delete()
    {

        return view('order.delete');
    }
}
