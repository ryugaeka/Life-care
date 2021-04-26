<?php
include('config.php');
$id = $_GET['id'];
$dok = $collection->Person->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

if (isset($_POST['submit'])) {
    $listjam = [];
    if (!empty($_POST['jam'])) {
        foreach ($_POST['jam'] as $jam) {
            array_push($listjam, $jam);
        }
    }
    $collection->Person->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($id)],
        ['$set' => ['Nama' => $_POST['Nama'], 'Email' => $_POST['Email'] , 'Specialist' => $_POST['Specialist'], 'Jam' => $listjam,]]
    );
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
    <title>Edit Doktor</title>
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
                                <input type="text" class="nama" name="Nama" placeholder="Nama lengkap" autocomplete="off" required value="<?php echo $dok->Nama; ?>">
                            </p>
                            <p>
                                <label data-icon="u">Email</label>
                                <input type="email" class="uname" name="Email" placeholder="Email" autocomplete="off" required value="<?php echo $dok->Email; ?>">
                            </p>
                            <p>
                                <label data-icon="u">Specialist</label>
                                <input type="text" name="Specialist" placeholder="Specialist" autocomplete="off" required value="<?php echo $dok->Specialist; ?>">
                            </p>
                            <h3><b>Jadwal</b></h3><br>
                            <?php $index = 0;
                            foreach ($dok->Hari as $hari) : ?>
                                <p><label><b>Hari</b> <?php echo $hari; ?>
                                <br><strong>Jam:</strong>
                                <input type="text" name="jam[]" value=<?php echo $dok->Jam[$index] ?>>
                                </p>
                                <?php $index++ ?>
                            <?php endforeach ?>
                            <p class="signin button">
                                <input type="submit" name="submit" value="Ubah" />
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