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
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select id="sub" name="subject" class="select"></select>
                        <select id="chap" name="chapter" class="select"></select>
                    </form>
                    <button id="searchBtn" class="submit">Search</button>
                </div>

                <video id="playerPanel" width="620" height="420" controls autoplay>
                    <source src="Tuts//Welcome.mp4" type="video/mp4">
                </video>
            </div>

            <div class="playlist">
                <nav>
                    <ul id="playlistUL">
                        <script type="text/javascript" src="ActionScript/ChangeJARSubjectAndChapterJS.js"></script>
                        <script type="text/javascript" src="ActionScript/ChangeJARSearchContent.js"></script>
                        <script type="text/javascript" src="ActionScript/ChangeJAR.js"></script>
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