<?php ob_start();?>
<div class="contentWithVMenu">
    <?php include "view/frontend/vmenu.php";?>
    <div id="targetContent" class="content">
        <div id="content" >
                <?= $div ?>
        </div>
    </div>
</div>
<?php $body = ob_get_clean(); ?>
