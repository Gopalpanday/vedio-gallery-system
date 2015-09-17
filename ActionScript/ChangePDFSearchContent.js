$(document).ready(function () {
    var xmlHttp = null;
    if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    } else {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    $("#searchBtn").click(function () {
        if (xmlHttp != null) {
            var std = document.getElementById("std").value;
            var sub = document.getElementById("sub").value;
            var chap = document.getElementById("chap").value;

            var params = "stdid=" + std + "&subid=" + sub + "&chapid=" + chap;

            xmlHttp.open("GET", "ChangePDFSearchContent.php?" + params, true);
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send();
        } else {
            alert("Your browser does not support Ajax!!");
        }

        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                $("ul#playlistUL").empty();
                $("ul#playlistUL").append(xmlHttp.responseText);
            }
        }
    });
});