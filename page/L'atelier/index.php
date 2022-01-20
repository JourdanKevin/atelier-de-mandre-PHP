
<link href="style.css" rel="stylesheet">
<?php    
    include '../../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../../",false,"");
    $ConstructPage->createMenu(array("L'Atelier" => "current","Les Collections" => "./gestionImage.php","Sculpture et Moulages" => "../SculptureEtMoulage","Meubles et Amenagements" => "./gestionCategori.php","Les Collections" => "./gestionImage.php","Les Collections" => "./gestionImage.php","Les Collections" => "./gestionImage.php","Objets et Décors" => "./gestionImage.php","Luminaires" => "./gestionImage.php","Réaliastions" => "./gestionImage.php","Catalogues" => "./gestionImage.php","Contact" => "./gestionImage.php"),'light');
?>
<div class="flex">
  <div class="block">
      <img width="100%" src="../../img/logo.png">      
    <div class="center">
      <p>Présentation</p>
      <?php $ConstructPage->createVerticalMenu(array("Historiques des Ateliers" =>"current","Contact" => "","Téléchargement" => ""));?>
    </div>
  </div>
</div>
</body>
</html>