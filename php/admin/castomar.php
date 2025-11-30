<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/castomar.css" />
    <title>Open Bank</title>
</head>

<body>

    <?php
include '../conn.php';
$sql = 'SELECT * FROM contact_us';
$query = mysqli_query( $con, $sql ) or die ( 'Query unsucessful' );
if ( mysqli_num_rows( $query ) > 0 ) {

    ?>




    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo" />
            <img class="open1" src="../../img/open.png" alt="open-bank" />
        </div>
        <h2>Users message....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./user_signup.php">Home Page</a></li>
        </ul>
    </div>

    <div class="tab">
        <table id="tbl">
            <tr>
                <th id="th1">Name</th>
                <th id="th2">Phone</th>
                <th id="th3">Email</th>
                <th id="th4">Message</th>
                <th id="th5">Date-Time</th>
                <th id="th6">Delete</th>
            </tr>
            <tbody id="tblb">
                <?php
    while( $row = mysqli_fetch_assoc( $query ) ) {
        ?>
                <tr id="trr">
                    <td id="td1"><?php echo $row['name']; ?></td>
                    <td id="td2"><?php echo $row['number']; ?></td>
                    <td id="td3"><?php echo $row['email']; ?></td>
                    <td id="td4"><?php echo $row['text']; ?></td>
                    <td id="td5"><?php echo $row['date']; ?></td>
                    <td id="td6"><a style='padding: 0px;  display: flex; justify-content: center; align-items: center;'
                            href="./castomar_delete.php?id=<?php echo $row['id']; ?>"><img src='../../img/delete.png'
                                style='border-radius: 50%;'></a></td>
                </tr>

                <?php }
        ?>
            </tbody>
        </table>
    </div>

    <?php
    } else {
        ?>
    <div class='er'>
        <div class='h2'>
            <div class='gruf'>
                <img class='logo' src='../../img/bn.png' alt='logo'>
                <img class='open1' src='../../img/open.png' alt='open-bank'>
            </div>
            <h2>Users message....</h2>
            <ul class='ul1'>
                <li class="li1"><a href="./user_signup.php">Go Back</a></li>
            </ul>
        </div>

        <div class='err'>
            <h2 class='err2'><?php echo 'No records founs';
        ?></h2>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>