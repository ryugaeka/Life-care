<?php
session_start();
if($_SESSION == null){
   $_SESSION['nama'] = null;
   $_SESSION['id'] = null;
   $_SESSION['tipe'] = null;
   $_SESSION['login'] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<header>
   <?php include('header.php'); ?>
   <div class="header-bottom wow fadeIn">
      <div class="container">
         <nav class="main-menu">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li><a class="active" href="index.php">Home</a></li>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] == 'pasien') : ?>
                        <li><a href="Register.php">Register</a></li>
                     <?php endif ?>
                  <?php endif ?>
                  <li><a href="DoctorSchedule.php">Doctor Schedule</a></li>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] != 'doktor') : ?>
                        <li><a href="Article.php">Article</a></li>
                     <?php endif ?>
                  <?php else : ?>
                     <li><a href="Article.php">Article</a></li>
                  <?php endif ?>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] != 'doktor') : ?>
                        <li><a href="Contact.php">Contact Us</a></li>
                     <?php endif ?>
                  <?php else : ?>
                     <li><a href="Contact.php">Contact Us</a></li>
                  <?php endif ?>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] == 'admin') : ?>
                        <li><a href="ViewDoktor.php">Doktor</a></li>
                     <?php endif ?>
                  <?php endif ?>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] == 'admin') : ?>
                        <li><a href="ViewPasien.php">Pasien</a></li>
                     <?php endif ?>
                  <?php endif ?>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] == 'doktor') : ?>
                        <li><a href="DaftarPasien.php">Daftar Pasien</a></li>
                     <?php endif ?>
                  <?php endif ?>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Back Chair Life", "Stay Happy and Healthy", "We Support You!" ]'>
                     <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2895f1;">
               <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
               <h3>Emergency Case</h3>
               <p>Provide the Best Emergency Case in the World!</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>Working Hours</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                     <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                     <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#0060b1;">
               <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
               <h3>Clinic Mission</h3>
               <p>Serve the best way for help people!</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>Life-Care</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Life Care</h2>
               <p class="lead">Help people to get healthy , also raise the happiness of the patient who came in life-care.</p>
               <p> That's mean we provide the best service to patient. We here to make a different between another hospitals. </p>
               <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>Hygienic Operating Room</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>Specialist Physicians</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
   <div class="container">

      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>

      <div class="row dev-list text-center">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
            <div class="widget clearfix">
               <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Dr. Nicholas Nathanael</h3>
                  <small>Clinic Owner</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Nathanael from Cimahi. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div>
            <!--widget -->
         </div><!-- end col -->

         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
            <div class="widget clearfix">
               <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Dr. Michael Septian</h3>
                  <small>Internal Diseases</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Michael from Kopo. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div>
            <!--widget -->
         </div><!-- end col -->

         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
            <div class="widget clearfix">
               <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Dr. Brein Sp.Ak</h3>
                  <small>Orthopedics Expert</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Brein from Dipatiukur. I am senior art director and founder of Violetta.</p>

               <div class="footer-social">
                  <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
               </div>
            </div>
            <!--widget -->
         </div><!-- end col -->

      </div><!-- end row -->
   </div><!-- end container -->
</div>

<!-- end doctor section -->

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>Testimonials</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">Im get healthy as soon as i out from here.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Fransiskus Fernando <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">Lifecare raise our happiness also our healthy.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Michael Septian <small>- Life Manager</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">Pain go with life care.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Stefannus William <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>

         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
</div>
<?php include('footer.php'); ?>
</body>

</html>