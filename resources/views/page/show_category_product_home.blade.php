@extends('layout')

@section('content')
    <div class="features_items"><!--features_items-->

        @foreach ($show_category_product as $item)
        <h2 class="title text-center"> Danh mục sản phẩm {{$item->category_name}}</h2>
        @endforeach

        @foreach ($product as $item)
        <a href="{{URL::to('chi-tiet-san-pham/'.$item->id)}}">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('/upload/product/'.$item->image)}}" alt="" />
                            <h2>{{number_format($item->price)}}.VNĐ</h2>
                            <p>{{$item->name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div><!--features_items-->

   {{--<div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ asset('/fontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/category-tab-->--}}
<!--/recommended_items-->

@endsection
