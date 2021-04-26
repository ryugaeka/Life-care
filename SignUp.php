<?php 
    include('config.php');
    if(isset($_POST['submit'])){
        $hash = md5($_POST['password']);
        $insertOneResult = $collection->Person->insertOne([
            'Nama' => $_POST['nama'],
            'Umur' => $_POST['umur'],
            'NoTelp' => $_POST['nomortelp'],
            'Alamat' => $_POST['alamat'],
            'Email' => $_POST['email'],
            'Password' => $hash,
            'Type' => 'pasien',
        ]);
        header("Location: Login.php");
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
        <title>Sign Up</title>
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
                            <form method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="nama" data-icon="u">Nama Pasien</label>
                                    <input name="nama" required="required" type="text" placeholder="Nama Pasien" autocomplete="off"/>
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="umur" data-icon="u">Umur</label>
                                    <input name="umur" required="required" type="text" placeholder="Umur" autocomplete="off"/>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="notelp" data-icon="e" >Nomor Telepon</label>
                                    <input name="nomortelp" required="required" type="text" placeholder="Nomor Telepon" autocomplete="off"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="alamat" data-icon="p">Alamat</label>
                                    <input name="alamat" required="required" type="alamat" placeholder="Masukkan Alamat Lengkap" autocomplete="off"/>
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Email</label>
                                    <input name="email" required="required" type="email" placeholder="Email" autocomplete="off" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="password" data-icon="u">Password</label>
                                    <input name="password" required="required" type="password" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">
									<a href="login.php"> Go to log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>