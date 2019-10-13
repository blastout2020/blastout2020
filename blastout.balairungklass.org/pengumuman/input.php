<?php
$data = $_POST['email'];
$myfile = fopen("data_subs.txt", "a") or die("Unable to open file!");
//$txt = "user id date";
fwrite($myfile, ",". $data);
fclose($myfile);
header('Location: http://blastout.balairungklass.org/thanks.html');
?>