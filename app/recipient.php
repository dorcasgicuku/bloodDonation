<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipient extends Model
{
   protected $fillable=[
       'name','location_id','blood_group','email','phone'
   ];
}
