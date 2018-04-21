<div class="playmusic">
<iframe frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="baoham">
<?php
    $ele_music = $menu->show_music($p);
    $row_music = $ele_music["music"];
    foreach($row_music as $row) {
?>
    <div class="over_listmusic">
        <div class="list">
            <div class="showmusic showleft">
                <img src="<?=$row->urlHinh?>"/>
            </div>
            <div class="showmusic showright">
                <div><h4><?=$row->tieude?><h4></div>
            </div>
        </div> 
        <div class="href_music" url="<?=$row->duongdan?>"><a href="index.php?p=<?=$p?>&idbai=<?=$row->id?>">
        </a></div>
    </div>
<?php
    }
?>
</div>