//*************************************
//Album 2013-2014
//*************************************
var i;
var imagesA = [];
for (i = 1; i < 183; i++) {
    imagesA[i] = "Album2013-2014/1 (" + i + ").JPG";
}

var albumPhotoIndexA = 1;
function rotateImageA() {
    $('#myImageAlbumA').fadeOut(4500, function () {
        $(this).attr('src', imagesA[albumPhotoIndexA]);

        $(this).fadeIn(1500, function () {
            if (albumPhotoIndexA == imagesA.length - 1) {
                albumPhotoIndexA = 1;
            } else {
                albumPhotoIndexA++;
            }
        });
    });
}

var colorsA = new Array("#000000", "#000080", "#0000FF", "#00FF7F", "#00FFFF", "#2F4F4F", "#CD5C5C", "#CD853F", "#D2691E", "#D2B48C", "#D3D3D3", "#D8BFD8", "#DA70D6", "#DAA520", "#DB7093", "#DC143C", "#4682B4", "#483D8B", "#4B0082", "#008000", "#008B8B", "#00BFFF", "#00CED1", "#DCDCDC", "#DDA0DD", "#DEB887", "#E9967A", "#EE82EE", "#EEE8AA", "#F08080", "#F0E68C", "#F4A460", "#F5FFFA", "#556B2F", "#696969", "#6B8E23", "#778899", "#7B68EE", "#800000", "#800080", "#808000", "#8A2BE2", "#8B008B", "#FA8072", "#FDF5E6", "#FF0000", "#FF00FF", "#FF1493", "#FF4500", "#FFA07A", "#FFA500", "#FFB6C1", "#FFC0CB", "#8B4513", "#8FBC8F", "#9370DB", "#9ACD32", "#A0522D", "#A52A2A", "#A9A9A9", "#B22222", "#B8860B", "#BA55D3", "#BC8F8F", "#BDB76B", "#C0C0C0", "#C71585", "#FFD700", "#FFDAB9", "#FFE4E1", "#FFFF00");
var colorIndexA = 1;
function changeContainerColorA() {
    $(".headerAlbumA").css('background-color', colorsA[colorIndexA]);
    $(".footerAlbumA").css('background-color', colorsA[colorIndexA]);
    $(".containerAlbumA").css('border-left-color', colorsA[colorIndexA]);
    $(".containerAlbumA").css('border-right-color', colorsA[colorIndexA]);

    if (colorIndexA == colorsA.length - 1) {
        colorIndexA = 1;
    } else {
        colorIndexA++;
    }
}




//*************************************
//Album 2014-2015
//*************************************
var j;
var imagesB = [];
for (j = 1; j < 5; j++) {
    imagesB[j] = "Album2014-2015/1 (" + j + ").JPG";
}

var albumPhotoIndexB = 1;
function rotateImageB() {
    $("#myImageAlbumB").effect("explode", {
        easing: "easeInExpo",
        pieces: 8,
        duration: 5000
    }, function () {
        //$(this).attr('src', imagesB[albumPhotoIndexB]);
    });

    $('#myImageAlbumB').fadeOut(4500, function () {
        $(this).attr('src', imagesB[albumPhotoIndexB]);

        $(this).fadeIn(1500, function () {
            if (albumPhotoIndexB == imagesB.length - 1) {
                albumPhotoIndexB = 1;
            } else {
                albumPhotoIndexB++;
            }
        });
    });
}


