<?php
require_once "header.php";
?>



<?php

if(isset($_GET['sec'])){
    $sec = $_GET['sec'];
}

if($sec == "edit"){//================Edit Users
    ?>

<h1><span style="color:#0099ff;margin:0;">E</span>dit Plans </h1>

<div class="edit-user-container">
    <div class="admin-bar inliner">
        <div class="Admin-Profile-img" style="background-image: url(img/user-img/debjeet.jpg);"></div>
    </div>
    <form class="settings-form" autocomplete="off" id="Profile-set">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Plan name </div>
                <div class="input-div"><i class="fas fa-pencil-alt"></i><input class="setting-input" type="text" name="planName" value="Custom Plan"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text" onclick="allowAllusers()" value="off" style="cursor:pointer;"> Select User <span style="font-size:18px;color:#dedede;" id="allowAllusers"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" onclick="allowU1()" value="off" id="img-profile-plans1">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="background-image:url(img/user-img/debjeet.jpg)" onclick="allowU2()" value="off" id="img-profile-plans2">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/rahul.jpg)" onclick="allowU3()" value="off" id="img-profile-plans3">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/anu.jpg)" onclick="allowU4()" value="off" id="img-profile-plans4">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/shu.jpg)" onclick="allowU5()" value="off" id="img-profile-plans5">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/koyel.jpg)" onclick="allowU6()" value="off" id="img-profile-plans6">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/souvik.jpg)" onclick="allowU7()" value="off" id="img-profile-plans7">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/piu.jpg)" onclick="allowU8()" value="off" id="img-profile-plans8">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest1.png)" onclick="allowU9()" value="off" id="img-profile-plans9">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest2.png)" onclick="allowU10()" value="off" id="img-profile-plans10">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

            </div>


            <center>
                <button class="btn-settings" type="reset"><strong>Clear</strong></button>
                <button class="btn-settings" type="submit"><strong>Change</strong></button>
            </center>


        </div>

        <div class="select-switches inliner">
            <h2 style="text-align:center;color:#000">Select Switches </h2>

            <div class="room-text">Room 1 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll1()" id="check-all-tick1" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check1()" id="check-div1">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check2()" id="check-div2">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check3()" id="check-div3">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check4()" id="check-div4">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check5()" id="check-div5">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check6()" id="check-div6">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll2()" id="check-all-tick2" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check7()" id="check-div7">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check8()" id="check-div8">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check9()" id="check-div9">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check10()" id="check-div10">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check11()" id="check-div11">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check12()" id="check-div12">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll3()" id="check-all-tick3" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check13()" id="check-div13">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check14()" id="check-div14">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" onclick="check15()" id="check-div15">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" onclick="check16()" id="check-div16">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll4()" id="check-all-tick4" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check17()" id="check-div17">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check18()" id="check-div18">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll5()" id="check-all-tick5" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check19()" id="check-div19">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check20()" id="check-div20">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


        </div>
    </form>

</div>





<?php
}elseif($sec == "add"){//================Add Users
    ?>


<h1><span style="color:#0099ff;margin:0;">A</span>dd Plans </h1>

<div class="edit-user-container">
    <div class="admin-bar inliner">
        <div class="Admin-Profile-img" style="background-image: url(img/user-img/debjeet.jpg);"></div>
    </div>
    <form class="settings-form" autocomplete="off" id="Profile-set">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Plan name </div>
                <div class="input-div" style="border-bottom: 2px solid #0099ff;"><i class="fas fa-pencil-alt"></i><input class="setting-input" type="text" name="planName"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text" onclick="allowAllusers()" value="off" style="cursor:pointer;"> Select User <span style="font-size:18px;color:#dedede;" id="allowAllusers"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" onclick="allowU1()" value="off" id="img-profile-plans1">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="" onclick="allowU2()" value="off" id="img-profile-plans2">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/rahul.jpg)" onclick="allowU3()" value="off" id="img-profile-plans3">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/anu.jpg)" onclick="allowU4()" value="off" id="img-profile-plans4">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/shu.jpg)" onclick="allowU5()" value="off" id="img-profile-plans5">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/koyel.jpg)" onclick="allowU6()" value="off" id="img-profile-plans6">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/souvik.jpg)" onclick="allowU7()" value="off" id="img-profile-plans7">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/piu.jpg)" onclick="allowU8()" value="off" id="img-profile-plans8">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest1.png)" onclick="allowU9()" value="off" id="img-profile-plans9">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest2.png)" onclick="allowU10()" value="off" id="img-profile-plans10">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

            </div>


            <center>
                <button class="btn-settings" type="reset"><strong>Clear</strong></button>
                <button class="btn-settings" type="submit"><strong>Create</strong></button>
            </center>


        </div>

        <div class="select-switches inliner">
            <h2 style="text-align:center;color:#000">Select Switches </h2>

            <div class="room-text">Room 1 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll1()" id="check-all-tick1" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check1()" id="check-div1">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check2()" id="check-div2">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check3()" id="check-div3">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check4()" id="check-div4">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check5()" id="check-div5">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check6()" id="check-div6">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll2()" id="check-all-tick2" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check7()" id="check-div7">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check8()" id="check-div8">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check9()" id="check-div9">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check10()" id="check-div10">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check11()" id="check-div11">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check12()" id="check-div12">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll3()" id="check-all-tick3" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check13()" id="check-div13">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check14()" id="check-div14">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" onclick="check15()" id="check-div15">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" onclick="check16()" id="check-div16">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll4()" id="check-all-tick4" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check17()" id="check-div17">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check18()" id="check-div18">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll5()" id="check-all-tick5" value="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check19()" id="check-div19">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check20()" id="check-div20">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


        </div>
    </form>

</div>


<?php
}else{
    ?>
<script>
    window.location = "404.php";

</script>
<?php
}

