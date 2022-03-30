<?php  
  include './data.php';
  $images = query($db,$IMAGES);
  $verticalMenue = array(
                        "Objets et Décors" => "",
                        "Statues" => "",
                        "Cariatides" => "",
                        "Bustes" => "",
                        "Socles et Piédestaux" => "",
                        "Têtes  Visages et Portraits" => "",
                        "Statuettes" => "",
                        "Bas-Reliefs" => "",
                        "Hauts-Reliefs" => "",
                        "Médaillons" => "",
                        "Ornements de Divers Styles" => "",
                        "Vases Pots et Vasques" => "",
                        "Rosaces" => "",
                        "Luminaires" => "",
                        "Animaux" => "",
                        "Coquillages" => "",
                        "Fontaines" => "",
                        "Masques de Fontaines" => "",
                        "Meubles Résine et Composites" => "",
                        "Baignoires et Lavabos" => "",
                        "Pieds de Tables et de Consoles" => "",
                        "Chapiteaux" => "",
                        "Colonnes " => "",
                        "Pilastres" => "",
                        "Consoles" => "",
                        "Corniches" => "",
                        "Plafonds en Staff" => "",
                        "Frises " => "",
                        "Moulures" => "",
                        "Niches et balustres" => "",
                        "Cheminées" => "",
                        "Cadres et Miroirs" => "",
                        "Trumeaux et Dessus de Portes" => "",
                        "Cartouches et Ecussons" => "",
                        "Réparations et Restaurations" => ""
                      );
  include '../template/header.php';
  ?><script>setArrayImg(<?php echo json_encode  ($images) ?>)</script> <?php
  $tMenue = array_replace($tMenue,array("Sculptures et Moulages" => "current")) ;
  include './vue.php';
  include '../template/footer.php';
?>
