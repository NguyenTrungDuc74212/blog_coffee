<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Api Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link rel="icon" type="image/png" href="{{ asset('public/upload/post/logo.ico') }}"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('public/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/css/style.css' )}}"rel='stylesheet' type='text/css' />
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{ asset('public/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>
    <!--start-smoth-scrolling-->
</head>
<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <a href="{{ route('home') }}"><img src="{{ asset('public/upload/post/logo-1.png') }}" alt="" /></a>
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
                <div class="navigation">
                 <span class="menu"></span> 
                 <ul class="navig">
                   @stack('active')
               </ul>
           </div>
           <div class="header-right">
            <form action="{{route('timkiem')}}" method="GET">
                @csrf
                <div class="search-bar">
                    <input type="text" name="key" placeholder="tìm kiếm" value="{{ Request()->key }}">
                    <input type="submit" value="">
                </div>
            </form>
            <ul class="soical">
                <li class="soical-li"><a href="https://www.facebook.com/profile.php?id=100029206186369"><span class="fb"> </span></a></li>
                <li class="soical-li"><a href="#"><span class="twit"> </span></a></li>
                <li class="soical-li"><a href="#"><span class="pin"> </span></a></li>
                <li class="soical-li"><a href="#"><span class="rss"> </span></a></li>
                <li class="soical-li"><a href="#"><span class="drbl"> </span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>  
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
    });
</script>
<!-- script-for-menu -->
<!--banner-starts-->
<div class="banner">
    <div class="container">
        <div class="banner-top">
            <div class="banner-text">
                <h2>Blog about cafe</h2>
                <h1>Cafe và những câu chuyện</h1>
                <div class="banner-btn">
                    <a href="{{ route('post_detail.show',3) }}">Đọc tiếp</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner-end-->
<!--main-starts-->
@yield('content')
<!--main-end-->
<!--slide-starts-->
<div class="slide">
    <div class="container">
        <div class="fle-xsel">
            <ul id="flexiselDemo3">
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-1.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-2.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>           
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-3.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>       
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-4.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-5.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{ asset('public/images/s-6.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>               
            </ul>

            <script type="text/javascript">
                $(window).load(function() {

                    $("#flexiselDemo3").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,            
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                            portrait: { 
                                changePoint:480,
                                visibleItems: 2
                            }, 
                            landscape: { 
                                changePoint:640,
                                visibleItems: 3
                            },
                            tablet: { 
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
                $(document).ready(function() {
                    $('.navig_li').click(function() {
                        $(this).addClass('active');
                        console.log('test');
                    });
                });
            </script>
            <script type="text/javascript" src="{{asset('public/js/jquery.flexisel.js') }}"></script>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>  
<!--slide-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p>© 2020 Coffee Break. All Rights Reserved | Design by  <a href="https://www.facebook.com/profile.php?id=100029206186369" target="_blank">Nguyến Trung Đức</a> </p>
        </div>
    </div>
</div>
<!--footer-end-->
<script type="text/javascript">
    $(document).ready(function() {
        ScrollReveal().reveal('.abt-2', {
            // delay: 600,
            origin:'top',
            duration: 2000,
            distance: '50px',
            // reset: true
        });
           ScrollReveal().reveal('.might-grid', {
            // delay: 600,
            origin:'top',
            duration: 2000,
            distance: '50px',
            interval: 216,
            // reset: true
        });
        ScrollReveal().reveal('.abt-left', {
            // delay: 600,
            origin:'top',
            duration: 2000,
            distance: '50px',
            interval: 300,
            // reset: true
        });
        ScrollReveal().reveal('.head-main', {
            // delay: 300,
            origin:'top',
            duration: 2000,
            distance: '50px',
            scale:0.5,
        });
        ScrollReveal().reveal('.navig li', {
            // delay: 300,
            origin:'top',
            duration: 2000,
            distance: '50px',
            interval: 216,
            // reset: true
        });
        ScrollReveal().reveal('.soical-li', {
            origin:'top',
            duration: 2000,
            distance: '50px',
            interval: 216,
            // reset: true
        });
        ScrollReveal().reveal('.search-bar', {
            // delay: 300,
            origin:'top',
            duration: 2000,
            distance: '50px',
            // reset: true
        });
         ScrollReveal().reveal('.abt-2 li', {
            // delay: 300,
            interval: 216,
            origin:'top',
            duration: 2000,
            distance: '50px',
            // reset: true
        });
           ScrollReveal().reveal('.about-one', {
            // delay: 300,
            interval: 216,
            origin:'top',
            duration: 2000,
            distance: '50px',
            // reset: true
        });
           ScrollReveal().reveal('.about-two', {
            delay: 300,
            interval: 216,
            origin:'top',
            duration: 2000,
            distance: '50px',
            // reset: true
        });
    });
</script>
</body>
</html>