<?php
require_once "header.php"
?>

<div class="log-container">
    <div class="log-side-text">
        <h1>Welcome to Ho<i class="fa fa-home home-icon"></i>e 4.0</h1>
        <h2> " The Next Gen <br>
            Futuristic Home is Here with <span style="color: #0099ff">YOU</span> "</h2>
    </div>
    <div class="log-form">
        <form method="post" action="">
            <div class="img-profile log-img-profile" style="background-image: url(./img/user-img/debjeet.jpg)"></div>
            <h1 style="margin:0"> <span style="color: #000">U</span>ser Login </h1>

            <div style="margin: 20px 0px 30px">


                <div class="log-block">
                    <p> Username </p>
                    <div class="log-input-div"><i class="fa fa-user-o"></i><input class="log-input" type="text" name="username" required /></div>
                </div>


                <div class="log-block">
                    <p> Password </p>
                    <div class="log-input-div"><i class="fa fa-key"></i><input class="log-input" type="password" name="userpassword" id="myInput" required /><i class="fa fa-eye-slash" hidden="true" onclick="myFunction()" id="eye"></i> </div>
                </div>
            </div>
            <p><a href="forgot-password.php" style="color:#000"><strong> Forgot Password ? </strong></a></p>
            <button class="login-PageBtn" type="submit" name="login"><strong>OK</strong></button>
            <p>Don't have a account?<a href="https://www.google.com/" style="color:#000"><strong> Guest </strong></a>.</p>
        </form>
    </div>
</div>
<?php
if(isset($user)){
    header('location: switches');
}
if(isset($_POST['username'])){
    include "sdk/set-login.php";
    $username = $_POST['username'];
    $password = hash('sha1',"vErNuRaBlEeNcRyPtIoNbYtEaMhoMeFoUrPoInT0".$_POST['userpassword']);
    $log = new login;
    $log->newlogin($username, $password);
    header('location: switches');
}
?>





<?php
require_once "footer.php"
?>

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