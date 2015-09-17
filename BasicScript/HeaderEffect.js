var logo = ["Images/LOGO.bmp", "Images/LOGO2.bmp", "Images/LOGO3.bmp", "Images/LOGO4.bmp"];

var logoIndex = 1;
function logoEffect() {
    $('#left').fadeIn(15000, function () {
        $(this).attr('src', logo[logoIndex]);

        $(this).fadeOut(15000, function () {
            if (logoIndex == logo.length - 1) {
                logoIndex = 0;
            } else {
                logoIndex++;
            }
        });
    });
}

$(document).ready(function () {
    setInterval(logoEffect, 30000);
});