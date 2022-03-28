<?php   
    include '../template/header.php';
    $ConstructPage->createMenu(array_replace($tMenue, array("Luminaires" => "current")),'light');
?>