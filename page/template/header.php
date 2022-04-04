<?php    
    include '../../commun/prebuild/class/ConstructPage.php';
    $ConstructPage = new ConstructPage("../../",false,"L'Atelier de Mandres");
    $tMenue = array(
                    "L'Atelier" => "../L'atelier/",
                    "Les Collections" => "../LesCollections/",
                    "Les Styles" => "../LesStyles/",
                    "Sculptures et Moulages" => "../SculptureEtMoulage/",
                    "Luminaires" => "../Luminaires/",
                    "Objets et Décors" => "../ObjetsEtdecors/",
                    "Clients-Réalisations" => "../ClientsRealisations",
                    "Boutique" => "../Boutique",
                    "Contact" => "../Contact/"
                );
?>
  <link href="../template/banStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="../template/test.css" rel="stylesheet"> -->
  <link href="static/style.css" rel="stylesheet">
  <script src="static/script.js"></script>
  <script src="https://kit.fontawesome.com/58054f5d7c.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="flex center">
      <div class="img">
        <img class="ban" src="../../img/personal5.jpg" alt="">        
      </div>
      <div class="writte">
        <p class="colorCol">collection</p> 
        <p class="Catalogue2022">Catalogue <?php echo date("Y") ?></p>
      </div>
      <div class="lien">
        <a href="../../img/Reportage Atelier de Mandres - La Rue.mp4" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="far fa-circle fa-stack-2x"></i>
            <i class="fas fa-video fa-stack-1x"></i>
          </span> 
        </a>
        <a href="https://www.linkedin.com/in/pierre-wagner-432894b2/" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="far fa-circle fa-stack-2x"></i>
            <i class="fa fa-linkedin fa-stack-1x"></i>
          </span> 
        </a>
        <a href="https://instagram.com/atelierdemandres?utm_medium=copy_link" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="far fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x"></i>
          </span> 
        </a>
        <a href="" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="far fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x"></i>
          </span> 
        </a>
      </div>
    </div>