<?php

    $author = $_GET['author'];
    $tracks=glob("../tracks/*.mp3");

    for ($i=1;$i<count($tracks);$i++) {
        echo substr($tracks[$i],10) . "<br>";
    }

?>