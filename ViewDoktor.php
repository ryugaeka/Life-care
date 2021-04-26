<?php
session_start();
include('config.php');
$Person = $collection->Person->find();
?>
<hmtl>
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
                           <li><a class="active" href="ViewDoktor.php">Doktor</a></li>
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

   <body>
      <a href="TambahDoktor.php" class="btn btn-primary" style="margin-top:180px;margin-left:40px">Tambah Doktor</a>
      <table class="table" style="margin-top:30px">
         <tr>
            <th scope="col">Nama</th>
            <th scope="col">Specialist</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Aksi</th>
         </tr>
         <?php
         foreach ($Person as $person) {
            if ($person->Type == 'doktor') {
               echo "<tr>";
               echo "<th scope='row'>" . $person->Nama . "</th>";
               echo "<td>" . $person->Specialist . "</td>";
               echo "<td>";
               foreach ($person->Hari as $hari) {
                  echo $hari . "<br>";
               }
               echo "</td>";
               echo "<td>";
               foreach ($person->Jam as $jam) {
                  echo $jam . "<br>";
               }
               echo "</td>";
               echo "<td>";
               echo "<a href = 'EditDoktor.php?id=" . $person->_id . "'class='btn btn-primary mr-5 '>Edit</a>";
               echo "<a href = 'HapusDoktor.php?id=" . $person->_id . "'class='btn btn-danger'>Hapus</a>";
               echo "</td>";
               echo "</tr>";
            }
         }
         ?>
      </table>
      <?php include('footer.php'); ?>
   </body>

   </html>