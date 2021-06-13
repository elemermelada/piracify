<?php
$tracks=glob("*.mp3");
echo '{"tracks":[';
echo '"' . substr($tracks[0], 0, strlen($tracks[0])-4) . '"';
for ($i=1;$i<count($tracks);$i++) {
	echo ",";
	echo '"' . substr($tracks[$i], 0, strlen($tracks[$i])-4) . '"';
}
echo "]}";
?>