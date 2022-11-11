<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'tbl_product';
    protected $fillable =[
        'name',
        'category_id',
        'brand_id',
        'desc',
        'content',
        'price',
        'image',
        'status'
    ];
}
