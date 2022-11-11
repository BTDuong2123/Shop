<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Session;

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $category_product = category::all();
        return view('admin.all_category_product')->with('category_product',$category_product);
    }

    public function save_category_product(Request $request){
        $category_product = new category();
        $category_product->category_name = $request->category_product_name;
        $category_product->desc = $request->category_product_desc;
        $category_product->status = $request->category_product_status;
        $category_product->save();

        Session::put('msg','Thêm danh mục sản phẩm thành công');
        return redirect() ->route('add-category-product');
    }

    public function edit_category_product($id){
        $category_product = category::find($id);
        return view('admin.edit_category_product')->with('category_product',$category_product);
    }

    public function delete_category_product($id){
        $category_product = category::find($id);
        $category_product->delete();

        return redirect() ->route('all-category-product');
    }

    public function update_category_product(Request $request,$id){
        $category_product = category::find($id);
        $category_product->name = $request->category_product_category_name;
        $category_product->desc = $request->category_product_desc;
        $category_product->save();

        return redirect() ->route('all-category-product');
    }

    public function unactive_category_product($id){
        $category_product = category::find($id);
        $category_product->status = '1';
        $category_product->save();

        return redirect() ->route('all-category-product');
    }

    public function active_category_product($id){
        $category_product = category::find($id);
        $category_product->status = '0';
        $category_product->save();

        return redirect() ->route('all-category-product');
    }
}
