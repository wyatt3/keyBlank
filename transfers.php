<?php
include('layouts/header.php');
$type = $_GET['type'];

// Pulling in account info from database
$stmt = $db->prepare("SELECT * FROM accounts WHERE name = ?");
$stmt->bind_param('s', $type);
$stmt->execute();
$account = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Pulling in transfers for that account
$stmt = $db->prepare("SELECT * FROM transfers WHERE bankType = ?");
$stmt->bind_param('s', $account['name']);
$stmt->execute();
$transfers = $stmt->get_result();
$stmt->close();

foreach ($transfers as $transfer) {
  echo $transfer['title'];
}
?>

<div class="fixed-top">
  <div class="navbar navbar-light bg-white">
    <div class="navbar-left">
      <a href="homepage.php" class="navbar-brand"><img src="img/dark_logo.png" height="32px" alt=""></a>
    </div>
    <div class="navbar-right">
      <a class="text-dark" href="index.php">Sign Off</a>
    </div>
  </div>
  <div class="red-bar bg-primary"></div>
</div>

<?php include('layouts/footer.php'); ?>