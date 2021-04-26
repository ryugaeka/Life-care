<?php
session_start();
include('config.php');
$Person = $collection->Person->find();

if (isset($_POST['upload'])) {
   $questions = $databaseMongo->selectCollection("artikel");
   $document = array(
      "type" => "MCQ",
      "cover" => new MongoDB\BSON\Binary(file_get_contents($questionCover["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC),
   );
   if ($questions->insertOne($document)) {
      return true;
   }
}
if (isset($_POST['submit'])) {
   $dokter = $collection->Person->findOne(['_id' => $_POST['IdDoktor']]);
   $insertOneResult = $collection->Register_Pasien->insertOne([
      'IdDoktor' => $_POST['IdDoktor'],
      'IdPasien' => $_POST['IdPasien'],
      'NamaPasien' => $_POST['NamaPasien'],
      'Gejala' => $_POST['gejala'],
      'Waktu' => $_POST['hari'],
      'status' => 0,
   ]);
}
?>
<html>
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
                        <li><a class="active" href="Register.php">Register</a></li>
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
                  <a href="" class="typewrite" data-period="2000" data-type='[ "You Can Register Here!", "", "" ]'>
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
<!-- end section -->
<div id="service" class="services wow fadeIn" style="margin-top:100px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="inner-services">
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                     <h4>PREMIUM FACILITIES</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                     <h4>LARGE LABORATORY</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                     <h4>DETAILED SPECIALIST</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                     <h4>CHILDREN CARE CENTER</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                     <h4>FINE INFRASTRUCTURE</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serv">
                     <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                     <h4>ANYTIME BLOOD BANK</h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <?php if ($_SESSION['nama'] != null) : ?>
               <p style="color:white;font-size:25px">Halo, <b><?php echo $_SESSION['nama']; ?></b></p>
            <?php endif ?>
            <form method="post" style="color:white;font-size:15px" id="myForm">
               <input type="hidden" name="IdPasien" value="<?php echo $_SESSION['id']; ?>">
               <input type="hidden" name="NamaPasien" value="<?php echo $_SESSION['nama']; ?>">
               <label>Gejala</label>
               <input type="text" class="form-control" name="gejala" autocomplete="off">
               <label>Pilih Dokter</label>
               <select name="IdDoktor" id="dokter" class="form-control" onchange="getData(this.value, 'displaydata')">
                  <option value="">Select Doktor</option>
                  <?php foreach ($Person as $person) : ?>
                     <?php if ($person->Type == 'doktor') : ?>
                        <option value="<?php echo $person->_id; ?>"><?php echo $person->Nama . " - " . $person->Specialist; ?></option>
                     <?php endif; ?>
                  <?php endforeach; ?>
               </select>
               <div id="displaydata">
               </div>
               <button type="submit" class="btn btn-primary" style="margin-top:20px;font-size:15px" name="submit" data-toggle="modal" data-target="#formJadwal">Submit</button>
               <br>
               <center><i>---Semoga Lekas Sembuh---</i></center>
            </form>
         </div>
      </div>
      <h2>Histori Pasien</h2>
      <table class="table" style="margin-top:30px;color:white">
         <tr>
            <th scope="col">Nama</th>
            <th scope="col">Gejala</th>
            <th scope="col">Doktor</th>
            <th scope="col">Status</th>
         </tr>
         <?php
         $Regis = $collection->Register_Pasien->find();
         if ($Regis != null) {
            foreach ($Regis as $regis) {
               if ($regis->IdPasien == $_SESSION['id']) {
                  $doktor = $collection->Person->findOne(['_id' => new MongoDB\BSON\ObjectID($regis->IdDoktor)]);
                  echo "<tr>";
                  echo "<th scope='row'>" . $regis->NamaPasien . "</th>";
                  echo "<td>" . $regis->Gejala . "</td>";
                  echo "<td>" . $doktor->Nama . "</td>";
                  if ($regis->status != 0) {
                     echo "<td> Telah Kunjungan </td>";
                  } else {
                     echo "<td> Belum Kunjungan </td>";
                  }
                  echo "</tr>";
               }
            }
         } else {
            echo "<tr>";
            echo "<th> - </th>";
            echo "<td> - </td>";
            echo "<td> - </td>";
            echo "</tr>";
         }
         ?>
      </table>
   </div>
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
               <p>Hello guys, I am Michael Septian from Kopo. I am senior art director and founder of Violetta.</p>

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

<?php include('footer.php'); ?>
</body>
<script type="text/javascript">
   function getData(IdDoktor, divid) {
      $.ajax({
         url: 'LoadJadwal.php?IdDoktor=' + IdDoktor,
         success: function(html) {
            var ajaxDisplay = document.getElementById(divid);
            ajaxDisplay.innerHTML = html;
         }
      });
   }
</script>

</html>