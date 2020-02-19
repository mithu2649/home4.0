<?php
require_once "header.php";
?>



<div class="spaceEater"></div>
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
    <form class="settings-form" autocomplete="off">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Plan name </div>
                <div class="input-div"><i class="fas fa-pencil-alt"></i><input class="setting-input" type="text" name="planName" value="Custom Plan"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text" status="off" style="cursor:pointer;"> Select User <span style="font-size:18px;"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="background-image:url(img/user-img/debjeet.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/rahul.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/anu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/shu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/koyel.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/souvik.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/piu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest1.png)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style="background-image:url(img/user-img/guest2.png)" status="off">
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
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" onclick="check11()" id="check-div11"  status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
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
    <form class="settings-form" autocomplete="off">
        <div class="edit-content" style="vertical-align:top;">

            <div class="settings-block">
                <div class="settings-text"> Plan name </div>
                <div class="input-div" style="border-bottom: 2px solid #0099ff;"><i class="fas fa-pencil-alt"></i><input class="setting-input" type="text" name="planName"></div>
            </div>
            <div class="settings-block">
                <div class="settings-text" status="off" style="cursor:pointer;"> Select User <span style="font-size:18px;"><i class="fas fa-check"></i><i class="fas fa-check" style="position:relative;right:12px;"></i></span></div>


                <div class="edit-user-img-profile" style="background-image:url(img/user-img/abh.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>

                <div class="edit-user-img-profile" style="background-image:url(img/user-img/debjeet.jpg)" value="status">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/rahul.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/anu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/shu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/koyel.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/souvik.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/piu.jpg)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest1.png)" status="off">
                    <div class="plans-U-img-check"><i class="fas fa-check"></i></div>
                </div>
                <div class="edit-user-img-profile" style=" background-image:url(img/user-img/guest2.png)" status="off">
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
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Room 2 <i class="fas fa-bed"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug 2 </span>
                    </div>

                </div>
            </div>

            <div class="room-text">Hallroom <i class="fas fa-couch"></i> :<br>
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb 1 </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Fan </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-television inliner"></i> Television </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-plug inliner"></i> Plug </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Kitchen <i class="fas fa-utensils"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-fan fa-spin inliner"></i> Exhaust Fan </span>
                    </div>

                </div>
            </div>


            <div class="room-text">Bathroom <i class="fas fa-bath"></i> :
                <div class="check-block-div">
                    <div class="check-box check-all  inliner" status="off"><i class="fas fa-check"></i></div>

                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
                        <span><i class="fa fa-lightbulb-o inliner"></i> Light Bulb </span>
                    </div>
                    <div class="check-holder" status="off">
                        <div class="connect"></div>
                        <div class="check-box inliner"><i class="fas fa-check"></i></div>
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
