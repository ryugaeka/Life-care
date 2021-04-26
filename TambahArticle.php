<?php 
    include('config.php');
    if(isset($_POST['upload'])){
        $title = $_POST['title'];
        $cover = $_FILES["cover"];
        $article = $_FILES["article"];

        $questions = $collection->selectCollection("Artikel");
        $document = array(
            "type" => "MCQ",
            "Title"=> $title,
            "Cover" => new MongoDB\BSON\Binary(file_get_contents($cover["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC),
            "Article" => new MongoDB\BSON\Binary(file_get_contents($article["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC),
        );
        $questions->insertOne($document);
        header("Location:Article.php");
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Tambah Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container" style="margin-top:100px">
            <!-- Codrops top bar -->
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" enctype="multipart/form-data"> 
                                <h1> Tambah Article </h1> 
                                <p>
                                    <label class="title">Title</label>
                                    <input type="text" class="title" name="title" required>
                                </p>
                                <p> 
                                    <label class="cover">Cover</label>
                                    <input type="file" name="cover" required>
                                </p>
                                <p> 
                                    <label class="nama">Article</label>
                                    <input type="file" name="article" required>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="upload" value="Upload"/> 
								</p>
                                <p class="change_link">
									<a href="Article.php"> Go to Article </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>