<!DOCTYPE html>
<html>
<head>
<title>_</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Форма ввода данных</h3>
<form action="create_handler.php" method="post">
  <label for="name">Название сделки:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <label for="price">Бюджет сделки:</label>
  <input type="text" id="price" name="price" required>
  <br>
  <label for="cost">Себестоимость:</label>
  <input type="text" id="cost" name="cost" >
  <br>
  <button type="submit">Создать сделку</button>
</form>
</body>
</html>