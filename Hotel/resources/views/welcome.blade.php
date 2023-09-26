<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/asset/asset/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
 @include('frontend.body.header')
    <!-- header-end -->

    <!-- slider_area_start -->
    @include('frontend.slider')
    <!-- slider_area_end -->

    <!-- about_area_start -->
   @include('frontend.about')
    <!-- about_area_end -->

    <!-- offers_area_start -->
    @include('frontend.offer')
    <!-- offers_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="{{ asset('frontend/asset/img/about/1.png')}}" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{ asset('frontend/asset/img/about/2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Delicious Food</span>
                            <h3>We Serve Fresh and <br>
                                Delicious Food</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    @include('frontend.featured_room')
    <!-- features_room_end -->

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>For Reservation 0r Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="#" class="mobile_no">+10 576 377 4789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- forQuery_end-->

    <!-- instragram_area_start -->
    
    <!-- instragram_area_end -->

    <!-- footer -->
   @include('frontend.body.footer') 
    <!-- link that opens popup -->

    <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Check Availability</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input id="datepicker" placeholder="Check in date">
                                    </div>
                                    <div class="col-xl-6">
                                        <input id="datepicker2" placeholder="Check out date">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Adult">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Children">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Room type">Room type</option>
                                            <option value="1">Laxaries Rooms</option>
                                            <option value="2">Deluxe Room</option>
                                            <option value="3">Signature Room</option>
                                            <option value="4">Couple Room</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="{{ asset('frontend/asset/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/ajax-form.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/scrollIt.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/plugins.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('frontend/asset/js/contact.js')}}"></script>
    <script src="{{ asset('frontend/asset/asset/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/jquery.form.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/asset/js/mail-script.js')}}"></script>

    <script src="{{ asset('frontend/asset/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>