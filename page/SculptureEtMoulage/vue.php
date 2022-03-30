<?php $ConstructPage->createMenu($tMenue); ?>
</header>
<div class="flex">
    <div class="block divCompVertMenu">
        <img width="100%" src="../../img/logo-sema.jpg" alt=" img not found">
        <p>Sculptures et Moulages : </p>
        <div class="divVertMenu">      
            <?php $ConstructPage->createMenu($verticalMenue);?>
        </div>
    </div>
    <div class="block takeSpace">
        <div class="title">
            <img class="takeSpace" src="../../img/titre.png">
        </div>
        <div>
            <div id="idPopup" class="Popup">
                <div class="animate formContent">
                    <div class="divImgPopup">
                        <img id="idImgPopup"  class="imgPopup" src="" alt="">
                    </div>
                    <div class = "buttonP">
                        <button id="prev"><</button>
                        <button onclick="Close()">fermer</button>
                        <button id="next">></button>
                    </div>
                    
                </div>    
            </div>
            <table class="listeImg">
                <?php
                    $compteur = 1;
                    foreach ($images as $index => $image){
                        // echo $index;
                        $url = '../../'.$image["folder"];
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
                    <img src="<?php echo $url.$image["nomFichier"]?>" class="photo" onclick=showPopup(<?php echo "'".$index."'" ?>)>
                </td>
                <?php
                        $compteur++;            
                    } 
                ?>
            </table>
        </div>
    </div>
</div>
