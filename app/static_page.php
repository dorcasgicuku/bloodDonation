<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class static_page extends Model
{
    protected $fillable=[
        'name','title','body_text'
    ];
}
