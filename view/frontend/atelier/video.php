<?php ob_start(); ?>
    <div class="video">
      <video width="560" height="315" controls><source src="<?= $baseUrl ?>public/video/Reportage Atelier de Mandres - La Rue.mp4" type="video/mp4">Sorry, your browser doesn't support embedded videos.</video>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/L_qUbpgeWiM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div>
<?php $div = ob_get_clean(); ?>  