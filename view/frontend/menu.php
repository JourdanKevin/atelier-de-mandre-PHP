<?php function menu($clMenu,$tMenu,$baseUrl,$typeMenu){ ?>
    <nav class="<?= $clMenu ?>">
        <ul>
            <?php foreach ($tMenu as $item => $val){ ?>
                <li>
                    <a id="<?= $item.$typeMenu ?>" class="nav-link<?= $typeMenu ?> <?= $active = $val["active"] ? "active" : "" ?>" href="<?= $baseUrl.$item ?>"><?= $val["value"] ?></a>
                </li>    
            <?php } ?>
        </ul>
    </nav>
<?php } ?>