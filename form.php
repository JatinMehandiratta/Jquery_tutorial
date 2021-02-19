<!doctype html5>
<html>

<head>
    <title>Sign Up Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="row mt-2 mb-2 p-3">
        <div class="jumbotron bg-success text-center" height="40px;">
            <h1>Sign Up Form</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="col-lg-8
           m-auto d-block">
            <form>
                <div class="form-group mt-2 p-2">
                    <label for="email" class="mb-2">
                        Email:
                    </label>
                    <input type="text" name="email" id="email" class="form-control">
                    <h5 id="emailempty" class="error">
                        Please enter your Email.
                    </h5>
                    <h5 id="emailcheck" class="error">
                        Please enter a valid Email .
                    </h5>
                </div>

                <div class="form-group mt-2 p-2">
                    <label for="password" class="mb-2">
                        Password:
                    </label>
                    <input type="password" name="pass" id="password" class="form-control">
                    <h5 id="passempty" class="error">
                        Please enter your Password.
                    </h5>
                    <h5 id="passcheck" class="error">
                        Password should be at leaset 6 digits with one upper case and one lowercase letter.
                    </h5>
                </div>

                <div class="form-group mt-2 p-2">
                    <label for="conpassword" class="mb-2">
                        Confirm Password:
                    </label>
                    <input type="password" name="conpassword" id="conpassword" class="form-control">
                    <h5 id="conpassempty" class="error">
                        Please enter your Confirm Password.
                    </h5>
                    <h5 id="conpasscheck" class="error">
                        Password and Confirm Password do not Match.
                    </h5>
                    <h5 id="conpasscheck1" class="error">
                        Confirm Password should be at leaset 6 digits with one upper case and one lowercase letter.
                    </h5>
                </div>
                <div class="text-center mb-4 mt-4">
                    <input type="submit" id="submitbtn" value="Submit" class="btn btn-success" disabled='disabled'>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
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

        $('#email').blur(function() {

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

        $('#password').blur(function() {
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

        $('#conpassword').blur(function() {
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" type="text/javascript" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

</html>