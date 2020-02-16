/* this the main javascript file [ includes all js ] */


$(document).ready(function () {

    var rotation = 0; //how much the toggle menu will rotate

    jQuery.fn.rotate = function (degrees, stat) {

        $(this).css({
            'transform': 'rotate(' + degrees + 'deg)',
            'transition': '800ms'
        });
        return $(this);
    };

    $('.menuToggle').click(function () {
        stat = $(this).attr("stat")
        //alert(stat);
        if (stat == '1') { //when the menu is on and the arrow is upwards
            var rotation = 180;
            $(this).rotate(rotation, stat);
            $(this).css({
                'box-shadow': '1px 1px 5px rgba(225, 225, 225, 0.65), 0px 0px 5px rgba(60, 60, 60, 0.12), 0px 0px 15px rgba(70, 70, 70, 0.05)'
            });
            $(this).attr("stat", "0");
            $(".navBtn").slideDown(900);
        } else { //when the menu is off and the arrow is downwards
            var rotation = 0;
            $(this).rotate(rotation, stat);
            $(this).css({
                'box-shadow': '0px 3px 5px rgba(225, 225, 225, 0.65), 0px 3px 5px rgba(60, 60, 60, 0.12), 0px 3px 10px rgba(70, 70, 70, 0.05)'
            });
            $(this).attr("stat", "1");
            $(".navBtn").slideUp(900);
        }

    });

    /* ==========checking the individual checkboxes========== */
    $(".check-holder").click(function(){
        var status = $(this).attr('status');
        if(status == "off"){//check the checkbox
            $(this).attr('status', 'on');
        }else{//uncheck the checkbox
            $(this).attr('status', 'off');
        }
    });

    /* ==========checking all checkboxes========== */
    $(".check-all").click(function(){
        var status = $(this).attr('status');
        if(status == "off"){//check all
            $(this).attr('status', 'on');
            $(this).parent().find(".check-holder").attr('status', 'on');
        }else{//uncheck all
            $(this).attr('status', 'off');
            $(this).parent().find(".check-holder").attr('status', 'off');
        }
    });

    /* ==========checking the individual users========== */
    $(".edit-user-img-profile").click(function(){
        var status = $(this).attr('status');
        if(status == "off"){//check the user
            $(this).attr('status', 'on');
        }else{//uncheck the user
            $(this).attr('status', 'off');
        }
    });

    /* ==========checking all the users========== */
    $(".settings-text").click(function(){
        var status = $(this).attr('status');
        if(status == "off"){//check all users
            $(this).attr('status', 'on');
            $(this).parent().find(".edit-user-img-profile").attr('status', 'on');
        }else{//uncheck all users
            $(this).attr('status', 'off');
            $(this).parent().find(".edit-user-img-profile").attr('status', 'off');
        }
    });

});