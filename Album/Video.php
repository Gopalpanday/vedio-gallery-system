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
        <script type="text/javascript" src="Style/Video.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/Video.css" />        
    </head>
    <body>
        <div class="containerVideoA">
            <div class="headerVideoA">
                <label>Video [2013-2014]</label>
                <span id="closeBtnA">*</span>
                <span id="maxBtnA">+</span>
                <span id="minBtnA">-</span>
                <hr/>
            </div>
            <div>
                <!--
                <video id="myVideoA" class="VideoA" width="200px" height="150px" controls autoplay>
                    <source src="../Tuts/Welcome.mp4" type="video/mp4">
                </video>
                -->
                <embed id="myVideoA" class="VideoA" width="200px" height="150px" src="../Tuts/Welcome.mp4" />
            </div>

            <div class="footerVideoA">
                <hr/>
                <span id="prevBtnA"><</span>
                <span id="nextBtnA">></span>
                <label>@ Copyright &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </div>
        </div>
        
        
        <div class="containerVideoB">
            <div class="headerVideoB">
                <label>Video [2014-2015]</label>
                <span id="closeBtnB">*</span>
                <span id="maxBtnB">+</span>
                <span id="minBtnB">-</span>
                <hr/>
            </div>
            <div>
                <!--
                <video id="myVideoB" class="VideoB" width="200px" height="150px" controls autoplay>
                    <source src="../Tuts/Welcome.mp4" type="video/mp4">
                </video>
                -->
                <embed id="myVideoB" class="VideoB" width="200px" height="150px" src="../Tuts/Welcome.mp4" />
            </div>

            <div class="footerVideoB">
                <hr/>
                <span id="prevBtnB"><</span>
                <span id="nextBtnB">></span>
                <label>@ Copyright &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </div>
        </div>

    </body>
</html>
