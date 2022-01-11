<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;

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





  public function ProductEdit(){

   }

//End mehtod


  public function ProductUpdate(){

   }

//End mehtod


  public function Productdelete(){

   }

//End mehtod



}
