<?php

$json = file_get_contents('php://input');
$track = json_decode($json, true)['track'];

file_put_contents("metadata/" . $track . ".json", $json);

?>