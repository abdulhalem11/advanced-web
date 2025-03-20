<?php
require 'db.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$rowsPerPage = 20;
$offset = ($page - 1) * $rowsPerPage;

$stmt = $pdo->prepare("SELECT * FROM users LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $rowsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user['name'] . " - " . $user['email'] . "<br>";
}

$totalRows = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$totalPages = ceil($totalRows / $rowsPerPage);

for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>Page $i</a> ";
}
?>