?>




<script>
    function allowU1() {
        var status = document.getElementById("img-profile-plans1").value;

        if (status == "off") {
            document.getElementById("img-profile-plans1").value = "on"; //RESeT

            document.getElementById("img-profile-plans1").style.borderColor = "transparent";
            document.getElementById("img-profile-plans1").style.color = "transparent";
            document.getElementById("img-profile-plans1").style.transition = "ease-in-out .2s";

        } else {
            document.getElementById("img-profile-plans1").value = "off"; //RESeT


            document.getElementById("img-profile-plans1").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans1").style.color = "#00ff67";
            document.getElementById("img-profile-plans1").style.transition = "ease-in-out .2s";
        }
    }

    function allowU2() {
        var status = document.getElementById("img-profile-plans2").value;

        if (status == "off") {
            document.getElementById("img-profile-plans2").value = "on"; //RESeT

            document.getElementById("img-profile-plans2").style.borderColor = "transparent";
            document.getElementById("img-profile-plans2").style.color = "transparent";
            document.getElementById("img-profile-plans2").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("img-profile-plans2").value = "off"; //RESeT

            document.getElementById("img-profile-plans2").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans2").style.color = "#00ff67";
            document.getElementById("img-profile-plans2").style.transition = "ease-in-out .2s";
        }
    }

    function allowU3() {
        var status = document.getElementById("img-profile-plans3").value;

        if (status == "off") {
            document.getElementById("img-profile-plans3").value = "on"; //RESeT

            document.getElementById("img-profile-plans3").style.borderColor = "transparent";
            document.getElementById("img-profile-plans3").style.color = "transparent";
            document.getElementById("img-profile-plans3").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("img-profile-plans3").value = "off"; //RESeT

            document.getElementById("img-profile-plans3").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans3").style.color = "#00ff67";
            document.getElementById("img-profile-plans3").style.transition = "ease-in-out .2s";
        }
    }

    function allowU4() {
        var status = document.getElementById("img-profile-plans4").value;

        if (status == "off") {
            document.getElementById("img-profile-plans4").value = "on"; //RESeT

            document.getElementById("img-profile-plans4").style.borderColor = "transparent";
            document.getElementById("img-profile-plans4").style.color = "transparent";
            document.getElementById("img-profile-plans4").style.transition = "ease-in-out .2s";

        } else {
            document.getElementById("img-profile-plans4").value = "off"; //RESeT

            document.getElementById("img-profile-plans4").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans4").style.color = "#00ff67";
            document.getElementById("img-profile-plans4").style.transition = "ease-in-out .2s";
        }
    }

    function allowU5() {
        var status = document.getElementById("img-profile-plans5").value;

        if (status == "off") {
            document.getElementById("img-profile-plans5").value = "on"; //RESeT

            document.getElementById("img-profile-plans5").style.borderColor = "transparent";
            document.getElementById("img-profile-plans5").style.color = "transparent";
            document.getElementById("img-profile-plans5").style.transition = "ease-in-out .2s";

        } else {
            document.getElementById("img-profile-plans5").value = "off"; //RESeT

            document.getElementById("img-profile-plans5").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans5").style.color = "#00ff67";
            document.getElementById("img-profile-plans5").style.transition = "ease-in-out .2s";
        }
    }

    function allowU6() {
        var status = document.getElementById("img-profile-plans6").value;

        if (status == "off") {
            document.getElementById("img-profile-plans6").value = "on"; //RESeT

            document.getElementById("img-profile-plans6").style.borderColor = "transparent";
            document.getElementById("img-profile-plans6").style.color = "transparent";
            document.getElementById("img-profile-plans6").style.transition = "ease-in-out .2s";

        } else {
            document.getElementById("img-profile-plans6").value = "off"; //RESeT

            document.getElementById("img-profile-plans6").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans6").style.color = "#00ff67";
            document.getElementById("img-profile-plans6").style.transition = "ease-in-out .2s";
        }
    }

    function allowU7() {
        var status = document.getElementById("img-profile-plans7").value;

        if (status == "off") {
            document.getElementById("img-profile-plans7").value = "on"; //RESeT

            document.getElementById("img-profile-plans7").style.borderColor = "transparent";
            document.getElementById("img-profile-plans7").style.color = "transparent";
            document.getElementById("img-profile-plans7").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("img-profile-plans7").value = "off"; //RESeT

            document.getElementById("img-profile-plans7").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans7").style.color = "#00ff67";
            document.getElementById("img-profile-plans7").style.transition = "ease-in-out .2s";
        }
    }

    function allowU8() {
        var status = document.getElementById("img-profile-plans8").value;

        if (status == "off") {
            document.getElementById("img-profile-plans8").value = "on"; //RESeT

            document.getElementById("img-profile-plans8").style.borderColor = "transparent";
            document.getElementById("img-profile-plans8").style.color = "transparent";
            document.getElementById("img-profile-plans8").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("img-profile-plans8").value = "off"; //RESeT
            document.getElementById("img-profile-plans8").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans8").style.color = "#00ff67";
            document.getElementById("img-profile-plans8").style.transition = "ease-in-out .2s";
        }
    }

    function allowU9() {
        var status = document.getElementById("img-profile-plans9").value;

        if (status == "off") {
            document.getElementById("img-profile-plans9").value = "on"; //RESeT

            document.getElementById("img-profile-plans9").style.borderColor = "transparent";
            document.getElementById("img-profile-plans9").style.color = "transparent";
            document.getElementById("img-profile-plans9").style.transition = "ease-in-out .2s";

        } else {
            document.getElementById("img-profile-plans9").value = "off"; //RESeT

            document.getElementById("img-profile-plans9").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans9").style.color = "#00ff67";
            document.getElementById("img-profile-plans9").style.transition = "ease-in-out .2s";
        }
    }

    function allowU10() {
        var status = document.getElementById("img-profile-plans10").value;

        if (status == "off") {
            document.getElementById("img-profile-plans10").value = "on"; //RESeT

            document.getElementById("img-profile-plans10").style.borderColor = "transparent";
            document.getElementById("img-profile-plans10").style.color = "transparent";
            document.getElementById("img-profile-plans10").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("img-profile-plans10").value = "off"; //RESeT   

            document.getElementById("img-profile-plans10").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans10").style.color = "#00ff67";
            document.getElementById("img-profile-plans10").style.transition = "ease-in-out .2s";
        }
    }


    function allowAllusers() {
        var status = document.getElementById("allowAllusers").value;

        if (status == "off") {
            document.getElementById("allowAllusers").value = "on"; //RESeT


            document.getElementById("img-profile-plans1").value = "on"; //RESeT
            document.getElementById("img-profile-plans2").value = "on"; //RESeT
            document.getElementById("img-profile-plans3").value = "on"; //RESeT
            document.getElementById("img-profile-plans4").value = "on"; //RESeT
            document.getElementById("img-profile-plans5").value = "on"; //RESeT
            document.getElementById("img-profile-plans6").value = "on"; //RESeT
            document.getElementById("img-profile-plans7").value = "on"; //RESeT
            document.getElementById("img-profile-plans8").value = "on"; //RESeT
            document.getElementById("img-profile-plans9").value = "on"; //RESeT
            document.getElementById("img-profile-plans10").value = "on"; //RESeT




            document.getElementById("allowAllusers").style.color = "#dedede";
            document.getElementById("allowAllusers").style.transition = "ease-in-out .2s";




            document.getElementById("img-profile-plans1").style.borderColor = "transparent";
            document.getElementById("img-profile-plans1").style.color = "transparent";
            document.getElementById("img-profile-plans1").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans2").style.borderColor = "transparent";
            document.getElementById("img-profile-plans2").style.color = "transparent";
            document.getElementById("img-profile-plans2").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans3").style.borderColor = "transparent";
            document.getElementById("img-profile-plans3").style.color = "transparent";
            document.getElementById("img-profile-plans3").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans4").style.borderColor = "transparent";
            document.getElementById("img-profile-plans4").style.color = "transparent";
            document.getElementById("img-profile-plans4").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans4").style.borderColor = "transparent";
            document.getElementById("img-profile-plans4").style.color = "transparent";
            document.getElementById("img-profile-plans4").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans5").style.borderColor = "transparent";
            document.getElementById("img-profile-plans5").style.color = "transparent";
            document.getElementById("img-profile-plans5").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans6").style.borderColor = "transparent";
            document.getElementById("img-profile-plans6").style.color = "transparent";
            document.getElementById("img-profile-plans6").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans7").style.borderColor = "transparent";
            document.getElementById("img-profile-plans7").style.color = "transparent";
            document.getElementById("img-profile-plans7").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans8").style.borderColor = "transparent";
            document.getElementById("img-profile-plans8").style.color = "transparent";
            document.getElementById("img-profile-plans8").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans9").style.borderColor = "transparent";
            document.getElementById("img-profile-plans9").style.color = "transparent";
            document.getElementById("img-profile-plans9").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans10").style.borderColor = "transparent";
            document.getElementById("img-profile-plans10").style.color = "transparent";
            document.getElementById("img-profile-plans10").style.transition = "ease-in-out .2s";
        } else {
            document.getElementById("allowAllusers").value = "off"; //RESeT  

            document.getElementById("img-profile-plans1").value = "off"; //RESeT
            document.getElementById("img-profile-plans2").value = "off"; //RESeT
            document.getElementById("img-profile-plans3").value = "off"; //RESeT
            document.getElementById("img-profile-plans4").value = "off"; //RESeT
            document.getElementById("img-profile-plans5").value = "off"; //RESeT
            document.getElementById("img-profile-plans6").value = "off"; //RESeT
            document.getElementById("img-profile-plans7").value = "off"; //RESeT
            document.getElementById("img-profile-plans8").value = "off"; //RESeT
            document.getElementById("img-profile-plans9").value = "off"; //RESeT
            document.getElementById("img-profile-plans10").value = "off"; //RESeT


            document.getElementById("allowAllusers").style.color = "#0099ff";
            document.getElementById("allowAllusers").style.transition = "ease-in-out .2s";


            document.getElementById("img-profile-plans1").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans1").style.color = "#00ff67";
            document.getElementById("img-profile-plans1").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans2").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans2").style.color = "#00ff67";
            document.getElementById("img-profile-plans2").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans3").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans3").style.color = "#00ff67";
            document.getElementById("img-profile-plans3").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans4").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans4").style.color = "#00ff67";
            document.getElementById("img-profile-plans4").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans5").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans5").style.color = "#00ff67";
            document.getElementById("img-profile-plans5").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans6").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans6").style.color = "#00ff67";
            document.getElementById("img-profile-plans6").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans7").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans7").style.color = "#00ff67";
            document.getElementById("img-profile-plans7").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans8").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans8").style.color = "#00ff67";
            document.getElementById("img-profile-plans8").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans9").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans9").style.color = "#00ff67";
            document.getElementById("img-profile-plans9").style.transition = "ease-in-out .2s";

            document.getElementById("img-profile-plans10").style.borderColor = "#00ff67";
            document.getElementById("img-profile-plans10").style.color = "#00ff67";
            document.getElementById("img-profile-plans10").style.transition = "ease-in-out .2s";
        }
    }

</script>


<?php
require_once "footer.php";
?>
