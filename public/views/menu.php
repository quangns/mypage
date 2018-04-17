<link rel="stylesheet" type="text/css" media="screen" href="../css/menu.css" />
<?php
    
    $menu = new listmenu();
    $row_menu = $menu->get_menu();

    $submenu = $row_menu['row_menu'];
    // print_r($submenu);
?>
<ul class="list-menu list-left">
    <?php
        foreach($submenu as $row) {
    ?>
            <a class="menu_element" href="index.php"><div class="muc" id="<?=$row->idmenu?>"><li><?=$row->tenmuc?></li></div></a>
    <?php
        }
    ?>
</ul>
