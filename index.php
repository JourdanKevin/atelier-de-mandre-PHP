<?php
    $url = isset($_GET["url"]) ? explode("/",$_GET["url"]) : false;
    include "data/data.php";    
    $data = new Datas();    
    $tMenu =  $data->get_header_menue($url ? $url[0] : false);
    
    if ($tMenu) {
        $title = "L'Atelier de Mandres";
        $baseUrl = "/";
        $style = "main.css";
        $script = "script.js";
        include "view/frontend/meta.php";
        include "view/frontend/menu.php";        
        switch ($firsturl =  is_array($url) ? $url[0] : "") {
            case 'SculpturesEtMoulages':
                include "controller/sculptureEtMoulage.php";
                break;     
            case "L'atelier":
                include "controller/atelier.php";
                break;  
            case "ObjetsetDecors":
                include "controller/ObjetsetDecors.php";
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