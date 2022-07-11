<?php

    $authors = Array("Unknown artist");
    $tracks=glob("../tracks/*.mp3");

    for ($i=1;$i<count($tracks);$i++) {
        
        $trackname = substr($tracks[$i],10);
        $trackjson = file_get_contents("../tracks/metadata/" . $trackname);

        if ($trackjson!==false) {
            $trackdata = json_decode($trackjson);
            print_r($trackdata);
            echo "<p>";
        }

    }

?>