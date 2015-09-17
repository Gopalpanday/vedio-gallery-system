<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: ../Login.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>:: Welcome in ASP</title>
        <script type="text/javascript" src="../BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="../BasicScript/jquery-ui.js"></script>
        <link href="../BasicScript/jquery-ui.css" rel="stylesheet" type="text/css" />


        <style language="text/css">
            body {
                background-image: url("../Images/2.jpg");
                color:white;
                font-family:verdana;
                font-size:10px;
                text-align:center;
            }

            img {
                display:inline;
                padding:0;

            }

            #view{ 
                border:20px solid white;
            }
            #prev{
                position: absolute;
                left: 100px;
                top: 200px;
            }
            #next{
                position: absolute;
                left: 1050px;
                top: 200px;
            }
            .navig{
                font-size: xx-large;
                border-radius: 75px;
                border: 5px solid goldenrod;
                background-color: goldenrod;
                text-align: center;
                width: 200px;
                height: 50px;
            }
        </style>

        <script language="javascript">

            var i;
            var picture = [];
            for (i = 1; i < 183; i++) {
                picture[i] = "Album2013-2014/1 (" + i + ").JPG";
            }

            $(document).ready(function () {

                $("#prev").click(function () {
                    $("#view").attr("src", picture[i]);
                    i--;
                    if (i < 1) {
                        i = 182;
                    }
                });

                $("#next").click(function () {
                    $("#view").attr("src", picture[i]);
                    i++;
                    if (i > 182) {
                        i = 1;
                    }
                });


            });
        </script>

    </head>
    <body>

        <div style="text-align:center;">
            <label id="prev" class="navig"><</label>

            <img id="view" class="AlbumA" src="../Images/BACK.GIF" width="600px" height="450px" alt="Resource Not Found!!" />

            <label id="next" class="navig">></label>
        </div>
    </body>
</html>