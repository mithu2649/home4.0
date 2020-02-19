<?php
require_once "header.php"
?>

<div class="spaceEater"></div>
<div class="setting-container">
    <div class="setting-content inliner" id="con">

        <h1>
            <span style="color:#0099ff;margin:0;" id="F-letter">P</span><span id="home-logo" style="display:none;">HO<i class="fa fa-home" style="color: #0099ff;margin:0;font-size:35px"></i>E 4.0</span><span id="O-letters">rofile Settings</span>
        </h1>
        <div class="setting-bar inliner">

            <a href="#">
                <div class="set-small-icons" style="background:#fff;padding:10px 5px;" onclick="changetoP()" title="Profile Settings" id="P-color">
                    <div class="Activity-Profile-img"></div>
                </div>
            </a>

            <a href="#">
                <div class="set-small-icons" onclick="changetoA()" title="Users Activities" id="A-color"><i class="fas fa-tasks"></i></div>
            </a>

            <a href="Users.php">
                <div class="set-small-icons" title="Users"><i class="fas fa-users"></i></div>
            </a>

            <a href="#">
                <div class="set-small-icons" onclick="changetoH()" title="Home 4.0 Settings" id="H-color"><i class="fas fa-cogs"></i></div>
            </a>

        </div>

        <form class="settings-form inliner" autocomplete="off" id="Profile-set">
            <div class="settings-block">
                <div class="settings-text"> Username </div>
                <div class="input-div"><i class="fa fa-user-o"></i><input class="setting-input" type="text" name="Username" value="Debjeet Das" disabled></div>
            </div>

            <div class="settings-block">
                <div class="settings-text"> Email </div>
                <div class="input-div"><i class="fa fa-envelope-o"></i><input class="setting-input" type="text" name="Useremail" value="debjeet194@gmail.com" required></div>
            </div>

            <div class="settings-block">
                <div class="settings-text"> Password </div>
                <div class="input-div"><i class="fa fa-key"></i><input class="setting-input" type="password" name="Userpassword" id="myInput" required value="bantosandbantus"><i class="fa fa-eye-slash" hidden="true" onclick="myFunction()" id="eye"></i> </div>
            </div>

            <center>
                <button class="btn-settings" type="reset"><strong>Clear</strong></button>
                <button class="btn-settings" type="submit"><strong>Change</strong></button>
            </center>

        </form>

        <!-- Activites div -->
        <div style="display:none" id="Activities-set">
            <div class="inliner" style="margin-right:70px;">
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image: url(./img/user-img/abh.jpg);"></div>
                    <div class="inliner">Abhishek Pandey <sup style="color:#0099ff">Online</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner"></div>
                    <div class="inliner">Debjeet Das <sup style="color:#0099ff">Online</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/rahul.jpg')"></div>
                    <div class="inliner">Rahul Mondol <sup>10 m</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/anu3.jpg')"></div>
                    <div class="inliner">Anushka Karn <sup>1 hrs</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/shu.jpg')"></div>
                    <div class="inliner"> Shubhajit Adhikary <sup style="color:#0099ff">Online</sup></div>
                </div>
            </div>
            <div class="inliner">
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image: url(./img/user-img/k2.jpg);"></div>
                    <div class="inliner">Koyel Pramanick <sup>1 day</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image: url(./img/user-img/souvik.jpg);"></div>
                    <div class="inliner">Souvik Das <sup style="color:#0099ff">Online</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/piu3.jpg')"></div>
                    <div class="inliner">Piu Maji <sup>30 m</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/guest1.png')"></div>
                    <div class="inliner">Guest 1 <sup style="color:#0099ff">Online</sup></div>
                </div>
                <div>
                    <div class="Activity-Profile-img inliner" style="background-image:url('./img/user-img/guest2.png')"></div>
                    <div class="inliner">Guest 2 <sup>6 hrs</sup></div>
                </div>
            </div>
            <div>
                <a class="links" style="display:block;width:100px;font-size: 20px;background: transparent;text-align: center;padding:5px 25px;margin: 3px auto; border-radius: 30px;transition: 0.3s;border: 1px solid #000;"> More </a>
            </div>
        </div>


        <!-- HOME 4.0 Settings div -->
        <div style="display:none;width: 95%;" id="Home4.0-set">
            <div>
                <h2> Dark mode
                    <div class="toggle-div-container" onclick="toggle()" value="off" id="btn" style="display: inline-block; vertical-align: middle; margin: 10px 50px; float:right">
                        <div class="circle" id="move"></div>
                    </div>
                </h2>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>



        </div>

    </div>
