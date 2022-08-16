<html>
<head>
    <title>Yurt Bul</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Fetch Villa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/zoomslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>

<div class="header-top">
    <div class="w3l_header_left">
        <ul>
            <li><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">busraacaner6672@gmail.com</a></li>
            <li><span class="fa fa-phone-square" aria-hidden="true"></span>0 (553) 492 24 12</li>
        </ul>
    </div>
    <div class="w3l_header_right">
        <ul class="top-links">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a class="navbar-brand" href="{{route('index')}}"><span class="one">Y</span>urt<span class="one">B</span>ul</a></h1>

                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-1" id="cl-effect-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="scroll" href="{{route('index')}}">Anasayfa</a></li>
                        <li><a href="#projects" class="scroll hvr-bounce-to-bottom">Projelerimiz</a></li>
                        <li><a href="#team" class="scroll hvr-bounce-to-bottom">Takımımız</a></li>
                        <li><a href="#gallery" class="scroll hvr-bounce-to-bottom">Galeri</a></li>
                        <li><a href="#contact" class="scroll hvr-bounce-to-bottom">İletişim</a></li>
                    </ul>
                </nav>

            </div>

            <!-- /.navbar-collapse -->
        </nav>
        <div class="w3ls_search">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                    <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul> <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="Ara...">
                </form>
            </div>
        </div>

    </div>
</div>

@yield('content')

<div class="gallery agile" id="gallery">
    <div class="container">
        <h3 class="tittle"> Bİzİm <span>Galerİmİz</span></h3>
        <div class="agile_gallery_grids w3-agile">
            <ul class="clearfix demo" >
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g1.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>İstanbul'da "şöyle bir yer olsa" dediğin yer var ya...</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g2.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Senin yerin ayrı.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g3.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Ayrıcalıklarla yaşayanların yurdu</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g4.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Mersin'de ev konforunda çalışma alanları.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g5.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Bir yer hayal et,bulalım.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g6.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g7.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g8.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g9.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g10.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g11.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{asset('images/g12.jpg')}}" alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>Yurt <span>Bul</span></h4>
                            <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
<div class="contact-w3ls" id="contact">
    <div class="container">
        <h2>Son İlanlardan Haberdar OLmak İçİn <span>Abone Olun</span></h2>
        <div class="footer-contact">
            <form action="#" method="post">
                <input type="text" name="Email" placeholder="E-mail adresinizi girin" required=" ">
                <input type="submit" value="Abone Ol">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-4 footer-grid">
                <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Mersin Üniversitesi Mühendislik Fakültesi A Blok</p>
                <p><a href="mailto:contact@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> ozguncankrkrt@edu.tr</a></p>
                <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+0123 456 686</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adminModal" style="background-color: #7ac143; margin-top: 20px; ">Admin Paneli</button>
                <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title text-center" id="exampleModalLabel"><b>Admin Giriş</b> </h3>

                            </div>
                            <div class="modal-body">
                                <form method="get">
                                    @csrf
                                    <div class="form-group ui icon input" style="width: 100%;">
                                        <input type="text" class="form-control" id="admin-userId"name="userId" placeholder="Kullanıcı Adı">
                                    </div>
                                    <div class="ui icon input form-group" style="width: 100%;">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Şifre" />
                                        <i class="eye link icon" onclick="togglePassword()"></i>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="background-color: #7ac143; border: none;">Giriş</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 footer-grid">
                <ul>

                    <li><a class="scroll" href="{{route('index')}}">Anasayfa</a></li>
                    <li><a class="scroll" href="#projects">Projelerimiz</a></li>
                    <li><a class="scroll" href="#team">Takımımız</a></li>
                    <li><a class="scroll" href="#gallery">Galeri</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href=""><img src="{{asset('images/r5.jpg')}}" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="https://www.kykyurtlar.com/mersin-kyk-yurtlari/" target="_blank">Mersin Kız Kyk Yurdu</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="#"><img src="{{asset('images/r7.jpg')}}" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="#">Mersin Erkek Yurdu</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <div class="footer-grid-instagram">
                    <a href="#"><img src="{{asset('images/r1.jpeg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="#"><img src="{{asset('images/r3.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="#"><img src="{{asset('images/r4.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href="#"><img src="{{asset('images/r2.jpeg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <h3 class="text-center follow">Bizi <span>Takip Edin</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/AyseBusracnr"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/busracaner__/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <div class="w3agile_footer_copy">
            <p>© 2021 Yurt Bul. Tüm hakları saklıdır. | Designed by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>

</div>



<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.zoomslider.min.js')}}"></script>
<!-- search-jQuery -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Additional Scripts -->
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('owl.js')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/accordions.js')}}"></script>
<!-- //search-jQuery -->
<script type="text/javascript">
    function togglePassword() {
        var element = document.getElementById("password");
        element.type = element.type == "password" ? "text" : "password";
    }
    toggler.addEventListener('click', showHidePassword);
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems:3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>

<!-- Horizontal-Tabs-JavaScript -->
<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default',
            width: 'auto',
            fit: true,
        });
    });
</script>
<!-- Horizontal-Tabs-JavaScript -->
<script src="{{asset('js/jquery.picEyes.js')}}"></script>
<script>
    $(function(){
        //picturesEyes($('.demo li'));
        $('.demo li').picEyes();
    });
</script>
<!--start-smooth-scrolling-->
<!--/script-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
