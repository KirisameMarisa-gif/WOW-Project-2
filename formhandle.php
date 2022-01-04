<?php 
header("Location: http://localhost/wow/WOWY1phptest.php");
$data = fopen("localdata.txt", "a");
$txt = $_POST["name"] . "\n" . $_POST["details"] . "\n" . $_POST["colour"] . "\n" . $_COOKIE["id"] . "\n";
fwrite($data, $txt);
fclose($data);
exit;
?>
