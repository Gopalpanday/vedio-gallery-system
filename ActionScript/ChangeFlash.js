$(document).ready(function () {
    var videoID = "";
    $(".clip").click(function () {
        videoID = this.id;
        //var p = $('#' + videoID).attr('src');
        alert("welcome " + videoID);
        $("#playerPanel").attr("src", videoID);
    });
    $(".clipLabel").click(function () {
        videoID = this.id;
        alert("Right Click--> Open in New Tab");
    });
});
