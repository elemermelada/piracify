<?php

    $json = file_get_contents('php://input');
    $tracks = json_decode($json, true)['track'];

    if ($tracks=="") {
        die('<form action="" method="POST"><input name="tracks"><input type="submit"></form>');
    }

    for ($i=1;$i<count($tracks);$i++) {

        $trackjson = file_get_contents("metadata/" . $tracks[$i] . ".json");
        echo $trackjson;

    }

?>