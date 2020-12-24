<html>
<body>
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$old_id_key = $_GET['id_key'];
$new_id_key = $_GET['new_id_key'];
$key_buy = $_GET['key_buy'];
$key_end = $_GET['key_end'];
$id_game = $_GET['id_game'];
$id_store = $_GET['id_store'];
$key_sell = $_GET['key_sell'];
$key_type = $_GET['key_type'];
$zapros = "UPDATE `Keys` SET id_key = '$new_id_key', key_buy = '$key_buy', key_end = '$key_end', id_game = '$id_game', id_store = '$id_store', key_sell = '$key_sell', key_type = '$key_type' WHERE id_key = '$old_id_key'";
$result = $link->query($zapros);
if ($result) { 
echo 'Все сохранено. <a href="index_keys.php"> 
Вернуться к списку магазинов </a>'; }
else { 
echo 'Ошибка сохранения. <a href="index_keys.php">
Вернуться к списку ключей </a> '; }
?>
</body> 
</html>