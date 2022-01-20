<?php
    session_start();
    if (isset($_SESSION["connection"]) && $_SESSION["connection"]){
            header("Location: gestionCategori.php");
    }

    include '../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../",false);
    $ConstructPage->createIdentification(false,"login",true);
?>
</body>
</html> 
