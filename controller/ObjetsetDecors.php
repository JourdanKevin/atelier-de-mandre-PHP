<?php
$vMenu =  $data->get_vertical_menue_scultptureEtMoulage($secondurl =  count($url) > 1 ? $url[1] : $url[0]); 
$vTitle = "Objets et Décors";
if ($secondurl) {
    $vTitle = $vMenu[$secondurl]["value"]; 
}
include "model/sculptureEtMoulage.php";
$images = query($db,$IMAGES);
include "view/frontend/sculptureEtMoulage/schema1.php";
include "view/frontend/vMenuWithContent.php";
?>