//*************************************
//Video 2013-2014
//*************************************
var imagesA = ["Video2013-2014/a.mp4", "Video2013-2014/b.mp4", "Video2013-2014/c.mp4", "Video2013-2014/d.mp4", "Video2013-2014/e.mp4"];
var i = 0;

var imagesB = ["Video2014-2015/a.mp4", "Video2014-2015/b.mp4", "Video2014-2015/c.mp4", "Video2014-2015/d.mp4", "Video2014-2015/e.mp4", "Video2014-2015/f.mp4", "Video2014-2015/g.mp4", "Video2014-2015/h.mp4", "Video2014-2015/i.mp4"];
var j = 0;

var colorsA = new Array("#000000", "#000080", "#0000FF", "#00FF7F", "#00FFFF", "#2F4F4F", "#CD5C5C", "#CD853F", "#D2691E", "#D2B48C", "#D3D3D3", "#D8BFD8", "#DA70D6", "#DAA520", "#DB7093", "#DC143C", "#4682B4", "#483D8B", "#4B0082", "#008000", "#008B8B", "#00BFFF", "#00CED1", "#DCDCDC", "#DDA0DD", "#DEB887", "#E9967A", "#EE82EE", "#EEE8AA", "#F08080", "#F0E68C", "#F4A460", "#F5FFFA", "#556B2F", "#696969", "#6B8E23", "#778899", "#7B68EE", "#800000", "#800080", "#808000", "#8A2BE2", "#8B008B", "#FA8072", "#FDF5E6", "#FF0000", "#FF00FF", "#FF1493", "#FF4500", "#FFA07A", "#FFA500", "#FFB6C1", "#FFC0CB", "#8B4513", "#8FBC8F", "#9370DB", "#9ACD32", "#A0522D", "#A52A2A", "#A9A9A9", "#B22222", "#B8860B", "#BA55D3", "#BC8F8F", "#BDB76B", "#C0C0C0", "#C71585", "#FFD700", "#FFDAB9", "#FFE4E1", "#FFFF00");
var colorIndexA = 1;
function changeContainerColorA() {
    $(".headerVideoA").css('background-color', colorsA[colorIndexA]);
    $(".footerVideoA").css('background-color', colorsA[colorIndexA]);
    $(".containerVideoA").css('border-left-color', colorsA[colorIndexA]);
    $(".containerVideoA").css('border-right-color', colorsA[colorIndexA]);

    if (colorIndexA == colorsA.length - 1) {
        colorIndexA = 1;
    } else {
        colorIndexA++;
    }
}

var colorsB = new Array("#00FFFF", "#2F4F4F", "#CD5C5C", "#CD853F", "#D2691E", "#D2B48C", "#D3D3D3", "#D8BFD8", "#DA70D6", "#DAA520", "#DB7093", "#DC143C", "#4682B4", "#483D8B", "#4B0082", "#008000", "#008B8B", "#00BFFF", "#00CED1", "#DCDCDC", "#DDA0DD", "#DEB887", "#E9967A", "#EE82EE", "#EEE8AA", "#F08080", "#F0E68C", "#F4A460", "#F5FFFA", "#556B2F", "#696969", "#6B8E23", "#778899", "#7B68EE", "#800000", "#800080", "#808000", "#8A2BE2", "#8B008B", "#FA8072", "#FDF5E6", "#FF0000", "#FF00FF", "#FF1493", "#FF4500", "#FFA07A", "#FFA500", "#FFB6C1", "#FFC0CB", "#8B4513", "#8FBC8F", "#9370DB", "#9ACD32", "#A0522D", "#000000", "#000080", "#0000FF", "#00FF7F", "#A52A2A", "#A9A9A9", "#B22222", "#B8860B", "#BA55D3", "#BC8F8F", "#BDB76B", "#C0C0C0", "#C71585", "#FFD700", "#FFDAB9", "#FFE4E1", "#FFFF00");
var colorIndexB = 1;
function changeContainerColorB() {
    $(".headerVideoB").css('background-color', colorsB[colorIndexB]);
    $(".footerVideoB").css('background-color', colorsB[colorIndexB]);
    $(".containerVideoB").css('border-left-color', colorsB[colorIndexB]);
    $(".containerVideoB").css('border-right-color', colorsB[colorIndexB]);

    if (colorIndexB == colorsB.length - 1) {
        colorIndexB = 1;
    } else {
        colorIndexB++;
    }
}



