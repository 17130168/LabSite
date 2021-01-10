<html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_keys.php" metod="get">
Код ключа: <input name="id_key" size="20" type="text">
<br>Дата покупки ключа: <input name="key_buy" size="20" type="date" placeholder="dd-mm-yyyy">
<br>Дата аннулирования ключа: <input name="key_end" size="20" type="date" placeholder="dd-mm-yyyy">
<br>Код игры: <input name="id_game" size="20" type="text">
<br>Код магазина: <input name="id_store" size="20" type="text">
<br>Цена ключа: <input name="key_sell" size="20" type="text">
<br>Тип ключа: <input name="key_type" size="20" type="text">
<p><input name="add" type="submit" value="Добавить"> <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index_keys.php"> Вернуться к списку ключей </a>
</body>
</html>