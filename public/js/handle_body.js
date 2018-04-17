$(document).ready(function() {
    $("#hoso").click(function() {
        $("#wrapped embed").attr("src", "files/CVofQuang.pdf");
    })
    window.history.pushState("", "", $url);
})