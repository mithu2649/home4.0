/* this the main javascript file [ include all js ] */


/* ------            Plans js            ------- */


function glow1() {

    var status = document.getElementById('powerbtn1').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn1').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv1').style.borderColor = "#fff";
        document.getElementById('brg1').style.backgroundColor = "#fff";
        document.getElementById('btn1').style.color = "#ccc";
        document.getElementById('powerbtn1').style.borderColor = "#fff";
        document.getElementById('active1').innerHTML = 'UnActive';
        document.getElementById('active1').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('powerbtn1').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv1').style.borderColor = "#00ff67";
        document.getElementById('brg1').style.backgroundColor = "#00ff67";
        document.getElementById('btn1').style.color = "#00ff67";
        document.getElementById('powerbtn1').style.borderColor = "#00ff67";
        document.getElementById('active1').innerHTML = 'Active';
        document.getElementById('active1').style.color = "#0099ff";
    }
}

function glow2() {

    var status = document.getElementById('powerbtn2').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn2').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv2').style.borderColor = "#fff";
        document.getElementById('brg2').style.backgroundColor = "#fff";
        document.getElementById('powerbtn2').style.borderColor = "#fff";
        document.getElementById('btn2').style.color = "#ccc";
        document.getElementById('active2').innerHTML = 'UnActive';
        document.getElementById('active2').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('powerbtn2').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv2').style.borderColor = "#00ff67";
        document.getElementById('brg2').style.backgroundColor = "#00ff67";
        document.getElementById('powerbtn2').style.borderColor = "#00ff67";
        document.getElementById('btn2').style.color = "#00ff67";
        document.getElementById('active2').innerHTML = 'Active';
        document.getElementById('active2').style.color = "#0099ff";
    }
}

function glow3() {

    var status = document.getElementById('powerbtn3').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn3').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv3').style.borderColor = "#fff";
        document.getElementById('brg3').style.backgroundColor = "#fff";
        document.getElementById('powerbtn3').style.borderColor = "#fff";
        document.getElementById('btn3').style.color = "#ccc";
        document.getElementById('active3').innerHTML = 'UnActive';
        document.getElementById('active3').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('powerbtn3').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv3').style.borderColor = "#00ff67";
        document.getElementById('brg3').style.backgroundColor = "#00ff67";
        document.getElementById('powerbtn3').style.borderColor = "#00ff67";
        document.getElementById('btn3').style.color = "#00ff67";
        document.getElementById('active3').innerHTML = 'Active';
        document.getElementById('active3').style.color = "#0099ff";
    }
}

function glow4() {

    var status = document.getElementById('powerbtn4').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn4').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv4').style.borderColor = "#fff";
        document.getElementById('brg4').style.backgroundColor = "#fff";
        document.getElementById('powerbtn4').style.borderColor = "#fff";
        document.getElementById('btn4').style.color = "#ccc";
        document.getElementById('active4').innerHTML = 'UnActive';
        document.getElementById('active4').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('powerbtn4').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv4').style.borderColor = "#00ff67";
        document.getElementById('brg4').style.backgroundColor = "#00ff67";
        document.getElementById('powerbtn4').style.borderColor = "#00ff67";
        document.getElementById('btn4').style.color = "#00ff67";
        document.getElementById('active4').innerHTML = 'Active';
        document.getElementById('active4').style.color = "#0099ff";
    }
}

function glow5() {

    var status = document.getElementById('powerbtn5').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn5').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv5').style.borderColor = "#fff";
        document.getElementById('brg5').style.backgroundColor = "#fff";
        document.getElementById('powerbtn5').style.borderColor = "#fff";
        document.getElementById('btn5').style.color = "#ccc";
        document.getElementById('active5').innerHTML = 'UnActive';
        document.getElementById('active5').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('powerbtn5').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv5').style.borderColor = "#00ff67";
        document.getElementById('brg5').style.backgroundColor = "#00ff67";
        document.getElementById('powerbtn5').style.borderColor = "#00ff67";
        document.getElementById('btn5').style.color = "#00ff67";
        document.getElementById('active5').innerHTML = 'Active';
        document.getElementById('active5').style.color = "#0099ff";
    }
}
/* ------            Plans js            ------- */





