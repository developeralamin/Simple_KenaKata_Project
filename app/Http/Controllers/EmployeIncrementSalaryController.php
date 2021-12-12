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


    public function SalaryStoreUpdate(Request $request,$id){

          $employee              = EmployeeRegirstration::find($id);
     $previous_salary            = $employee->salary;
     $present_salary             = (float)$previous_salary+(float)$request->increment_salary;
     $employee->salary           = $present_salary;
     $employee->save();


     $salaryData                   = new EmployeSalary();
     $salaryData->emp_id           = $id;
     $salaryData->previous_salary  = $previous_salary;
     $salaryData->increment_salary = $request->increment_salary;
     $salaryData->present_salary   = $present_salary;

     $salaryData->effected_salary  =date('Y-m-d',strtotime($request->effected_salary));

    $salaryData->save();

     Toastr::success('Employee Salary Successfully Increment :)' ,'Success');
      return redirect()->route('EmployeeSalary.view');
    }

//End method


    public function SalaryDetails($id){

    	 $employee = EmployeeRegirstration::find($id);
        
         $increment_salary = EmployeSalary::where('emp_id',$employee->id)->get();      
         
         // dd($increment_salary)->toArray();

       return view('backends.EmployeeSalary.EmployeeReg_Salary_Details',compact('employee','increment_salary'));


    }

//End method



}
