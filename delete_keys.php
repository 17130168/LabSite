<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$id_key = $_GET['id_key'];
$result = $link->query("DELETE FROM `Keys` WHERE id_key='$id_key'");
header("Location: index_keys.php"); 
exit;
?>