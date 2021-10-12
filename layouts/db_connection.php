<?php
//Create base DB connection
$db = new mysqli('127.0.0.1', 'wyatt', '', 'keyBlank');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}


//Update Checking account balance if a new transaction appears
$balance = 1423.67; //generic starting balance
$transfers = $db->query('SELECT * FROM transfers WHERE bankType = "checking" AND (`date` BETWEEN "2020-10-01" AND "2021-10-12")');
foreach($transfers as $transfer) {
    $balance += $transfer['amount'];
}
$stmt = $db->prepare('UPDATE accounts SET balance = ? WHERE `name` = "checking"');
$stmt->bind_param('s', $balance);
$stmt->execute();
$stmt->close();

//TODO need to add in similar logic for savings account


//resets DB and re-seeds with test transactions
function reset_db($db) {
    $db->query('DELETE FROM transfers WHERE 1 = 1');
    //Between the years 2020 and 2034
    for ($i = 2020;$i <= 2035;$i++) {
        // for months 1 through 12
        for ($j = 1;$j < 13;$j++) {
            $title = "Test Charge " . $j;
            $amount = -(rand(1, 100) + (rand(1, 99) / 100)); //Random charge amount
            $date = $i . '-' . $j . '-' . rand(12, 18); //random day between 12th and 18th
            $stmt = $db->prepare('INSERT INTO transfers(bankType, title, `type`, amount, `date`) VALUES ("checking", ?, "Debit Card", ?, ?)');
            $stmt->bind_param('sss',$title, $amount, $date);
            $stmt->execute();
            $stmt->close();

            $title = "Test Deposit " . $j;
            $amount = 100.00;
            $date = $i . '-' . $j . '-1';
            $stmt = $db->prepare('INSERT INTO transfers(bankType, title, `type`, amount, `date`) VALUES ("checking", ?, "Deposit", ?, ?)');
            $stmt->bind_param('sss', $title, $amount, $date);
            $stmt->execute();
            $stmt->close();
        }
    }

}
?>