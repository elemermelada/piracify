<?php

$json = file_get_contents('php://input');
$playlist = json_decode($json, true)['playlist'];

file_put_contents($playlist . ".json", $json);

?>