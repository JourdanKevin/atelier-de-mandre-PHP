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
  <link href="../template/banStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="../template/test.css" rel="stylesheet"> -->
  <link href="static/style.css" rel="stylesheet">
  <script src="static/js.js"></script>
</head>
<body>
  <header>
    <div class="flex center">
      <div class="img">
        <img src="../../img/personal2.png"alt="">
      </div>
      <div class="writte">
        <p class="colorCol">collection</p> 
        <p class="Catalogue2022">Catalogue <?php echo date("Y") ?></p>
      </div>
      <div class="lien">
        <i class="fa fa-instagram"></i>
        <i class="fa fa-facebook"></i>
      </div>
    </div>