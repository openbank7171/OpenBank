<?php
include './session.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../../css/style.css'>
    <link rel='shortcut icon' href='../../img/bn.png' type='image/x-icon'>
    <title>Open Bank</title>
</head>

<body>

    <?php
include '../conn.php';
$sql = 'SELECT * FROM loanemi';
$query = mysqli_query( $con, $sql ) or die ( 'Query unsucessful' );
if ( mysqli_num_rows( $query ) > 0 ) {

    ?>
    <div class='h2'>
        <div class='gruf'>
            <img class='logo' src='../../img/bn.png' alt='logo'>
            <img class='open1' src='../../img/open.png' alt='open-bank'>
        </div>
        <h2>User LoanEMI Data....</h2>
        <ul class='ul1'>
            <li class='li1'><a href='./user_signup.php'>Home Page</a></li>
        </ul>
    </div>
    <div class='search'>
        <form action='./loan_search.php' method='post'>
            <input type='text' name='sea' id='search2' placeholder='Search by Phone No.'>
            <input type='submit' value='search' name='sub' id='sub2'>
        </form>
    </div>
    <div class='fl'>
        <div class='fl2'>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Amount</th>
                    <th>Din</th>
                    <th>NID-F</th>
                    <th>Date</th>
                    <th>NID-B</th>
                    <th>Delete</th>
                </tr>
                <tbody>
                    <?php
    while( $row = mysqli_fetch_assoc( $query ) ) {
        ?>
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

                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 50px;  width: 50px; border-radius: 5px;'
                                src="../<?php echo $row['nid_f']; ?>">
                        </td>

                        <td class='td8'><?php echo $row[ 'date' ];
        ?></td>

                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 50px;  width: 50px; border-radius: 5px;'
                                src="../<?php echo $row['nid_b']; ?>">
                        </td>

                        <td class='r' style='padding: 0px;'><a
                                style='padding: 0px;  display: flex; justify-content: center; align-items: center;'
                                href="./loan_delete.php?id=<?php echo $row['id']; ?>"><img src='../../img/delete.png'
                                    style='border-radius: 50%;'></a></td>
                    </tr>
                    <?php }
        ?>
                </tbody>
            </table>
        </div>
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
            <h2>User LoanEMI Data....</h2>
            <ul class='ul1'>
                <li class='li1'><a href='./user_signup.php'>Go Back</a></li>
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