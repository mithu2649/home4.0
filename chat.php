<?php
require_once "header.php";
?>

<div class="chat-container">
    <!--<div class="user-profile " style="">
        <div class="img-profile log-img-profile" style="background-image: url(./img/user-img/debjeet.jpg);"></div>
        <div>
            <h2>Debjeet Das</h2>
        </div>
        <div style="text-align:left; padding:150px 50px 20px">

            <h3><i class="far fa-question-circle"></i> Help</h3>
            <h3><i class="fas fa-sign-out-alt"></i> Logout</h3>
            <h3><i class="fas fa-balance-scale"></i> Terms and Policies</h3>

        </div>
    </div>-->

    <div class="user-title">
        <div class="user-img inliner"></div>
        <div class="user-text inliner">Debjeet <sup style="color:#0099ff">Online</sup></div>
    </div>
    <div style="height: 75px;"></div>
    <div class="chat-box">

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            No, not like that <br>
            but its nothing less than serious
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Then what......
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Just asking about our project Ho<i class="fa fa-home"></i>e 4.0
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah, I'm working on it don't worry.
        </div>
        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>

        <div class="sender-chat-div">
            <div class="sender-img"></div>
            Hey ! What are you doing <br>
            have some time in hand
        </div>

        <div class="reciver-chat-div">
            <div class="reciver-img"></div>
            Yeah ! <br>
            but why anything serious
        </div>
        <br><br><br><br><br>
    </div>


    <div class="chat-input-box" style="vertical-align:bottom;">

        <div class="chat-input-bar inliner" contenteditable="true"></div>
        <button class="chat-send-button inliner" type="submit"><i class="far fa-paper-plane" style="color:#0099ff"></i></button>

    </div>


</div>


<style>
    body {
        overflow: hidden;
    }

    .chat-container {
        margin: 0px auto;
        padding: 0;
        width: 70%;
        height: 93vh;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            7px 7px 20px rgba(70, 70, 70, 0.2);
    }

    .user-profile {
        display: inline-block;
        background: #f0ffff;
        color: #fff;

        padding: 0;
        text-align: center;
        width: 300px;
        height: 100%;
    }

    /********************************************************** Middle Chat Box */
    .chat-box {
        display: inline-block;
        width: 100%;
        height: 78vh;
        margin: auto;
        padding-top: 20px;

        overflow-y: auto;
        overflow-x: hidden;
    }

    .user-title {
        width: 70%;
        position: absolute;
        background: #fff;
        border-bottom: 0.5px solid #0099ff;
    }

    .user-img {

        width: 50px;
        height: 50px;
        margin: 10px;
        background: #cccccc40;
        background-image: url(img/user-img/debjeet.jpg);
        background-size: cover;
        border: 2px solid #0099ff;
        border-radius: 30px;
    }

    .user-text {
        text-align: center;
    }


    .sender-chat-div {
        position: relative;
        left: 4%;
        width: 30%;
        max-width: 50%;

        margin: 10px 0;
        padding: 15px 40px;

        background: #75dbf291;
        border-radius: 0px 50px 50px 50px;

    }

    .sender-img {
        position: absolute;
        top: -20px;
        left: -20px;
        width: 35px;
        height: 35px;

        border: 5px solid #fff;
        border-radius: 50px;

        background: #fff;
        background-image: url(img/user-img/abh.jpg);
        background-position: center;
        background-size: cover;
    }


    .reciver-chat-div {
        position: relative;
        left: 58%;
        width: 30%;

        margin: 0px;
        padding: 15px 50px;

        background: #0099ff9c;
        border-radius: 50px 0px 50px 50px;

    }

    .reciver-img {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 35px;
        height: 35px;

        border: 5px solid #fff;
        border-radius: 50px;

        background: #fff;
        background-image: url(./img/2335129.png);
        background-position: center;
        background-size: cover;
    }

    .chat-input-box {
        bottom: 0px;
        position: absolute;
        height: auto;
        width: 70%;
        padding: 5px 0;
        background: rgb(250, 250, 250);
        font-size: 17px;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            0px -1px 0px rgba(70, 70, 70, 0.4);
    }

    .chat-input-bar {
        height: auto;
        max-height: 80px;
        width: 87%;
        margin: 10px;
        padding: 10px 20px;
        background-color: #FFFFFF;
        border: none;
        outline: none;
        font-family: 'Quicksand', sans-serif;
        font-size: 18px;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            7px 7px 20px rgba(70, 70, 70, 0.2);
        border-radius: 50px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    [contentEditable=true]:empty:not(:focus):before {
        content: "Type something to chat...";
        color: #BCBCBC;
    }

    .chat-send-button {
        width: 45px;
        height: 45px;
        background: #fff;
        border: none;
        border-radius: 50px;
        outline: none;
        margin: 5px;
        padding: 0;
        color: #ccc;
        font-size: 17px;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.6),
            0px 0px 20px rgba(70, 70, 70, 0.2);
    }


    /************************************************* Sender Profile Info */

    .sender-p-info {
        display: inline-block;
        width: 271px;

        background: #0099ff9c;
        text-align: center;
        color: #fff;

    }

    .sender-p-img {
        background-image: url(./img/user-img/abh.jpg);
        background-position: center;
        background-size: cover;

        width: 150px;
        height: 150px;
        margin: 0 auto;


        border-radius: 50%;
        box-shadow: 0px 0px 10px rgba(225, 225, 225, 0.65),
            7px 7px 20px rgba(70, 70, 70, 0.12);
    }

    @media screen and (max-width:800px) {

        .chat-container {
            width: 100%;
            height: 80vh;
            box-shadow: 0px 0px 0px #fff;
        }

        .chat-box {
            width: 100%;
            height: 68vh;
        }

        .user-title {
            width: 100%;
        }

        .sender-chat-div {
            width: 80%;
            left: 6%;
        }

        .reciver-chat-div {
            width: 50%;
            left: 20%;
        }

        .chat-input-box {
            width: 100%;
            box-shadow: 0px 0px 0px #fff;
        }

        .chat-input-bar {
            width: 70%;
        }

    }

</style>



<?php
require_once "footer.php";
?>
