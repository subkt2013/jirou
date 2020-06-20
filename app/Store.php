<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    protected $fillable =[
        'store_name',
        'image_path',
        'alt',
        'wait_people',
        'estemated_wait_time',
        'introduction',
    ];

    public $timestamps = false;


}
