<?php
include('layouts/header.php');
$type = $_GET['type'];

// Pulling in account info from database
$stmt = $db->prepare("SELECT * FROM accounts WHERE name = ?");
$stmt->bind_param('s', $type);
$stmt->execute();
$account = $stmt->get_result()->fetch_assoc();
$stmt->close();

$today =  date('Y-m-d');
$threeMonths = date('Y-m-d', strtotime('-365 days', strtotime($today)));
// Pulling in transfers for that account
$stmt = $db->prepare("SELECT * FROM transfers WHERE bankType = ? AND (`date` BETWEEN ? AND ?) ORDER BY `date` DESC");
$stmt->bind_param('sss', $account['name'], $threeMonths, $today);
$stmt->execute();
$transfers = $stmt->get_result();
$stmt->close();
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
<div class="hero"></div>
<div class="container">
  <h1 class="bank-name"><?php echo $account['name'] == 'checking' ? 'Key Advantage MM Checking<span> - 9928</span>' : 'Key Saver<span> - 2123</span>'; ?></h1>
  <h2 class="balance">$<?php echo number_format($account['balance'], 2) ?></h2>
  <div class="available-balance-text">Available Balance</div>
  <table class="table table-striped transfers-table">
    <tr>
      <th>Date</th>
      <th>Description</th>
      <th>Type</th>
      <th class="text-right">Amount</th>
      <th class="text-right">Transaction Balance</th>
    </tr>
  <?php $accountBalance = $account['balance'];
  foreach ($transfers as $transfer) {
    $date = date_create($transfer['date']); ?>
    <tr>
      <td><?php echo date_format($date, 'M j'); ?></td>
      <td><?php echo $transfer['title']; ?></td>
      <td class="type type-<?php echo str_replace(' ', '-', strtolower($transfer['type'])) ?>"><div class="type-block"></div><?php echo $transfer['type']; ?></td>
      <td class="text-right <?php echo $transfer['amount'] < 0 ? '">-$': 'text-success">$'; echo number_format(abs($transfer['amount']), 2); ?></td>
      <td class="text-right">$<?php echo number_format($accountBalance, 2); ?></td>
    </tr>
<?php 
    $accountBalance -= $transfer['amount'];
  }
 ?>
  </table>
</div>

<?php include('layouts/footer.php'); ?>