<!DOCTYPE html>
<html>

<head>
    <title>Selector Traversing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="js/traversingAssignment2.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container mt-2 mr-2 ml-2 p-2" id="Container">
        <div class="row mb-2 mt-2">
            <div class="col-md-12">
                <div class="card" id="mycard">
                    <div class="card-header p-1">
                        <h2 class="text-center">Property Image</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#" id="myform">
                            <div class="row mt-1 mb-1 p-1" id="row">
                                <div class="col-md-5">
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                                <div class="col-md-5">
                                    <select class="select form-control" id="select" name="select">
                                        <option selected="" disabled="">Choose an Option</option>
                                        <option>Primary Image</option>
                                        <option>Secondary Image</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 text-center">
                    <input type="button" id="addAnother" value="Add Another" class="btn btn-primary btn-sm">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>