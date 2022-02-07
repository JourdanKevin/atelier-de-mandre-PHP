<?php   
    include '../template/ban.php';
    $ConstructPage->createMenu(array_replace($tMenue, array("L'Atelier" => "current")),'light');
?>

<div class="flex">
  <div class="block headColMenue">
    <img width="100%" src="../../img/logo-sema.jpg" alt=" img not found">
    <p class="titleVertMenu">Présentation</p>      
    <?php $ConstructPage->createVerticalMenu(array("Historiques des Ateliers" =>"current","Contact" => ""));?>
  </div>
  <div class="ColDisplay"  >
    <div class="center">
      <div class="tittle haut"><h1 class="police vertal"><span class="FirstLetteTitle">L</span>'ATELIER DE <span class="FirstLetteTitle">S</span>CULPTURE, <span class="FirstLetteTitle">M</span>OULAGE, <span class="FirstLetteTitle">D</span>ECOR, <span class="FirstLetteTitle">V</span>ERNIS ET <span class="FirstLetteTitle">P</span>ATINE</h1></div>
    </div>
  <div class="alginLeft"> 
    <div class="flex"><img class="tailleImage" src="../../img/accueilCoreImage.png" alt="">
      <div class="block decalHaut">
        <h1 class="police" ><span class="FirstLetter">D</span><span class="titreGras">EPUIS 1988</span></h1>
          <p class="police" >nous répondons à toutes vos demandes de sculpture et moulage avec savoir-faire, maîtrise et inventivité.</p>
        <h1 class="police"><span class="FirstLetter">N</span><span class="titreGras">OUS SOMMES PARTENAIRES</span></h1>
      </div>
    </div>
    <p class="police">des décorateurs, ensembliers, ébénistes, architectes, sculpteurs, designers, stylistes, plasticiens, staffeurs et maquettistes, pour toutes études et réalisations de volumes en modelage, plâtre, bois, bronze, résine et matériaux composites.</p>
    <h1 class="police"><span class="FirstLetter">L</span><span class="titreGras">'ATELIER</span></h1>
      <p class="police">associe ébénistes, sculpteurs, mouleurs, staffeurs, peintres, vernisseurs, laqueurs, unissant les arts plastiques traditionnels aux techniques de fabrications les plus performantes, mettant en ceuvre les matériaux de jadis et d'aujourd'hui dans les règles de l'art, toujours dans le respect des formes, des styles et traditions. L'Atelier répare, reconstitue, restaure et consolide des sculptures et bas-reliefs usés par le temps, des terres cuites anciennes aux morceaux manquants, des ornements en staff abîmés.</p>
    <h1 class="police"><span class="FirstLetter">N</span><span class="titreGras">OTRE SAVOIR - FAIRE<span></h1>
      <p class="police">nous savons réduire, agrandir ou reproduire à l'identique, des sculptures, des objets d'art anciens ou contemporains. Nous pouvons aussi dupliquer par moulage, et dans différentes matières, des mobiliers anciens, des oeuvres d'artistes de diverses dimensions, en pièces uniques, en séries limitées et numérotées et aussi par quantités plus importantes. Nous étudions et réalisons également des prototypes et des décors personnalisés à l'unité, destinés à ornementer et aménager des appartements, villas, jardins, châteaux, lieux publics et privés, théâtres, opéras, cabarets, parcs de loisirs...</p>
  </div>
<video controls width="">
    <source src="../../img/Reportage Atelier de Mandres - La Rue.mp4"
            type="video/mp4">
    Sorry, your browser doesn't support embedded videos.
</video>
  </div>
</div>
</div>
</body>
</html>


<!-- mettre menue avec ancrage -->
