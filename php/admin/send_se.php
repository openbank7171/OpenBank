<?php
    include "./session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/search.css">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2>User Search Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./send_money.php">Go Back</a></li>
        </ul>
    </div>

    <div class="err">
        <h2 class="err2"><?php echo "No records founs"; ?></h2>
    </div>

    <?php

    if (isset($_POST['submit4'])) {
        if ($_POST['search4']) {

            include "../conn.php";
            $sql = "SELECT * FROM send_money WHERE number = '{$_POST['search4']}'";
            $query = mysqli_query($con,$sql) or die ("Query unsucessful");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    ?>
    <div class="box">
        <div class="card" style="padding: 20px; display: flex; justify-content: center; align-items: center;">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Account Number</th>
                    <th>Account Number To</th>
                    <th>Amount</th>
                    <th>Transaction ID</th>
                    <th>Date</th>
                </tr>
                <tbody>
                    <tr>
                        <td class="td1"><?php echo $row['id']; ?></td>
                        <td class="td2"><?php echo $row['number']; ?></td>
                        <td class="td6"><?php echo $row['number2']; ?></td>
                        <td class="td3"><?php echo $row['tk']; ?></td>
                        <td class='td4'><?php echo $row[ 'transaction' ]; ?></td>
                        <td class="td5"><?php echo $row['date']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
            }
        }
            
        }else{
            header('Location: ./send_money.php');
        }
    }
?>
</body>

</html>