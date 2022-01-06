<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\EmployeeLeave;
use App\Models\EmployeeRegirstration;
use App\Models\EmployeeLeavePurpose;
use Carbon\Carbon;
use File;

class EmployeeLeaveController extends Controller
{


    public function ViewEmployeeLeave(){

    	 $countCat = DB::table('employee_leaves')->count();
         $allDataa =EmployeeLeave::all();
         return view('backends.EmployeeLeave.EmployeeLeave_view',compact('allDataa','countCat'));

     }

//End method here

    public function addEmployeeLeave(){
    	 $allRegis = DB::table('employee_regirstrations')->get();
         $allData = DB::table('employee_leave_purposes')->get();
    	return view('backends.EmployeeLeave.EmployeeLeave_Add',compact('allData','allRegis'));

       }

//End method here

    public function StoreEmployeeLeave(Request $request){
    	
          $validata = $request->validate([
                 'employee_leave_purpose_id'      =>'required', 
                 'employee_id'                    =>'required', 
                 'start_date'                     =>'required', 
                 'end_date'                       =>'required', 
          ]);

    	$EmployeeLeave                              = new EmployeeLeave();
    
  
    	$EmployeeLeave->employee_id                 = $request->employee_id;
    	$EmployeeLeave->employee_leave_purpose_id   = $request->employee_leave_purpose_id;
    	$EmployeeLeave->start_date                  = date('Y-m-d',strtotime($request->start_date));
    	$EmployeeLeave->end_date                    = date('Y-m-d',strtotime($request->end_date));

   

 	    $EmployeeLeave->save();

    	 Toastr::success('Employee Leave Successfully Saved :)' ,'Success');
    	return redirect()->route('EmployeeLeave.view');



       }

//End method here

    public function EmployeeLeaveEdit($id){

         $allRegis = DB::table('employee_regirstrations')->get();
         $leave_purpose = DB::table('employee_leave_purposes')->get();
         $edit = DB::table('employee_leaves')->find($id);
         // dd($EditData)->toArray();
         // die();
      return view('backends.EmployeeLeave.EmployeeLeave_Edit',compact('leave_purpose','allRegis','edit'));


       }

//End method here

    public function EmployeeLeaveUpdate(Request $request ,$id){

          $EmployeeLeave                          =  EmployeeLeave::find($id);
    
  
      $EmployeeLeave->employee_id                 = $request->employee_id;
      $EmployeeLeave->employee_leave_purpose_id   = $request->employee_leave_purpose_id;
      $EmployeeLeave->start_date                  = date('Y-m-d',strtotime($request->start_date));
      $EmployeeLeave->end_date                    = date('Y-m-d',strtotime($request->end_date));

   

      $EmployeeLeave->save();

       Toastr::success('Employee Leave Successfully Update :)' ,'Success');
      return redirect()->route('EmployeeLeave.view');



       }

//End method here

    public function EmployeeLeavedelete(){

       }

//End method here

    public function EmployeeLeavedetails(){

       }

//End method here



}
