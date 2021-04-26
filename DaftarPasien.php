<?php 
    session_start();
    include('config.php');
    $id = $_SESSION['id'];
    $Regis = $collection->Register_Pasien->find();
    $Doktor = $collection->Person->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
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
                        <li><a class="active" href="Contact.php">Contact Us</a></li>
                     <?php endif ?>
                  <?php else : ?>
                     <li><a class="active" href="Contact.php">Contact Us</a></li>
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
                        <li><a class="active" href="DaftarPasien.php">Daftar Pasien</a></li>
                     <?php endif ?>
                  <?php endif ?>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>

<body>
<table class="table" style="margin-top:180px">
                <tr>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            <?php
                if($Regis != null){
            foreach($Regis as $regis){
                if($regis->IdDoktor == $id){
                    echo "<tr>";
                    echo "<th scope='row'>" . $regis->NamaPasien . "</th>";
                    echo "<td>" . $regis->Gejala . "</td>";
                    echo "<td>" . $Doktor->Hari[$regis->Waktu] . ', ' . $Doktor->Jam[$regis->Waktu] . "</td>";
                    if($regis->status == 0){
                        echo "<td><a href = 'UpdateRegister.php?id=" . $regis->_id . "'class='btn btn-warning'>Selesai</a></td>";
                    }else{
                        echo "<td> Selesai </td>"; 
                    }
                    echo "</tr>";
                }
            }
        }else{
            echo "<tr>";
            echo "<th> - </th>";
            echo "<th> - </th>";
            echo "<th> - </th>";
            echo "<th> - </th>";
            echo "</tr>";

            }
            ?>
        </table>
        <?php include('footer.php');?>
</body>
</html>