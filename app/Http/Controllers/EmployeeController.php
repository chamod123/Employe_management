<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use App\Models\SalariesModel;
use App\Models\TitlesModel;
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

        $salary = new SalariesModel();
        $salary->emp_no = $employee->id;
        $salary->salary = $request->salary;
        $salary->from_date = $request->salary_from_date;
        $salary->to_date = $request->salary_to_date;
        $salary->save();

        $titles = new TitlesModel();
        $titles->emp_no = $employee->id;
        $titles->title = $request->title;
        $titles->from_date = $request->designation_from_date;
        $titles->to_date = $request->designation_to_date;
        $titles->save();

        return redirect('/Employee');
    }

}
