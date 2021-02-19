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
                    <ul class="nested">
                        <li>
                            <input type="checkbox" name="property" id="property">
                            <label>Property</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="eproperty" id="property"> Edit Property
                                </li>
                                <li>
                                    <input type="checkbox" name="rproperty" id="property"> Remove Property
                                </li>
                                <li>
                                    <input type="checkbox" name="aproperty" id="property"> Add Property
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="testimonial" id="testimonial">
                            <label>Testimonial</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="tadd" id="tadd"> Add
                                </li>
                                <li>
                                    <input type="checkbox" name="tremove" id="tremove"> Remove
                                </li>
                                <li>
                                    <input type="checkbox" name="tview" id="tview"> View
                                </li>
                                <li>
                                    <input type="checkbox" name="tedit" id="tedit"> Edit
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="users" id="users">
                            <label>Users</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="edituser" id="edituser"> Edit User
                                </li>
                                <li>
                                    <input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User
                                </li>
                                <li>
                                    <input type="checkbox" name="adduser" id="adduser"> Add User
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="membership" id="membership">
                            <label>Membership</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="medit" id="medit"> Edit
                                </li>
                                <li>
                                    <input type="checkbox" name="mremove" id="mremove"> Remove
                                </li>
                                <li>
                                    <input type="checkbox" name="madd" id="madd"> Add
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="row mt-2 mb-2 p-3 text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" type="text/javascript" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

</html>