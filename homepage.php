<?php include('layouts/header.php');
$checkingBalance = 2626.52;
$savingsBalance = 1110.37;
?>

<body class="bg-light">
    <div class="fixed-top">
        <div class="navbar navbar-light bg-white">
            <div class="navbar-left">
                <a href="#" class="navbar-brand"><img src="img/dark_logo.png" height="32px" alt=""></a>
            </div>
            <div class="navbar-right">
                <a class="text-dark" href="login.php">Sign Off</a>
            </div>
        </div>
        <div class="red-bar bg-primary"></div>
    </div>
    <div class="hero text-light font-weight-bold">Welcome, Ed</div>
    <div class="container homepage-container mt-4">
        <div class="accounts">
            <div class="account-card">
                <a href="" class="account-title text-secondary font-weight-bold">Key Advantage MM Checking</a>
                <div class="account-number">Checking - 9928</div>
                <div class="account-balance text-dark">$<?php echo number_format($checkingBalance, 2); ?></div>
                <div class="account-balance-date">Available Balance as of <?php echo date("M j, Y"); ?></div>
                <div class="account-buttons mt-2">
                    <div class="btn btn-outline-secondary mr-1">Pay Bill</div>
                    <div class="btn btn-outline-secondary mx-1">Transfer</div>
                    <div class="btn btn-outline-secondary mx-1">Send Money</div>
                </div>
            </div>
            <div class="account-card mt-4">
                <a href="" class="account-title text-secondary font-weight-bold">Key Saver</a>
                <div class="account-number">Savings - 2123</div>
                <div class="account-balance text-dark">$<?php echo number_format($savingsBalance, 2); ?></div>
                <div class="account-balance-date">Available Balance as of <?php echo date("M j, Y"); ?></div>
                <div class="account-buttons mt-2">
                    <div class="btn btn-outline-secondary mx-1">Transfer</div>
                </div>
            </div>
        </div>
        <div class="ads"></div>
    </div>
