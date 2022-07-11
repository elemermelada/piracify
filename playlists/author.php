<?php

    $author = $_GET['author'];
    $tracks=glob("../tracks/*.mp3");
    
    for ($i=1;$i<count($tracks);$i++) {
        
        $trackname = substr($tracks[$i],10);
        $trackjson = file_get_contents("../tracks/metadata/" . $trackname);

        if ($trackjson!==false) {

        }

    }

?>