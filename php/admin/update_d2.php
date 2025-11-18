<?php
    include "./session.php";
?>


<?php
    $id = $_POST['id'];
    $accountname = $_POST['account_name'];
    $accountnumber = $_POST['account_number'];
    $Bkashtransaction_id = $_POST['Bkash_transaction_id'];
    $amount = $_POST['amount'];

    include "../conn.php";
    $sql = "UPDATE deposit SET `account_name`='{$accountname}',`account_number`='{$accountnumber}',`Bkash_transaction_id`='{$Bkashtransaction_id}',`amount`='{$amount}' WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./user_deposit.php");

    mysqli_close($con);
?>