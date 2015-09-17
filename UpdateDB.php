<?php
session_start();
if (isset($_SESSION["userid"])) {
    header("Location: UserWelcome.php");
}

include("DBConnection.php");
if (isset($_POST["username"]) && isset($_POST["oldpassword"]) && isset($_POST["newpassword"])) {
//	echo "sdfsd".	$_POST[uid];
    $result = mysql_query("SELECT * FROM Admin WHERE username='$_POST[username]'");
    while ($row = mysql_fetch_array($result)) {
        $passwordmd5 = $row["password"];
    }

    if ($_POST["oldpassword"] == $passwordmd5) {
        $result = mysql_query("UPDATE Admin SET password='$_POST[newpassword]' WHERE username='$_POST[username]'");

        if ($result > 0) {
            echo '<script>alert("Password Changed Successfully.");</script>';
            header("Location: Login.php");
        }
    } else {
        echo '<script>alert("Un-Authorized Access! Please try again..");</script>';
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome in ASP</title>

        <script type="text/javascript" src="BasicScript/InputControls.js"></script>
        <script type="text/javascript" src="BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="BasicScript/PhotoAlbum.js"></script>
        <script type="text/javascript" src="BasicScript/HeaderEffect.js"></script>
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
                <form action="UpdateDB.php" method="POST" onsubmit="return validate2();">
                    <table align='center' cellpadding="5" cellspacing="5" class="loginTable">
                        <tr>
                            <th colspan="3" bgcolor="#000000" scope="col">
                                <font color="#FFFFFF">Administrator Password Updation Section</font>
                            </th>
                        </tr>
                        <tr>
                            <td width="28%" rowspan="4"><div align="center"><img src="Images/icon_module.png" width="48" height="48" /></div></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>User ID:</td>
                            <td>
                                <select name="username" id="username" class="txtInput">
                                    <option value="Santosh Shukla">Santosh Shukla</option>
                                    <option value="Brajesh Sharma">Brajesh Sharma</option>
                                    <option value="Sunil Sharma">Sunil Sharma</option>
                                    <option value="Amit Shukla">Amit Shukla</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Old Password:</td>
                            <td><input class="txtInput" name="oldpassword" type="password" id="oldpassword" /></td>
                        </tr>
                        <tr>
                            <td>New Password:</td>
                            <td><input class="txtInput" name="newpassword" type="password" id="newpassword" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" align="center">
                                <input class="loginButton" name="Submit" type="submit" value="Update" />
                            </td>
                        </tr>
                        <div id="test" class="PhotoAlbum">
                            <img id="myImage" class="Album" src="Images/BACK.GIF" alt="image test" />
                        </div>
                    </table>
                </form>

            </div>

            <div class="footer">
                <hr/>
                Developed by Santosh Shukla (Java Programmer)
                <br/>
                @ Copyright
            </div>
        </div>
    </body>
</html>
