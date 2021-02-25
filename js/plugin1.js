
$(document).ready(function () {
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
$(document).ready(function () {
    $('.jqzoom2').jqzoom({
        zoomType: 'innerzoom',
        lens: false,
        preloadImages: false,
        title: false
    });
});