<html>
<head
<title> Редактирование данных о магазине </title>
</head>
<body> 
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$name_store =  $_GET['name_store'];
$result = $link->query("SELECT url_store FROM Stores WHERE name_store = '$name_store'");
if ($result) {
while ($st = $result->fetch_array()) {
$url_store = $st['url_store'];
}
}
print "<form action='save_edit_stores.php' method='get'>";
print "Название: <input name='new_name_store' size='50' type='text' value='$name_store'>";
print "<br>Ссылка: <input name='url_store' size='20' type='text' value='$url_store'>";
print "<input type='hidden' name='name_store' size='30' value='$name_store'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href='index_stores.php'> Вернуться к списку магазинов </a>";
?>
</body>
</html>