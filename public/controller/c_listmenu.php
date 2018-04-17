<?php
include "../model/Get_info.php";

class listmenu {
    function get_menu() {
        $menu = new list_danhmuc();
        $row_menu = $menu->lay_danhmuc();
        return array("row_menu"=>$row_menu);
    }

    function redirect_menu() {
        $url = $_GET['url'];
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        echo var_dump($query['p']);
        // echo var_dump($p);
        switch($p) {
            case 4:
                return "book.php";
            case 2:
                return "experience.php";
            case 3:
                return "nhac.php";
            case 5:
                return "contacts.php";
            default : 
                return "hoso.php";
        }
    }
}
?>