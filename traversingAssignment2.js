
$(document).ready(function () {
    $('#addAnother').click(function () {
        var add = $('#row1').clone(true);
        $(add).insertAfter("#row1");
    });
    $("#remove").click(function () {
        $("#row1").remove();
    });
});