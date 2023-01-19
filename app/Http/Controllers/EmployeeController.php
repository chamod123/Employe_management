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

}
