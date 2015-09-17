<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: Login.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome in ASP</title>
        <script type="text/javascript" src="BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="BasicScript/HeaderEffect.js"></script>
        <script type="text/javascript" src="BasicScript/UserAlbum.js"></script>
        <link href="Style/TutsIndex.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img id="left" alt="" src="Images/LOGO.bmp" />
                <h1>Arcadia Study Point</h1>
                <a href="#"><img id="mid" src='userAlbum/<?php echo $_SESSION["userid"] ?>.jpg' alt="" /></a>
                <a href="logout.php"><img id="right" alt="" src="Images/log.bmp" /></a>
            </div>

            <div>
                <table cellpadding="5" cellspacing="5" class="loginTable">
                    <tr>
                        <th colspan="3" bgcolor="#000000" scope="col">
                            <span id="userWelcomeName">Tutorial Section</span>
                        </th>
                    </tr>
                    <tr>
                        <td align="right">
                            <a href="Album/Album.php" style="text-decoration: none;">Photo Album</a> || 
                            <a href="Album/AlbumViewer.php" style="text-decoration: none;">Album Viewer</a> || 
                            <a href="Album/Video.php" style="text-decoration: none;">Video Album</a><br/><br/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul id="TutsList">
                                <li>
                                    <a href="HomeMP4.php">Tutorials &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; Mp4 Format</a>
                                </li>
                                <li>
                                    <a href="HomeFlash.php">Tutorials &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; AdobeFlash Format</a>
                                </li>
                                <li>
                                    <a href="HomeMSOffice.php">Tutorials &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; MS-Office(MS-Word/PPT) Format</a>
                                </li>
                                <li>
                                    <a href="HomePDF.php">Tutorials &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; PDF Format</a>
                                </li>
                                <li>
                                    <a href="HomeJAR.php">Laboratory &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; Java(Jar) Format</a>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <div id="test" class="PhotoAlbum">
                        <img id="myImage" class="Album" src="Images/BACK.GIF" alt="image test" />
                    </div>
                </table>
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
