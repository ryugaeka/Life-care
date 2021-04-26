<?php 
    session_start();
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['nama'] = null;
    $_SESSION['id'] = null;
    $_SESSION['tipe'] = null;
    $_SESSION['login'] = null;
    header("Location:index.php");
?>