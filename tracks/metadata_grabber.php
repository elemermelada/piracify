<?php

    //requested tracks

    $tracks = json_decode($_POST["tracks"], true);

    for ($i=1;$i<count($tracks);$i++) {

        $trackjson = file_get_contents("metadata/" . $tracks[$i] . ".json");
        echo $trackjson;

    }

?>