/* this the main javascript file [ include all js ] */


$(document).ready(function () {

    /*$(".menuToggle").click(function () {
        $(this).css({
            "transform": "rotate(90deg)"
        });
    });*/

    var rotation = 0; //how much the toggle menu will 

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

});


/* ------            Users js            ------- */



/* ------            Edit Users + Add Users and Edit Plans and Add Plans js            ------- */


function check1() {
    var status = document.getElementById('check-div1').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div1').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div1').style.color = "#fff";
        document.getElementById('check-div1').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div1').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div1').style.color = "#000";
        document.getElementById('check-div1').style.transition = "ease-in-out 200ms";
    }
}

function check2() {
    var status = document.getElementById('check-div2').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div2').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div2').style.color = "#fff";
        document.getElementById('check-div2').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div2').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div2').style.color = "#000";
        document.getElementById('check-div2').style.transition = "ease-in-out 200ms";
    }
}

function check3() {
    var status = document.getElementById('check-div3').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div3').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div3').style.color = "#fff";
        document.getElementById('check-div3').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div3').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div3').style.color = "#000";
        document.getElementById('check-div3').style.transition = "ease-in-out 200ms";
    }
}

function check4() {
    var status = document.getElementById('check-div4').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div4').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div4').style.color = "#fff";
        document.getElementById('check-div4').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div4').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div4').style.color = "#000";
        document.getElementById('check-div4').style.transition = "ease-in-out 200ms";
    }
}

function check5() {
    var status = document.getElementById('check-div5').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div5').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div5').style.color = "#fff";
        document.getElementById('check-div5').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div5').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div5').style.color = "#000";
        document.getElementById('check-div5').style.transition = "ease-in-out 200ms";
    }
}

function check6() {
    var status = document.getElementById('check-div6').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div6').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div6').style.color = "#fff";
        document.getElementById('check-div6').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div6').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div6').style.color = "#000";
        document.getElementById('check-div6').style.transition = "ease-in-out 200ms";
    }
}


function check7() {
    var status = document.getElementById('check-div7').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div7').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div7').style.color = "#fff";
        document.getElementById('check-div7').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div7').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div7').style.color = "#000";
        document.getElementById('check-div7').style.transition = "ease-in-out 200ms";
    }
}

function check8() {
    var status = document.getElementById('check-div8').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div8').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div8').style.color = "#fff";
        document.getElementById('check-div8').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div8').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div8').style.color = "#000";
        document.getElementById('check-div8').style.transition = "ease-in-out 200ms";
    }
}

function check9() {
    var status = document.getElementById('check-div9').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div9').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div9').style.color = "#fff";
        document.getElementById('check-div9').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div9').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div9').style.color = "#000";
        document.getElementById('check-div9').style.transition = "ease-in-out 200ms";
    }
}

function check10() {
    var status = document.getElementById('check-div10').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div10').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div10').style.color = "#fff";
        document.getElementById('check-div10').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div10').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div10').style.color = "#000";
        document.getElementById('check-div10').style.transition = "ease-in-out 200ms";
    }
}

function check11() {
    var status = document.getElementById('check-div11').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div11').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div11').style.color = "#fff";
        document.getElementById('check-div11').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div11').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div11').style.color = "#000";
        document.getElementById('check-div11').style.transition = "ease-in-out 200ms";
    }
}

function check12() {
    var status = document.getElementById('check-div12').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div12').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div12').style.color = "#fff";
        document.getElementById('check-div12').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div12').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div12').style.color = "#000";
        document.getElementById('check-div12').style.transition = "ease-in-out 200ms";
    }
}

function check13() {
    var status = document.getElementById('check-div13').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div13').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div13').style.color = "#fff";
        document.getElementById('check-div13').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div13').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div13').style.color = "#000";
        document.getElementById('check-div13').style.transition = "ease-in-out 200ms";
    }
}

function check14() {
    var status = document.getElementById('check-div14').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div14').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div14').style.color = "#fff";
        document.getElementById('check-div14').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div14').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div14').style.color = "#000";
        document.getElementById('check-div14').style.transition = "ease-in-out 200ms";
    }
}

function check15() {
    var status = document.getElementById('check-div15').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div15').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div15').style.color = "#fff";
        document.getElementById('check-div15').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div15').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div15').style.color = "#000";
        document.getElementById('check-div15').style.transition = "ease-in-out 200ms";
    }
}

