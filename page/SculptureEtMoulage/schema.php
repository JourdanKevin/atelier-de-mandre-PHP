<?php
$IMAGES= "SELECT dossier.folder, a.nomFichier, b.nomFichier AS nomFichierAssoc FROM image a JOIN image b ON a.id_image = b.id JOIN dossier ON a.id_folder = dossier.id WHERE a.id_image IS NOT NULL"
?>