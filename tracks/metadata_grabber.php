<?php

    print_r($_POST);
    die("");

    if ($_POST["tracks"]=="") {
        die('<form action="" method="POST"><input name="tracks"><input type="submit"></form>');
    }

    //requested tracks

    $tracks = json_decode($_POST["tracks"], true);

    for ($i=1;$i<count($tracks);$i++) {

        $trackjson = file_get_contents("metadata/" . $tracks[$i] . ".json");
        echo $trackjson;

    }

?>