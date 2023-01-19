<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = EmployeesModel::all();

        return view('Employee.index',
            ['employees' => $employees
            ]);
    }

    public function create(){
        return view('Employee.create');
    }

    public function store(Request $request){

        $employee = new EmployeesModel();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->birth_date = $request->birth_date;
        $employee->gender = $request->gender;
        $employee->hire_date = $request->hire_date;
        $employee->save();

        return $request;
    }

}
