<?php include('layouts/header.php');
$checkingBalance = $db->query("SELECT * FROM accounts WHERE name = 'checking'")->fetch_array();
$savingsBalance = $db->query("SELECT * FROM accounts WHERE name = 'savings'")->fetch_array();
$checkingBalance = $checkingBalance['balance'];
$savingsBalance = $savingsBalance['balance'];
?>

<body class="bg-light">
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
            <div class="ad-card">
                <div class="ad-title text-secondary font-weight-bold mb-2">Invest in Dogecoin Today!</div>
                <div class="ad-content text-center">
                    <p>Halve your investment in as little as 8 hours with the much wow of this many trustful doggo!</p>
                    <img width="45%" src="img/dogecoin.png">
                    <p class="mt-3">Dogecoin uses much innovation combined with all new "good boy" technology to bork the value of your monies.</p>
                    <p class="font-italic font-weight-light small">Current Value: 1 Dogecoin = 1 Dogecoin</p>
                    <div class="btn btn-outline-secondary" onclick="disabled()">Buy the Dip!</div>
                </div>
            </div>
        </div>
    </div>
<?php include('layouts/footer.php'); ?>