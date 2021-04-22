<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:registration/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Car Service</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">carservicegmail.com</a>
        <i class="fa fa-phone"></i> +91 8000000000
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Car Service</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
           <li><a href="registration/bill.php">Your bill</a></li>
          <li><a href="#"><?php echo $_SESSION['uname'];?></a></li>
          <li><a href="registration/logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Making <span>your Ride</span><br>happen!</h2>
      <div>
        <a href="registration/bookservice.php" class="btn-get-started scrollto">Booking Service</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/img1.jpg');"></div>
      <div class="item" style="background-image: url('img/img2.jpg');"></div>
      <div class="item" style="background-image: url('img/img3.jpg');"></div>
      <div class="item" style="background-image: url('img/img4.jpg');"></div>
      <div class="item" style="background-image: url('img/img5.jpg');"></div>
      <div class="item" style="background-image: url('img/img6.jpg');"></div>
      <div class="item" style="background-image: url('img/img7.jpg');"></div>
     
    </div>

  </section><!-- #intro -->

  <main id="main">
       <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>“Take care of your car in the garage,and the car will take care of you on the road” ... </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port1.jpg" class="portfolio-popup">
                <img src="img/port1.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port2.jpg" class="portfolio-popup">
                <img src="img/port2.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port3.jpg" class="portfolio-popup">
                <img src="img/port3.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port4.jpg" class="portfolio-popup">
                <img src="img/port4.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port5.jpg" class="portfolio-popup">
                <img src="img/port5.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port6.jpg" class="portfolio-popup">
                <img src="img/port6.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port7.jpg" class="portfolio-popup">
                <img src="img/port7.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port8.jpg" class="portfolio-popup">
                <img src="img/port8.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
     <section id="Partners" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Partners</h2>
          <p>With there Help and Corporation we make your travel full of Joy and Memorable</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/partner1.png" alt="">
          <img src="img/partners2.jpeg" alt="">
          <img src="img/partner3.jpg" alt="">
          <img src="img/partner4.jpg" alt="">
          <img src="img/partner5.png" alt="">
        </div>

      </div>
    </section><

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/port3.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>TRINITY MOTORS</h2>
            <h3>state of art facility</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Intention is to create a space where customer feel at ease.</li>
              <li><i class="ion-android-checkmark-circle"></i>  Customers are able to experience the whole dimension of all brands of cars.</li>
              <li><i class="ion-android-checkmark-circle"></i> Modern retail and service infrastructure to deliver unparalleled luxuries.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Car servicing is important for so many reasons.Not only it saves your time and money on big issues your car may have, but it could also save your life by identifying the issues early on and as soon as possible!...</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">PREMIUM SERVICES</a></h4>
              <p class="description">service like checking hydraulic fluid,coolent levels and testing the battery condition</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">STAR SERVICES</a></h4>
              <p class="description">services like suspension checks,steering alignment and polishing...</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">GENERAL SERVICES</a></h4>
              <p class="description">services like checking lights,oil replacement,cleansing..</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">BASIC SERVICES</a></h4>
              <p class="description">We provide services like checking condition of your car...</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

  
  
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Car Service</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="#">Car Service</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
