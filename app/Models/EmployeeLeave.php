<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EmployeeLeave extends Model
{
   

    public function user()
    {
        return $this->belongsTo(EmployeeRegirstration::class,'employee_id','id');
    }

   public function leave_purpose()
    {
        return $this->belongsTo(EmployeeLeavePurpose::class,'employee_leave_purpose_id','id');
    }

}
