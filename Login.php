<?php
session_start();
if (isset($_SESSION["userid"])) {
    header("Location: UserWelcome.php");
}

include("DBConnection.php");
if (isset($_POST["username"]) && isset($_POST["password"])) {
//	echo "sdfsd".	$_POST[uid];
    $result = mysql_query("SELECT * FROM Admin WHERE username='$_POST[username]'");
    while ($row = mysql_fetch_array($result)) {
        $passwordmd5 = $row["password"];
    }

    if ($_POST["password"] == $passwordmd5) {
        $_SESSION["userid"] = $_POST["username"];
        header("Location: UserWelcome.php");
    } else {
        echo "Login failed.. Please try again..";
        header("Location: Login.php");
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome in ASP</title>

        <script type="text/javascript" src="BasicScript/InputControls.js"></script>
        <script type="text/javascript" src="BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="BasicScript/HeaderEffect.js"></script>
        <script type="text/javascript" src="BasicScript/PhotoAlbum.js"></script>
        <link href="Style/Login.css" rel="stylesheet" type="text/css" />
        <style>
            input:focus{
                background-color:#CCFFFF;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img alt="" src="Images/LOGO.bmp" />
                <h1>Arcadia Study Point</h1>
            </div>

            <div>
                <form action="Login.php" method="POST" onsubmit="return validate();">
                    <table cellpadding="5" cellspacing="5" class="loginTable">
                        <tr>
                            <th colspan="3" bgcolor="#000000" scope="col">
                                <font color="#FFFFFF">Administrator Login</font>
                            </th>
                        </tr>
                        <tr>
                            <td width="28%" rowspan="3"><div align="center"><img src="Images/icon_module.png" width="48" height="48" /></div></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>User ID:</td>
                            <td>
								<input class="txtInput" name="username" type="text" id="username" />
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input class="txtInput" name="password" type="password" id="password" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" align="center">
                                <input class="loginButton" name="Submit" type="submit" value="Login" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Want to Update Password ? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="UpdateDB.php">Click Here</a> </td>
                        </tr>
                        <div id="test" class="PhotoAlbum">
                            <img id="myImage" class="Album" src="Images/BACK.GIF" alt="image test" />
                        </div>
                    </table>
                </form>

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
