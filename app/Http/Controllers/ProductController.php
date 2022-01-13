<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use File;

class ProductController extends Controller
{

	
	public function ViewProduct()
	{
      $count = DB::table('products')->count();
      // $allData = DB::table('products')->get();
      $allData = Product::all();
		  return view('backends.products.products',compact('allData','count'));
	}


//End method

  public function addProduct(){

    $categories = DB::table('categories')->get();
    return view('backends.products.products_add',compact('categories'));
   }

//End mehtod



  public function StoreProduct(Request $request){
       // dd($request->all());
         $validate = $request->validate([ 

               'category_id' => 'required',
               'title'       => 'required',
               'cost_price'  => 'required',
               'sale_price'  => 'required',
               'stock'       => 'required',
         ]);
         


         $product               = new Product();

         $product->category_id  = $request->category_id; 
         $product->title        = $request->title; 
         $product->cost_price   = $request->cost_price;
         $product->sale_price   = $request->sale_price; 
         $product->stock        = $request->stock; 

    if ($request->file('image')) {

         $file = $request->file('image');
         $filename = date('YmdHi').$file->getClientOriginalName();
         $file->move(public_path('uploads/product'),$filename);
         $product['image'] = $filename;
      }

      $product->save();

      Toastr::success('Product Successfully Added :)' ,'Success');
      return redirect()->route('Product.view');
         
   }

//End mehtod


  public function ProductEdit($id){
          $categories     = DB::table('categories')->get();
          $edit           = DB::table('products')->find($id);
          return view('backends.products.products_edit',compact('categories','edit'));

   }


//End mehtod


  public function ProductUpdate(Request $request , $id){

          $product               = Product::find($id);

         $product->category_id  = $request->category_id; 
         $product->title        = $request->title; 
         $product->cost_price   = $request->cost_price;
         $product->sale_price   = $request->sale_price; 
         $product->stock        = $request->stock; 

    if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('uploads/product/'.$product->image));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads/product'),$filename);
        $product['image'] = $filename;
      }

      $product->save();

      Toastr::success('Product Successfully Updated :)' ,'Success');
      return redirect()->route('Product.view');



   }


//End mehtod


  public function Productdelete($id){
     $delete = Product::findOrFail($id);
       $image_path =public_path('/uploads/product/'.$delete->image);

       if(file_exists($image_path)){
             File::delete($image_path);
      }

      $delete->delete();

      Toastr::success('Product Successfully Delete :)' ,'Success');
      return redirect()->back();
   }

//End mehtod



}
