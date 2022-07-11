
<link rel="stylesheet" href="../main.css">
<link rel="shortcut icon" type="image/png" href="../favicon.png">
<title>Add new songs!</title>

<body>

<center>
<h1>Add new songs!</h1>
<div class="element">

<?php

$url=$_POST['url'];

if ($url=="") {

echo '
<form action="" method="POST">
	<input type="text" name="url" placeholder="YouTube URL"><br>
	<input type="submit">
</form>';	
	
} else {
	
	$com = 'yt-dlp ' . $url . ' -f 140 --output "%(id)s.mp3"';
	$out = shell_exec($com); 
	echo "Command: " . $com . '</div><div class="element">User: ' . exec('whoami') . '</div><div class="element"><pre>' . "Output: " . $out;
	
	
}

?>

</pre>
</div>
</center>