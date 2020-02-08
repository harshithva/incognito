<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    protected $fillable = [
        'name','size','number','amount'
    ];
}
