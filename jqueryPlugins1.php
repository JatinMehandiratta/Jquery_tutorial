<!DOCTYPE html>
<html>

<head>
    <title>JQZoom</title>
    <script src="js/jquery-1.6.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.jqzoom-core.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.jqzoom.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $('.MYCLASS').jqzoom();
        });
    </script>
    <script>
        $(document).ready(function() {
            var options = {
                zoomType: 'standard',
                preloadImages: true,
                alwaysOn: true,
                zoomWidth: 300,
                zoomHeight: 250,
                xOffset: 90,
                yOffset: 30,
                position: 'left',
                lens: false,
                preloadImages: false,
                title: false
            };
            $('.MYCLASS').jqzoom(options);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.jqzoom2').jqzoom({
                zoomType: 'innerzoom',
                lens: false,
                preloadImages: false,
                title: false
            });
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 m-4">
                <a href="images/bigImage.jpg" class="MYCLASS" title="MYTITLE">
                    <img src="images/download.jpeg" title="IMAGE TITLE">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="images/bigImage.jpg" class="jqzoom2" title="JQZoom">
                    <img src="images/download.jpeg" title="JQZoom" alt="JQZoom" />
                </a>
            </div>
        </div>
        </div>
</body>

</html>