/* -------        Switches js         ------- */

//    --    ROOM 1
function switch1() {
    //Room 1 Light 1
    var status = document.getElementById('switchbtn1').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn1').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv1').style.borderColor = "#fff";
        document.getElementById('brg1').style.backgroundColor = "#fff";
        document.getElementById('btn1').style.color = "#ccc";
        document.getElementById('switchbtn1').style.borderColor = "#fff";
        document.getElementById('active1').innerHTML = 'Off';
        document.getElementById('active1').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn1').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv1').style.borderColor = "#fff000";
        document.getElementById('brg1').style.backgroundColor = "#fff000";
        document.getElementById('btn1').style.color = "#ffd800";
        document.getElementById('switchbtn1').style.borderColor = "#fff000";
        document.getElementById('active1').innerHTML = 'On';
        document.getElementById('active1').style.color = "#0099ff";
    }
}


function switch2() {
    //Room 1 Light 2
    var status = document.getElementById('switchbtn2').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn2').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv2').style.borderColor = "#fff";
        document.getElementById('brg2').style.backgroundColor = "#fff";
        document.getElementById('btn2').style.color = "#ccc";
        document.getElementById('switchbtn2').style.borderColor = "#fff";
        document.getElementById('active2').innerHTML = 'Off';
        document.getElementById('active2').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn2').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv2').style.borderColor = "#fff000";
        document.getElementById('brg2').style.backgroundColor = "#fff000";
        document.getElementById('btn2').style.color = "#ffd800";
        document.getElementById('switchbtn2').style.borderColor = "#fff000";
        document.getElementById('active2').innerHTML = 'On';
        document.getElementById('active2').style.color = "#0099ff";
    }
}

function switch3() {
    //Room 1 Fan 1
    var status = document.getElementById('switchbtn3').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn3').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv3').style.borderColor = "#fff";
        document.getElementById('brg3').style.backgroundColor = "#fff";
        document.getElementById('btn3').style.color = "#ccc";
        document.getElementById('switchbtn3').style.borderColor = "#fff";
        document.getElementById('active3').innerHTML = 'Off';
        document.getElementById('active3').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn3').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv3').style.borderColor = "#fff000";
        document.getElementById('brg3').style.backgroundColor = "#fff000";
        document.getElementById('btn3').style.color = "#ffd800";
        document.getElementById('switchbtn3').style.borderColor = "#fff000";
        document.getElementById('active3').innerHTML = 'On';
        document.getElementById('active3').style.color = "#0099ff";
    }
}

function switch4() {
    //Room 1 Fan 1
    var status = document.getElementById('switchbtn4').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn4').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv4').style.borderColor = "#fff";
        document.getElementById('brg4').style.backgroundColor = "#fff";
        document.getElementById('btn4').style.color = "#ccc";
        document.getElementById('switchbtn4').style.borderColor = "#fff";
        document.getElementById('active4').innerHTML = 'Off';
        document.getElementById('active4').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn4').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv4').style.borderColor = "#fff000";
        document.getElementById('brg4').style.backgroundColor = "#fff000";
        document.getElementById('btn4').style.color = "#ffd800";
        document.getElementById('switchbtn4').style.borderColor = "#fff000";
        document.getElementById('active4').innerHTML = 'On';
        document.getElementById('active4').style.color = "#0099ff";
    }
}

function switch5() {
    //Room 1 Fan 1
    var status = document.getElementById('switchbtn5').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn5').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv5').style.borderColor = "#fff";
        document.getElementById('brg5').style.backgroundColor = "#fff";
        document.getElementById('btn5').style.color = "#ccc";
        document.getElementById('switchbtn5').style.borderColor = "#fff";
        document.getElementById('active5').innerHTML = 'Off';
        document.getElementById('active5').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn5').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv5').style.borderColor = "#fff000";
        document.getElementById('brg5').style.backgroundColor = "#fff000";
        document.getElementById('btn5').style.color = "#ffd800";
        document.getElementById('switchbtn5').style.borderColor = "#fff000";
        document.getElementById('active5').innerHTML = 'On';
        document.getElementById('active5').style.color = "#0099ff";
    }
}

