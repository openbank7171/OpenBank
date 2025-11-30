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
        <h2>User Balance Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./balance.php">Go Back</a></li>
        </ul>
    </div>

    <div class="err">
        <h2 class="err2"><?php echo "No records founs"; ?></h2>
    </div>

    <?php

    if (isset($_POST['submit4'])) {
        if ($_POST['search4']) {

            include "../conn.php";
            $sql1 = "SELECT * FROM balance WHERE account_number = '{$_POST['search4']}'";
            $query1 = mysqli_query($con,$sql1) or die ("Query unsucessful");
            if(mysqli_num_rows($query1) > 0){
                while($row = mysqli_fetch_assoc($query1)){
                    ?>
    <div class="box">
        <div class="card" style="padding: 20px; display: flex; justify-content: center; align-items: center;">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Account_number</th>
                    <th>Balance</th>
                </tr>
                <tbody>
                    <tr>
                        <td class="td1"><?php echo $row['id']; ?></td>
                        <td class="td3"><?php echo $row['account_number']; ?></td>
                        <td class="td4"><?php echo $row['balance']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
            }
        }
            
        }else{
            header('Location: ./balance.php');
        }
    }
?>
</body>

</html>