$(document).ready(function () {
    $("#alert_box").hide();

    $("#name").keyup(function () {
        check_name()
    });
    $("#mobile").keyup(function () {
        check_mobile()
    });
    $("#uname").keyup(function () {
        check_username();
    });
    $("#pass").keyup(function () {
        check_pass()
    });
    $("#currPass").keyup(function () {
        currPass()
    });
    $("#newPass").keyup(function () {
        newPass()
    });
    $("#conNewPass").keyup(function () {
        conNewPass()
    });
    $("#email").keyup(function () {
        check_email();
    });
    $("#password").keyup(function () {
        check_password();
    });
    $("#addr").keyup(function () {
        check_addr();
    });
$("#city").keyup(function (e) { 
    check_city();
});
$("#pincode").keyup(function (e) { 
    check_pincode();
});
$("#comment").keyup(function (e) { 
    check_comment()
});

    function check_name() {
        var name = $("#name").val();
        if (name.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter Your Name");
        } else {
            $("#alert_box").hide();
        }
    }


    function check_username() {
        var username = $("#uname").val();
        if (username.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your Username");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_pass() {
        var pass = $("#pass").val();
        if (pass.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your password !");
        } else {
            $("#alert_box").hide();
        }
    }
    function newPass() {
        var newPass = $("#newPass").val();
        
        if (newPass.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your password !");
        } else {
            $("#alert_box").hide();
        }
    }
    function currPass() {
        var currPass = $("#currPass").val();
       
        if (currPass.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your password !");
        } else {
            $("#alert_box").hide();
        }
    }
    function conNewPass(){
        var conNewPass=$("#conNewPass").val();
        var newPass=$("#newPass").val();
        if(conNewPass.length==0)
        {
            $("#alert_box").show();
            $("#msg").text("Enter your password !");
        }else if(newPass !=conNewPass){
            $("#alert_box").show();
            $("#msg").text("Enter your password is not same!");
        }else{
            $("#alert_box").hide();
        }
    }
    function check_password() {
        var pass = $("#pass").val();
        var cpass = $("#password").val();
        if (pass.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your password !");
        } else if (pass != cpass) {
            $("#alert_box").show();
            $("#msg").text("password is not same !");

        }
        else {
            $("#alert_box").hide();
        }
    }
    function check_email() {
        var email = $("#email").val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your email !");

        } else if (!regex.test(email)) {
            $("#alert_box").show();
            $("#msg").text("Enter valid email !");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_mobile() {
        var no = $("#mobile").val();
        if (no.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your Phone Number !");
        } else if (no.length != 10) {
            $("#alert_box").show();
            $("#msg").text("Enter your valid Phone Number !");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_addr() {
        var addr = $("#addr").val();
        if (addr.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your Full Address !");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_city(){
        var city = $("#city").val();
        if (city.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your city Name !");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_pincode(){
        var pin = $("#pincode").val();
        if (pin.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Enter your city Name !");
        } else {
            $("#alert_box").hide();
        }
    }
    function check_comment(){
        var com = $("#comment").val();
        if (com.length == 0) {
            $("#alert_box").show();
            $("#msg").text("Write a review !");
        } else {
            $("#alert_box").hide();
        }
    }
});