<?php
$db = new mysqli('127.0.0.1', 'wyatt', '', 'keyBlank');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

function reset_db($db) {
    $db->query('DELETE FROM transfers WHERE 1 = 1');
    for ($i = 2021;$i <= 2035;$i++) {
        for ($j = 1;$j < 13;$j++) {
            $title = "Test" . $j;
            $amount = rand(1, 100);
            $date = $i . '-' . $j . '-' . rand(12, 18);
            $stmt = $db->prepare('INSERT INTO transfers(bankType, title, amount, `date`) VALUES ("checking", ?, ?, ?)');
            $stmt->bind_param('sss',$title, $amount, $date);
            $stmt->execute();
            $stmt->close();
        }
    }

}
?>