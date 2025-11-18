<?php
    include "./session.php";
?>


<?php
    $id = $_POST['id2'];
    $accountnumber = $_POST['account_number2'];
    $amount = $_POST['balance2'];

    include "../conn.php";
    $sql = "UPDATE balance SET `account_number`='{$accountnumber}',`balance`={$amount} WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./balance.php");

    mysqli_close($con);
?>