function switch6() {
    //Room 1 Fan 1
    var status = document.getElementById('switchbtn6').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn6').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv6').style.borderColor = "#fff";
        document.getElementById('brg6').style.backgroundColor = "#fff";
        document.getElementById('btn6').style.color = "#ccc";
        document.getElementById('switchbtn6').style.borderColor = "#fff";
        document.getElementById('active6').innerHTML = 'Off';
        document.getElementById('active6').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn6').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv6').style.borderColor = "#fff000";
        document.getElementById('brg6').style.backgroundColor = "#fff000";
        document.getElementById('btn6').style.color = "#ffd800";
        document.getElementById('switchbtn6').style.borderColor = "#fff000";
        document.getElementById('active6').innerHTML = 'On';
        document.getElementById('active6').style.color = "#0099ff";
    }
}
//---------ROOM 2
//---------ROOM 2
//---------ROOM 2
//---------ROOM 2
//---------ROOM 2
//---------ROOM 2


function switch7() {
    //Room 2 Light 1
    var status = document.getElementById('switchbtn7').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn7').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv7').style.borderColor = "#fff";
        document.getElementById('brg7').style.backgroundColor = "#fff";
        document.getElementById('btn7').style.color = "#ccc";
        document.getElementById('switchbtn7').style.borderColor = "#fff";
        document.getElementById('active7').innerHTML = 'Off';
        document.getElementById('active7').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn7').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv7').style.borderColor = "#fff000";
        document.getElementById('brg7').style.backgroundColor = "#fff000";
        document.getElementById('btn7').style.color = "#ffd800";
        document.getElementById('switchbtn7').style.borderColor = "#fff000";
        document.getElementById('active7').innerHTML = 'On';
        document.getElementById('active7').style.color = "#0099ff";
    }
}

function switch8() {
    //Room 2 Light 2
    var status = document.getElementById('switchbtn8').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn8').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv8').style.borderColor = "#fff";
        document.getElementById('brg8').style.backgroundColor = "#fff";
        document.getElementById('btn8').style.color = "#ccc";
        document.getElementById('switchbtn8').style.borderColor = "#fff";
        document.getElementById('active8').innerHTML = 'Off';
        document.getElementById('active8').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn8').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv8').style.borderColor = "#fff000";
        document.getElementById('brg8').style.backgroundColor = "#fff000";
        document.getElementById('btn8').style.color = "#ffd800";
        document.getElementById('switchbtn8').style.borderColor = "#fff000";
        document.getElementById('active8').innerHTML = 'On';
        document.getElementById('active8').style.color = "#0099ff";
    }
}

function switch9() {
    //Room 2 Fan 1
    var status = document.getElementById('switchbtn9').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn9').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv9').style.borderColor = "#fff";
        document.getElementById('brg9').style.backgroundColor = "#fff";
        document.getElementById('btn9').style.color = "#ccc";
        document.getElementById('switchbtn9').style.borderColor = "#fff";
        document.getElementById('active9').innerHTML = 'Off';
        document.getElementById('active9').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn9').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv9').style.borderColor = "#fff000";
        document.getElementById('brg9').style.backgroundColor = "#fff000";
        document.getElementById('btn9').style.color = "#ffd800";
        document.getElementById('switchbtn9').style.borderColor = "#fff000";
        document.getElementById('active9').innerHTML = 'On';
        document.getElementById('active9').style.color = "#0099ff";
    }
}

function switch10() {
    //Room 2 Fan 2
    var status = document.getElementById('switchbtn10').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn10').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv10').style.borderColor = "#fff";
        document.getElementById('brg10').style.backgroundColor = "#fff";
        document.getElementById('btn10').style.color = "#ccc";
        document.getElementById('switchbtn10').style.borderColor = "#fff";
        document.getElementById('active10').innerHTML = 'Off';
        document.getElementById('active10').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn10').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv10').style.borderColor = "#fff000";
        document.getElementById('brg10').style.backgroundColor = "#fff000";
        document.getElementById('btn10').style.color = "#ffd800";
        document.getElementById('switchbtn10').style.borderColor = "#fff000";
        document.getElementById('active10').innerHTML = 'On';
        document.getElementById('active10').style.color = "#0099ff";
    }
}

