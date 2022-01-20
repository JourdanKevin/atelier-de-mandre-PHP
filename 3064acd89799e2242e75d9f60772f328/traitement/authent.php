<?php 
    include '../../commun/bdd/connexion.php';
    include '../../commun/bdd/queryTools.php';
    include 'schema.php';

    $_POST[":mdp"] = md5(md5($_POST[":mdp"]));
    $data = queryPrepBool($db,$VERIFICATION,$_POST);
    session_start();
    if(isset($_SESSION["connection"])){                     
        unset($_SESSION["connection"]);
    }
    $_SESSION["connection"] = $data;
    header("Location: ../");


    closeConnexion($db);
?>