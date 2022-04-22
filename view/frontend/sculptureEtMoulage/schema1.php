<?php ob_start(); ?>
<script id="setArrImg">setArrayImg(<?php echo json_encode($images) ?>)</script>
    <div class="block takeSpace">
        <div class="title scluptMoulage">
            <img class="takeSpace" src="<?= $baseUrl ?>public/images/titre.png">
        </div>
        <div>
            <div id="idPopup" class="Popup">
                <div class = "buttonP">                        
                    <i class="fa-solid fa-x" onclick="Close('idPopup')"></i>                     
                </div>
                <div class="animate formContent">
                <i id="prev" class="fa fa-angle-left"></i>
                    <div class="divImgPopup">
                        <img id="idImgPopup"  class="imgPopup" src="" alt="">
                    </div>
                <i id="next" class="fa fa-angle-right"></i>          
                </div>  
                <div class="popupWritte">
                    <p><span id="writteIndex"></span> / <?= count($images) ?></p>
                </div>  
            </div>
            <table class="listeImg">
                <?php
                    $compteur = 1;
                    foreach ($images as $index => $image){
                        // $url = $baseUrl."public/".$image["folder"];
                        $borderRight = "borderRight";
                        if ($compteur%7 == 0){
                ?> 
                <tr> 
                <?php
                        $compteur=1;
                        }
                        if ($compteur%6 == 0){
                            $borderRight = "";
                        }
                ?>
                <td class="articles  <?php echo $borderRight ?>">
                    <img src="<?php echo $baseUrl."public/".$image["folder"].$image["nomFichier"]?>" class="photo" onclick=showPopup(<?php echo "'idPopup','".$index."'" ?>)>
                </td>
                <?php
                        $compteur++;            
                    } 
                ?>
            </table>
        </div>
    </div>
<?php $div = ob_get_clean(); ?>
