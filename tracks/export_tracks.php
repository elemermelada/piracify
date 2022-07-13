<?php

    $tracks = glob("*.mp3");

    foreach ($tracks as $track) {
        echo $track . "<br>";
    }

?>