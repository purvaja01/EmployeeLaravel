<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index(){

        $employee = Employee::all();
        return view('index',compact('employee'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('desig');
        echo $employee;
        $employee->save();

        return redirect('employee')->with('status','Employee added successfully.');
    }
}