var colorsB = new Array("#00FFFF", "#2F4F4F", "#CD5C5C", "#CD853F", "#D2691E", "#D2B48C", "#D3D3D3", "#D8BFD8", "#DA70D6", "#DAA520", "#DB7093", "#DC143C", "#4682B4", "#483D8B", "#4B0082", "#008000", "#008B8B", "#00BFFF", "#00CED1", "#DCDCDC", "#DDA0DD", "#DEB887", "#E9967A", "#EE82EE", "#EEE8AA", "#F08080", "#F0E68C", "#F4A460", "#F5FFFA", "#556B2F", "#696969", "#6B8E23", "#778899", "#7B68EE", "#800000", "#800080", "#808000", "#8A2BE2", "#8B008B", "#FA8072", "#FDF5E6", "#FF0000", "#FF00FF", "#FF1493", "#FF4500", "#FFA07A", "#FFA500", "#FFB6C1", "#FFC0CB", "#8B4513", "#8FBC8F", "#9370DB", "#9ACD32", "#A0522D", "#000000", "#000080", "#0000FF", "#00FF7F", "#A52A2A", "#A9A9A9", "#B22222", "#B8860B", "#BA55D3", "#BC8F8F", "#BDB76B", "#C0C0C0", "#C71585", "#FFD700", "#FFDAB9", "#FFE4E1", "#FFFF00");
var colorIndexB = 1;
function changeContainerColorB() {
    $(".headerAlbumB").css('background-color', colorsB[colorIndexB]);
    $(".footerAlbumB").css('background-color', colorsB[colorIndexB]);
    $(".containerAlbumB").css('border-left-color', colorsB[colorIndexB]);
    $(".containerAlbumB").css('border-right-color', colorsB[colorIndexB]);

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
        $(".containerAlbumA").css({"position": "absolute", "left": "10px", "top": "10px", "width": "220px", "height": "225px"});
        $("#myImageAlbumA").attr({width: "200px", height: "150px"});
        $(".footerAlbumA").css("top", "190px");

    });

    $("#maxBtnA").click(function () {
        $(".containerAlbumA").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "520px"});
        $("#myImageAlbumA").attr({width: "700px", height: "445px"});
        $(".footerAlbumA").css("top", "485px");
    });


    $("#closeBtnB").click(function () {

    });

    $("#minBtnB").click(function () {
        $(".containerAlbumB").css({"position": "absolute", "left": "10px", "top": "250px", "width": "220px", "height": "225px"});
        $("#myImageAlbumB").attr({width: "200px", height: "150px"});
        $(".footerAlbumB").css("top", "190px");
    });
    
    $("#maxBtnB").click(function () {
        $(".containerAlbumB").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "520px"});
        $("#myImageAlbumB").attr({width: "700px", height: "445px"});
        $(".footerAlbumB").css("top", "485px");
    });




//*************************************
    //Album 2013-2014
//*************************************
    setInterval(rotateImageA, 1500);
    setInterval(changeContainerColorA, 10000);

    $(".containerAlbumA").draggable();
    $(".containerAlbumA").resizable({
        animate: true,
        resize: function (event, ui) {
            var w = ui.size.width - 70;
            var h = ui.size.height - 85;
            var t = ui.size.height - 35;

            $("#myImageAlbumA").attr({width: w, height: h});
            $(".footerAlbumA").css("top", t);
        }
    });
    $(".headerAlbumA").dblclick(function () {
        $(".containerAlbumA").css({"position": "absolute", "left": "10px", "top": "10px", "width": "220px", "height": "225px"});
        $("#myImageAlbumA").attr({width: "200px", height: "150px"});
        $(".footerAlbumA").css("top", "190px");
    });

    $("#myImageAlbumA").dblclick(function () {
        $(".containerAlbumA").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "520px"});
        $("#myImageAlbumA").attr({width: "700px", height: "445px"});
        $(".footerAlbumA").css("top", "485px");
    });



//*************************************
    //Album 2013-2014
//*************************************

    setInterval(rotateImageB, 4500);
    setInterval(changeContainerColorB, 10000);

    $(".containerAlbumB").draggable();
    $(".containerAlbumB").resizable({
        animate: true,
        resize: function (event, ui) {
            var w = ui.size.width - 70;
            var h = ui.size.height - 85;
            var t = ui.size.height - 35;

            $("#myImageAlbumB").attr({width: w, height: h});
            $(".footerAlbumB").css("top", t);
        }
    });
    $(".headerAlbumB").dblclick(function () {
        $(".containerAlbumB").css({"position": "absolute", "left": "10px", "top": "250px", "width": "220px", "height": "225px"});
        $("#myImageAlbumB").attr({width: "200px", height: "150px"});
        $(".footerAlbumB").css("top", "190px");
    });

    $("#myImageAlbumB").dblclick(function () {
        $(".containerAlbumB").css({"position": "absolute", "left": "350px", "top": "50px", "width": "720px", "height": "520px"});
        $("#myImageAlbumB").attr({width: "700px", height: "445px"});
        $(".footerAlbumB").css("top", "485px");
    });

});