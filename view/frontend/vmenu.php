<div id="vMenue" class="divCompVertMenu">
    <img width="100%" src="<?= $baseUrl ?>public/images/logo-sema.jpg" alt=" img not found">
    <div class="subtilte">
        <p><?= $vTitle ?></p>
    </div>
    <div class="divVertMenu">      
        <?php menu("vMenu",$vMenu, $baseUrl.$firsturl."/","V");?>
    </div>
</div>