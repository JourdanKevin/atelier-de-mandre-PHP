<?php
class ConstructPage {
    
    private $current = "";

    function __construct($current = "", $doctype = true,$title = "document") {
        $this->current = $current;
        if ($doctype){ ?>
            <!DOCTYPE html>
                <html lang="fr">
                    <head>
                        <title><?php echo $title ?></title>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php }
    }

    function createMenu($tMenu) { ?>
        <nav>
            <ul>
            <?php
            foreach ($tMenu as $item => $val){
                $active = "";
                if ($val == "current"){
                    $active = "active";
                    $val = "";
                } ?>
                <li class=<?php echo $active ?>>
                    <a href=<?php echo $val ?>><?php echo $item ?></a>
                </li>
            
            <?php } ?>
            </ul>
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