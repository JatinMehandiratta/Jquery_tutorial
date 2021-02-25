<!DOCTYPE html>
<html>

<head>
    <title>Selector Traversing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/assignment3ajax.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/twbs.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container mt-2">
        <div class="jumbotron mb-4 bg-primary">
            <h2 class="text-center">User Details From Json Array</h2>
        </div>
        <table class="table table-bordered border-primary table-responsive-md">
            <caption>List of users</caption>
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody id="tbody" class="table-hover">
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
    <div id="pager" class="d-flex justify-content-center">
        <ul id="pagination" class="pagination-sm"></ul>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>