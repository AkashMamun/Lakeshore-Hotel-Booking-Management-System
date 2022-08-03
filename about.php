<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lakeshore Hotel</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <!-- header -->
    <!--
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    ...
  </div>
</nav>
banner-top navbar scroll navbar-default navbar-fixed-top
class="navbar navbar-expand-lg navbar-dark bg-primary"
menu__item--current
<img src="./images/logo.png" style="height:80px; width:400px; border-radius:10px;" alt=""
navbar-fixed-top >

<a href="index.php"><img src="./images/logo.png" style="height:70px; width:400px; border-radius:10px;" alt=""></a>
--->

    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="w3_navigation">
            <div class="container b">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>Lakeshore Hotel</h1>

                        <a class="navbar-brand" href="index.php">
                            <h6> </br> Your Dreamy Hotel In Rangamati</h6>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" style="margin-top:20px;" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--iris">
                            <ul class="nav navbar-nav menu__list" id="myDiv">
                                <li class="menu__item"><a href="./index.php" class="menu__link">Home</a></li>

                                <li class="menu__item menu__item--current active"><a href="#about" class="menu__link">About</a></li>

                                <li class="menu__item"><a href="./team.php" class="menu__link">Team</a></li>

                                <li class="menu__item"><a href="./gallery.php" class="menu__link">Gallery</a></li>

                                <li class="menu__item"><a href="./room.php" class="menu__link" target="_blank">Rooms</a></li>

                                <li class="menu__item"><a href="./contact.php" class="menu__link">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>

            </div>
        </div>

    </div>
    <!-- //header -->

    <!-- banner -->
    <div id="home" class="w3ls-banner">
        <!-- banner-text -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="w3layouts-banner-top">

                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>Lakeshore Hotel In Rangamati</h4>
                                    <h3>We know what you love</h3>
                                    <h2>Welcome to our hotels</h2>
                                    <div class="agileits_w3layouts_more 	menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="w3layouts-banner-top 					w3layouts-banner-top1">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>Lakeshore Hotel In Rangamati</h4>
                                    <h3>Stay with friends & families</h3>
                                    <h2>Come & enjoy precious moment with us</h2>
                                    <div class="agileits_w3layouts_more 	menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="w3layouts-banner-top 					w3layouts-banner-top2">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>Lakeshore Hotel In Rangamati</h4>
                                    <h3>want luxurious vacation?</h3>
                                    <h2>Get accommodation today</h2>
                                    <div class="agileits_w3layouts_more 	menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top 					w3layouts-banner-top3">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>Lakeshore Hotel In Rangamati</h4>
                                    <h3>Stay with friends & families</h3>
                                    <h2>Come & enjoy precious moment with us</h2>
                                    <div class="agileits_w3layouts_more 	menu__item">
                                        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!--banner Slider starts Here-->
        </div>
        <div class="thim-click-to-bottom">
            <a href="#about" class="scroll">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- //banner -->
    <!--//Header-->
    <!-- //Modal1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <!-- Modal1 -->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Lakeshore Hotel In<span>RANGAMATI</span></h4>
                    <img src="./images/polwel/p1.jpg" alt=" " class="img-responsive">
                    <h5>We know what you love</h5>
                    <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <div id="availability-agileits">
        <div class="col-md-12 book-form-left-w3layouts">
            <a href="admin/reservation.php">
                <h2>ROOM RESERVATION</h2>
            </a>
        </div>

        <div class="clearfix"> </div>
    </div><!-- /about -->
    <div class="about-wthree" id="about">
        <div class="container">
            <div class="ab-w3l-spa">
                <h3 class="title-w3-agileits title-black-wthree">About Our Lakeshore Hotel In Rangamati</h3>
                <h4>অবিস্মরণীয় স্মৃতির যাত্রা</h4>
                <p class="about-para-w3ls">
                    লেক'শোর হোটেল হলকাপ্তাই হ্রদের পাশে অবস্থিত একটি আধুনিক, মার্জিত এবং সুরক্ষিত বিলাসবহুল রিসোর্ট যা রাঙ্গামাটি জেলা পুলিশ দ্বারা পরিচালিত হয়। শহরের জীবনের কোলাহল থেকে দূরে নৈসর্গিক প্রাকৃতিক সৌন্দর্যের মনোরম আনন্দে নিজেকে পুনরুদ্ধার করার জন্য এটি উপযুক্ত জায়গা। এটি রাঙ্গামাটি পার্বত্য অঞ্চলের মনোমুগ্ধকর সৌন্দর্য, মনোরম কাপ্তাই হ্রদের দৃশ্য, সমুদ্র সৈকত, সমৃদ্ধ সংস্কৃতি এবং উপজাতীয় জনগোষ্ঠীর ইতিহাস প্রদান করে। পোলওয়েল পার্ক ও কটেজ রাঙামাটির সেরা স্থান যা আপনাকে অসাধারণ আরাম, বিলাসিতা এবং পরিষেবা প্রদান করে।</p>
                <img src="images/fb/f35.jpg" class="img-responsive" alt="Hair Salon">
                <div class="w3l-slider-img">
                    <img src="images/fb/f36.jpg" class="img-responsive" alt="Hair Salon">
                </div>
                <div class="w3ls-info-about">
                    <h4>Beautiful Place Rangamati! You'll love all the amenities we offer!</h4>
                    <p>Travel & Enjoy your choice. </p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
    <!-- contact -->
    <section class="contact-w3ls" id="contact">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                <div class="contact-agileits">
                    <h4>About Us</h4>
                    <p class="contact-agile2">Let us Know about more..</p>
                    <p class="" style="color:aliceblue;">লেক'শোর হোটেল হল কাপ্তাই হ্রদের পাশে অবস্থিত একটি আধুনিক, মার্জিত এবং সুরক্ষিত বিলাসবহুল রিসোর্ট যা রাঙ্গামাটি জেলা পুলিশ দ্বারা পরিচালিত হয়। শহরের জীবনের কোলাহল থেকে দূরে নৈসর্গিক প্রাকৃতিক সৌন্দর্যের মনোরম আনন্দে নিজেকে পুনরুদ্ধার করার জন্য এটি উপযুক্ত জায়গা। </br>
                        </br>
                        </br>এটি রাঙ্গামাটি পার্বত্য অঞ্চলের মনোমুগ্ধকর সৌন্দর্য, মনোরম কাপ্তাই হ্রদের দৃশ্য, সমুদ্র সৈকত, সমৃদ্ধ সংস্কৃতি এবং উপজাতীয় জনগোষ্ঠীর ইতিহাস প্রদান করে। লেক'শোর হোটেল হল রাঙামাটির সেরা স্থান যা আপনাকে অসাধারণ আরাম, বিলাসিতা এবং পরিষেবা প্রদান করে।</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                <h4>Connect With Us</h4>
                <p class="contact-agile1"><strong>Phone :</strong>++880 1521308512</p>
                <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@LAKESHOREHOTEL.COM</a></p>
                <p class="contact-agile1"><strong>Address :</strong> DC Banglow Road, Rangamati, Bangladesh</p>

                <div class="social-bnr-agileits footer-icons-agileinfo">
                    <ul class="social-icons3">
                        <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

                    </ul>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.3531834389123!2d92.19727671402036!3d22.640616785147845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3752b54426122a03%3A0x22c8520a1df2477!2sPolwel%20Park%20%26%20Cottage%2C%20Rangamati!5e0!3m2!1sen!2sbd!4v1642523330347!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- /contact -->
    <div class="copy">
        <p>© 2022 Lakeshore Hotel In Rangamati. All Rights Reserved | Design by <a href="index.php"> 2022 Lakeshore Hotel In Rangamati</a> </p>
    </div>
    <!--/footer -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- contact form -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- /contact form -->
    <!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!-- gallery popup -->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //gallery popup -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--search-bar-->
    <script src="js/main.js"></script>
    <script scr="./main1.js"></script>
    <!--//search-bar-->
    <!--tabs-->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!--//tabs-->
    <!-- smooth scrolling -->
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
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>