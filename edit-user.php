<?php
require_once "header.php";
?>



<?php

if(isset($_GET['sec'])){
    $sec = $_GET['sec'];
}

if($sec == "edit"){//================Edit Users
    ?>


<h1><span style="color:#0099ff;margin:0;">E</span>dit User </h1>

<div class="edit-user-container">
    <div class="admin-bar inliner">
        <div class="Admin-Profile-img" style="background-image: url(./img/user-img/debjeet.jpg);"></div>
    </div>
    <!--
    -->
    <form class="settings-form" autocomplete="off" id="Profile-set">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Username </div>
                <div class="input-div"><i class="fas fa-user-secret"></i><input class="setting-input" type="text" name="Username" value="Debjeet Das" disabled></div>
            </div>

            <div class="settings-block">
                <div class="settings-text"> Name </div>
                <div class="input-div"><i class="fa fa-user-o"></i><input class="setting-input" type="text" name="Name" value="Debjeet"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text"> Email </div>
                <div class="input-div"><i class="fa fa-envelope-o"></i><input class="setting-input" type="text" name="Useremail" value="debjeet194@gmail.com" required></div>
            </div>
            <div class="settings-block">
                <div class="settings-text"> Roles </div>
                <div>
                    <label><input style="background:#000" type="radio" name="role-Administrator" checked> Administrator </label>
                    <label><input type="radio" name="role-Administrator"> User </label>
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


<h1><span style="color:#0099ff;margin:0;">A</span>dd User </h1>

<div class="edit-user-container">
    <div class="admin-bar inliner">
        <div class="Admin-Profile-img" style="background-image: url(./img/user-img/debjeet.jpg);"></div>
    </div>
    <!--
    -->
    <form class="settings-form" autocomplete="off" id="Profile-set">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Username </div>
                <div class="input-div" style="border-bottom: 2px solid #0099ff;"><i class="fas fa-user-secret"></i><input class="setting-input" type="text" name="Username"></div>
            </div>

            <div class="settings-block">
                <div class="settings-text"> Name </div>
                <div class="input-div" style="border-bottom: 2px solid #0099ff;"><i class="fa fa-user-o"></i><input class="setting-input" type="text" name="Name"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text"> Email </div>
                <div class="input-div" style="border-bottom: 2px solid #0099ff;"><i class="fa fa-envelope-o"></i><input class="setting-input" type="text" name="Useremail" required></div>
            </div>
            <div class="settings-block">
                <div class="settings-text"> Roles </div>
                <div>
                    <label><input style="background:#000" type="radio" name="role-Administrator"> Administrator </label>
                    <label><input type="radio" name="role-Administrator" checked> User </label>
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



<?php
require_once "footer.php";
?>
