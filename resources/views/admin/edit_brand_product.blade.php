@extends('admin.layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Cập nhật danh mục sản phẩm</header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{URL::to('update-brand-product/'.$brand_product->id)}}" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tên danh mục sản phẩm</label>
                            <div class="col-lg-6">
                                <input class="form-control"  name="brand_product_name" type="text" value="{{$brand_product->brand_name}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Mô tả</label>
                            <div class="col-lg-6">
                                <textarea class=" form-control" name="brand_product_desc" type="text" > {{$brand_product->desc}} </textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-offset-3 col-lg-6">
                                <center>
                                    <button class="btn btn-primary" name="update-brand-product" type="submit">Cập nhật</button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
