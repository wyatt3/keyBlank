<?php
include('layouts/header.php');
$type = $_GET['type'];

$stmt = $db->prepare("SELECT * FROM accounts WHERE name = ?");
$stmt->bind_param('s', $type);
$stmt->execute();
$account = $stmt->get_result()->fetch_assoc();
$stmt->close();

echo $account['name'];
?>