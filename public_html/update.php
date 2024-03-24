<!DOCTYPE html>
<html>
<head>
<title>_</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Введите ID сделки</h3>
<form action="update_handler.php" method="post">
  <label for="lead_id">ID сделки:</label>
  <input type="text" name="lead_id" required>
  <br>
  <label for="price">Новый бюджет сделки:</label>
  <input type="text" id="price" name="price" required>
  <br>
  <label for="cost">Новая себестоимость:</label>
  <input type="text" id="cost" name="cost" >
  <br>
  <button type="submit">Продолжить</button>
</form>
</body>
</html>