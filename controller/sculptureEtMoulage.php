<?php
    $vMenu =  $data->get_vertical_menue_scultptureEtMoulage($secondurl =  count($url) > 1 ? $url[1] : false); 
    $vTitle = "Sculptures et Moulages : ";
    if ($secondurl) {
        include "model/sculptureEtMoulage.php";
        // $vTitle = $vMenu[$secondurl]["value"]; 
        // if ($secondurl == "Statues"){
        //     include "view/frontend/sculptureEtMoulage/test.php";
        // }
        // else{
        $images = query($db,$IMAGES);
        
        include "view/frontend/sculptureEtMoulage/schema1.php";
        // }
     
    }else{
        include "view/frontend/sculptureEtMoulage/imageAccueil.php";
    }
    include "view/frontend/vMenuWithContent.php";
?>