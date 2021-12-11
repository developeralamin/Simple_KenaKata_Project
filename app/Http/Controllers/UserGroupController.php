<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\UserGroup;
use Carbon\Carbon;

class UserGroupController extends Controller
{


	public function ViewUserGroup(){
		 $countCat = DB::table('user_groups')->count();
         $allData = DB::table('user_groups')->Simplepaginate(5);
         return view('backends.UserGroup.UserGroup_view',compact('allData','countCat'));

	}

//End method


	public function addUserGroup(){
       return view('backends.UserGroup.UserGroup_add');
	}

//End method


	public function StoreUserGroup(Request $request ){

         $validata = $request->validate([
              'user_group_name' =>'required'
        ]);

        DB::table('user_groups')->insert([
        	  'user_group_name'   => $request->user_group_name,
             'created_at'         => Carbon::now(),
        ]);

      Toastr::success('UserGroup Successfully Saved :)' ,'Success');
      return redirect()->route('UserGroup.view');


	}

//End method


	public function UserGroupEdit($id){
		 $editData = DB::table('user_groups')->find($id);
         return view('backends.UserGroup.UserGroup_edit',compact('editData'));

	}

//End method


	public function UserGroupUpdate(Request $request , $id){

       UserGroup::findOrFail($id)->update([
        	  'user_group_name' => $request->user_group_name
        ]);


      Toastr::success('UserGroup Successfully Update :)' ,'Success');
      return redirect()->route('UserGroup.view');


	}

//End method


	public function UserGroupdelete($id){

	   UserGroup::findOrFail($id)->delete();
	   Toastr::success('UserGroup Successfully Delete :)' ,'Success');
       return redirect()->route('UserGroup.view');

	}
//End method

}


