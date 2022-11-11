<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\product;

class HomeController extends Controller
{
    public function index(){
        $category_product = category::all()->where('status','0');

        $brand_product = brand::all()->where('status','0');

        $product = product::join('tbl_category_product','tbl_category_product.id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.id','=','tbl_product.brand_id')
        ->where('tbl_product.status','0')
        ->where('tbl_category_product.status','0')
        ->where('tbl_brand.status','0')
        ->orderby('tbl_product.id','desc')
        ->limit(3)
        ->get(['tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image','tbl_product.status','tbl_category_product.category_name','tbl_brand.brand_name']);

        return view('home')->with('category',$category_product)->with('brand',$brand_product)->with('product',$product);
    }

    public function show_category_home($id){
        $category_product = category::all()->where('status','0');

        $brand_product = brand::all()->where('status','0');

        $product = product::join('tbl_category_product','tbl_category_product.id','=','tbl_product.category_id')
        ->where('tbl_category_product.id',$id)
        ->where('tbl_product.status','0')
        ->get(['tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image','tbl_product.status','tbl_category_product.category_name']);

        $show_category_product = category::all()->where('id',$id);

        return view('page.show_category_product_home')->with('category',$category_product)->with('brand',$brand_product)->with('product',$product)->with('show_category_product',$show_category_product);
    }

    public function show_brand_home($id){
        $category_product = category::all()->where('status','0');

        $brand_product = brand::all()->where('status','0');

        $product = product::join('tbl_brand','tbl_brand.id','=','tbl_product.brand_id')
        ->where('tbl_brand.id',$id)
        ->where('tbl_product.status','0')
        ->get(['tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image','tbl_product.status','tbl_brand.brand_name']);

        $show_brand_product = brand::all()->where('id',$id);

        return view('page.show_brand_product_home')->with('category',$category_product)->with('brand',$brand_product)->with('product',$product)->with('show_brand_product',$show_brand_product);
    }

    public function details_product($id){
        $category_product = category::all()->where('status','0');

        $brand_product = brand::all()->where('status','0');

        $product = product::join('tbl_category_product','tbl_category_product.id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.id','=','tbl_product.brand_id')
        ->where('tbl_product.id',$id)
        ->get(['tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image','tbl_product.status','tbl_product.content','tbl_product.category_id','tbl_category_product.category_name','tbl_brand.brand_name']);

        foreach ($product as $item){
            $category_id = $item -> category_id;
        }

        $show_product = product::all()
        ->where('category_id',$category_id)
        ->whereNotIn('id',$id);


        return view('page.show_details_product')->with('category',$category_product)->with('brand',$brand_product)->with('product',$product)->with('show_product', $show_product);
    }
}
