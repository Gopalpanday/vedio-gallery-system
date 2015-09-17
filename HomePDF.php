<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: Login.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome to ASP</title>
        <link rel="stylesheet" type="text/css" href="Style/Home.css" />
        <script type="text/javascript" src="BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="BasicScript/PhotoAlbum.js"></script>
        <script type="text/javascript" src="BasicScript/HeaderEffect.js"></script>
    </head>
    <body id="bodyColor">
        <div class="container">
            <div class="header">
                <img id="left" alt="" src="Images/LOGO.bmp" />
                <h1>Arcadia Study Point</h1>
                <a href="TutsIndex.php"><img id="mid" src='userAlbum/<?php echo $_SESSION["userid"] ?>.jpg' alt="" /></a>
                <a href="Logout.php"><img id="right" alt="" src="Images/log.bmp" /></a>
            </div>

            <div class="player">
                <div class="menu">
                    <form id="searchForm">
                        <select id="std" name="clas" class="select">
                            <option value="">Select Class</option>
                            <option value="kg">KG</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select id="sub" name="subject" class="select"></select>
                        <select id="chap" name="chapter" class="select"></select>
                    </form>
                    <button id="searchBtn" class="submit">Search PDF</button>
                </div>

                <embed src="Tuts/Home.pdf" id="playerPanel" height="420" width="620" type="application/pdf" />
            </div>

            <div class="playlist">
                <nav>
                    <ul id="playlistUL">
                        <script type="text/javascript" src="ActionScript/ChangePDFSubjectAndChapterJS.js"></script>
                        <script type="text/javascript" src="ActionScript/ChangePDFSearchContent.js"></script>
                        <script type="text/javascript" src="ActionScript/ChangePDF.js"></script>
                    </ul>
                </nav>
            </div>

            <div class="footer">
                <hr/>
                Developed by Gopal Pandey
                <br/>
                @ Copyright
            </div>

        </div>
    </body>
</html>