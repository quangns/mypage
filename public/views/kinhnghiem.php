<div class="exp">
<?php
    $ele_exp = $menu->show_exp();
    $row_exp = $ele_exp['exp'];   
?>
    <div class="exp exp-left">
        <h1 style="font-family: serif;">Lập trình</h1>
        <?php
            foreach($row_exp as $row) {
        ?>
            <div class="exp_route" url="<?=$row->duongdan?>" urlHinh="<?=$row->urlHinh?>"><p><?=$row->laptrinh?></p></div>
        <?php
            }
        ?>
    </div>
    <div class="exp exp-right">
            <a id="href_exp" href=""><h1 id="title_exp"></h1></a>
            <div id="body_exp"></div>
            <embed src="" type='application/pdf'>
 
    </div>
</div>