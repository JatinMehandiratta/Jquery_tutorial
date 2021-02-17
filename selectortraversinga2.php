<!doctype html5>
<html>

<head>
    <title>A Simple form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="row mt-2 mb-2 p-3">
        <div class="jumbotron bg-secondary text-center" height="40px;">
            <h1>Sign Up Form</h1>
        </div>
    </div>
    <div class="container mt-5">
        <form name="simpleForm" action="#" method="post" id="simpleForm">
            <div class="form-group">
                <div class="row mt-2 mb-2 p-3">
                    <div class="col-md-3" id="border">
                        <h3>Property Image</h3>
                    </div>
                    <div class="col-md-6">
                        <input type="file" class="form-control"><br>
                        <a href="#">Add Another</a>
                    </div>
                    <div class="col-md-3">
                        <select>
                            <option>Primary Image</option>
                            <option>Secondary Image</option>
                            <option>Tertiary Image</option>
                        </select>
                        <a href="#">Remove</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" type="text/javascript" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>