<?php    
    include '../../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../../",false,"L'Atelier de Mandres");
    $tMenue = array(
                    "L'Atelier" => "../L'atelier/",
                    "Les Collections" => "../LesCollections/",
                    "Les Styles" => "../LesStyles/",
                    "Sculptures et Moulages" => "../SculptureEtMoulage/",
                    "Luminaires" => "../Luminaires/",
                    "Objets et Décors" => "../ObjetsEtDécors/",
                    "Projets" => "../Projets",
                    "Contact" => "../Contact/"
                );
?>
<link href="style.css" rel="stylesheet">
<link href="../template/banStyle.css" rel="stylesheet">
<script src="js.js"></script>
<div class="flex">
  <img src="../../img/personal2.png" alt="">
  <p class="Catalogue2022">Catalogue <?php echo date("Y") ?></p>
</div>