function check16() {
    var status = document.getElementById('check-div16').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div16').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div16').style.color = "#fff";
        document.getElementById('check-div16').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div16').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div16').style.color = "#000";
        document.getElementById('check-div16').style.transition = "ease-in-out 200ms";
    }
}

function check17() {
    var status = document.getElementById('check-div17').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div17').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div17').style.color = "#fff";
        document.getElementById('check-div17').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div17').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div17').style.color = "#000";
        document.getElementById('check-div17').style.transition = "ease-in-out 200ms";
    }
}

function check18() {
    var status = document.getElementById('check-div18').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div18').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div18').style.color = "#fff";
        document.getElementById('check-div18').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div18').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div18').style.color = "#000";
        document.getElementById('check-div18').style.transition = "ease-in-out 200ms";
    }
}

function check19() {
    var status = document.getElementById('check-div19').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div19').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div19').style.color = "#fff";
        document.getElementById('check-div19').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div19').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div19').style.color = "#000";
        document.getElementById('check-div19').style.transition = "ease-in-out 200ms";
    }
}

function check20() {
    var status = document.getElementById('check-div20').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-div20').value = 'on'; //Status(reset) = ON
        document.getElementById('check-div20').style.color = "#fff";
        document.getElementById('check-div20').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-div20').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-div20').style.color = "#000";
        document.getElementById('check-div20').style.transition = "ease-in-out 200ms";
    }
}








function checkAll1() {
    var status = document.getElementById('check-all-tick1').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-all-tick1').value = 'on'; //Status(reset) = ON
        document.getElementById('check-all-tick1').style.color = "#fff";
        document.getElementById('check-all-tick1').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div1').value = 'on';
        document.getElementById('check-div1').style.color = "#fff";
        document.getElementById('check-div1').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div2').value = 'on';
        document.getElementById('check-div2').style.color = "#fff";
        document.getElementById('check-div2').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div3').value = 'on';
        document.getElementById('check-div3').style.color = "#fff";
        document.getElementById('check-div3').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div4').value = 'on';
        document.getElementById('check-div4').style.color = "#fff";
        document.getElementById('check-div4').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div5').value = 'on';
        document.getElementById('check-div5').style.color = "#fff";
        document.getElementById('check-div5').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div6').value = 'on';
        document.getElementById('check-div6').style.color = "#fff";
        document.getElementById('check-div6').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-all-tick1').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-all-tick1').style.color = "#000";
        document.getElementById('check-all-tick1').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div1').value = 'off';
        document.getElementById('check-div1').style.color = "#000";
        document.getElementById('check-div1').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div2').value = 'off';
        document.getElementById('check-div2').style.color = "#000";
        document.getElementById('check-div2').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div3').value = 'off';
        document.getElementById('check-div3').style.color = "#000";
        document.getElementById('check-div3').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div4').value = 'off';
        document.getElementById('check-div4').style.color = "#000";
        document.getElementById('check-div4').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div5').value = 'off';
        document.getElementById('check-div5').style.color = "#000";
        document.getElementById('check-div5').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div6').value = 'off';
        document.getElementById('check-div6').style.color = "#000";
        document.getElementById('check-div6').style.transition = "ease-in-out 200ms";
    }
}

function checkAll2() {
    var status = document.getElementById('check-all-tick2').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-all-tick2').value = 'on'; //Status(reset) = ON
        document.getElementById('check-all-tick2').style.color = "#fff";
        document.getElementById('check-all-tick2').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div7').value = 'on';
        document.getElementById('check-div7').style.color = "#fff";
        document.getElementById('check-div7').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div8').value = 'on';
        document.getElementById('check-div8').style.color = "#fff";
        document.getElementById('check-div8').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div9').value = 'on';
        document.getElementById('check-div9').style.color = "#fff";
        document.getElementById('check-div9').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div10').value = 'on';
        document.getElementById('check-div10').style.color = "#fff";
        document.getElementById('check-div10').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div11').value = 'on';
        document.getElementById('check-div11').style.color = "#fff";
        document.getElementById('check-div11').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div12').value = 'on';
        document.getElementById('check-div12').style.color = "#fff";
        document.getElementById('check-div12').style.transition = "ease-in-out 200ms";

    } else {
        // button is on
        document.getElementById('check-all-tick2').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-all-tick2').style.color = "#000";
        document.getElementById('check-all-tick2').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div7').value = 'off';
        document.getElementById('check-div7').style.color = "#000";
        document.getElementById('check-div7').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div8').value = 'off';
        document.getElementById('check-div8').style.color = "#000";
        document.getElementById('check-div8').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div9').value = 'off';
        document.getElementById('check-div9').style.color = "#000";
        document.getElementById('check-div9').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div10').value = 'off';
        document.getElementById('check-div10').style.color = "#000";
        document.getElementById('check-div10').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div11').value = 'off';
        document.getElementById('check-div11').style.color = "#000";
        document.getElementById('check-div11').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div12').value = 'off';
        document.getElementById('check-div12').style.color = "#000";
        document.getElementById('check-div12').style.transition = "ease-in-out 200ms";
    }
}

