<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$name_store = $_GET['name_store'];
$result = $link->query("DELETE FROM Stores WHERE name_store='$name_store'");
header("Location: index_stores.php"); 
exit;
?>