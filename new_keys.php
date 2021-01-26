<html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_keys.php" metod="get">
Код ключа: <input name="id_key" size="20" type="text">
<br>Дата покупки ключа: <input name="key_buy" size="20" type="date" placeholder="dd-mm-yyyy">
<br>Дата аннулирования ключа: <input name="key_end" size="20" type="date" placeholder="dd-mm-yyyy">
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$result = $link->query("SELECT id_game, name FROM `Games`");
echo "<br>Игра: <select name='id_game'>";
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
if ($result) {
while ($row = $result->fetch_array()) {
$id_store = $row['id_store'];
$name_store = $row['name_store'];
echo "<option value='$id_store'>$name_store</option>";
}
}
echo "</select>";
?>
<br>Цена ключа: <input name="key_sell" size="20" type="text">
<br>Тип ключа: <input name="key_type" size="20" type="text">
<p><input name="add" type="submit" value="Добавить"> <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index_keys.php"> Вернуться к списку ключей </a>
</body>
</html>