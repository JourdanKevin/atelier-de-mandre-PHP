<?php
    include '../template/ban.php';
    $ConstructPage->createMenu(array_replace($tMenue, array("Sculptures et Moulages" => "current")),'light');
?>
<div class="flex">
  <div class="block headColMenue">
    <img width="100%" src="../../img/logo-sema.jpg" alt=" img not found">
    <p class="titleVertMenu">Sculptures et Moulages : </p>
    <div class="aligneLeft">
      
        <?php $ConstructPage->createVerticalMenu(array("Objets et Décors" => "","Statues" => "","Cariatides" => "","Bustes" => "","Socles et Piédestaux" => "","Têtes  Visages et Portraits" => "","Statuettes" => "","Bas-Reliefs" => "","Hauts-Reliefs" => "","Médaillons" => "","Ornements de Divers Styles" => "","Vases Pots et Vasques" => "","Rosaces" => "","Luminaires" => "","Animaux" => "","Coquillages" => "","Fontaines" => "","Masques de Fontaines" => "","Meubles Résine et Composites" => "","Baignoires et Lavabos" => "","Pieds de Tables et de Consoles" => "","Chapiteaux" => "","Colonnes " => "","Pilastres" => "","Consoles" => "","Corniches" => "","Plafonds en Staff" => "","Frises " => "","Moulures" => "","Niches et balustres" => "","Cheminées" => "","Cadres et Miroirs" => "","Trumeaux et Dessus de Portes" => "","Cartouches et Ecussons" => "","Réparations et Restaurations" => ""));?>
    </div>
</div>
  <div class="block objDec">
    <div class="tittle">
      <img width="100%" src="../../img/titre.png">
    </div>
    <div>
      <div id="idPopup" class="Popup">
        <div class="animate formContent">
          <img id="idImgPopup"  class="imgPopup" src="" alt="">
        </div>    
      </div>
      <div class="listeImg">
      <?php
        include '../../commun/bdd/connexion.php';
        include '../../commun/bdd/queryTools.php';
        include './schema.php';
        $images = query($db,$IMAGES);
        foreach ($images as $image){
          $url = '../../'.$image["folder"];
          echo '
          <div class="articles">
              <img src="'.$url.$image["nomFichier"].'" class="photo" onclick="showPopup(\''.$url.$image["nomFichierAssoc"].'\')">
          </div>
        ';
        } 
      ?>
      </div>
      </div>
  </div>
</div>
</body>
</html>