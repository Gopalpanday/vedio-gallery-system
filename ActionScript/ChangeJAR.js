$(document).ready(function () {
    var videoID = "";
    $(".clip").click(function () {
        videoID = this.id;
        //alert("Welcome " + videoID);
        $("#playerPanel").attr("src", videoID);
    });
    $(".clipLabel").click(function () {
        videoID = this.id;
        alert("Right Click--> Open");
    });
});
