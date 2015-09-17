<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: ../Login.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome in ASP</title>
        <script type="text/javascript" src="../BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="../BasicScript/jquery-ui.js"></script>
        <link href="../BasicScript/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Style/Album.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/Album.css" />        
    </head>
    <body>
        <div class="containerAlbumA">
            <div class="headerAlbumA">
                <label>Album [2013-2014]</label>
                <span id="closeBtnA">*</span>
                <span id="maxBtnA">+</span>
                <span id="minBtnA">-</span>
                <hr/>
            </div>
            <div>
                <img id="myImageAlbumA" class="AlbumA" src="../Images/BACK.GIF" width="200px" height="150px" alt="Resource Not Found!!" />
            </div>

            <div class="footerAlbumA">
                <hr/>
                @ Copyright
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>

        <div class="containerAlbumB">
            <div class="headerAlbumB">
                <label>Album [2014-2015]</label>
                <span id="closeBtnB">*</span>
                <span id="maxBtnB">+</span>
                <span id="minBtnB">-</span>
                <hr/>
            </div>
            <div>
                <img id="myImageAlbumB" class="AlbumB" src="../Images/BACK.GIF" width="200px" height="150px" alt="Resource Not Found!!" />
            </div>

            <div class="footerAlbumB">
                <hr/>
                @ Copyright
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>

    </body>
</html>
