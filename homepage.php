<?php
include('layouts/header.php');
$checkingBalance = $db->query("SELECT * FROM accounts WHERE name = 'checking'")->fetch_array();
$savingsBalance = $db->query("SELECT * FROM accounts WHERE name = 'savings'")->fetch_array();
$checkingBalance = $checkingBalance['balance'];
$savingsBalance = $savingsBalance['balance'];

$ad = $db->query("SELECT * FROM ads WHERE id = ". rand(1, 2))->fetch_array();
?>

<div class="fixed-top">
    <div class="navbar navbar-light bg-white">
        <div class="navbar-left">
            <a href="#" class="navbar-brand"><img src="img/dark_logo.png" height="32px" alt=""></a>
        </div>
        <div class="navbar-right">
            <a class="text-dark" href="index.php">Sign Off</a>
        </div>
    </div>
    <div class="red-bar bg-primary"></div>
</div>
<div class="hero text-light font-weight-bold">Welcome, Ed</div>
<div class="container homepage-container mt-4">
    <div class="accounts">
        <div class="account-card" >
            <a href="transfers.php?type=checking" class="account-title text-secondary font-weight-bold">Key Advantage MM Checking</a>
            <div class="account-number" >Checking - 9928</div>
            <div class="account-balance text-dark" onclick="window.location.href='transfers.php?type=checking'">$<?php echo number_format($checkingBalance, 2); ?></div>
            <div class="account-balance-date">Available Balance as of <?php echo date("M j, Y"); ?></div>
            <div class="account-buttons mt-2">
                <div class="btn btn-outline-secondary mr-1" onclick="disabled()">Pay Bill</div>
                <div class="btn btn-outline-secondary mx-1" onclick="disabled()">Transfer</div>
                <div class="btn btn-outline-secondary mx-1" onclick="disabled()">Send Money</div>
            </div>
        </div>
        <div class="account-card mt-4">
            <a href="transfers.php?type=savings" class="account-title text-secondary font-weight-bold">Key Saver</a>
            <div class="account-number">Savings - 2123</div>
            <div class="account-balance text-dark" onclick="window.location.href='transfers.php?type=savings'">$<?php echo number_format($savingsBalance, 2); ?></div>
            <div class="account-balance-date">Available Balance as of <?php echo date("M j, Y"); ?></div>
            <div class="account-buttons mt-2">
                <div class="btn btn-outline-secondary mx-1" onclick="disabled()">Transfer</div>
            </div>
        </div>
    </div>
    <div class="ads">
        <div class="ad-card text-center">
            <div class="ad-title text-secondary font-weight-bold mb-2"><?php echo $ad['title']; ?></div>
            <div class="ad-content">
                <p><?php echo $ad['p1']; ?></p>
                <img width="45%" src="img/<?php echo $ad['img_path']; ?>">
                <p class="mt-3"><?php echo $ad['p2']; ?></p>
                <p class="font-italic font-weight-light small"><?php echo $ad['small_text']; ?></p>
                <div class="btn btn-outline-secondary" onclick="disabled()"><?php echo $ad['btn_text']; ?></div>
            </div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>