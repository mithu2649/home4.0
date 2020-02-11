<?php
$page = ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));
?>
<!DOCTYPE html>
<html>

<head>
    <title> HOME 4.0 | <?php if($page == "Index"){echo "Home";}else{echo ucwords(str_replace("-", " ", $page));} ?> </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />


    <!--fontawsome styles -->
    <script src="https://kit.fontawesome.com/76c40a5f57.js" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">


    <link rel="icon" href="./img/Home 4.0.png">
    <link rel="stylesheet" href="css/style.css?ver=1.5" type="text/css" />
    <link rel="stylesheet" href="css/main.css?ver=1.5" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />


</head>

<body>
    <div class="navbar">

        <a href="/">
            <div class="logo inliner"> HO<i class="fa fa-home" style="color:#0099ff; margin:0; padding:0;"></i>E 4.0</div>
        </a>


        <table border="1" class="toggleAdjust inliner onlyphone">
            <tr>
                <td></td>
                <td>
                    <span class="menuToggle onlyphone" stat="1">
                        <i class="fas fa-sort-down fa-1g" style="margin:0"></i>
                    </span>
                </td>
                <td></td>
            </tr>
        </table>

        <div class="navBtn inliner">

            <a <?php if($page == "Switches"){echo 'class="active"';}else{echo ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));} ?> href="switches"><span>S</span>witches</a>

            <a <?php if($page == "Plans"){echo 'class="active"';}else{echo ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF']))); } ?> href="plans"><span>P</span>lans</a>

            <a <?php if($page == "Chat"){echo 'class="active"';}else{echo ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));} ?> href="chat"><span>C</span>hat</a>

            <a <?php if($page == "Settings"){echo 'class="active"';}else{echo ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));} ?> href="user-settings"><span>S</span>ettings</a>

            <a <?php if($page == "Developers"){echo 'class="active"';}else{echo ucwords(str_replace(".php", "", basename($_SERVER['PHP_SELF'])));} ?> id="noborder" href="developers"><span>D</span>evelopers <span><i class="fas fa-code" style="font-size:15px;color:#0099ff"></i></span></a>
            <!-- <a class="links" href="plans.php">About</a>-->

        </div>
        <a class="inliner" href="help.php" style="float:right; margin: 12px 12px 0 25px;color:#0099ff;"><i class="far fa-question-circle"></i></a>
        <div class="logBtn inliner"><a class="links" href="login" style="padding: 3px 10px 4px;">Login</a></div>


    </div>
    <div class="spaceEater"></div>
