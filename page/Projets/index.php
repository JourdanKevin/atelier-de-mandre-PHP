<?php   
    include '../template/header.php';
    $ConstructPage->createMenu(array_replace($tMenue, array("Projets" => "current")),'light');
?>