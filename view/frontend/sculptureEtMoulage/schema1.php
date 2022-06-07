<?php ob_start(); ?>
<script id="setArrImg">setArrayImg(<?php echo json_encode($images) ?>)</script>
    <div class="block takeSpace">
        <div class="title scluptMoulage sticky">
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
                    $compteur = 0;
                    $compteur2 = 0;
                    $compteur3= 0;
                    foreach ($images as $index => $image){
                        // $url = $baseUrl."public/".$image["folder"];
                        $borderRight = "borderRight";
                        if ($compteur%7 == 0){
                ?> 
                <tr <?= "id=row".$compteur3++ ?>> 
                <?php
                        $compteur=1;
                        }
                        if ($compteur%6 == 0){
                            $borderRight = "";
                        }
                ?>
                <td class="articles  <?php echo $borderRight ?>">
                    <img <?= "id=image".$compteur2++ ?>  src="<?php echo $baseUrl."public/".$image["folder"].$image["nomFichier"]?>" class="photo" onclick=showPopup(<?php echo "'idPopup','".$index."'" ?>)>
                </td>
                <?php
                        $compteur++;        
                    } 
                ?>
            </table>
            <script defer>randomRow(<?= $compteur3-1 ?>,<?= "image".($compteur2-1) ?>)</script>
        </div>
    </div>
<?php $div = ob_get_clean(); ?>
