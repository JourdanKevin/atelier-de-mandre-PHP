<?php ob_start();?>
<div class="contentWithVMenu">
    <?php include "view/frontend/vmenu.php";?>
        <?= $div ?>      
</div>
<?php $body = ob_get_clean(); ?>
