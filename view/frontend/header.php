<div class="header">
  <div id="idPopupVideo" class="Popup">
                  <div class = "buttonP">                        
                      <i class="fa-solid fa-x" onclick="Close('idPopupVideo','video')"></i>                     
                  </div>
                  <div class="animate formContent">
                      <div class="divImgPopup">
                        <video id="video" controls><source src="<?= $baseUrl ?>public/video/Reportage Atelier de Mandres - La Rue.mp4" type="video/mp4">Sorry, your browser doesn't support embedded videos.</video>
                      </div>                             
    </div> 
  </div>   
  <div class="ban">
  <a href="<?= $baseUrl ?>"><img src="<?= $baseUrl ?>public/images/personal5.jpg" alt=""></a>     
  </div>
  <div class="banWritte">
    <p class="collection">collection</p> 
    <p class="Catalogue">Catalogue <?php echo date("Y") ?></p>
  </div>
  <div class="lien">
    <a onclick="showPopup('idPopupVideo','video')">
      <span class="fa-stack fa-lg">
        <i class="far fa-circle fa-stack-2x"></i>
        <i class="fas fa-video fa-stack-1x"></i>
      </span> 
    </a>
    <a href="https://www.linkedin.com/in/pierre-wagner-432894b2/" target="_blank">
      <span class="fa-stack fa-lg">
        <i class="far fa-circle fa-stack-2x"></i>
        <i class="fa fa-brands fa-linkedin-in fa-stack-1x"></i>
      </span> 
    </a>
    <a href="https://instagram.com/atelierdemandres?utm_medium=copy_link" target="_blank">
      <span class="fa-stack fa-lg">
        <i class="far fa-circle fa-stack-2x"></i>
        <i class="fa fa-brands fa-instagram fa-stack-1x"></i>
      </span> 
    </a>
    <a href="" target="_blank">
      <span class="fa-stack fa-lg">
        <i class="far fa-circle fa-stack-2x"></i>
        <i class="fa fa-brands fa-facebook-f fa-stack-1x"></i>
      </span> 
    </a>
  </div>
</div>
<div id="targetMenueHorizontal">
  <div id="menueHorizontal">
    <?php menu("headMenu",$tMenu,$baseUrl,"H"); ?>
  </div>
</div>