function switch11() {
    //Room 2 Plug 1
    var status = document.getElementById('switchbtn11').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn11').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv11').style.borderColor = "#fff";
        document.getElementById('brg11').style.backgroundColor = "#fff";
        document.getElementById('btn11').style.color = "#ccc";
        document.getElementById('switchbtn11').style.borderColor = "#fff";
        document.getElementById('active11').innerHTML = 'Off';
        document.getElementById('active11').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn11').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv11').style.borderColor = "#fff000";
        document.getElementById('brg11').style.backgroundColor = "#fff000";
        document.getElementById('btn11').style.color = "#ffd800";
        document.getElementById('switchbtn11').style.borderColor = "#fff000";
        document.getElementById('active11').innerHTML = 'On';
        document.getElementById('active11').style.color = "#0099ff";
    }
}

function switch12() {
    //Room 2 Plug 2
    var status = document.getElementById('switchbtn12').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn12').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv12').style.borderColor = "#fff";
        document.getElementById('brg12').style.backgroundColor = "#fff";
        document.getElementById('btn12').style.color = "#ccc";
        document.getElementById('switchbtn12').style.borderColor = "#fff";
        document.getElementById('active12').innerHTML = 'Off';
        document.getElementById('active12').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn12').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv12').style.borderColor = "#fff000";
        document.getElementById('brg12').style.backgroundColor = "#fff000";
        document.getElementById('btn12').style.color = "#ffd800";
        document.getElementById('switchbtn12').style.borderColor = "#fff000";
        document.getElementById('active12').innerHTML = 'On';
        document.getElementById('active12').style.color = "#0099ff";
    }
}



// ----------Hall room js
// ----------Hall room js

function switch13() {
    //hall Room light Bulb
    var status = document.getElementById('switchbtn13').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn13').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv13').style.borderColor = "#fff";
        document.getElementById('brg13').style.backgroundColor = "#fff";
        document.getElementById('btn13').style.color = "#ccc";
        document.getElementById('switchbtn13').style.borderColor = "#fff";
        document.getElementById('active13').innerHTML = 'Off';
        document.getElementById('active13').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn13').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv13').style.borderColor = "#fff000";
        document.getElementById('brg13').style.backgroundColor = "#fff000";
        document.getElementById('btn13').style.color = "#ffd800";
        document.getElementById('switchbtn13').style.borderColor = "#fff000";
        document.getElementById('active13').innerHTML = 'On';
        document.getElementById('active13').style.color = "#0099ff";
    }
}

function switch14() {
    //hall Room Fan
    var status = document.getElementById('switchbtn14').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn14').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv14').style.borderColor = "#fff";
        document.getElementById('brg14').style.backgroundColor = "#fff";
        document.getElementById('btn14').style.color = "#ccc";
        document.getElementById('switchbtn14').style.borderColor = "#fff";
        document.getElementById('active14').innerHTML = 'Off';
        document.getElementById('active14').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn14').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv14').style.borderColor = "#fff000";
        document.getElementById('brg14').style.backgroundColor = "#fff000";
        document.getElementById('btn14').style.color = "#ffd800";
        document.getElementById('switchbtn14').style.borderColor = "#fff000";
        document.getElementById('active14').innerHTML = 'On';
        document.getElementById('active14').style.color = "#0099ff";
    }
}


function switch15() {
    //hall Room televesion
    var status = document.getElementById('switchbtn15').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn15').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv15').style.borderColor = "#fff";
        document.getElementById('brg15').style.backgroundColor = "#fff";
        document.getElementById('btn15').style.color = "#ccc";
        document.getElementById('switchbtn15').style.borderColor = "#fff";
        document.getElementById('active15').innerHTML = 'Off';
        document.getElementById('active15').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn15').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv15').style.borderColor = "#fff000";
        document.getElementById('brg15').style.backgroundColor = "#fff000";
        document.getElementById('btn15').style.color = "#ffd800";
        document.getElementById('switchbtn15').style.borderColor = "#fff000";
        document.getElementById('active15').innerHTML = 'On';
        document.getElementById('active15').style.color = "#0099ff";
    }
}

