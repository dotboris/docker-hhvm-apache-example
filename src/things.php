<!DOCTYPE html>
<?php
$db = new PDO('mysql:host=db;dbname=app;charset=utf8mb4', 'app', getenv('DB_PASSWORD'));
$things = $db->query('select thing from things order by id desc')->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<body>
  <h1>Things</h1>
  <h2>Create new ones</h2>
  <form action="create_things.php" method="post">
    <label>How many?</label><input type="text" name="n"/>
    <input type="submit"/>
  </form>
  <h2>What we have</h2>
  <ul>
    <?php foreach ($things as $thing): ?>
      <li><?php echo $thing['thing']; ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>
