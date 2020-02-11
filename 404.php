<?php
require_once "header.php";
?>

<div class="error-container">
    <h1>4<i class="fa fa-home" style="color: #0099ff;margin:0;"></i>4</h1>
    <h2><big style="color: #0099ff;font-size:35px;">O</big>oops ! Something went wrong. <br>
        We looked eveywhere but it seems like YOU are lost. <br>
        Try going to the previous pages or see our <a href="help.php" style="color:#0099ff">help</a> page.</h2><a class="links" href="index.php" style="padding:10px 20px;margin:20px;float:right;font-size:20px;border-radius:30px; border:1.5px solid #0099ff"> HO<i class="fa fa-home" style="color: #0099ff;margin:0;"></i>E 4.0 </a>
</div>
<div class="cr">
    &copy; HO<i class="fa fa-home" style="color: #0099ff;margin:0;"></i>E 4.0
</div>

<style>
    .error-container {
        text-align: center;
        margin: 0 auto;
        width: 70%;
    }

    .error-container>h1 {
        margin-bottom: 0;
        color: #0099ff;
        font-size: 10em;
    }

    .cr {
        padding: 10px 0px;
        position: absolute;
        bottom: 0;
        text-align: center;
        width: 100%;
        background: #fff;
        font-size: 18px;
        box-shadow: 0px 0px 5px rgba(225, 225, 225, 0.65),
            0px 0px 5px rgba(60, 60, 60, 0.12),
            0px 0px 15px rgba(70, 70, 70, 0.20);
    }

    @media screen and (max-width:900px) {
        .error-container {
            text-align: center;
            margin: 0px auto 150px;
            width: 85%;
        }

        .error-container>h1 {
            margin-bottom: 0px;
            color: #0099ff;
            font-size: 8em;
        }

        .error-container>h2 {
            margin-top: 0px;
        }

        @media screen and (max-width:800px) {
            .error-container {
                text-align: center;
                margin: 100px auto;
                width: 85%;
            }

            .error-container>h1 {
                margin-bottom: 0;
                color: #0099ff;
                font-size: 9em;
            }
        }

</style>
<?php
require_once "footer.php";
?>
