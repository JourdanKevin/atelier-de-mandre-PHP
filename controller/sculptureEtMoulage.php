<?php
    $vMenu =  $data->get_vertical_menue_scultptureEtMoulage($secondurl =  count($url) > 1 ? $url[1] : false); 
    $vTitle = "Sculptures et Moulages : ";
    if ($secondurl) {
        // include "model/sculptureEtMoulage.php";
        $vTitle = $vMenu[$secondurl]["value"]; 
        $img = "";
        switch ($secondurl) {
            case 'Statues':
                $imge = "Statues.jpg";
                include "view/frontend/sculptureEtMoulage/imageSubMenu.php";
                break;     
            case "Cariatides":
                $imge = "Cariatides.jpg";
                include "view/frontend/sculptureEtMoulage/imageSubMenu.php";
                break;  
            case "Statuettes":
                $imge = "Statuettes.jpg";
                include "view/frontend/sculptureEtMoulage/imageSubMenu.php";
                break;         
            default:
                include "model/sculptureEtMoulage.php";
                $images = query($db,$IMAGES);
                $vTitle = $vMenu[$secondurl]["value"]; 
                include "view/frontend/sculptureEtMoulage/schema1.php";
                break;
        }    
    }else{
        include "view/frontend/sculptureEtMoulage/imageAccueil.php";
    }
    include "view/frontend/vMenuWithContent.php";
?>