<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class county extends Model
{
        protected $fillable=[
            'name','code','county_code'
        ];
}
