<!doctype html5>
<html>
<head>
    <title>Fancy Box</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p>
        Examples of displaying images individually and combining into a gallery
    </p>

    <hr class="my-5" />
    <h3>Individual images</h3>
    <p class="imglist">
        <a href="https://source.unsplash.com/IvfoDk30JnI/1500x1000" data-fancybox data-caption="&lt;b&gt;Single photo&lt;/b&gt;&lt;br /&gt;">
            <img src="https://source.unsplash.com/IvfoDk30JnI/240x160" />
        </a>

        <a href="https://source.unsplash.com/0JYgd2QuMfw/1500x1000" data-fancybox data-caption="This image has a simple caption">
            <img src="https://source.unsplash.com/0JYgd2QuMfw/240x160" />
        </a>

        <a href="https://source.unsplash.com/xAgvgQpYsf4/1500x1000" data-fancybox>
            <img src="https://source.unsplash.com/xAgvgQpYsf4/240x160" />
        </a>
    </p>

    <h3 class="mt-5">Image gallery</h3>
    <p class="imglist" style="max-width: 1000px;">
        <a href="https://source.unsplash.com/juHayWuaaoQ/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/juHayWuaaoQ/240x160" />
        </a>

        <a href="https://source.unsplash.com/eWFdaPRFjwE/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/eWFdaPRFjwE/240x160" />
        </a>

        <a href="https://source.unsplash.com/i2KibvLYjqk/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/i2KibvLYjqk/240x160" />
        </a>

        <a href="https://source.unsplash.com/RFgO9B_OR4g/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/RFgO9B_OR4g/240x160" />
        </a>

        <a href="https://source.unsplash.com/7bwQXzbF6KE/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/7bwQXzbF6KE/240x160" />
        </a>

        <a href="https://source.unsplash.com/NhU0nUR7920/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/NhU0nUR7920/240x160" />
        </a>

        <a href="https://source.unsplash.com/B2LYYV9-y0s/1500x1000" data-fancybox="images">
            <img src="https://source.unsplash.com/B2LYYV9-y0s/240x160" />
        </a>
    </p>

    <h3 class="mt-5">Gallery with one preview image</h3>
    <p>
        <a href="https://source.unsplash.com/sGEHs-HY-Oo/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000" data-thumbs='{"autoStart":true}'>
            <img src="https://source.unsplash.com/sGEHs-HY-Oo/240x160" />
        </a>
    </p>
    <div style="display: none;">
        <a href="https://source.unsplash.com/Ai2TRdvI6gM/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000"></a>

        <a href="https://source.unsplash.com/Hau6K6VP5vs/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000"></a>

        <a href="https://source.unsplash.com/muFaKaGw0eE/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000"></a>

        <a href="https://source.unsplash.com/eXHeq48Z-Q4/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000"></a>

        <a href="https://source.unsplash.com/hBYzBU1xP6s/1500x1000" data-fancybox="images-preview" data-width="1500" data-height="1000"></a>
    </div>

    <h3 class="mt-5">Data attributes</h3>
    <h3 class="mt-5">Using trigger element</h3>
    <br>
    <p class="imglist" style="max-width: 520px;">
        <a data-fancybox-trigger="preview" href="javascript:;">
            <img src="https://source.unsplash.com/LuK-MuZ-yf0/510x340" />
        </a>
        <a href="https://source.unsplash.com/LuK-MuZ-yf0/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
            <img src="https://source.unsplash.com/LuK-MuZ-yf0/120x80" />
        </a>
        <a href="https://source.unsplash.com/Oaqk7qqNh_c/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
            <img src="https://source.unsplash.com/Oaqk7qqNh_c/120x80" />
        </a>
        <a href="https://source.unsplash.com/X9GHkHbJIaU/1500x1000" data-fancybox="preview" data-width="1500" data-height="1000">
            <img src="https://source.unsplash.com/X9GHkHbJIaU/120x80" />
        </a>
    </p>
    <script src="js/jquery.fancybox.js" type="text/javascript"></script>
</body>

</html>