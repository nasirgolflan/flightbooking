<?php 

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use \yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Elearn | Best for Online Learning</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/frontend/img/favicon.png" rel="icon">
    <link href="/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/frontend/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/frontend/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link href="/frontend/css/custom.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Mentor - v2.2.0
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

<!-- Custom Head -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

</head>


<body>

    <!-- Page Header -->
<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-lg-block align-items-center p-1">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <small><i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a><i class="icofont-phone"></i> +91-9871203987</small>
      </div>
      <div class="social-links" id="top-social">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

        <div id="promo-notifications">
            <ul style="color:#304473;">
                <li>**CURRENT PROMO** Buy 5 and get 1 free ~ Only for a limited time!</li>
                <li>**CURRENT PROMO** Refer 20 friends and get a gift certificate for $100!</li>
                <li>**CURRENT PROMO** Refer 20 friends and get a gift certificate for $100!</li>
                <li>**CURRENT PROMO** Refer 20 friends and get a gift certificate for $100!</li>
            </ul>
        </div>

<!-- ======= Header ======= -->
<header id="header">




        

        <div class="container d-flex align-items-center" id="main-navbar">

        <h1 class="logo mr-auto"><a href="/">ELEARN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="/frontend/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li><a class="active" href="<?= Url::to(['site/index'])?>">Home</a></li>
          <li><a href="<?= Url::to(['site/about'])?>">About</a></li>
          <li><a href="<?= Url::to(['site/courses'])?>">Courses</a></li>
          <li><a href="<?= Url::to(['site/admissions'])?>">Admissions</a></li>
          <li><a href="<?= Url::to(['site/downloads'])?>">Downloads</a></li>
          <!-- <li><a href="<?= Url::to(['site/support'])?>">Support</a></li> -->
          <li><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
          <?php
           if (Yii::$app->user->isGuest) { ?>
            <li><a href="<?= Url::to(['site/login'])?>">Login</a></li> <?php
            // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {

        //   echo '<li> <a href="'. \Yii::$app->params['backendUrl'].'">Dashboard</a></li>';
        echo '<li> <a href="'. Url::to('index.php?r=exams').'">Dashboard</a></li>';
            echo '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        ?>
            <?php /*
                <li class="active"><a href="/">Home</a></li>
                <li class=""><a href="/about">About</a></li>
                <li class=""><a href="/courses">Courses</a></li>
                <li class=""><a href="/admissions">Admissions</a></li>
                <li class=""><a href="/downloads">Downloads</a></li>
                <li class=""><a href="/support">Tech Support</a></li>
                <li class="drop-down"><a href="#">Drop Down</a>
                    <ul>
                        <li><a href="/admin/dashboard">admin</a></li>
                        <li><a href="/admin/course/create">course create</a></li>
                        <li><a href="/admin-login">Admin Login</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li class=""><a href="/contact">Contact</a></li>

                                            <li class="drop-down">
                                <a href="http://elearn.local/login">Login</a>
                                <ul>
                                                                    <li>
                                    <a href="http://elearn.local/register">Register</a>
                                </li>
                                                                </ul>
                            </li>
                            
                                        
*/ ?>
            </ul>
        </nav><!-- .nav-menu -->

        

    </div>
</header><!-- End Header -->


  <!-- Main Content -->
<main id="main">

<?= $content ?>

</main><!-- End #main -->


  <!-- Footer -->
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Elearn</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +91-9871203987<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Flight Booking System</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>


    <!-- Scripts -->
<!-- Vendor JS Files -->
<script src="/frontend/vendor/jquery/jquery.min.js"></script>
<script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/frontend/vendor/php-email-form/validate.js"></script>
<script src="/frontend/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="/frontend/vendor/counterup/counterup.min.js"></script>
<script src="/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/frontend/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="/frontend/js/main.js"></script>

    <!-- Custom Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>

    <script>

    // Selecting the iframe element
    var iframe = document.getElementById("myIframe");

    // Adjusting the iframe height onload event
    iframe.onload = function(){

        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';

    }

    </script>

    <script type="text/javascript">
            $(document).ready(function(){
              $('#owl-carousel-1').owlCarousel({
                    loop:true,
                    items:1,
                    margin:10,
                    nav: true,
                    autoHeight: true,
                    navText: ["<a id='owl-prev-1'><i class='icofont-simple-left'></i></a>", "<a id='owl-next-1'><i class='icofont-simple-right'></i></a>"],
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                })

                $('#owl-carousel-2').owlCarousel({
                    loop:true,
                    items:4,
                    margin:10,
                    nav: true,
                    dots: false,
                    autoplay:false,
                    autoplayHoverPause:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:4
                        },
                        1000:{
                            items:4
                        }
                    }
                })
            });
    </script>
    

<script type="text/javascript">
  function popup_close() {
  $(".popup-box").hide();
}

jQuery(document).ready(function($) {
  var promoticker = function() {
    var window_width = window.innerWidth;
    var speed = 24 * window_width;

    $('#promo-notifications li:first').animate( {left: '-980px'}, speed, 'linear', function() {
      $(this).detach().appendTo('#promo-notifications ul').css('left', "100%");
      promoticker();
    });
  };
  if ($("#promo-notifications li").length > 1) {
    promoticker();
  }

  window.onscroll = function() {

    if (document.body.scrollTop > 66 || document.documentElement.scrollTop > 66) {
      document.getElementById("header").setAttribute("class","fixed-top");
      document.getElementsByClassName("mobile-nav-toggle")[0].setAttribute("style","position: fixed; top: 15px");
      document.getElementById("carousel").setAttribute("style","margin-top: 65px");
    } else {
    document.getElementById("header").setAttribute("class","");
    document.getElementsByClassName("mobile-nav-toggle")[0].setAttribute("style","position: absolute; top: 84px");
    document.getElementById("carousel").setAttribute("style","margin-top: 0px");
    }
  };

});



</script>

</body>
</html>
