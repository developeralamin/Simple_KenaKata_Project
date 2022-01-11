<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


 protected $fillable = ['title','category_id','image','cost_price','sale_price','stock'];

  // public function category()
  // {
  //   return $this->belongsTo(Category::class,'category_id','id');
  // }

 public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
 


}
