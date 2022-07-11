<?php

    $authors = Array("Unknown artist");
    $tracks=glob("../tracks/*.mp3");

    for ($i=1;$i<count($tracks);$i++) {
        
        $trackname = substr($tracks[$i],10,strlen($tracks[$i])-10-4);
        $trackjson = file_get_contents("../tracks/metadata/" . $trackname . ".json");

        if ($trackjson!==false) {
            $trackdata = json_decode($trackjson, true);
            print_r($trackdata["author"]);
            echo "<p>";
        }

    }

?>