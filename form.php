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
            <form method="post" id="myForm">
                <div class="form-group mt-2 p-2">
                    <label for="email" class="mb-2">
                        Email:
                    </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group mt-2 p-2">
                    <label for="password" class="mb-2">
                        Password:
                    </label>
                    <input type="password" name="pass" id="password" class="form-control">
                </div>

                <div class="form-group mt-2 p-2">
                    <label for="conpassword" class="mb-2">
                        Confirm Password:
                    </label>
                    <input type="password" name="conpassword" id="conpassword" class="form-control">
                </div>
                <div class="text-center mb-4 mt-4">
                    <input type="submit" id="submitbtn" value="Submit" class="enable btn btn-success" disabled='disabled'>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        function emailValidate() {
            var hasError = false;
            $('.error').hide();
            $('#email').blur(function() {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var emailaddressVal = $("#email").val();
                if (emailaddressVal == '') {
                    $("#email").after('<div class="error">Please enter your email address.</div>');
                    hasError = true;
                } else if (!emailReg.test(emailaddressVal)) {
                    $("#email").after('<span class="error">Enter a valid email address.</span>');
                    hasError = true;
                }
                if (hasError == true){
                        $('#submitbtn').prop('disabled', true);
                    }else {
            $('#submitbtn').prop('disabled', false);
        }
            });
        }

        function passwordValidate() {
            $('#password').blur(function() {
                var hasError = false;
                $('.error').hide();
                var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
                var passwordVal = $("#password").val();
                if (passwordVal == '') {
                    $("#password").after('<div class="error">Please enter your Password.</div>');
                    hasError = true;
                } else if (passwordVal.match(passw)) {
                    hasError = false;
                } else {
                    $("#password").after('<div class="error">Password should be at leaset 6 digits with one upper case and one lowercase letter.</div>');
                    hasError = true;
                }
                if (hasError == true){
                        $('#submitbtn').prop('disabled', true);
                    }else {
            $('#submitbtn').prop('disabled', false);
        }
                
            });
        }

        function conpasswordValidate() {
            $('#conpassword').blur(function() {
                var hasError = false;
                var passwordVal = $("#password").val();
                var conpasswordVal = $("#conpassword").val();
                if (conpasswordVal == '') {
                    $("#conpassword").after('<div class="error">Please enter your Confirm Password.</div>');
                    hasError = true;
                } else if (passwordVal !== conpasswordVal) {
                    $("#conpassword").after('<div class="error">Password and Confrim Password do not Match.</div>');
                    hasError = true;
                }
                    if (hasError == true){
                        $('#submitbtn').prop('disabled', true);
                    }else {
            $('#submitbtn').prop('disabled', false);
        }
            });
        }
        emailValidate();
        passwordValidate();
        conpasswordValidate();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" type="text/javascript" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

</html>