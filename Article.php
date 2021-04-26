<?php
session_start();
include('config.php');
$questions = $collection->selectCollection("Artikel");

$questionsArray = $questions->find();
$Article = $collection->Artikel->find();
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
                  <li><a href="DoctorSchedule.php">Doctor Schedule</a></li>
                  <?php if ($_SESSION['tipe'] != null) : ?>
                     <?php if ($_SESSION['tipe'] != 'doktor') : ?>
                        <li><a class="active" href="Article.php">Article</a></li>
                     <?php endif ?>
                  <?php else : ?>
                     <li><a class="active" href="Article.php">Article</a></li>
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
<!-- end section -->
<div id="about" class="section wow fadeIn" style="margin-top:100px;">
   <div class="container">
      <?php if ($_SESSION['tipe'] == 'admin') : ?>
         <a href="TambahArticle.php" class="btn btn-primary" style="margin-top:10px;margin-left:20px">Tambah Article</a>
         <table class="table" style="margin-top:30px">
            <tr>
               <th scope="col">Title</th>
               <th>Aksi</th>
            </tr>
            <?php
            foreach ($Article as $article) {
               echo "<tr>";
               echo "<th scope='row'>" . $article->Title . "</th>";
               echo "<th><a href = 'HapusArticle.php?id=" . $article->_id . "'class='btn btn-danger'>Hapus</a></th>";
               echo "</tr>";
            }
            ?>
         </table>
      <?php endif ?>
      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>Article</h2>
      </div>
      <!-- end title -->
      <hr class="hr1">
      <div class="row">
         <?php foreach ($questionsArray as $value) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12 mt-4">
               <?php $image = base64_encode($value->Cover->getData()); ?>
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <img src="data:jpeg;base64,<?= $image ?>" alt="" class="img-responsive" style="width:300px; height:250px;">
                  </div>
                  <h3><a href="ViewArticle.php?id=<?php echo $value->_id; ?>"><?php echo $value->Title; ?></a></h3><br>
               </div>
            </div>
         <?php endforeach ?>
         <!-- <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>Hygienic Operating Room</h3>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>Specialist Physicians</h3>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
         </div> -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<?php include('footer.php'); ?>
</body>

</html>