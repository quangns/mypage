<?php
include "../model/Get_info.php";

class listmenu {
    private $list;

    function __construct() {
        $this->list = new list_danhmuc();
    }

    function get_menu() {
        $menu = new list_danhmuc();
        $row_menu = $menu->lay_danhmuc();
        return array("row_menu"=>$row_menu);
    }

    function redirect_menu() {
        $p = $_GET['p'];
        switch($p) {
            case "4":
                return "sach.php";
            case "2":
                return "kinhnghiem.php";
            case "3":
                return "nhac.php";
            case "5":
                return "lienhe.php";
            default : 
                return "hoso.php";
        }
    }

    function show_music($iddanhmuc) {
        $music = $this->list->sothich($iddanhmuc);
        return array("music"=>$music);
    }

    function show_exp() {
        $exp = $this->list->kinhnghiem();
        return array("exp"=>$exp);
    }
}
?>