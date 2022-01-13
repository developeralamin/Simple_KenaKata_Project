<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  
  protected $fillable = ['group_id','name','email','phone','address'];


   public  function userGroup(){
   	  return $this->belongsTo(UserGroup::class,'group_id','id');
   }



  }
