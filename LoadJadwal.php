<?php
include('config.php');
$id = $_GET['IdDoktor'];

if ($id != "") {
    $Doktor = $collection->Person->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

    $index = 0;
    foreach ($Doktor->Hari as $hari){
        echo "<input type='radio' id='".$index."' name='hari' value='".$index."'/>";
        echo "<label for='".$index."'>".$hari." - ".$Doktor->Jam[$index]."</label><br>";
        $index++;
    }
}
?>     