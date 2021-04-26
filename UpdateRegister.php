<?php

include('config.php');
   if (isset($_GET['id'])) {
      $collection->Register_Pasien->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
            ['$set' => ['status' => 1]] 
        );
   }
   header("Location: DaftarPasien.php");