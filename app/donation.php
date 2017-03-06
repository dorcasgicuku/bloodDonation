<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    protected $fillable=[
        'quantity','location','donor_id','description','remarks','blood_group','created_by'
    ];
}
