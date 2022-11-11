<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = 'tbl_brand';
    protected $fillable =[
        'brand_name',
        'desc',
        'status'
    ];
}
