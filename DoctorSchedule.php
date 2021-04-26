<?php 
   session_start();
   require('config.php');
   $Person = $collection->Person->find();
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
                  <li><a href="index.php">Home</a></li>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] == 'pasien') : ?>
                        <li><a href="Register.php">Register</a></li>
                     <?php endif ?>
                  <?php endif ?>
                  <li><a class="active" href="DoctorSchedule.php">Doctor Schedule</a></li>
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
<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
   <div class="container">
      <div class="heading" style="margin-top:100px;">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>

      <div class="row dev-list text-center">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
            <div class="widget clearfix">
               <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
               <div class="widget-title">
                  <h3>Dr. Nicholas Nathanael S.pd</h3>
                  <small>Clinic Owner</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Nathan from Cimahi. I am senior art director and founder of Violetta.</p>

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
                  <h3>Drs. Michael Septian Sp.Kk</h3>
                  <small>Internal Diseases</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Michael from Kopo. I am senior art director and founder of Life Care.</p>

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
               <h3>Dr. Brein Hamdo Sipayung Sp.Ak</h3>
                  <small>Orthopedics Expert</small>
               </div>
               <!-- end title -->
               <p>Hello guys, I am Brein from Medan. I am senior art director and founder of Acupuntur club.</p>

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


<div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <table style="color:white;width:100%">
      <tr style="font-size:17px">
         <th>
            <center>Nama Dokter</center>
         </th>
         <th>
            <center>Spesialist</center>
         </th>
         <th>
            <center>Hari</center>
         </th>
         <th>
            <center>Jam</center>
         </th>
      </tr>
      <tr>
         <th>
            <hr>
         </th>
         <th>
            <hr>
         </th>
         <th>
            <hr>
         </th>
         <th>
            <hr>
         </th>
      </tr>
      <?php foreach ($Person as $person) : ?>
         <?php if ($person->Type == 'doktor') : ?>
            <tr>
               <th>
                  <center><?php echo $person->Nama; ?></center>
               </th>
               <th>
                  <center><?php echo $person->Specialist; ?></center>
               </th>
               <td>
                  <?php foreach ($person->Hari as $hari) : ?>
                     <br>
                     <center><?php echo $hari ?></center>

                  <?php endforeach ?>
               </td>
               <td>
                  <?php foreach ($person->Jam as $jam) : ?>
                     <br>
                     <center><?php echo $jam; ?></center>
                  <?php endforeach ?>
               </td>
            </tr>
            <tr>
               <th>
                  <hr>
               </th>
               <th>
                  <hr>
               </th>
               <th>
                  <hr>
               </th>
               <th>
                  <hr>
               </th>
            </tr>
         <?php endif ?>
      <?php endforeach ?>
   </table>
</div>
<?php include('footer.php') ?>
</body>

</html>