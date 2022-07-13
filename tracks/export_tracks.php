<?php

    $tracks = glob("*.mp3");

    foreach ($tracks as $track) {
        $trackjson = file_get_contents("metadata/" . substr($track,0,strlen($track)-4) . ".json");
        echo $trackjson . "<br>";
    }

?>