
<link href="style.css" rel="stylesheet">
<script src="js.js"></script>
<?php    
    include '../../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../../",false,"");
    $ConstructPage->createMenu(array("L'Atelier" => "../L'atelier/","Les Collections" => "./gestionImage.php","Sculpture et Moulages" => "current","Meubles et Amenagements" => "./gestionCategori.php","Les Collections" => "./gestionImage.php","Les Collections" => "./gestionImage.php","Les Collections" => "./gestionImage.php","Objets et Décors" => "./gestionImage.php","Luminaires" => "./gestionImage.php","Réaliastions" => "./gestionImage.php","Catalogues" => "./gestionImage.php","Contact" => "./gestionImage.php"),'light');
?>
<div class="flex">
  <div class="block headColMenue">
    <p>Sculpture et Moulages</p>
    <?php $ConstructPage->createVerticalMenu(array("Objets et décors" =>"current","Statues" => ""));?>
</div>
  <div class="block objDec">
    <div class="tittle">
      <img width="90%" src="../../img/titre.png">
    </div>
    <div id="idPopup" class="Popup">
      <div class="animate formContent">
        <img id="idImgPopup"  class="imgPopup" src="" alt="">
      </div>    
    </div>
    <div class="listeImg">
    <?php
      if($dossier = opendir('../../img/Travaux/'))
      {
        while(false !== ($fichier = readdir($dossier)))
        {
          if($fichier != '.' && $fichier != '..')
              {
                if (preg_match('_([0-9]{5}) \({1}1{1}\){1}\.jpg_', $fichier,$matches)) 
                {
                  $imgRef = "../../img/Travaux/_".$matches[1].".jpg";
                  echo '
                  <div class="articles">
                      <img src="../../img/Travaux/'.$fichier.'" class="photo" onclick="showPopup(\''.$imgRef.'\')">
                  </div>
                ';
                } 
              }    
        }
      }
    ?>
    </div>
  </div>
</div>
</body>
</html>