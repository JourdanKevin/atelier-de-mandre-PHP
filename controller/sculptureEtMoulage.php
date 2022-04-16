<?php
    $vMenu =  $data->get_vertical_menue_scultptureEtMoulage($secondurl =  count($url) > 1 ? $url[1] : false); 
    var_dump($secondurl);
    $vTitle = "Sculptures et Moulages : ";
    if ($secondurl) {
        include "model/sculptureEtMoulage.php";
        $vTitle = $vMenu[$secondurl][0]; 
        $images = query($db,$IMAGES);
        ?><script>setArrayImg(<?php echo json_encode($images) ?>)</script> <?php
        include "view/frontend/sculptureEtMoulage/schema1.php";
     
    }else{
        include "view/frontend/sculptureEtMoulage/imageAccueil.php";
    }
    include "view/frontend/vMenuWithContent.php";
?>