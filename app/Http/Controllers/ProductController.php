<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function add_product(){
        $category_product = category::all();
        $brand_product = brand::all();

        return view('admin.add_product') ->with('category',$category_product) ->with('brand', $brand_product);
    }

    public function all_product(){
        $product = product::join('tbl_category_product','tbl_category_product.id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.id','=','tbl_product.brand_id')
        ->get(['tbl_product.id','tbl_product.name','tbl_product.price','tbl_product.image','tbl_product.status','tbl_category_product.category_name','tbl_brand.brand_name']);

        return view('admin.all_product')->with('product',$product);
    }

    public function save_product(Request $request){
        $product = new product();
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->brand_id = $request->product_brand;
        $product->desc = $request->product_desc;
        $product->content = $request->product_content;
        $product->price = $request->product_price;
        $product->status = $request->product_status;

        $get_img = $request ->file('product_image');
        if($get_img){
            $new_img = time().'.'.$get_img->getClientOriginalExtension();
            $get_img ->move('upload/product',$new_img);
            $product ->image = $new_img;
            $product->save();
            Session::put('msg','Thêm sản phẩm thành công');
            return redirect() ->route('add-product');
        }
        $product ->image = null;
        $product->save();

        Session::put('msg','Thêm sản phẩm thành công');
        return redirect() ->route('add-product');
    }

    public function edit_product($id){
        $category_product = category::all();
        $brand_product = brand::all();

        $product = product::where('id',$id)->get();

        return view('admin.edit_product') ->with('product',$product) ->with('category',$category_product) ->with('brand', $brand_product);
    }

    public function delete_product($id){
        $product = product::find($id);
        $product->delete();

        return redirect() ->route('all-product');
    }

    public function update_product(Request $request, $id){
        $product = product::find($id);
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->brand_id = $request->product_brand;
        $product->desc = $request->product_desc;
        $product->content = $request->product_content;
        $product->price = $request->product_price;

        $get_img = $request ->file('product_image');
        if($get_img){
            $new_img = time().'.'.$get_img->getClientOriginalExtension();
            $get_img ->move('upload/product',$new_img);
            $product ->image = $new_img;
            $product->save();
            return redirect() ->route('all-product');

        }
        $product->save();

        return redirect() ->route('all-product');
    }

    public function unactive_product($id){
        $product = product::find($id);
        $product->status = '1';
        $product->save();

        return redirect() ->route('all-product');
    }

    public function active_product($id){
        $product = product::find($id);
        $product->status = '0';
        $product->save();

        return redirect() ->route('all-product');
    }
}
