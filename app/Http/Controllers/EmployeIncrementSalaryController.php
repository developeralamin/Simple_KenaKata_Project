<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\EmployeeRegirstration;
use App\Models\EmployeSalary;
use Carbon\Carbon;


class EmployeIncrementSalaryController extends Controller
{
    public function ViewEmployeeSalary()
    {
    	  $incrementSalary =  DB::table('employee_regirstrations')->Simplepaginate(5);
         return view('backends.EmployeeSalary.EmployeeReg_Salary',compact('incrementSalary'));
    }
//End method



    public function SalaryIncrement($id){
       $editData =  EmployeeRegirstration::find($id);
         return view('backends.EmployeeSalary.EmployeeReg_Salary_Add',compact('editData'));

    }

//End method


    public function SalaryStoreUpdate(){

    }

//End method


    public function SalaryDetails(){

    }

//End method



}
