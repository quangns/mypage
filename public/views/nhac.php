<?php
function redirect_menu() {
        $p = $_GET['p'];
        switch($p) {
            case "book":
                return "book.php";
            case "experience":
                return "experience.php";
            case "nhac":
                return "nhac.php";
            default : 
                return "hoso.php";
        }
    }
?>