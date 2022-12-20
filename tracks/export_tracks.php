<?php

$com = 'zip exported/output.zip *.mp3';
$out = shell_exec($com);
echo $out;
echo '<p>';


$tracks = glob("*.mp3");

foreach ($tracks as $track) {
    $trackname = substr($track,0,strlen($track)-4);
    $trackjson = file_get_contents("metadata/" . $trackname . ".json");

    if ($trackjson!="") {
        $trackdata = json_decode($trackjson,true);
        $trackname = $trackdata["author"] . " - " . $trackdata["title"];
    }

    $com = 'zip exported/output.zip *.mp3';
    $out = shell_exec($com);
    echo $out;
    echo '<p>';

    $com = 'printf "@ ' . $track . '\n@=' . $trackname . '\n" | zipnote -w exported/output.zip';
    $out = shell_exec($com);
    echo $out;
    echo '<p>';
}

?>