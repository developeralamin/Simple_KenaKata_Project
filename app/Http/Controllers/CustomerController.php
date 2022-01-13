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
    
       // $allDatas = DB::table('customers')->Simplepaginate(7);
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


  public  function CustomerEdit(){

   }

//End method




  public  function CustomerUpdate(){


   }

//End method


  public  function Customerdelete(){

  }

//End method



}
