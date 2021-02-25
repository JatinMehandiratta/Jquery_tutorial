<!doctype html5>
<html>

<head>
    <title>A Simple form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/selectorTraversinga1.js" type="text/javascript"></script>
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
                                    <ul>
                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 1
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Edit Property 11
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 111</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Edit Property 12
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 121</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 2
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Edit Property 21
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 211</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Edit Property 22
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 221</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Edit Property 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="rproperty" id="property"> Remove Property
                                    <ul>
                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 1
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Remove Property 11
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 111</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Remove Property 12
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 121</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 2
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Remove Property 21
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 211</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Remove Property 22
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 221</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Remove Property 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="aproperty" id="property"> Add Property
                                    <ul>
                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 1
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Add Property 11
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 111</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Add Property 12
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 121</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 2
                                            <ul>
                                                <li><input type="checkbox" name="eproperty" id="property"> Add Property 21
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 211</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="eproperty" id="property"> Add Property 22
                                                    <ul>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 221</li>
                                                        <li><input type="checkbox" name="eproperty" id="property"> Add Property 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="testimonial" id="testimonial">
                            <label>Testimonial</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="tadd" id="tadd"> Add
                                    <ul>
                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 1
                                            <ul>
                                                <li><input type="checkbox" name="tadd" id="tadd"> Add 11
                                                    <ul>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 111</li>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tadd" id="tadd"> Add 12
                                                    <ul>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 121</li>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 2
                                            <ul>
                                                <li><input type="checkbox" name="tadd" id="tadd"> Add 21
                                                    <ul>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 211</li>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tadd" id="tadd"> Add 22
                                                    <ul>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 221</li>
                                                        <li><input type="checkbox" name="tadd" id="tadd"> Add 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="tremove" id="tremove"> Remove
                                    <ul>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 1
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Remove 11
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 111</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Remove 12
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 121</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 2
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Remove 21
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 211</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Remove 22
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 221</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Remove 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="tview" id="tview"> View
                                    <ul>
                                        <li><input type="checkbox" name="tremove" id="tremove"> View 1
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> View 11
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 111</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> View 12
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 121</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="tremove" id="tremove"> View 2
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> View 21
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 211</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> View 22
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 221</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> View 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="tedit" id="tedit"> Edit
                                    <ul>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 1
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit 11
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 111</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit 12
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 121</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 2
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit 21
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 211</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit 22
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 221</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox" name="users" id="users">
                            <label>Users</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="edituser" id="edituser"> Edit User
                                    <ul>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 1
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit User 11
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 111</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit User 12
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 121</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 2
                                            <ul>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit User 21
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 211</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="tremove" id="tremove"> Edit User 22
                                                    <ul>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 221</li>
                                                        <li><input type="checkbox" name="tremove" id="tremove"> Edit User 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 1
                                            <ul>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 11
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 111</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 12
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 121</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 2
                                            <ul>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 21
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 211</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 22
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 221</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> View Edit User 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <input type="checkbox" name="adduser" id="adduser"> Add User
                                    <ul>
                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 1
                                            <ul>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 11
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 111</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 112</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 12
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 121</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 122</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 2
                                            <ul>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 21
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 211</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 212</li>
                                                    </ul>
                                                </li>
                                                <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 22
                                                    <ul>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 221</li>
                                                        <li><input type="checkbox" name="viewedituser" id="viewedituser"> Add User 222</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" type="text/javascript" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

</html>