<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function save_cart(Request $request){
        $product_id = $request->product_id;
        $quantity = $request->qty;

        return view('page.show_cart');
    }
}