//*************************************
//Document Ready Function
//*************************************

$(document).ready(function () {

//*************************************
    //Controls Events
//*************************************

    $("#closeBtnA").click(function () {

    });

    $("#minBtnA").click(function () {
        $(".containerVideoA").css({"position": "absolute", "left": "10px", "top": "10px", "width": "220px", "height": "230px"});
        $("#myVideoA").attr({width: "200px", height: "150px"});
        $(".footerVideoA").css("top", "190px");

    });

    $("#maxBtnA").click(function () {
        $(".containerVideoA").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "525px"});
        $("#myVideoA").attr({width: "700px", height: "445px"});
        $(".footerVideoA").css("top", "485px");
    });

    $("#prevBtnA").click(function () {
        i--;
        if (i < 0) {
            i = 4;
        }
        $("#myVideoA").attr("src", imagesA[i]);
    });

    $("#nextBtnA").click(function () {
        i++;
        if (i > 4) {
            i = 0;
        }
        $("#myVideoA").attr("src", imagesA[i]);
    });


    //--------------------------------------------------------//


    $("#closeBtnB").click(function () {

    });

    $("#minBtnB").click(function () {
        $(".containerVideoB").css({"position": "absolute", "left": "10px", "top": "250px", "width": "220px", "height": "230px"});
        $("#myVideoB").attr({width: "200px", height: "150px"});
        $(".footerVideoB").css("top", "190px");
    });

    $("#maxBtnB").click(function () {
        $(".containerVideoB").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "525px"});
        $("#myVideoB").attr({width: "700px", height: "445px"});
        $(".footerVideoB").css("top", "485px");
    });

    $("#prevBtnB").click(function () {
        i--;
        if (i < 0) {
            i = 8;
        }
        $("#myVideoB").attr("src", imagesB[i]);
    });

    $("#nextBtnB").click(function () {
        i++;
        if (i > 8) {
            i = 0;
        }
        $("#myVideoB").attr("src", imagesB[i]);
    });



//*************************************
    //Video 2013-2014
//*************************************
    setInterval(changeContainerColorA, 10000);

    $(".containerVideoA").draggable();
    $(".containerVideoA").resizable({
        animate: true,
        resize: function (event, ui) {
            var w = ui.size.width - 70;
            var h = ui.size.height - 85;
            var t = ui.size.height - 40;

            $("#myVideoA").attr({width: w, height: h});
            $(".footerVideoA").css("top", t);
        }
    });
    $(".headerVideoA").dblclick(function () {
        $(".containerVideoA").css({"position": "absolute", "left": "10px", "top": "10px", "width": "220px", "height": "230px"});
        $("#myVideoA").attr({width: "200px", height: "150px"});
        $(".footerVideoA").css("top", "190px");
    });

    $("#myVideoA").dblclick(function () {
        $(".containerVideoA").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "525px"});
        $("#myVideoA").attr({width: "700px", height: "445px"});
        $(".footerVideoA").css("top", "485px");
    });


//*************************************
    //Video 2014-2015
//*************************************

    setInterval(changeContainerColorB, 10000);

    $(".containerVideoB").draggable();
    $(".containerVideoB").resizable({
        animate: true,
        resize: function (event, ui) {
            var w = ui.size.width - 70;
            var h = ui.size.height - 85;
            var t = ui.size.height - 40;

            $("#myVideoB").attr({width: w, height: h});
            $(".footerVideoB").css("top", t);
        }
    });
    $(".headerVideoB").dblclick(function () {
        $(".containerVideoB").css({"position": "absolute", "left": "10px", "top": "250px", "width": "220px", "height": "230px"});
        $("#myVideoB").attr({width: "200px", height: "150px"});
        $(".footerVideoB").css("top", "190px");
    });

    $("#myVideoB").dblclick(function () {
        $(".containerVideoB").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "525px"});
        $("#myImageVideoB").attr({width: "700px", height: "445px"});
        $(".footerVideoB").css("top", "485px");
    });
});