function switch16() {
    //hall Room Plug
    var status = document.getElementById('switchbtn16').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn16').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv16').style.borderColor = "#fff";
        document.getElementById('brg16').style.backgroundColor = "#fff";
        document.getElementById('btn16').style.color = "#ccc";
        document.getElementById('switchbtn16').style.borderColor = "#fff";
        document.getElementById('active16').innerHTML = 'Off';
        document.getElementById('active16').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn16').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv16').style.borderColor = "#fff000";
        document.getElementById('brg16').style.backgroundColor = "#fff000";
        document.getElementById('btn16').style.color = "#ffd800";
        document.getElementById('switchbtn16').style.borderColor = "#fff000";
        document.getElementById('active16').innerHTML = 'On';
        document.getElementById('active16').style.color = "#0099ff";
    }
}
//------ kitchen
//------ kitchen

function switch17() {
    //kitchen light bulb
    var status = document.getElementById('switchbtn17').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn17').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv17').style.borderColor = "#fff";
        document.getElementById('brg17').style.backgroundColor = "#fff";
        document.getElementById('btn17').style.color = "#ccc";
        document.getElementById('switchbtn17').style.borderColor = "#fff";
        document.getElementById('active17').innerHTML = 'Off';
        document.getElementById('active17').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn17').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv17').style.borderColor = "#fff000";
        document.getElementById('brg17').style.backgroundColor = "#fff000";
        document.getElementById('btn17').style.color = "#ffd800";
        document.getElementById('switchbtn17').style.borderColor = "#fff000";
        document.getElementById('active17').innerHTML = 'On';
        document.getElementById('active17').style.color = "#0099ff";
    }
}

function switch18() {
    //kitchen exhaust fan
    var status = document.getElementById('switchbtn18').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn18').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv18').style.borderColor = "#fff";
        document.getElementById('brg18').style.backgroundColor = "#fff";
        document.getElementById('btn18').style.color = "#ccc";
        document.getElementById('switchbtn18').style.borderColor = "#fff";
        document.getElementById('active18').innerHTML = 'Off';
        document.getElementById('active18').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn18').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv18').style.borderColor = "#fff000";
        document.getElementById('brg18').style.backgroundColor = "#fff000";
        document.getElementById('btn18').style.color = "#ffd800";
        document.getElementById('switchbtn18').style.borderColor = "#fff000";
        document.getElementById('active18').innerHTML = 'On';
        document.getElementById('active18').style.color = "#0099ff";
    }
}

//------ bathroom
//------ bathroom

function switch19() {
    //bathroom light bulb
    var status = document.getElementById('switchbtn19').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn19').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv19').style.borderColor = "#fff";
        document.getElementById('brg19').style.backgroundColor = "#fff";
        document.getElementById('btn19').style.color = "#ccc";
        document.getElementById('switchbtn19').style.borderColor = "#fff";
        document.getElementById('active19').innerHTML = 'Off';
        document.getElementById('active19').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn19').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv19').style.borderColor = "#fff000";
        document.getElementById('brg19').style.backgroundColor = "#fff000";
        document.getElementById('btn19').style.color = "#ffd800";
        document.getElementById('switchbtn19').style.borderColor = "#fff000";
        document.getElementById('active19').innerHTML = 'On';
        document.getElementById('active19').style.color = "#0099ff";
    }
}

function switch20() {
    //bathroom exhaust fan
    var status = document.getElementById('switchbtn20').value;

    if (status == 'off') {
        // button is off
        document.getElementById('switchbtn20').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv20').style.borderColor = "#fff";
        document.getElementById('brg20').style.backgroundColor = "#fff";
        document.getElementById('btn20').style.color = "#ccc";
        document.getElementById('switchbtn20').style.borderColor = "#fff";
        document.getElementById('active20').innerHTML = 'Off';
        document.getElementById('active20').style.color = "#ccc";

    } else {
        // button is on
        document.getElementById('switchbtn20').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv20').style.borderColor = "#fff000";
        document.getElementById('brg20').style.backgroundColor = "#fff000";
        document.getElementById('btn20').style.color = "#ffd800";
        document.getElementById('switchbtn20').style.borderColor = "#fff000";
        document.getElementById('active20').innerHTML = 'On';
        document.getElementById('active20').style.color = "#0099ff";
    }
}



