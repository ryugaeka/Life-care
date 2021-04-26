<?php 
   include('config.php');
   if (isset($_GET['id'])) {
      $dok = $collection->Person->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   $collection->Person->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   header("Location: ViewPasien.php");
