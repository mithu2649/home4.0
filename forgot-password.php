<?php
require_once "header.php"
?>

<div class="log-container">
    <div class="log-side-text">
        <h1>Secure Ho<i class="fa fa-home home-icon"></i>e 4.0</h1>
        <h2>" <span style="color: #0099ff"> Passwords </span> are like underwear : you don't let people see it, you should change it very often, and you shouldn't share it with strangers "</h2>
        <h3 style="float:right;margin-right:20px"><em>- <span style="color: #0099ff">C</span>hris Pirillo</em></h3>
    </div>
    <div class="log-form">
        <form method="" action="">
            <div class="img-profile log-img-profile" style="background-image: url(./img/user-img/guest2.png)"></div>
            <h1 style="margin:0"> <span style="color: #000">F</span>orgot Password </h1>

            <div style="margin: 20px 0px 30px">


                <div class="log-block">
                    <p> Username </p>
                    <div class="log-input-div"><i class="fa fa-user-o"></i><input class="log-input" type="text" name="Username"></div>
                </div>


                <div class="log-block" style="text-align:center">
                    <a href="#" style="color:#cdcdcd;"><strong><i class="fa fa-exclamation-triangle fa-2x inliner" style="color:#ffff00; margin:10px"></i><br><em>
                                Contact Adiministrator if you don't remember your Username or Email </em></strong></a>
                </div>
            </div>
            <button class="login-PageBtn" type="submit"><strong>OK</strong></button>
        </form>
    </div>
</div>



<style>


</style>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
            document.getElementById("eye").className = ("fa fa-eye")
        } else {
            x.type = "password";
            document.getElementById("eye").className = ("fa fa-eye-slash")
        }
    }

</script>
<?php
require_once "footer.php"
?>
