@extends('admin.layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Cập nhật danh mục sản phẩm</header>
            <div class="panel-body">
                <div class="form">
                    @foreach ($product as $item => $product)
                        
                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{URL::to('update-product/'.$product->id)}}" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tên sản phẩm</label>
                            <div class="col-lg-6">
                                <input class="form-control"  name="product_name" type="text" value="{{$product->name}}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label col-lg-3 col-sm-3">Danh mục</label>
                            <div class="col-lg-6">
                                <select name="product_category" class="form-control input-sm m-bot15">
                                    @foreach ( $category as $item )
                                    @if ($item->id == $product ->category_id)
                                        <option selected value="{{$item->id}}">{{$item->category_name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endif                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label col-lg-3 col-sm-3">Thương hiệu</label>
                            <div class="col-lg-6">
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach ( $brand as $item)
                                    @if ($item->id == $product ->brand_id)
                                        <option selected value="{{$item->id}}">{{$item->brand_name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->brand_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Mô tả</label>
                            <div class="col-lg-6">
                                <textarea class=" form-control" name="product_desc" type="text"> {{$product->desc}} </textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Nội dung</label>
                            <div class="col-lg-6">
                                <textarea class=" form-control" name="product_content" type="text"> {{$product->content}} </textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Giá</label>
                            <div class="col-lg-6">
                                <input class=" form-control" name="product_price" type="text" value="{{$product->price}}"> 
                            </div>
                        </div>

                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Ảnh</label>
                            <div class="col-lg-6">
                                <input type="file" id="exampleInputFile" name="product_image">
                                <img src="/upload/product/{{$product->image}}" height="100" width="100" alt="">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-offset-3 col-lg-6">
                                <center>
                                    <button class="btn btn-primary" name="update-product" type="submit">Cập nhật sản phẩm</button>
                                </center>
                            </div>
                        </div>

                    </form>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
</div>
@endsection
