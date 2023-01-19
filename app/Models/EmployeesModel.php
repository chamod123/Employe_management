<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    protected $table = 'employees';

    public function employee()
    {
        return $this->hasMany('App\EmployeesModel','emp_no','emp_no');
    }

    public function employee_titles()
    {
        return $this->hasMany('App\TitlesModel','emp_no','emp_no');
    }
}