/* -------        Switches js         ------- */

//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444
//35665661664444444444444444444444444444444444444444444444444444444444

/* ------            Users js            ------- */

function block1() { //Abhishek

    var status = document.getElementById('powerbtn1').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn1').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv1').style.borderColor = "#fff";
        document.getElementById('brg1').style.backgroundColor = "#fff";
        document.getElementById('btn1').style.color = "#ccc";
        document.getElementById('powerbtn1').style.borderColor = "#fff";
        document.getElementById('active1').innerHTML = 'Online';
        document.getElementById('active1').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn1').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv1').style.borderColor = "#f00";
        document.getElementById('brg1').style.backgroundColor = "#f00";
        document.getElementById('btn1').style.color = "#f00";
        document.getElementById('powerbtn1').style.borderColor = "#f00";
        document.getElementById('active1').innerHTML = 'Blocked';
        document.getElementById('active1').style.color = "#f00"
    }
}

function block2() { //Debjeet

    var status = document.getElementById('powerbtn2').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn2').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv2').style.borderColor = "#fff";
        document.getElementById('brg2').style.backgroundColor = "#fff";
        document.getElementById('powerbtn2').style.borderColor = "#fff";
        document.getElementById('btn2').style.color = "#ccc";
        document.getElementById('active2').innerHTML = 'Online';
        document.getElementById('active2').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn2').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv2').style.borderColor = "#f00";
        document.getElementById('brg2').style.backgroundColor = "#f00";
        document.getElementById('powerbtn2').style.borderColor = "#f00";
        document.getElementById('btn2').style.color = "#f00";
        document.getElementById('active2').innerHTML = 'Blocked';
        document.getElementById('active2').style.color = "#f00"
    }
}

function block3() { //Rahul

    var status = document.getElementById('powerbtn3').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn3').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv3').style.borderColor = "#fff";
        document.getElementById('brg3').style.backgroundColor = "#fff";
        document.getElementById('powerbtn3').style.borderColor = "#fff";
        document.getElementById('btn3').style.color = "#ccc";
        document.getElementById('active3').innerHTML = 'Online';
        document.getElementById('active3').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn3').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv3').style.borderColor = "#f00";
        document.getElementById('brg3').style.backgroundColor = "#f00";
        document.getElementById('powerbtn3').style.borderColor = "#f00";
        document.getElementById('btn3').style.color = "#f00";
        document.getElementById('active3').innerHTML = 'Blocked';
        document.getElementById('active3').style.color = "#f00"
    }
}

function block4() { //Anushka

    var status = document.getElementById('powerbtn4').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn4').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv4').style.borderColor = "#fff";
        document.getElementById('brg4').style.backgroundColor = "#fff";
        document.getElementById('powerbtn4').style.borderColor = "#fff";
        document.getElementById('btn4').style.color = "#ccc";
        document.getElementById('active4').innerHTML = 'Online';
        document.getElementById('active4').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn4').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv4').style.borderColor = "#f00";
        document.getElementById('brg4').style.backgroundColor = "#f00";
        document.getElementById('powerbtn4').style.borderColor = "#f00";
        document.getElementById('btn4').style.color = "#f00";
        document.getElementById('active4').innerHTML = 'Blocked';
        document.getElementById('active4').style.color = "#f00"
    }
}

function block5() { //Subhajit

    var status = document.getElementById('powerbtn5').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn5').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv5').style.borderColor = "#fff";
        document.getElementById('brg5').style.backgroundColor = "#fff";
        document.getElementById('powerbtn5').style.borderColor = "#fff";
        document.getElementById('btn5').style.color = "#ccc";
        document.getElementById('active5').innerHTML = 'Online';
        document.getElementById('active5').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn5').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv5').style.borderColor = "#f00";
        document.getElementById('brg5').style.backgroundColor = "#f00";
        document.getElementById('powerbtn5').style.borderColor = "#f00";
        document.getElementById('btn5').style.color = "#f00";
        document.getElementById('active5').innerHTML = 'Blocked';
        document.getElementById('active5').style.color = "#f00"
    }
}

