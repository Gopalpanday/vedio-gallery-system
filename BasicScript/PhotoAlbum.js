var i;
var images = [];
for (i = 1; i < 58; i++) {
    images[i] = "PhotoAlbum/" + i + ".jpg";
}

var colors = new Array("#000000", "#000080", "#0000FF", "#00FF7F", "#00FFFF", "#2F4F4F", "#CD5C5C", "#CD853F", "#D2691E", "#D2B48C", "#D3D3D3", "#D8BFD8", "#DA70D6", "#DAA520", "#DB7093", "#DC143C", "#4682B4", "#483D8B", "#4B0082", "#008000", "#008B8B", "#00BFFF", "#00CED1", "#DCDCDC", "#DDA0DD", "#DEB887", "#E9967A", "#EE82EE", "#EEE8AA", "#F08080", "#F0E68C", "#F4A460", "#F5FFFA", "#556B2F", "#696969", "#6B8E23", "#778899", "#7B68EE", "#800000", "#800080", "#808000", "#8A2BE2", "#8B008B", "#FA8072", "#FDF5E6", "#FF0000", "#FF00FF", "#FF1493", "#FF4500", "#FFA07A", "#FFA500", "#FFB6C1", "#FFC0CB", "#8B4513", "#8FBC8F", "#9370DB", "#9ACD32", "#A0522D", "#A52A2A", "#A9A9A9", "#B22222", "#B8860B", "#BA55D3", "#BC8F8F", "#BDB76B", "#C0C0C0", "#C71585", "#FFD700", "#FFDAB9", "#FFE4E1", "#FFFF00");

var albumPhotoIndex = 1;
function rotateImage() {
    $('#myImage').fadeOut(2500, function () {
        $(this).attr('src', images[albumPhotoIndex]);

        $(this).fadeIn(2500, function () {
            if (albumPhotoIndex == images.length - 1) {
                albumPhotoIndex = 0;
            } else {
                albumPhotoIndex++;
            }
        });
    });
}

var colorIndex = 1;
function changeContainerColor() {
    $(".header").css('background-color', colors[colorIndex]);
    $(".footer").css('background-color', colors[colorIndex]);
    $(".container").css('border-left-color', colors[colorIndex]);
    $(".container").css('border-right-color', colors[colorIndex]);

    if (colorIndex == colors.length - 1) {
        colorIndex = 0;
    } else {
        colorIndex++;
    }
}

$(document).ready(function () {
    setInterval(rotateImage, 2500);
    setInterval(changeContainerColor, 10000);

});