<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\EmployeeRegirstration;
use Carbon\Carbon;
use File;

class EmployeeRegistrationController extends Controller
{


	public function ViewEmployee(){
         $countCat = DB::table('employee_regirstrations')->count();
         $allData = DB::table('employee_regirstrations')->Simplepaginate(5);
         return view('backends.EmployeeReg.EmployeeReg_view',compact('allData','countCat'));
	}

	//End method


	public function addEmployee(){
           // dd('do');
		  return view('backends.EmployeeReg.EmployeeReg_add');
	}

	//End method


	public function StoreEmployee(Request $request){
	
		  $validata = $request->validate([
                 'mobile'      =>'required', 
          ]);

    	$Employee                       = new EmployeeRegirstration();
    	  $code                         = rand(00000,999999);
    	   $Employee->id_card_no        = $code;
  
    	$Employee->name                 = $request->name;
    	$Employee->fname                = $request->fname;
    	$Employee->mname                = $request->mname;
    	$Employee->mobile               = $request->mobile;
    	$Employee->address              = $request->address;
    	$Employee->gender               = $request->gender;
    	$Employee->religion             = $request->religion;
    	$Employee->salary               = $request->salary;
    	$Employee->dob                  = date('Y-m-d',strtotime($request->dob));
    	$Employee->join_date            = date('Y-m-d',strtotime($request->join_date));

    	if ($request->file('photo')) {
    		$file = $request->file('photo');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/employee_image'),$filename);
    		$Employee['photo'] = $filename;
    	}

 	    $Employee->save();

    	 Toastr::success('Employee Registration Successfully Saved :)' ,'Success');
    	return redirect()->route('Employee.view');


	}

	//End method


	public function EmployeeEdit($id){
         $editData = DB::table('employee_regirstrations')->find($id);
         return view('backends.EmployeeReg.EmployeeReg_edit',compact('editData'));
	}

	//End method


	public function EmployeeUpdate(Request $request ,$id){
        $employee                  = EmployeeRegirstration::find($id);
      $employee->name              = $request->name;
      $employee->fname             = $request->fname;
      $employee->mname             = $request->mname;
      $employee->mobile            = $request->mobile;
      $employee->address           = $request->address;
      $employee->gender            = $request->gender;
      $employee->religion          = $request->religion;
      $employee->dob               = date('Y-m-d',strtotime($request->dob));


      if ($request->file('photo')) {

        $file = $request->file('photo');
        @unlink(public_path('uploads/employee_image/'.$employee->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads/employee_image'),$filename);
        $employee['photo'] = $filename;


      }

      $employee->save();

      Toastr::success('Employee Registration Successfully Updated :)' ,'Success');
      return redirect()->route('Employee.view');
	}

	//End method


	public function Employeedelete($id){
       $delete = EmployeeRegirstration::findOrFail($id);
       $image_path =public_path('/uploads/employee_image/'.$delete->photo);

       if(file_exists($image_path)){
             File::delete($image_path);
      }

      $delete->delete();

      Toastr::success('Employee Registration Successfully Delete :)' ,'Success');
      return redirect()->back();


	}

	//End method






}
