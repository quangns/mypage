<div class="baoham">
<?php
    $ele_music = $menu->show_music($p);
    $row_music = $ele_music["music"];
    foreach($row_music as $row) {
?>
    <div class="list">
        <a href="index.php?p=<?=$p?>&idbai=<?=$row->id?>">
            <div class="showmusic showleft">
                <img src="<?=$row->urlHinh?>"/>
            </div>
            <div class="showmusic showright">
                <div><h4><?=$row->tieude?><h4></div>
            </div>
        </a> 
    </div> 
<?php
    }
?>


</div>