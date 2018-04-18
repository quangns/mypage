<?php
    include "../controller/c_listmenu.php";
    $menu = new listmenu();
    if (isset($_GET["p"])) {
        $p = $_GET["p"];
    }
    else {
        $p = "";
    }
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile of QuangNS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/music.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/experience.css" />
    <script src="../jquery.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <script type="text/javascript" src="../js/handle_header.js"></script>
    <script type="text/javascript" src="../js/handle_body.js"></script>
</head>
<body>
    <div id="content-page">
        <div id="menu">
            <?php
                require "menu.php";
            ?>
            <ul class="list-menu list-right">
                <div class="muc btn-modal-signin" id="btnSignin"><li>Sign in</li></div>
                <div class="muc btn-modal-signup" id="btnSignup"><li>Sign up</li></div>
                <?php
                    require "sign.php";
                ?>
            </ul>
        </div>
        <div id="wrapper">
            <!-- <embed src="files/CVofQuang.pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> -->
            <?php
                $str = $menu->redirect_menu();
                // // echo var_dump($_GET);
                // // echo var_dump($str);
                require $str;
            ?>
            <!-- noi dung web, su dung ajax -->
        </div>
    </div>
</body>
</html>