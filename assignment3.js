$(document).ready(function () {
    $("#link1").click(function () {
        alert("Handler for .click() called.");
    });
    $("a").hover(function () {
        $(this).css("background-color", "yellow");
    }, function () {
        $(this).css("background-color", "pink");
    });
    $("#link2").mouseover(function () {
        alert("Handler for .mouseover() called.");
    });
    $("#link2").mouseout(function () {
        alert("Handler for .mouseout() called.");
    });
    $("#link3").focus(function () {
        alert("Handler for .focus() called.");
    });
    document.getElementById("link4").addEventListener("click", function (event) {
        event.preventDefault()
        alert("disabled");
    });
});
