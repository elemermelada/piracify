<?php

    $authors = Array();
    $authors_trackcount = Array("Unknown artist");
    $tracks=glob("../tracks/*.mp3");

    for ($i=0;$i<count($tracks);$i++) {
        
        $trackname = substr($tracks[$i],10,strlen($tracks[$i])-10-4);
        $trackjson = file_get_contents("../tracks/metadata/" . $trackname . ".json");

        if ($trackjson!==false) {
            $trackdata = json_decode($trackjson, true);
            $trackauth = $trackdata["author"];
            
            if (in_array($trackauth, $authors)===false) {
                $authors[] = $trackauth;
                $authors_trackcount[$trackauth] = 1;
            } else {
                $authors_trackcount[$trackauth] = $authors_trackcount[$trackauth] + 1;
            }

        } else {
            $authors_trackcount["Unknown artist"] = $authors_trackcount["Unknown artist"] + 1;
        }

    }

    sort($authors);
    array_unshift($authors, "Unknown artist");
    echo json_encode($authors_trackcount);

?>