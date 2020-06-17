<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    protected $fillable =[
        'store_name',
        'wait_people',
        'estemated_wait_time',
        'introduction',
    ];



}
