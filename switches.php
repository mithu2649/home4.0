<?php
require_once "header.php";
?>


<div class="spaceEater"></div>

<div class="plan-container">
    <h1><span style="color:#0099ff;margin:0;">S</span>witches</h1>
    <?php
    include "sdk/get-data.php";
    $obj = new getData;
    $room = $obj->getRooms();
    $room = json_decode($room);
    for($i=0; $i<sizeof($room); $i++){
        ?>
        <h2><?php echo $room[$i]->room_name; ?><span style="color:#0099ff;margin:0;"> <i class="fas <?php echo $room[$i]->icon; ?>"></i></span></h2>
        <?php
        $room_id = $room[$i]->id;
        $switch = $obj->getSwitches($room_id);
        $switch = json_decode($switch);
        for($j=0; $j<sizeof($switch); $j++){
        ?>
        <div class="plan-div" status="<?php echo $switch[$j]->status; ?>">
            <div class="planTextedit"  status="<?php echo $switch[$j]->status; ?>">
                <div class="plans-text-switches"  status="<?php echo $switch[$j]->status; ?>"><i class="fa <?php echo $switch[$j]->icon; ?>"></i> <?php echo $switch[$j]->app_name; ?> <sup> <?php echo $switch[$j]->status; ?> </sup></div>
            </div>
            <div class="bridge-div"  status="<?php echo $switch[$j]->status; ?>">.</div>
            <div class="power-button" status="<?php echo $switch[$j]->status; ?>" identity="<?php echo $switch[$j]->id; ?>"><i class="fa fa-bolt fa-3x"></i></div>
        </div>
        <?php
        }
    }
    ?>
</div>
    <style>
        h2 {
            margin: 80px 60px 20px;
        }
        
        .planTextedit[status="on"]{border-color: #fff000 !important;}
        .bridge-div[status="on"]{background: #fff000 !important;}
        .plans-text-switches[status="on"] sup{color: #0099ff !important;}
        .power-button[status="on"]{
            color: #fff000 !important;
            border-color: #fff000 !important;
            box-shadow: none;
        }
        .planTextedit[status="off"]{border-color: #fff !important;}
        .bridge-div[status="off"]{background: #fff !important;}
        .plans-text-switches[status="off"] sup{color: #ccc !important;}
        .power-button[status="off"]{
            color: #ccc !important;
            border-color: #fff !important;
        }

    </style>
    <?php
require_once "footer.php";
?>
<script>
    $(document).ready(function(){
    $(".power-button[status*='o']").click(function(){
        var el = $(this).parent();
        var status = $(this).attr("status");
        var identity = $(this).attr("identity");
        //alert(identity+" is "+status);
        $.post("backend.php", {
            switchId: identity,
            switchStatus: status
        },function(data){
            var currentStatus = data;
            //alert("Turned is "+currentStatus);
            $(this).attr("status", currentStatus);
            el.attr("status", currentStatus);
            el.find("div").attr("status", currentStatus);
            el.find(".plans-text-switches").children("sup").html(currentStatus);
            $(this).attr("status", currentStatus);
        });
        //alert(status);
    });
    //switches
});
</script>
