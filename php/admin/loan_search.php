<?php
include './session.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../../css/style.css'>
    <link rel='stylesheet' href='../../css/search.css'>
    <link rel='shortcut icon' href='../../img/bn.png' type='image/x-icon'>
    <title>Open Bank</title>
</head>

<body>
    <div class='h2'>
        <div class='gruf'>
            <img class='logo' src='../../img/bn.png' alt='logo'>
            <img class='open1' src='../../img/open.png' alt='open-bank'>
        </div>
        <h2>User LoanEMI Data....</h2>
        <ul class='ul1'>
            <li class='li1'><a href='./loan.php'>Go Back</a></li>
        </ul>
    </div>

    <div class='err'>
        <h2 class='err2'><?php echo 'No records founs';
?></h2>
    </div>

    <?php

if ( isset( $_POST[ 'sub' ] ) ) {
    if ( $_POST[ 'sea' ] ) {

        include '../conn.php';
        $sql = "SELECT * FROM loanemi WHERE number = '{$_POST['sea']}'";
        $query = mysqli_query( $con, $sql ) or die ( 'Query unsucessful' );
        if ( mysqli_num_rows( $query ) > 0 ) {
            while( $row = mysqli_fetch_assoc( $query ) ) {
                ?>
    <div class='box' style='flex-direction: column; gap:150px;'>
        <div class='card'
            style='width: auto; padding: 5px; display: flex; justify-content: center; align-items: center;'>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Amount</th>
                    <th>Din</th>
                    <th>Date</th>
                </tr>
                <tbody>
                    <tr>
                        <td class='td1'><?php echo $row[ 'id' ];
                ?></td>
                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 50px;  width: 50px; border-radius: 5px;'
                                src="../<?php echo $row['pic']; ?>">
                        </td>
                        <td class='td2'><?php echo $row[ 'name' ];
                ?></td>

                        <td class='td3'><?php echo $row[ 'number' ];
                ?></td>

                        <td class='td6'><?php echo $row[ 'amount' ];
                ?></td>

                        <td class='td4'><?php echo $row[ 'din' ];
                ?></td>

                        <td class='td8'><?php echo $row[ 'date' ];
                ?></td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class='card'
            style='width: auto; padding: 5px; display: flex; justify-content: center; align-items: center;'>
            <table>
                <tr>
                    <th>NID Card pic</th>
                </tr>
                <tbody>
                    <tr>
                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 230px;  width: 520px; border-radius: 5px;'
                                src="../<?php echo $row['nid_f']; ?>">
                        </td>

                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 230px;  width: 520px; border-radius: 5px;'
                                src="../<?php echo $row['nid_b']; ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
            }
        }

    } else {
        header( 'Location: ./loan.php' );
    }
}
?>
</body>

</html>