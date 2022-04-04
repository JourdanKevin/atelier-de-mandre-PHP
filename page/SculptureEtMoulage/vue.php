<?php $ConstructPage->createMenu($tMenue); ?>
</header>
<div class="flex">
    <div class="block divCompVertMenu">
        <img width="100%" src="../../img/logo-sema.svg" alt=" img not found">
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
                <div class = "buttonP">                        
                    <i class="fa-solid fa-x" onclick="Close()"></i>                     
                </div>
                <div class="animate formContent">
                <i id="prev" class="fa fa-angle-left"></i>
                    <div class="divImgPopup">
                        <img id="idImgPopup"  class="imgPopup" src="" alt="">
                    </div>
                <i id="next" class="fa fa-angle-right"></i>                
                    
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
