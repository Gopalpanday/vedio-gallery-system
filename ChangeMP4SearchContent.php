<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Welcome to ASP</title>
        <link rel="stylesheet" type="text/css" href="Style/Home.css" />
        <script type="text/javascript" src="BasicScript/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="BasicScript/PhotoAlbum.js"></script>
    </head>
    <body>
        <?php
        $path = "Tuts";
        $standard = $_GET["stdid"];
        $subject = $_GET["subid"];
        $chapter = $_GET["chapid"];
        $path = $path . "/" . $standard . "/" . $subject . "/" . $chapter;

        $dh = opendir($path);
        $i = 1;
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
                ?>
            <li>
                <video id='<?php echo "vidID" . $i ?>' src='<?echo "$path/$file"?>' width="120" height="120" class="clip">
                    <source id='<?php echo "vidID" . $i ?>' src='<?echo "$path/$file"?>' type="video/mp4">
                </video>
                <label class="clipLabel"><?php echo "$file" ?></label>
            </li>
            <?php
            $i++;
        }
    }
    closedir($dh);
    ?>
    <script type="text/javascript" src="ActionScript/ChangeMP4.js"></script>
</body>
</html>