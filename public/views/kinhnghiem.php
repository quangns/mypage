<div class="exp">
<?php
    $ele_exp = $menu->show_exp();
    $row_exp = $ele_exp['exp'];   
?>
    <div class="exp exp-left">
        <h3>Lập trình</h3>
        <?php
            foreach($row_exp as $row) {
        ?>
        <pre><a class="exp_route" href="<?=$row->duongdan?>"><?=$row->laptrinh?></a></pre>
        <?php
            }
        ?>
    </div>
    <div class="exp exp-right" id="test1">
    </div>
</div>