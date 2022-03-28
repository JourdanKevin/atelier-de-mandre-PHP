<?php   
    include '../template/header.php';
    $tMenue = array_replace($tMenue, array("L'Atelier" => "current"));
    $tvertMenue = array("Historiques des Ateliers" =>"current","Contact" => "");
    include './vue.php';
    include '../template/footer.php';
?>


