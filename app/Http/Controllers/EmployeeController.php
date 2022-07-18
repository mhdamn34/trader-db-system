<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Employee::select('*')->get();

        return view('employee.index', compact('employees'));
    }

    public function create(Request $request){


        if($request->action == 'Save'){

            $create = Employee::insert([
                'first_name' => $request->first_name,
                'last_name' =>  $request->last_name,
                'title'  =>  $request->job_title,
                'birth_of_date' =>  $request->bod,
                'hire_date' =>  $request->hire_date,
                'address' =>  $request->address,
                'state' =>  $request->state,
                'postal_code' =>  $request->postal_code,
                'country' =>  $request->country,
                'home_phone' =>  $request->home_phone,
                'notes' =>  $request->notes,
                'company' =>  $request->company,
                'email' =>  $request->email_address,
            ]);


            return redirect()->route('employee.index')->with('success', 'Employee added');
        }

        return view('employee.create');
    }

    public function edit(Request $request, $employee_id){

        $employees = Employee::find($employee_id);

        return view('employee.edit', compact('employees'));
    }

    public function update(Request $request, $employee_id){

        $employees = Employee::find($employee_id);

        $update = Employee::where('id', $employee_id)->update([
                'first_name' => $request->first_name,
                'last_name' =>  $request->last_name,
                'title'  =>  $request->job_title,
                'birth_of_date' =>  $request->bod,
                'hire_date' =>  $request->hire_date,
                'address' =>  $request->address,
                'state' =>  $request->state,
                'city' =>  $request->city,
                'postal_code' =>  $request->postal_code,
                'country' =>  $request->country,
                'home_phone' =>  $request->home_phone,
                'notes' =>  $request->notes,
                'company' =>  $request->company,
                'email' =>  $request->email_address,
        ]);


        return redirect()->route('employee.index')->with('success', 'Employee Updates');
    }

    public function delete(Request $request, $employee_id){

        Employee::find($employee_id)->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted');
    }
}
