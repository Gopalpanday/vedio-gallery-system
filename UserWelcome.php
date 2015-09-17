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
        <script type="text/javascript" src="BasicScript/UserAlbum.js"></script>
        <script type="text/javascript" src="BasicScript/HeaderEffect.js"></script>
        <link href="Style/UserWelcome.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img id="left" alt="" src="Images/LOGO.bmp" />
                <h1>Arcadia Study Point</h1>
                <a href="#"><img id="mid" src='userAlbum/<?php echo $_SESSION["userid"] ?>.jpg' alt="" /></a>
                <a href="Logout.php"><img id="right" alt="" src="Images/log.bmp" /></a>
            </div>

            <div>
                <table cellpadding="5" cellspacing="5" class="loginTable">
                    <tr>
                        <th colspan="3" bgcolor="#000000" scope="col">
                            <span id="userWelcomeName"><?php echo $_SESSION["userid"] ?></span>
                        </th>
                    </tr>
                    <tr>
                        <td width="28%" rowspan="3"><div align="center"><img src='userAlbum/<?php echo $_SESSION["userid"] ?>.jpg' width="150" height="150" /></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Hello, 
                            <?php
                            $user = $_SESSION["userid"];
                            echo "<b>" . $user . "</b>";
                            echo "<hr/>";

                            if ($user == "Santosh Shukla") {
                                echo "<br/>" . "<b>Qualification : </b>&nbsp;" . "BCA, MCA";
                                echo "<br/>" . "<b>Current Desig : </b>" . "JAVA Programmer";
                                echo "<br/>" . "<b>Specialization : </b>" . "Mathematics & Physics";
                            } else if ($user == "Brajesh Sharma") {
                                echo "<br/>" . "<b>Qualification : </b>" . "BA, MA, BED";
                                echo "<br/>" . "<b>Current Desig : </b>" . "Union Bank of India";
                                echo "<br/>" . "<b>Specialization : </b>" . "English & Chemistry";
                            } else if ($user == "Sunil Sharma") {
                                echo "<br/>" . "<b>Qualification : </b>" . "JBT, BCA";
                                echo "<br/>" . "<b>Current Desig : </b>" . "Teacher";
                                echo "<br/>" . "<b>Specialization : </b>" . "Social Studies";
                            } else if ($user == "Amit Shukla") {
                                echo "<br/>" . "<b>Qualification : </b>" . "BCA, BA(Hon) Maths";
                                echo "<br/>" . "<b>Current Desig : </b>" . "Teacher";
                                echo "<br/>" . "<b>Specialization : </b>" . "Maths & Coumputer";
                            } else {
                                echo "Under Secret Mission!";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right"><a href="TutsIndex.php">Go Ahead</a> </td>
                    </tr>
                    <div id="test" class="PhotoAlbum">
                        <img id="myImage" class="Album" src="Images/BACK.GIF" alt="image test" />
                    </div>
                </table>
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
