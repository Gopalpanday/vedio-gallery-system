$(document).ready(function () {
    var videoID = "";
    $('.clip').click(function () {
        videoID = this.id;
    });
    $(".clip").click(function () {
        var p = $('#' + videoID).attr('src');
        $("#playerPanel").attr("src", p);
    });
}
);
