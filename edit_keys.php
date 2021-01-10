<html>
<head
<title> Редактирование данных о ключе </title>
</head>
<body> 
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$id_key =  $_GET['id_key'];
$result = $link->query("SELECT key_buy, key_end, id_game, id_store, key_sell, key_type FROM `Keys` WHERE id_key = '$id_key'");
if ($result) {
while ($st = $result->fetch_array()) {
$key_buy = $st['key_buy'];
$key_end = $st['key_end'];
$id_game = $st['id_game'];
$id_store = $st['id_store'];
$key_sell = $st['key_sell'];
$key_type = $st['key_type'];
}
}
print "<form action='save_edit_keys.php' method='get'>";
print "Код ключа: <input name='new_id_key' size='50' type='text' value='$id_key'>";
print "<br>Дата покупки ключа: <input name='key_buy' size='20' type='date' value='$key_buy'>";
print "<br>Дата аннулирования ключа: <input name='key_end' size='20' type='date' placeholder='dd-mm-yyyy' value='$key_end'>";
print "<br>Код игры: <input name='id_game' size='20' type='text' placeholder='dd-mm-yyyy' value='$id_game'>";
print "<br>Код магазина: <input name='id_store' size='20' type='text' value='$id_store'>";
print "<br>Цена ключа: <input name='key_sell' size='20' type='text' value='$key_sell'>";
print "<br>Тип ключа: <input name='key_type' size='20' type='text' value='$key_type'>";
print "<input type='hidden' name='id_key' size='30' value='$id_key'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href='index_keys.php'> Вернуться к списку ключей </a>";
?>
</body>
</html>