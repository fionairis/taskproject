<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    //like
//    public static $rules = [
//        'ca_id' => 'required|numeric',
//        'title'   => 'required|min:2|max:100',
//        'slug'    => 'nullable|min:2|max:150',
//        'details' => 'required|min:5|max:500',
//    ];

    protected $table ='items';
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'name',
        'title',
        'image',
        'price',
        'description',
    ];
}
