<?php

$host = getenv('TEST_DB_HOST');
$db = getenv('TEST_DB_NAME');
$user = getenv('TEST_DB_USER');
$password = getenv('TEST_DB_PASSWORD');

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
  $pdo = new PDO($dsn, $user, $password);

  if ($pdo) {
    echo "Connected to database successfully!";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
