<?php
    include "./session.php";
?>


<?php
    $id = $_POST['id2'];
    $accountnumber = $_POST['account_number2'];
    $amount = $_POST['balance2'];

    include "../conn.php";
    $sql = "UPDATE i SET `account_number`='{$accountnumber}',`i`={$amount} WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./bonus-i.php");

    mysqli_close($con);
?>