</div>


<style>
    .setting-container {
        width: 60%;

        margin: 75px auto;
        margin-left: 250px;


    }

    /*------------------------------------------ Setting side bar */
    .setting-bar {
        position: absolute;
        top: 30px;
        left: -41px;

        font-size: 30px;

        background: #0099ff;
        color: #fff;
        width: 80px;
        height: 85%;


        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            3px 4px 15px rgba(60, 60, 60, 0.35);

    }

    .Activity-Profile-img {
        width: 50px;
        height: 50px;
        margin: 10px;

        background: #cccccc40;
        background-image: url(./img/user-img/debjeet.jpg);
        background-size: cover;

        border: 0px solid #f00;
        border-radius: 30px;

    }


    .set-small-icons {
        margin: 20px auto;
        padding: 20px;

        text-align: center;
    }

    .set-small-icons:hover {
        background: rgba(255, 255, 255, 0.4);
    }

    /*------------------------------------------ Setting Contents */
    .setting-content {
        position: relative;
        padding: 50px 0 100px 80px;

        width: 100%;


        box-shadow: 0px 0px 15px rgba(225, 225, 225, 0.65),
            0px 0px 20px rgba(70, 70, 70, 0.12);
    }

    .settings-form {
        width: 95%;
    }

    .setting-content>h1 {
        text-align: left;
        margin: 0 0 20px;
    }

    .settings-block {
        margin: 20px 0px;
    }

    .settings-text {
        font-size: 20px;
        margin: 0 0 10px
    }

    .setting-input {
        background: transparent;
        font-family: 'Quicksand', sans-serif;
        outline: none;
        width: 85%;
        height: 30px;
        font-size: 16px;
        margin: 5px 10px;

        border: none;
        color: #000;

    }

    .input-div {
        padding: 0 15px;
        border-bottom: 2px solid #fff;

    }

    .input-div:focus-within {
        transition: 800ms ease-in-out;
        border-bottom: 2px solid #0099ff;
    }

    .btn-settings {
        font-size: 20px;
        background: transparent;
        text-align: center;

        padding: 10px 50px;
        margin: 15px;
        width: 180px;
        color: #0099ff;

        border-radius: 30px;
        transition: 0.3s;
        border: 1px solid #000;


    }

    .btn-settings:hover {
        border: 1px solid transparent;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            5px 5px 15px rgba(70, 70, 70, 0.2);
    }

    @media screen and (min-width:801px) and (max-width:900px) {

        /* mobile Landscape */
        .setting-container {
            margin-top: 100px;
            width: 75%;
            margin-left: 40px;
        }
    }


    /*-----------------       mobile portrait Setting php */
    @media screen and (max-width:800px) {

        .setting-container {
            margin-top: 100px;
            width: 75%;
            margin-left: 40px;
        }

        .setting-bar {
            top: -25px;
            left: -41px;

            width: 65px;
            height: 105%;
            padding: 15px 0px;

            font-size: 25px;
        }

        .Admin-Profile-img {
            width: 40px;
            height: 40px;
            margin: 10px 15px 10px 8px;
        }

        .set-small-icons {
            margin: 40px auto;
            padding: 15px 10px;
        }

        .setting-content {
            position: relative;
            padding: 50px 0px 50px 45px;
        }

        .setting-input {
            width: 75%;
        }

        .btn-settings {
            font-size: 18px;
            margin-top: 15px;
            padding: 5px 10px;
            width: 100px;
        }
    }


    div.switch {
        width: 100px;
        height: 40px;
        background: #BBBBBB;
        border-radius: 25px;
        padding: 5px;
    }

    div.slider {
        width: 40px;
        height: 40px;
        background: #FFFFFF;
        border-radius: 25px;
        margin-left: 0px;
        box-shadow: 0px 0px 5px #000000;
    }

    .status {
        font-size: 1em !important;
        font-family: Calibri !important;
        padding: 12px 5px;
        text-align: center;
    }





    /*-----------------------------------------------------*/



    .toggle-div-container {
        position: relative;

        background: #ccc;
        width: 70px;
        height: 25px;

        border-radius: 20px;
    }

    .circle {
        position: absolute;
        top: -5px;
        margin-left: -5px;


        background: #fff;
        width: 35px;
        height: 35px;
        border-radius: 20px;

        box-shadow: 5px 5px 5px rgba(225, 225, 225, 0.65),
            0px 0px 5px rgba(60, 60, 60, 0.1),
            4px 2px 15px rgba(0, 0, 0, 0.20);
    }