function checkAll3() {
    var status = document.getElementById('check-all-tick3').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-all-tick3').value = 'on'; //Status(reset) = ON
        document.getElementById('check-all-tick3').style.color = "#fff";
        document.getElementById('check-all-tick3').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div13').value = 'on';
        document.getElementById('check-div13').style.color = "#fff";
        document.getElementById('check-div13').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div14').value = 'on';
        document.getElementById('check-div14').style.color = "#fff";
        document.getElementById('check-div14').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div15').value = 'on';
        document.getElementById('check-div15').style.color = "#fff";
        document.getElementById('check-div15').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div16').value = 'on';
        document.getElementById('check-div16').style.color = "#fff";
        document.getElementById('check-div16').style.transition = "ease-in-out 200ms";


    } else {
        // button is on
        document.getElementById('check-all-tick3').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-all-tick3').style.color = "#000";
        document.getElementById('check-all-tick3').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div13').value = 'off';
        document.getElementById('check-div13').style.color = "#000";
        document.getElementById('check-div13').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div14').value = 'off';
        document.getElementById('check-div14').style.color = "#000";
        document.getElementById('check-div14').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div15').value = 'off';
        document.getElementById('check-div15').style.color = "#000";
        document.getElementById('check-div15').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div16').value = 'off';
        document.getElementById('check-div16').style.color = "#000";
        document.getElementById('check-div16').style.transition = "ease-in-out 200ms";


    }
}

function checkAll4() {
    var status = document.getElementById('check-all-tick4').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-all-tick4').value = 'on'; //Status(reset) = ON
        document.getElementById('check-all-tick4').style.color = "#fff";
        document.getElementById('check-all-tick4').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div7').value = 'on';
        document.getElementById('check-div17').style.color = "#fff";
        document.getElementById('check-div17').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div18').value = 'on';
        document.getElementById('check-div18').style.color = "#fff";
        document.getElementById('check-div18').style.transition = "ease-in-out 200ms";


    } else {
        // button is on
        document.getElementById('check-all-tick4').value = 'off'; //Status(reset) = OFF
        document.getElementById('check-all-tick4').style.color = "#000";
        document.getElementById('check-all-tick4').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div17').value = 'off';
        document.getElementById('check-div17').style.color = "#000";
        document.getElementById('check-div17').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div18').value = 'off';
        document.getElementById('check-div18').style.color = "#000";
        document.getElementById('check-div18').style.transition = "ease-in-out 200ms";


    }
}

function checkAll5() {
    var status = document.getElementById('check-all-tick5').value;
    if (status == 'off') {
        // button is off
        document.getElementById('check-all-tick5').value = 'on'; //Status(reset) = ON


        document.getElementById('check-all-tick5').style.color = "#fff";
        document.getElementById('check-all-tick5').style.transition = "ease-in-out 200ms";


        document.getElementById('check-div19').value = 'on';
        document.getElementById('check-div19').style.color = "#fff";
        document.getElementById('check-div19').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div20').value = 'on';
        document.getElementById('check-div20').style.color = "#fff";
        document.getElementById('check-div20').style.transition = "ease-in-out 200ms";


    } else {
        // button is on
        document.getElementById('check-all-tick5').value = 'off'; //Status(reset) = OFF


        document.getElementById('check-all-tick5').style.color = "#000";
        document.getElementById('check-all-tick5').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div19').value = 'off';
        document.getElementById('check-div19').style.color = "#000";
        document.getElementById('check-div19').style.transition = "ease-in-out 200ms";

        document.getElementById('check-div20').value = 'off';
        document.getElementById('check-div20').style.color = "#000";
        document.getElementById('check-div20').style.transition = "ease-in-out 200ms";


    }
}
