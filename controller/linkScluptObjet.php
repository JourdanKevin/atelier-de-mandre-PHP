<?php
    if ($secondurl || $url[0] == "ObjetsetDecors") {
        $vTitle = $vMenu[$secondurl]["value"]; 
        if ($imge = $vMenu[$secondurl]["img"]) {
                include "view/frontend/sculptureEtMoulage/imageSubMenu.php";
        }else {
            include "model/sculptureEtMoulage.php";
            $images = query($db,$IMAGES);
            $vTitle = $vMenu[$secondurl]["value"]; 
            include "view/frontend/sculptureEtMoulage/schema1.php";
    }
}else{
    include "view/frontend/sculptureEtMoulage/imageAccueil.php";
}
include "view/frontend/vMenuWithContent.php";
?>