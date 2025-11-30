<?php
    include "./session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/signup.css">
    <link rel="stylesheet" href="../../css/search.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Open Bank</title>
</head>

<body>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2>Update now your Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./user_deposit.php">Go Back</a></li>
        </ul>
    </div>

    <div class="cen2">
        <?php
            include "../conn.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM deposit WHERE id = {$id}";
            $query = mysqli_query($con,$sql) or die ("query unsucessful");
            if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){      
        ?>
        <form action="./update_d2.php" method="POST">
            <div class="cen">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <table>
                    <tr>
                        <th>Account_name</th>
                        <th>Account_number</th>
                        <th>Bkash_transaction_id</th>
                        <th>Amount</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="td1"><input type="text" name="account_name"
                                    value="<?php echo $row['account_name']; ?>"
                                    style="padding: 5px; padding-left: 10px; display: flex; justify-content: center; align-items: center; outline: none; border: none; border-radius: 5px;" />
                            </td>
                            <td class="td2"><input type="text" name="account_number"
                                    value="<?php echo $row['account_number']; ?>"
                                    style="padding: 5px; padding-left: 10px; display: flex; justify-content: center; align-items: center; outline: none; border: none; border-radius: 5px;" />
                            </td>
                            <td class="td3"><input type="text" name="Bkash_transaction_id"
                                    value="<?php echo $row['Bkash_transaction_id']; ?>"
                                    style="padding: 5px; padding-left: 10px; display: flex; justify-content: center; align-items: center; outline: none; border: none; border-radius: 5px;" />
                            </td>
                            <td class="td4"><input type="text" name="amount" value="<?php echo $row['amount']; ?>"
                                    style="padding: 5px; padding-left: 10px; display: flex; justify-content: center; align-items: center; outline: none; border: none; border-radius: 5px;" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cen">
                <input type="submit" value="Update now" id="up_btn">
            </div>
    </div>
    </form>
    <?php
            }
        }
        ?>
    </div>
</body>

</html>