<?php
$link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
if ($link->connect_errno) {
echo "Не удалось подключиться к серверу";
}
$name_store = $_GET['name_store'];
$url_store = $_GET['url_store'];
$result = $link->query("INSERT INTO Stores SET name_store ='$name_store', url_store ='$url_store'");
if ($result){
 print "<p>Магазин зарегистрирован в базе данных."; 
 print "<p><a href=\"index_stores.php\"> Вернуться к списку магазинов </a>"; }
else {
 print "Ошибка сохранения. <a href=\"index_stores.php\"> 
 Вернуться к списку магазинов </a>"; }
?>