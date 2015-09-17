$(document).ready(function () {
    var xmlHttp = null;
    if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    } else {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    $("#std").change(function () {
        if (xmlHttp != null) {
            var std = document.getElementById("std").value;
            $("select#sub").empty();

            var params = "stdid=" + std;

            xmlHttp.open("GET", "ChangePDFSubject.php?" + params, true);
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send();
        } else {
            alert("Your browser does not support Ajax!!");
        }

        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                $("#searchBtn").css("visibility", "visible");
                $("select#sub").css("visibility", "visible");
                $("select#sub").append(xmlHttp.responseText);
            }
        }
    });
    
    $("#sub").change(function () {
        if (xmlHttp != null) {
            var std = document.getElementById("std").value;
            var sub = document.getElementById("sub").value;
            $("select#chap").empty();

            var params = "stdid=" + std + "&subid=" + sub;

            xmlHttp.open("GET", "ChangePDFChapter.php?" + params, true);
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send();
        } else {
            alert("Your browser does not support Ajax!!");
        }

        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                $("#searchBtn").css("visibility", "visible");
                $("select#chap").css("visibility", "visible");
                $("select#chap").append(xmlHttp.responseText);
            }
        }
    });
});