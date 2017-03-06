<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
  protected $fillable=[
      'name','date_of_birth','location_id','email','phone','blood_group','password_reset_code','created_by'
  ];
}
