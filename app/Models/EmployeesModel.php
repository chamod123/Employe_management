<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    protected $table = 'employees';

    public function salary()
    {
        return $this->hasMany('App\Models\SalariesModel','emp_no','emp_no');
    }

    public function employee_titles()
    {
        return $this->hasMany('App\Models\TitlesModel','emp_no','emp_no');
    }
}
