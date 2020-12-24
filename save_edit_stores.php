<html>
<body>
<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$old_name_store = $_GET['name_store'];
$new_name_store = $_GET['new_name_store'];
$url_store = $_GET['url_store'];
$zapros = "UPDATE Stores SET name_store = '$new_name_store', url_store = '$url_store' WHERE name_store = '$old_name_store'";
$result = $link->query($zapros);
if ($result) { 
echo 'Все сохранено. <a href="index_stores.php"> 
Вернуться к списку магазинов </a>'; }
else { 
echo 'Ошибка сохранения. <a href="index_stores.php">
Вернуться к списку магазинов </a> '; }
?>
</body> 
</html>