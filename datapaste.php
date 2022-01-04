<?php 
header("Location: http://localhost/wow/WOWY1phptest.php");
$data = fopen("localdata.txt", "a");
$txt = $_COOKIE["name"] . "\n" . $_COOKIE["details"] . "\n" . $_COOKIE["colour"] . "\n" . $_COOKIE["id"] . "\n";
fwrite($data, $txt);
fclose($data);
exit;
?>
