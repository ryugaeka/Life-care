<?php 
   include('config.php');
   if (isset($_GET['id'])) {
      $dok = $collection->Artikel->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   $collection->Artikel->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   header("Location: Article.php");
