<?php
    require "../controller/c_listmenu.php";
    // $p1 = $_GET['p'];
    // echo var_dump($p1);
    $cd = new listmenu();
    $file = $cd->redirect_menu();
    echo var_dump($file);
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ho so cua Quang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <script src="jquery.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <script type="text/javascript" src="./js/handle_header.js"></script>
    <script type="text/javascript" src="./js/handle_body.js"></script>
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
        <div id="wrapped">
            <!-- <embed pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> -->
        
            <!-- noi dung web, su dung ajax -->
        </div>
    </div>
</body>
</html>