</style>



<script>
    //Chage to profile settings [toggle]
    function changetoP() {
        document.getElementById("Profile-set").style.display = "inline-block";
        document.getElementById("Activities-set").style.display = "none";
        document.getElementById("Home4.0-set").style.display = "none";

        document.getElementById("P-color").style.backgroundColor = "#fff";
        document.getElementById("A-color").style.color = "#fff";
        document.getElementById("H-color").style.color = "#fff";
        document.getElementById("A-color").style.backgroundColor = "transparent";
        document.getElementById("H-color").style.backgroundColor = "transparent";

        document.getElementById("F-letter").innerHTML = "P";
        document.getElementById("home-logo").style.display = "none";
        document.getElementById("O-letters").innerHTML = "rofile Settings";
    }

    //Chage to activity settings [toggle]
    function changetoA() {
        document.getElementById("Profile-set").style.display = "none";
        document.getElementById("Activities-set").style.display = "inline-block";
        document.getElementById("Home4.0-set").style.display = "none";

        document.getElementById("A-color").style.backgroundColor = "#fff";
        document.getElementById("A-color").style.color = "#000";
        document.getElementById("H-color").style.color = "#fff";
        document.getElementById("P-color").style.backgroundColor = "transparent";
        document.getElementById("H-color").style.backgroundColor = "transparent";

        document.getElementById("F-letter").innerHTML = "U";
        document.getElementById("home-logo").style.display = "none";
        document.getElementById("O-letters").innerHTML = "sers Activities";
    }

    //Chage to HOME4.0 settings [toggle]
    function changetoH() {
        document.getElementById("Profile-set").style.display = "none";
        document.getElementById("Activities-set").style.display = "none";
        document.getElementById("Home4.0-set").style.display = "inline-block";

        document.getElementById("H-color").style.backgroundColor = "#fff";
        document.getElementById("H-color").style.color = "#000";
        document.getElementById("A-color").style.backgroundColor = "transparent";
        document.getElementById("P-color").style.backgroundColor = "transparent";

        document.getElementById("F-letter").innerHTML = "";
        document.getElementById("home-logo").style.display = "inline";
        document.getElementById("O-letters").innerHTML = " Settings";
    }


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

<script>
    function toggle() {
        var status = document.getElementById("btn").value;
        if (status == "off") {
            document.getElementById("btn").value = "on"; //Reset
            document.getElementById("btn").style.backgroundColor = "#0072a9";

            document.getElementById("move").style.marginLeft = "45px";
            document.getElementById("move").style.backgroundColor = "#0099ff";
            document.getElementById("move").style.transition = "ease .2s";
            document.getElementById("move").style.boxShadow = "0px 0px 0px transparent";


            document.getElementById("con").style.backgroundColor = "#232529";
            document.getElementById("con").style.color = "#fff";


        } else {
            document.getElementById("btn").value = "off";
            document.getElementById("btn").style.backgroundColor = "#ccc";

            document.getElementById("move").style.marginLeft = "-5px";
            document.getElementById("move").style.backgroundColor = "#fff";
            document.getElementById("move").style.transition = "ease .2s";
            document.getElementById("move").style.boxShadow = "5px 5px 5px rgba(225, 225, 225, 0.65),0px 0px 5px rgba(60, 60, 60, 0.1),4px 2px 15px rgba(0, 0, 0, 0.20)";

            document.getElementById("con").style.backgroundColor = "#fff";
            document.getElementById("con").style.color = "#000";


        }
    }

</script>
