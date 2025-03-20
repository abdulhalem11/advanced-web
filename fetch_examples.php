<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM users LIMIT 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<h3>fetch()</h3>";
print_r($row);

$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<h3>fetchAll()</h3>";
print_r($rows);

$stmt = $pdo->query("SELECT name FROM users");
echo "<h3>fetchColumn()</h3>";
while ($name = $stmt->fetchColumn()) {
    echo $name . "<br>";
}

$stmt = $pdo->query("SELECT * FROM users LIMIT 1");
$user = $stmt->fetch(PDO::FETCH_OBJ);
echo "<h3>fetchObject()</h3>";
echo $user->name;
?>