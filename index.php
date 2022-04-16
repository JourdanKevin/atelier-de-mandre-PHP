<?php
    $url = isset($_GET["url"]) ? explode("/",$_GET["url"]) : false;
    include "data/data.php";    
    $data = new Datas();    
    $tMenu =  $data->get_header_menue($url ? $url[0] : false);
    if ($tMenu) {
        $title = "L'Atelier de Mandres";
        $baseUrl = "/AtelierDeMandres/";
        $style = "main.css";
        $script = "script.js";
        ?><script src="<?= $baseUrl ?>public/js/script.js"></script><?php
        include "view/frontend/menu.php";        
        switch ($firsturl =  is_array($url) ? $url[0] : "") {
            case 'SculpturesEtMoulages':
                $style = "sculptureEtMoulage/main.css";
                include "controller/sculptureEtMoulage.php";
                break;     
            case "L'atelier":
                $style = "atelier/main.css";
                include "controller/atelier.php";
                break;          
            default:
                include "controller/accueil.php";
                break;
        }
       
        include "view/frontend/basePage.php";
    }else{
        echo "erreur 404 : vous vous êtes perdus?";
    }

?>