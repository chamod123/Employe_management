<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitlesModel extends Model
{
    protected $table = 'titles';

    public function employee()
    {
        return $this->belongsTo('App\Models\EmployeesModel','emp_no','emp_no');
    }
}
