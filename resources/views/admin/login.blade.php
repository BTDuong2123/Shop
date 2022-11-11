<!DOCTYPE html>
    <head>
        <title>Quản lý</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap.min.css')}}" >
        
        <!-- //bootstrap-css -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
        <!-- Custom CSS -->
        <link href="{{ asset('/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{ asset('/backend/css/style-responsive.css')}}" rel="stylesheet"/>
        
        <!-- font CSS -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{ asset('/backend/css/font.css')}}" type="text/css"/>
        <link href="{{ asset('/backend/css/font-awesome.css')}}" rel="stylesheet"> 
        
        <!-- //font-awesome icons -->
        <script src="{{ asset('/backend/js/jquery2.0.3.min.js')}}"></script>
    </head>
    <body>
        <div class="log-w3">
            <div class="w3layouts-main">
                <h2>Đăng Nhập</h2>

                <div class="form-group row">
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
                </div>
                
                <form method="POST" action="{{URL::to('/admin-dashboard')}}">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật Khẩu') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                                 
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Đăng nhập') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('/backend/js/bootstrap.js')}}"></script>
        <script src="{{ asset('/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{ asset('/backend/js/scripts.js')}}"></script>
        <script src="{{ asset('/backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('/backend/js/jquery.nicescroll.js')}}"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="{{ asset('/backend/js/jquery.scrollTo.js')}}"></script>
    </body>
</html>
