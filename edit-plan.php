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
                <div class="settings-text" onclick="allowAllusers()" status="off" style="cursor:pointer;"> Select User <span style="font-size:18px;" id="allowAllusers"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" onclick="allowU1()" status="off" id="img-profile-plans1">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="background-image:url(img/user-img/debjeet.jpg)" onclick="allowU2()" status="off" id="img-profile-plans2">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/rahul.jpg)" onclick="allowU3()" status="off" id="img-profile-plans3">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/anu.jpg)" onclick="allowU4()" status="off" id="img-profile-plans4">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/shu.jpg)" onclick="allowU5()" status="off" id="img-profile-plans5">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/koyel.jpg)" onclick="allowU6()" status="off" id="img-profile-plans6">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/souvik.jpg)" onclick="allowU7()" status="off" id="img-profile-plans7">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/piu.jpg)" onclick="allowU8()" status="off" id="img-profile-plans8">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest1.png)" onclick="allowU9()" status="off" id="img-profile-plans9">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest2.png)" onclick="allowU10()" status="off" id="img-profile-plans10">
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
                    <div class="check-box check-all  inliner" onclick="checkAll1()" id="check-all-tick1" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check1()" id="check-div1" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check2()" id="check-div2"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check3()" id="check-div3"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check4()" id="check-div4"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check5()" id="check-div5"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check6()" id="check-div6"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll2()" id="check-all-tick2" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check7()" id="check-div7"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check8()" id="check-div8"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check9()" id="check-div9"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check10()" id="check-div10"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check11()" id="check-div11"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check12()" id="check-div12"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll3()" id="check-all-tick3" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check13()" id="check-div13"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check14()" id="check-div14"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" onclick="check15()" id="check-div15"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" onclick="check16()" id="check-div16"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll4()" id="check-all-tick4" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check17()" id="check-div17"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check18()" id="check-div18"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll5()" id="check-all-tick5" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check19()" id="check-div19"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check20()" id="check-div20"  status="off">
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
                <div class="settings-text" onclick="allowAllusers()" status="off" style="cursor:pointer;"> Select User <span style="font-size:18px;" id="allowAllusers"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" onclick="allowU1()" status="off" id="img-profile-plans1">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="background-image:url(img/user-img/debjeet.jpg)" onclick="allowU2()" value="status" id="img-profile-plans2">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/rahul.jpg)" onclick="allowU3()" status="off" id="img-profile-plans3">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/anu.jpg)" onclick="allowU4()" status="off" id="img-profile-plans4">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/shu.jpg)" onclick="allowU5()" status="off" id="img-profile-plans5">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/koyel.jpg)" onclick="allowU6()" status="off" id="img-profile-plans6">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/souvik.jpg)" onclick="allowU7()" status="off" id="img-profile-plans7">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/piu.jpg)" onclick="allowU8()" status="off" id="img-profile-plans8">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest1.png)" onclick="allowU9()" status="off" id="img-profile-plans9">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest2.png)" onclick="allowU10()" status="off" id="img-profile-plans10">
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
                    <div class="check-box check-all  inliner" onclick="checkAll1()" id="check-all-tick1" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check1()" id="check-div1"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check2()" id="check-div2"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check3()" id="check-div3"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check4()" id="check-div4"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check5()" id="check-div5"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check6()" id="check-div6"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll2()" id="check-all-tick2" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check7()" id="check-div7"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check8()" id="check-div8"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" onclick="check9()" id="check-div9"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" onclick="check10()" id="check-div10"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check11()" id="check-div11"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" onclick="check12()" id="check-div12"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll3()" id="check-all-tick3" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check13()" id="check-div13"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" onclick="check14()" id="check-div14"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" onclick="check15()" id="check-div15"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" onclick="check16()" id="check-div16"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll4()" id="check-all-tick4" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check17()" id="check-div17"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check18()" id="check-div18"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" onclick="checkAll5()" id="check-all-tick5" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" onclick="check19()" id="check-div19"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner" value="off"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" onclick="check20()" id="check-div20"  status="off">
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
    header('location: 404.php');
}

require_once "footer.php";
?>
