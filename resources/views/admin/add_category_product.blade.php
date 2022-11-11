@extends('admin.layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Thêm danh mục sản phẩm</header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{URL::to('/save-category-product')}}" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tên danh mục</label>
                            <div class="col-lg-6">
                                <input class="form-control"  name="category_product_name" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Mô tả</label>
                            <div class="col-lg-6">
                                <textarea class=" form-control" name="category_product_desc" type="text"> </textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3 col-sm-3">Hiển thị</label>
                            <div class="col-lg-6">
                                <select name="category_product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hiện</option>
                                    <option value="1">Ẩn</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-offset-3 col-lg-6">
                                <center>
                                    <span class="text-alert">
                                    @php
                                        $msg = Session::get('msg')
                                    @endphp
                                    @if ($msg)
                                        {{$msg}}
                                    @php
                                        Session::put('msg',null)
                                    @endphp
                                    @endif
                                    </span>
                                </center>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-offset-3 col-lg-6">
                                <center>
                                    <button class="btn btn-primary" name="add-category-product" type="submit">Thêm danh mục</button>
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
