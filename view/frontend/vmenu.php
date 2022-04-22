<div id="vMenue" class="divCompVertMenu">
    <img width="100%" src="<?= $baseUrl ?>public/images/logo-sema.jpg" alt=" img not found">
    <p><?= $vTitle ?></p>
    <div class="divVertMenu">      
        <?php menu("vMenu",$vMenu, $baseUrl.$firsturl."/","V");?>
    </div>
</div>