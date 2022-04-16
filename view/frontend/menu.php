<?php function menu($clMenu,$tMenu,$baseUrl){ ?>
    <nav class="<?= $clMenu ?>">
        <ul>
            <?php foreach ($tMenu as $item => $val){ ?>
                <li>
                    <a class="<?= $active = count($val) > 1 ? "active" : "" ?>" href="<?= $baseUrl.$item ?>"><?= $val[0] ?></a>
                </li>    
            <?php } ?>
        </ul>
    </nav>
<?php } ?>