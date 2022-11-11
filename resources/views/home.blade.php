<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="">
			<meta name="author" content="">
			<title>Home | E-Shopper</title>
			<link href="{{ asset('/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/font-awesome.min.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/price-range.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/animate.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/main.css')}}" rel="stylesheet">
			<link href="{{ asset('/fontend/css/responsive.css')}}" rel="stylesheet">

			<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
			<![endif]-->
			<link rel="shortcut icon" href="{{ asset('/fontend/images/ico/favicon.ico')}}">
			<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/fontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
			<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/fontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
			<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/fontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
			<link rel="apple-touch-icon-precomposed" href="{{ asset('/fontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
		</head><!--/head-->

        <body>
            <section>

                <!--header-->
                @include('header')
                <!--/header-->

                <!--slider-->
                @include('slider')
                <!--/slider-->

                <div class="container">
                    <div class="row">

                        <!--menu-->
                        @include('menu')
                        <!--/menu-->

                        <!--content-->
                        <div class="col-sm-9 padding-right">
                            <div class="features_items"><!--features_items-->
                                <h2 class="title text-center">Sản phẩm mới nhất</h2>

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
                        </div>
                        <!--/content-->
                    </div>
                </div>

            <!--footer-->
                @include('footer')
            <!--/footer-->

                <script src="{{ asset('/fontend/js/jquery.js')}}"></script>
                <script src="{{ asset('/fontend/js/bootstrap.min.js')}}"></script>
                <script src="{{ asset('/fontend/js/jquery.scrollUp.min.js')}}"></script>
                <script src="{{ asset('/fontend/js/price-range.js')}}"></script>
                <script src="{{ asset('/fontend/js/jquery.prettyPhoto.js')}}"></script>
                <script src="{{ asset('/fontend/js/main.js')}}"></script>
            </section>
		</body>
	</html>
