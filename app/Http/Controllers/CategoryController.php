<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
      {

   public function ViewCategory(){
       
         $countCat = DB::table('categories')->count();
         $allData = DB::table('categories')->Simplepaginate(5);
          return view('backends.Category.category_view',compact('allData','countCat'));

      }

//End method

   public function addCategory(){

   	    return view('backends.Category.category_add');
      }

//End method

   public function StoreCategory(Request $request){

         $validata = $request->validate([
              'title' =>'required'
        ]);

        DB::table('categories')->insert([
        	  'title'         => $request->title,
             'created_at'   => Carbon::now(),
        ]);

      Toastr::success('Category Successfully Saved :)' ,'Success');
      return redirect()->route('Category.view');

      }

//End method

   public function CategoryEdit($id){

          $editData = DB::table('categories')->find($id);
          return view('backends.Category.category_edit',compact('editData'));
        
      }

//End method

   public function CategoryUpdate(Request $request ,$id){

   	  Category::findOrFail($id)->update([
        	  'title' => $request->title
        ]);


      Toastr::success('Category Successfully Update :)' ,'Success');
      return redirect()->route('Category.view');


      }

//End method

   public function Categorydelete($id){
       
       $delete = Category::findOrFail($id);
       $delete->delete();

      Toastr::success('Category Successfully Delete :)' ,'Success');
      return redirect()->route('Category.view');

   }
//End method

}
