<?php 
    session_start();
    include('config.php');
    $id = $_GET['id'];

    $questions = $collection->selectCollection("Artikel");
    $test = $questions->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
    $pdf = base64_encode($test->Article->getData());
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
                  <li><a class="active" href="Article.php">Kembali</a></li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>

<body>
    <iframe src="data:application/pdf;base64,<?= $pdf ?>" height="100%" width="100%" style="margin-top:150px" ></iframe>
    <?php include('footer.php');?>
</body>
</html>