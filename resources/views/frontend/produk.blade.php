<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('assets/webuilder/img/iconicon.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Nur Collection</title>

        <!-- Icon css link -->
        <link href="{{ asset('assets/webuilder/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/css/materialdesignicons.min.css') }}" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="{{ asset('assets/webuilder/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ asset('assets/webuilder/vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/vendors/animate-css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/vendors/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ asset('assets/webuilder/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/webuilder/css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="pull-left">
                        
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="{{ asset('assets/webuilder/img/logo1.jpeg') }}" alt=""></a>
                        </div>
<br>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                 <li><a href="/front">Beranda</a></li>
                                     <li><a href="/about">Tentang Kami</a></li>
                                <li class="dropdown submenu active">
                                    <a href="/produk" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
                                    <ul class="dropdown-menu">
                                    </ul>
                                </li>
                              <li><a href="/galeri">Galeri</a></li>
                                <li><a href="/blog">Artikel</a></li>
                                <li><a href="/kontak">Kontak</a></li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>Produk</h4>
                    <ul>
                        <li><a href="/front">Beranda</a></li>
                        <li class="active"><a href="/produk">Produk</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Our Project2 Area =================-->
        <section class="our_project2_area project_grid_three">
           <div class="container">
               <div class="main_c_b_title">
                    <h2>Produk<br class="title_br">Kami</h2>
                    <h6>Karya Hebat & Luar Biasa</h6>
                </div>

@php
    $kategoris = App\Kategoris::all();
    $barangs = App\Barangs::all();
@endphp

                <ul class="our_project_filter">
                    <li class="active" data-filter="*"><a href="">All</a></li>
                    @foreach($kategoris as $data)
                    <li data-filter=".barangs{{$data->id}}"><a href="/produk">{{$data->nama_kategori}}</a></li>
                    @endforeach
                    
                </ul>
                <div class="row our_project_details">
                   @foreach($barangs as $data)
                    <div class="col-md-4 col-sm-6 building isolation interior barangs{{$data->kategoris->id}}">

                        <div class="project_item ">
                            
                            <img src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                
            
                                        <a class="view_btn" href="{{url('/detailpro',$data->id)}}">Detail Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    </div>
                </div>
           </div>
        </section>
        <!--================End Our Project2 Area =================-->
        
        <!--================Get Quote Area =================-->
        <section class="get_quote_area yellow_get_quote">
            <div class="container">
                
            </div>
        </section>
        <!--================End Get Quote Area =================-->

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2f273a7a79fc1bddf33f09/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->   
        
         <!--================Footer Area =================-->
         <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img src="{{ asset('assets/webuilder/img/iconicon.png') }}" alt="">
                                <p>Kami adalah produsen dan distributor pakaian anak-anak.Rancamanyar, Baleendah, Bandung, Jawa Barat 40375. Memulai usaha sejak tahun 2012. Produk kami mengutamakan harga murah dan mutu terjaga.</p>
                                <ul>
                                   
                                </ul>
                            </aside>
                        </div>
                       
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>Alamat Kantor</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Rancamanyar, Baleendah, Bandung, Jawa Barat 40375</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>0896-2644-772</p>
                                         
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>nurcollection@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>Hubungi Kami Segera</h5>
                                <h4>0896-2644-772</h4>
                                <h5>Atau</h5>
                                <a class="get_bg_btn" href="#">ORDER VIA WHATSAPP</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/webuilder/js/jquery-2.2.4.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets/webuilder/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        
        <script src="{{ asset('assets/webuilder/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/webuilder/vendors/flex-slider/jquery.flexslider-min.js') }}"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('assets/webuilder/js/gmaps.min.js') }}"></script>
        
        <script src="{{ asset('assets/webuilder/js/theme.js') }}"></script>
    </body>
</html>