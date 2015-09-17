<?php

$stdid = $_GET["stdid"];
$subid = $_GET["subid"];
$tutsDir = "Tuts/PDF/" . $stdid . "/". $subid . "/";

$optionArray = array();

foreach (glob($tutsDir . '*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace($tutsDir, '', $dir);
    $optionArray[] = $dir;
}

$arrlength = count($optionArray);

for ($x = 0; $x < $arrlength; $x++) {
    echo '<option value="' . $optionArray[$x] . '">' . $optionArray[$x] . '</option>';
}
?>
