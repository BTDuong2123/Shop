<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'tbl_category_product';
    protected $fillable =[
        'category_name',
        'desc',
        'status'
    ];
}