function block6() { //Koyel

    var status = document.getElementById('powerbtn6').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn6').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv6').style.borderColor = "#fff";
        document.getElementById('brg6').style.backgroundColor = "#fff";
        document.getElementById('powerbtn6').style.borderColor = "#fff";
        document.getElementById('btn6').style.color = "#ccc";
        document.getElementById('active6').innerHTML = 'Online';
        document.getElementById('active6').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn6').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv6').style.borderColor = "#f00";
        document.getElementById('brg6').style.backgroundColor = "#f00";
        document.getElementById('powerbtn6').style.borderColor = "#f00";
        document.getElementById('btn6').style.color = "#f00";
        document.getElementById('active6').innerHTML = 'Blocked';
        document.getElementById('active6').style.color = "#f00"
    }
}

function block7() { //Souvik Da

    var status = document.getElementById('powerbtn7').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn7').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv7').style.borderColor = "#fff";
        document.getElementById('brg7').style.backgroundColor = "#fff";
        document.getElementById('powerbtn7').style.borderColor = "#fff";
        document.getElementById('btn7').style.color = "#ccc";
        document.getElementById('active7').innerHTML = 'Online';
        document.getElementById('active7').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn7').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv7').style.borderColor = "#f00";
        document.getElementById('brg7').style.backgroundColor = "#f00";
        document.getElementById('powerbtn7').style.borderColor = "#f00";
        document.getElementById('btn7').style.color = "#f00";
        document.getElementById('active7').innerHTML = 'Blocked';
        document.getElementById('active7').style.color = "#f00"
    }
}

function block8() { //Piu

    var status = document.getElementById('powerbtn8').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn8').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv8').style.borderColor = "#fff";
        document.getElementById('brg8').style.backgroundColor = "#fff";
        document.getElementById('powerbtn8').style.borderColor = "#fff";
        document.getElementById('btn8').style.color = "#ccc";
        document.getElementById('active8').innerHTML = 'Online';
        document.getElementById('active8').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn8').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv8').style.borderColor = "#f00";
        document.getElementById('brg8').style.backgroundColor = "#f00";
        document.getElementById('powerbtn8').style.borderColor = "#f00";
        document.getElementById('btn8').style.color = "#f00";
        document.getElementById('active8').innerHTML = 'Blocked';
        document.getElementById('active8').style.color = "#f00"
    }
}

function block9() { //Guest 1

    var status = document.getElementById('powerbtn9').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn9').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv9').style.borderColor = "#fff";
        document.getElementById('brg9').style.backgroundColor = "#fff";
        document.getElementById('powerbtn9').style.borderColor = "#fff";
        document.getElementById('btn9').style.color = "#ccc";
        document.getElementById('active9').innerHTML = 'Online';
        document.getElementById('active9').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn9').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv9').style.borderColor = "#f00";
        document.getElementById('brg9').style.backgroundColor = "#f00";
        document.getElementById('powerbtn9').style.borderColor = "#f00";
        document.getElementById('btn9').style.color = "#f00";
        document.getElementById('active9').innerHTML = 'Blocked';
        document.getElementById('active9').style.color = "#f00"
    }
}

function block10() { //Guest 2

    var status = document.getElementById('powerbtn10').value;

    if (status == 'off') {
        // button is off
        document.getElementById('powerbtn10').value = 'on'; //Status(reset) = ON

        document.getElementById('planDiv10').style.borderColor = "#fff";
        document.getElementById('brg10').style.backgroundColor = "#fff";
        document.getElementById('powerbtn10').style.borderColor = "#fff";
        document.getElementById('btn10').style.color = "#ccc";
        document.getElementById('active10').innerHTML = 'Online';
        document.getElementById('active10').style.color = "#0099ff";

    } else {
        // button is on
        document.getElementById('powerbtn10').value = 'off'; //Status(reset) = OFF

        document.getElementById('planDiv10').style.borderColor = "#f00";
        document.getElementById('brg10').style.backgroundColor = "#f00";
        document.getElementById('powerbtn10').style.borderColor = "#f00";
        document.getElementById('btn10').style.color = "#f00";
        document.getElementById('active10').innerHTML = 'Blocked';
        document.getElementById('active10').style.color = "#f00"
    }
}

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
