$(document).ready(function () {
    var videoID = "";
    $(".clip").click(function () {
        videoID = this.id;
        var p = $('#' + videoID).attr('src');
        $("#playerPanel").attr("src", p);
    });
    $(".clipLabel").click(function () {
        videoID = this.id;
        alert("Right Click--> Open");
    });
});
