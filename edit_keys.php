<html>
<head> 
<title> Редактирование данных о ключе </title>
</head>
<body>
<form action='save_edit_keys.php' method='get'>
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$id_key =  $_GET['id_key'];
$result = $link->query("SELECT key_buy, key_end, id_game, id_store, key_sell, key_type FROM `Keys` WHERE id_key = '$id_key'");
print "Код ключа: <input name='new_id_key' size='50' type='text' value='$id_key'>";
if ($result) {
while ($st = $result->fetch_array()) {
$key_buy = $st['key_buy'];
$key_end = $st['key_end'];
$key_sell = $st['key_sell'];
$key_type = $st['key_type'];
}
}
print "<br>Дата покупки ключа: <input name='key_buy' size='20' type='date' placeholder='dd-mm-yyyy' value='$key_buy'>";
print "<br>Дата аннулирования ключа: <input name='key_end' size='20' type='date' placeholder='dd-mm-yyyy' value='$key_end'>";
$result = $link->query("SELECT id_game, name FROM `Games`");
echo "<br>Игра: <select name='id_game'>";
echo "<option selected value='$id_game'>$name</option>";
if ($result) {
while ($row = $result->fetch_array()) {
$id_game = $row['id_game'];
$name = $row['name'];
echo "<option value='$id_game'>$name</option>";
}
}
echo "</select>";
$result = $link->query("SELECT id_store, name_store FROM `Stores`");
echo "<br>Магазин: <select name='id_store'>";
echo "<option selected value='$id_store'>$name_store</option>";
if ($result) {
while ($row = $result->fetch_array()) {
$id_store = $row['id_store'];
$name_store = $row['name_store'];
echo "<option value='$id_store'>$name_store</option>";
}
}
echo "</select>";
print "<br>Цена ключа: <input name='key_sell' size='20' type='text' value='$key_sell'>";
print "<br>Тип ключа: <input name='key_type' size='20' type='text' value='$key_type'>";
print "<input type='hidden' name='id_key' size='30' value='$id_key'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href='index_keys.php'> Вернуться к списку ключей </a>";
?>
</body>
</html>