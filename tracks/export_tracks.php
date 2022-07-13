<?php

    $tracks = glob("*.mp3");

    foreach ($tracks as $track) {
        $trackname = substr($track,0,strlen($track)-4);
        $trackjson = file_get_contents("metadata/" . $trackname . ".json");

        if ($trackjson!="") {
            $trackdata = json_decode($trackjson,true);
            $trackname = $trackdata["author"] . " - " . $trackdata["title"];
        }

        copy($track, "exported/" . $trackname . ".mp3");
        echo $track . " exported as " . "../exported/" . $trackname . ".mp3" . "<br>";
    }

?>