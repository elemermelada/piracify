<?php

    $author = $_GET['author'];
    $tracks=glob("../tracks/*.mp3");
    $tracks_found = Array();

    for ($i=1;$i<count($tracks);$i++) {
        
        $trackname = substr($tracks[$i],10,strlen($tracks[$i])-10-4);
        $trackjson = file_get_contents("../tracks/metadata/" . $trackname . ".json");

        if ($trackjson!==false) {
            $trackdata = json_decode($trackjson, true);
            $trackauth = $trackdata["author"];
            
            if ($trackauth===$author) {
                $tracks_found[] = $trackname;
            }

        }

    }

    echo '{"playlist":' . json_encode($author) . ',"title":' . json_encode($author) . ',"tracks":' . json_encode($tracks_found) . '}';

?>