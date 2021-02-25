$(document).ready(function () {
    $('#passempty').hide();
    $('#passcheck').hide();
    $('#emailcheck').hide();
    $('#emailempty').hide();
    $('#conpassempty').hide();
    $('#conpasscheck').hide();
    $('#conpasscheck1').hide();

    var emailError = false;
    var passError = false;
    var conpassError = false;

    $('#email').blur(function () {

        validateEmail();
    });

    function validateEmail() {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailaddressVal = $("#email").val();
        if (emailaddressVal == '') {
            $('#emailempty').show();
            $('#emailcheck').hide();
            emailError = true;
        } else if (!emailReg.test(emailaddressVal)) {
            $('#emailcheck').show();
            $('#emailempty').hide();
            emailError = true;
        } else {
            $('#emailcheck').hide();
            $('#emailempty').hide();
            emailError = false;
        }
        if (emailError == false) {
            $('#submitbtn').prop('disabled', false);
        } else {
            $('#submitbtn').prop('disabled', true);
        }
    }

    $('#password').blur(function () {
        validatePassword();
    });

    function validatePassword() {
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        var passwordVal = $("#password").val();
        if (passwordVal == '') {
            $('#passempty').show();
            $('#passcheck').hide();
            passError = true;
        } else if (!passwordVal.match(passw)) {
            $('#passcheck').show();
            $('#passempty').hide();
            passError = true;
        } else {
            $('#passcheck').hide();
            $('#passempty').hide();
            passError = false;
        }
        if (passError == false) {
            $('#submitbtn').prop('disabled', false);
        } else {
            $('#submitbtn').prop('disabled', true);
        }
    }

    $('#conpassword').blur(function () {
        validateConfirmPassword();
    });

    function validateConfirmPassword() {
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        var conpasswordVal = $("#conpassword").val();
        var passwordVal = $("#password").val();
        if (conpasswordVal == '') {
            $('#conpassempty').show();
            $('#conpasscheck').hide();
            $('#conpasscheck1').hide();
            conpassError = true;
        } else if (passwordVal !== conpasswordVal) {
            $('#conpasscheck').show();
            $('#conpassempty').hide();
            $('#conpasscheck1').hide();
            conpassError = true;
        } else if (!conpasswordVal.match(passw)) {
            $('#conpasscheck').hide();
            $('#conpassempty').hide();
            $('#conpasscheck1').show();
            conpassError = true;
        } else {
            $('#conpasscheck').hide();
            $('#conpassempty').hide();
            $('#conpasscheck1').hide();
            conpassError = false;
        }
        if (conpassError == false) {
            $('#submitbtn').prop('disabled', false);
        } else {
            $('#submitbtn').prop('disabled', true);
        }
    }
});