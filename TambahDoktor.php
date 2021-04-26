<?php
include('config.php');
if (isset($_POST['submit'])) {
    $listhari = [];
    $listjam = [];
    if (!empty($_POST['hari'])) {
        foreach ($_POST['hari'] as $hari) {
            array_push($listhari, $hari);
        }
    }
    if (!empty($_POST['jam'])) {
        foreach ($_POST['jam'] as $jam) {
            if ($jam != null) {
                array_push($listjam, $jam);
            }
        }
    }
    $hash = md5($_POST['Password']);
    $insertOneResult = $collection->Person->insertOne([
        'Nama' => $_POST['Nama'],
        'Email' => $_POST['Email'],
        'Password' => $hash,
        'Specialist' => $_POST['Specialist'],
        'Type' => 'doktor',
        'Hari' => $listhari,
        'Jam'  => $listjam
    ]);
    header("Location: ViewDoktor.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>New Doktor</title>
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
            <div id="container_demo">
                <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form method="POST">
                            <h1> Tambah Dokter </h1>
                            <p>
                                <label data-icon="u">Nama Doktor</label>
                                <input type="text" class="nama" name="Nama" placeholder="Nama lengkap" autocomplete="off" required>
                            </p>
                            <p>
                                <label data-icon="u">Email</label>
                                <input type="email" class="uname" name="Email" placeholder="Email" autocomplete="off" required>
                            </p>
                            <p>
                                <label data-icon="u">Password</label>
                                <input type="password" class="password" name="Password" placeholder="Password" autocomplete="off" required>
                            </p>
                            <p>
                                <label data-icon="u">Specialist</label>
                                <input type="text" name="Specialist" placeholder="Specialist" autocomplete="off" required>
                            </p>
                            <h3><b>Jadwal</b></h3><br>
                            <p>
                                <input type="checkbox" name="hari[]" value="Senin" /> Senin<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Selasa" /> Selasa<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Rabu" /> Rabu<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Kamis" /> Kamis<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Jumat" /> Jumat<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Sabtu" /> Sabtu<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p>
                                <input type="checkbox" name="hari[]" value="Minggu" /> Minggu<br>
                                <strong>Jam : </strong><input type="text" name="jam[]">
                            </p>
                            <p class="signin button">
                                <input type="submit" name="submit" value="Tambah" />
                            </p>
                            <p class="change_link">
                                <a href="ViewDoktor.php"> back </a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
</body>

</html>