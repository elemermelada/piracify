<?php

    $json = file_get_contents('php://input');
    $tracks = json_decode($json, true)['tracks'];

    $tracks_metadata = Array();

    if ($tracks=="") {
        die('<form action="" method="POST"><input name="tracks"><input type="submit"></form>');
    }

    for ($i=0;$i<count($tracks);$i++) {

        $trackjson = file_get_contents("metadata/" . $tracks[$i] . ".json");

        if ($trackjson=="") {
            $trackdata= Array('track' => $tracks[$i], 'title' => $tracks[$i], 'author' => 'Unknown artist');
        } else {
            $trackdata = json_decode($trackjson, true);
        }

        $tracks_metadata[$trackdata["track"]] = $trackdata;

    }

    echo json_encode($tracks_metadata);

?>