<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Attendance extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(EmployeeRegirstration::class,'emp_id','id');
    }
}
