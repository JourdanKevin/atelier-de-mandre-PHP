<?php
    session_start();
    if (!(isset($_SESSION["connection"]) && $_SESSION["connection"])){
        header("Location: ./");
    }
    include '../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../");
    $ConstructPage->createMenu(array("Image" => "current","Groupe" => "./gestionGroupe.php","Catégorie" => "./gestionCategori.php"));    
?>
<link href="style.css" rel="stylesheet">
<a class="connexion" href='./traitement/deco.php'>Deconnexion</a>
</body>
</html> 