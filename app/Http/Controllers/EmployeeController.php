<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use App\Models\SalariesModel;
use App\Models\TitlesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        try {
            $employees = EmployeesModel::all();

            return view('Employee.index',
                ['employees' => $employees
                ]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('Employee.create');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'gender' => 'required',
                'hire_date' => 'required',
                'salary' => 'required',
                'salary_from_date' => 'required',
                'salary_to_date' => 'required',
                'title' => 'required',
                'designation_from_date' => 'required',
                'designation_to_date' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->getMessageBag()->toArray()], 200);
            }

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
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //view employee details
    public function view_data($emp_no)
    {
        try {
            $employee = EmployeesModel::where('emp_no', '=', $emp_no)
                ->first();
            return view('Employee.view_data',
                ['employee' => $employee
                ]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    //view edit employee screen
    public function view_edit($emp_no)
    {
        try {
            $employee = EmployeesModel::where('emp_no', '=', $emp_no)
                ->first();
            return view('Employee.edit',
                ['employee' => $employee
                ]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }


    //update employee
    public function edit(Request $request)
    {
        try {
//        return $request->emp_no;

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'gender' => 'required',
                'hire_date' => 'required',
                'salary' => 'required',
                'salary_from_date' => 'required',
                'salary_to_date' => 'required',
                'title' => 'required',
                'designation_from_date' => 'required',
                'designation_to_date' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->getMessageBag()->toArray()], 200);
            }

            $employee = EmployeesModel::where('emp_no', '=', $request->emp_no)
                ->first();

            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->birth_date = $request->birth_date;
            $employee->gender = $request->gender;
            $employee->hire_date = $request->hire_date;
            $employee->save();

            $salary = SalariesModel::where('emp_no', '=', $request->emp_no)
                ->where('id', '=', $request->salary_id)
                ->first();

            $salary->salary = $request->salary;
            $salary->from_date = $request->salary_from_date;
            $salary->to_date = $request->salary_to_date;
            $salary->save();


            $titles = TitlesModel::where('emp_no', '=', $request->emp_no)
                ->where('id', '=', $request->title_id)
                ->first();

            $titles->title = $request->title;
            $titles->from_date = $request->designation_from_date;
            $titles->to_date = $request->designation_to_date;
            $titles->save();


            return redirect('/Employee');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

}
