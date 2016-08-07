<?php
$n = (int) $_POST['n'];

if ($n >= 1) {
  $db = new PDO('mysql:host=db;dbname=app;charset=utf8mb4', 'app', getenv('DB_PASSWORD'));
  $stmt = $db->prepare('insert into things (thing) VALUES(?);');
  foreach (range(0, $n - 1) as $i) {
    $thing = 'thing_' . $i . '_' . time();
    $stmt->execute(array($thing));
  }
}

header('Location: things.php');
