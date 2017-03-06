<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable=[
        'name','location_id','code','description','phone','county_code','created_by'
    ];
}
