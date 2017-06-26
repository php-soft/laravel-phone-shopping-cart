<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Product Quick View -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> CSS reset -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
    <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
    <script src="{{asset('js/jquery-2.1.1.js')}}""></script>
    <script src="{{asset('js/velocity.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <style>
        div.stars
        {
            width: 270px;
            display: inline-block;
        }

        input.star { display: none; }

        label.star {
            float: right;
            padding: 2px;
            font-size: 15px;
            color: orange;
            transition: all .2s;
        }

        input.star:checked ~ label.star:before
        {
            content: '\f005';
            color: yellow;
            transition: all .25s;
        }

        input.star-5:checked ~ label.star:before
        {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked ~ label.star:before { color: #F62; }

        label.star:hover { transform: rotate(-15deg) scale(1.3); }

        label.star:before
        {
            content: '\f006';
            font-family: FontAwesome;
        }
        ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}
    </style>

    <script>
        $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
