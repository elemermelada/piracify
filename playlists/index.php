<?php
$playlists=glob("*.json");
echo '{"playlists":[';
echo '"' . substr($playlists[0], 0, strlen($playlists[0])-5) . '"';
for ($i=0;$i<count($playlists);$i++) {
	echo ",";
	echo '"' . substr($playlists[$i], 0, strlen($playlists[$i])-5) . '"';
}
echo "]}";
?>