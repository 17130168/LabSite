<html>
<head> <title> Сведения о цифровых магазинах </title> </head>
<body> 
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
?>
</body> </html>
<h2>Цифровые магазины:</h2>
<table border="1">
<tr>
<th> Код магазина</th> 
<th> Название </th> 
<th> Ссылка </th>
<th> Редактировать </th> 
<th> Уничтожить </th>
</tr>
<?php
$result = $link->query("SELECT id_store, name_store, url_store FROM Stores"); 
if ($result) {
$counter=0;
while ($row = $result->fetch_array()){
$id_store = $row['id_store']; 
$name_store = $row['name_store'];
$url_store = $row['url_store'];
$counter++;
echo "<tr>";
echo "<td>$id_store</td><td>$name_store</td><td>$url_store</td>";
echo "<td><a href='edit_stores.php?name_store=$name_store'>Редактировать</a></td>";
echo "<td><a href='delete_stores.php?name_store=$name_store'>Удалить</a></td>";
echo "</tr>";
}
print "</table>";
print("<p>Всего цифровых магазинов: $counter </p>");
}
print("<p> <a href='new_stores.php'> Добавить магазин </a> </p>");
?>