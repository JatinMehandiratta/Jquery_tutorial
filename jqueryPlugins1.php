<!DOCTYPE html>
<html>

<head>
    <title>JQZoom</title>
    <script src="js/jquery-1.6.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.jqzoom-core.js"></script>
    <script type="text/javascript" src="js/plugin1.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.jqzoom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript">
        $(document).ready(function() {
            $('.MYCLASS').jqzoom();
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-2 mb-3">
            <div class="col-md-12 mr-4">
                <a href="images/bigImage.jpg" class="MYCLASS" title="MYTITLE">
                    <img src="images/download.jpeg" title="IMAGE TITLE">
                </a>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <a href="images/bigImage.jpg" class="jqzoom2" title="JQZoom">
                    <img src="images/download.jpeg" title="JQZoom" alt="JQZoom" />
                </a>
            </div>
        </div>
    </div>
</body>

</html>