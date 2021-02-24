<!DOCTYPE html>
<html>

<head>
    <title>Nivo Slider</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js" media="screen"></script>
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="themes/light/light.css" media="screen">
    <link rel="stylesheet" type="text/css" href="themes/bar/bar.css" media="screen">
    <link rel="stylesheet" type="text/css" href="themes/dark/dark.css" media="screen">
    <link rel="stylesheet" type="text/css" href="themes/default/default.css" media="screen">

</head>

<body>
    <div class="container">
        <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="jquery-slider-demo" class="nivoSlider">
                    <a href="#"><img src="images/toystory.jpg" alt="" data-thumb="images/toystory.jpg" /></a>
                    <a href="#"><img src="images/up.jpg" alt="" data-thumb="images/up.jpg" /></a>
                    <a href="#"><img src="images/walle.jpg" alt="" data-thumb="images/walle.jpg" /></a>
                    <a href="#"><img src="images/nemo.jpg" alt="" data-thumb="images/nemo.jpg" /></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(window).load(function() {
        $('.nivoSlider').nivoSlider({
            effect: 'random', // Transition effect between images (see below)
            slices: 15, // For slice animations
            boxCols: 8, // For box animations
            boxRows: 4, // For box animations
            animSpeed: 500, // Slide transition speed
            pauseTime: 3000, // How long each slide will show
            startSlide: 0, // Set starting Slide (0 index)
            directionNav: true, // Next & Prev navigation
            controlNav: true, // 1,2,3... navigation
            controlNavThumbs: true, // Use thumbnails for Control Nav
            pauseOnHover: true, // Stop animation while hovering
            manualAdvance: false, // Force manual transitions
            prevText: 'Prev', // Prev directionNav text
            nextText: 'Next', // Next directionNav text
            randomStart: false, // Start on a random slide
            beforeChange: function() {}, // Triggers before a slide transition
            afterChange: function() {}, // Triggers after a slide transition
            slideshowEnd: function() {}, // Triggers after all slides have been shown
            lastSlide: function() {}, // Triggers when last slide is shown
            afterLoad: function() {} // Triggers when slider has loaded
        });
    });
</script>


</html>