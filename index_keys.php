<html>
<head> <title> Сведения о цифровых ключах </title> </head>
<body> 
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
?>
</body> </html>
<h2>Цифровые ключи:</h2>
<table border="1">
<tr>
<th> Код ключа </th> 
<th> Дата покупки ключа </th> 
<th> Дата аннулирования ключа </th>
<th> Код игры </th>
<th> Код магазина </th>
<th> Цена ключа </th>
<th> Тип ключа </th>
<th> Редактировать </th> 
<th> Уничтожить </th>
</tr>
<?php
$result = $link->query("SELECT id_key, key_buy, key_end, id_game, id_store, key_sell, key_type FROM `Keys`"); 
if ($result) {
$counter=0;
while ($row = $result->fetch_array()){
$id_key = $row['id_key']; 
$key_buy = date('d-m-Y', strtotime($row['key_buy']));
$key_end = date('d-m-Y', strtotime($row['key_end']));
$id_game = $row['id_game'];
$id_store = $row['id_store'];
$key_sell = $row['key_sell'];
$key_type = $row['key_type'];
$counter++;
echo "<tr>";
echo "<td>$id_key</td><td>$key_buy</td><td>$key_end</td><td>$id_game</td><td>$id_store</td><td>$key_sell</td><td>$key_type</td>";
echo "<td><a href='edit_keys.php?id_key=$id_key'>Редактировать</a></td>";
echo "<td><a href='delete_keys.php?id_key=$id_key'>Удалить</a></td>";
echo "</tr>";
}
print "</table>";
print("<p>Всего цифровых ключей: $counter </p>");
}
print("<p> <a href='new_keys.php'> Добавить ключ </a> </p>");
?>