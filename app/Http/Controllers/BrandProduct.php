<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use Illuminate\Support\Facades\Session;

class BrandProduct extends Controller
{
    public function add_brand_product(){
        return view('admin.add_brand_product');
    }

    public function all_brand_product(){
        $brand_product = brand::all();
        return view('admin.all_brand_product')->with('brand_product',$brand_product);
    }

    public function save_brand_product(Request $request){
        $brand_product = new brand();
        $brand_product->brand_name = $request->brand_product_name;
        $brand_product->desc = $request->brand_product_desc;
        $brand_product->status = $request->brand_product_status;
        $brand_product->save();

        Session::put('msg','Thêm thương hiệu sản phẩm thành công');
        return redirect() ->route('add-brand-product');
    }

    public function edit_brand_product($id){
        $brand_product = brand::find($id);
        return view('admin.edit_brand_product')->with('brand_product',$brand_product);
    }

    public function delete_brand_product($id){
        $brand_product = brand::find($id);
        $brand_product->delete();

        return redirect() ->route('all-brand-product');
    }

    public function update_brand_product(Request $request,$id){
        $brand_product = brand::find($id);
        $brand_product->brand_name = $request->brand_product_name;
        $brand_product->desc = $request->brand_product_desc;
        $brand_product->save();

        return redirect() ->route('all-brand-product');
    }

    public function unactive_brand_product($id){
        $brand_product = brand::find($id);
        $brand_product->status = '1';
        $brand_product->save();

        return redirect() ->route('all-brand-product');
    }

    public function active_brand_product($id){
        $brand_product = brand::find($id);
        $brand_product->status = '0';
        $brand_product->save();

        return redirect() ->route('all-brand-product');
    }
}
