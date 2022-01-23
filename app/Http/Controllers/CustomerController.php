<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\UserGroup;
use App\Models\Customer;
use Carbon\Carbon;
use App\Http\Requests\CustomerRequest;


class CustomerController extends Controller
{
  

 public  function ViewCustomer(){
    
       // $allDatas = DB::table('customers')
       // ->join('user_groups','customers.group_id','=','user_groups.id')
       // ->Simplepaginate(4);
       // dd($allDatas);
       $allDatas  = Customer::all();
       return view('backends.customers.customers_view',compact('allDatas'));
   }

//End method

  public  function addCustomer(){

      $usergroups = UserGroup::all();
      return view('backends.customers.customers_add',compact('usergroups'));

   }


//End method


  public  function StoreCustomer(CustomerRequest $request){
         
  		$data = $request->all();

        if(Customer::create($data)){
            Toastr::success('Customer Successfully Saved :)' ,'Success');
        }

        return redirect()->route('Customer.view');
       
   }


//End method


  public  function CustomerEdit($id){
          
  		 $usergroups = UserGroup::all();
		$EditData    = Customer::find($id);

  	  return view('backends.customers.customers_edit',compact('EditData','usergroups'));


   }

//End method

  public  function CustomerUpdate(CustomerRequest $request , $id){

  		Customer::findOrFail($id)->update([
  			 'group_id'   => $request->group_id,
  			 'name'      => $request->name,
  			 'email'     => $request->email,
  			 'phone'     => $request->phone,
  			 'address'   => $request->address,
  		]);


      Toastr::success('Customer Successfully Update :)' ,'Success');
      return redirect()->route('Customer.view');    
   }



//End method



  public  function Customerdelete($id){
      
         $deleteCustomer = Customer::find($id);
         $deleteCustomer->delete();

        Toastr::success('Customer Successfully Delete :)' ,'Success');
        return redirect()->back();    

  }

//End method



}
