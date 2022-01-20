<?php
class ConstructPage {
    
    private $current = "";

    function __construct($current = "", $notdoctype = true, $colorBody = "",$title = "document") {
        $this->current = $current;
        if ($notdoctype) 
            echo ('<link href="'.$current.'commun/prebuild/boots/bootstrap.css" rel="stylesheet">');
       else{
            echo '<!DOCTYPE html>';
            echo '<html lang="fr">';
            echo '<head>';
            echo '<title>'.$title.'</title>';
            echo '    <meta charset="UTF-8">';
            echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<link href="'.$current.'commun/prebuild/boots/bootstrap.css" rel="stylesheet">';
            if($colorBody == "dark")
                echo '<link href="'.$current.'commun/prebuild/boots/styleMaj.css" rel="stylesheet">';
            echo '    <script src="'.$current.'commun/function/js/jquery.min.js"></script>';
            echo '</head>';
            echo '<body>';
        }
    }

    function createMenu($tMenu,$theme = "dark") {
        echo ('<nav class="navbar navbar-expand-lg navbar-'.$theme.' bg-'.$theme.'">');
        ?>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <?php
            foreach ($tMenu as $item => $val){
                $active = "";
                if ($val == "current"){
                    $active = "active";
                    $val = "";
                }
               echo ('<li class="nav-item '.$active.'">');
                echo ('<a class="nav-link" href="'.$val.'">'.$item.'</a>');
               echo ('</li>');
               
            }
            ?>
            </ul>
        </div>      
        </nav>
    <?php
    }
    function createVerticalMenu($tMenu,$width = "100%"){
        ?>
        <div class="vertical-menu">
            <?php
            foreach ($tMenu as $item => $val){
                $active = "";
                if ($val == "current"){
                    $active = "active";
                    $val = "";
                }
                echo ('<a width="100%" class="nav-link" href="'.$val.'">'.$item.'</a>');
               
            }
            ?>
            </ul>
        </div>      
        </nav>
    <?php
    }

    function createIdentification($popup = false, $namediv = "login", $noAnimation = false){
        $folder = "commun/preBuild/view/identificationBuild/";        
        echo '<link href="'.$this->current.$folder.'css/style.css" rel="stylesheet">';
        echo '<script src="'.$this->current.$folder.'js/js.js"></script>';
        include $this->current.$folder.'identificationBuild.php';        
        echo '<script> giveImg("'.$this->current.'commun/preBuild/img/usericon.png"); </script>';
        echo '<script> setPopup('.json_encode($popup).'); </script>';
        echo '<script> setAnimation('.json_encode($noAnimation).'); </script>';
        if (!$popup)
            echo '<script> show("'.$namediv.'",'.json_encode($popup).'); </script>';
    }
}   

?>