<?php
    $vMenu =  $data->get_vertical_menue_atelier($secondurl =  count($url) > 1 ? $url[1] : "");
    $vTitle = "Présentation";    
    if ($secondurl) {
        $vTitle = $vMenu[$secondurl]["value"]; 
        if ($secondurl == "Video"){
            include "view/frontend/atelier/video.php";
        }
        else{
            include "view/frontend/atelier/presentation.php";
        }
    }else{
        include "view/frontend/atelier/presentation.php";
    }
    include "view/frontend/vMenuWithContent.php";
?>