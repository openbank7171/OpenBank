<?php
    include "./session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>

    <?php
    include "../conn.php";
    $sql = "SELECT * FROM cash_out";
    $query = mysqli_query($con,$sql) or die ("Query unsucessful");
    if(mysqli_num_rows($query) > 0){    
?>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2>User Cash out Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./user_signup.php">Home Page</a></li>
        </ul>
    </div>
    <div class="search">
        <form action="./cash_se.php" method="post">
            <input type="text" name="search4" id="search" placeholder="Search by Account No :">
            <input type="submit" value="search" name="submit4" id="sub">
        </form>
    </div>
    <div class="fl">
        <div class="fl2">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Account Number</th>
                    <th>Account Number To</th>
                    <th>Amount</th>
                    <th>Transaction ID</th>
                    <th>Date</th>
                    <th>Delete</th>
                </tr>
                <tbody>
                    <?php
            while($row = mysqli_fetch_assoc($query)){
        ?>
                    <tr>
                        <td class="td1"><?php echo $row['id']; ?></td>
                        <td class="td2"><?php echo $row['number']; ?></td>
                        <td class="td6"><?php echo $row['number2']; ?></td>
                        <td class="td3"><?php echo $row['tk']; ?></td>
                        <td class='td4'><?php echo $row[ 'transaction' ]; ?></td>
                        <td class="td5"><?php echo $row['date']; ?></td>


                        <td class="r" style="padding: 0px;"><a
                                style="padding: 0px;  display: flex; justify-content: center; align-items: center;"
                                href="./cash_delet.php?id=<?php echo $row['id']; ?>"><img src="../../img/delete.png"
                                    style="border-radius: 50%;"></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    }
    else{
?>
    <div class="er">
        <div class="h2">
            <div class="gruf">
                <img class="logo" src="../../img/bn.png" alt="logo">
                <img class="open1" src="../../img/open.png" alt="open-bank">
            </div>
            <h2>User Cash out Data....</h2>
            <ul class="ul1">
                <li class="li1"><a href="./user_signup.php">Go Back</a></li>
            </ul>
        </div>

        <div class="err">
            <h2 class="err2"><?php echo "No records founs"; ?></h2>
        </div>
    </div>
    <?php
    }
?>
</body>

</html>