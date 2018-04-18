<?php
    
    $row_menu = $menu->get_menu();
    $submenu = $row_menu['row_menu'];
    // print_r($submenu);
?>
<ul class="list-menu list-left">
    <?php
        foreach($submenu as $row) {
    ?>
            <a class="menu_element" href="index.php?p=<?=$row->id?>"><div class="muc" id="<?=$row->id?>"><li><?=$row->tenmuc?></li></div></a>
    <?php
        }
    ?>
</ul>
