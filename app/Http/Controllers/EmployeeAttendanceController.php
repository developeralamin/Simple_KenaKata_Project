<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\EmployeeRegirstration;
use App\Models\Employee_Attendance;
use Carbon\Carbon;

class EmployeeAttendanceController extends Controller
{
 
 
	 public function ViewEmployeeAttendance(){
        
      $allData = Employee_Attendance::select('date')->groupBy('date')->get('id','desc');
       return view('backends.EmployeeAtten.EmployeeLeave_attend',compact('allData'));

	}


//End method



	 public function addEmployeeAttendance(){ 
       $employees = EmployeeRegirstration::get();
     return view('backends.EmployeeAtten.EmployeeLeave_attend_add',compact('employees'));
	}


//End method


	 public function StoreEmployeeAttendance(Request $request){ 
         
	 	// dd($request->all())->toArray();
// IF already get attendance  this date will be changed	 	
Employee_Attendance::where('date', date('Y-m-d', strtotime($request->date)))->delete();

        $countEmployee =count($request->emp_id);
      
      for ($i=0; $i < $countEmployee ; $i++) { 

      	$atten_status = 'status'.$i;
     
        $attend                      = new Employee_Attendance();
        $attend->date                = date('Y-m-d',strtotime($request->date));
        $attend->emp_id              = $request->emp_id[$i];
        $attend->status              = $request->$atten_status;

        $attend->save();

      }//end for loop

       Toastr::success('Employee Attendance Data Updated Successfully :)' ,'Success');
    	return redirect()->route('EmployeAttendance.view');


	}


//End method


	 public function EmployeeAttendanceEdit($date){ 
      
      $editData         = Employee_Attendance::where('date',$date)->get();
       $employees       = EmployeeRegirstration::get();
      // dd($editData)->toArray();
     return view('backends.EmployeeAtten.EmployeeLeave_attend_Edit',compact('editData','employees'));

	}


//End method


	 public function EmployeeAttendancedetails($date){ 
         
           $details = Employee_Attendance::where('date',$date)->get();
           // dd($date);
          return view('backends.EmployeeAtten.EmployeeLeave_attend_details',compact('details'));
	}


//End method







}
