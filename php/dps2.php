<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dps.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>

    <?php

if ( isset( $_POST[ 'dps_btn' ] ) ) {

    $dhoron = $_POST[ 'dhoron' ];
    $dhoron2 = $_POST[ 'dhoron2' ];
    $dhoron3 = $_POST[ 'dhoron3' ];
    $name = $_POST[ 'name' ];
    $phone = $_POST[ 'phone' ];
    $amount = $_POST[ 'amount' ];

    session_start();
    $phone2 = $_SESSION[ 'phone2' ] = $phone;

    date_default_timezone_set( 'Asia/Dhaka' );
    $d = date( 'Y-m-d h:i:s' );

    if ( empty( $dhoron || $dhoron2 || $dhoron3 || $name || $phone || $amount ) ) {
        echo '';
    } else {

        include './conn.php';

        $sqlroni = "SELECT * FROM dps WHERE number = '{$phone}'";
        $queryroni = mysqli_query( $con, $sqlroni ) or die( 'Query unsucessful' );
        if ( mysqli_num_rows( $queryroni ) > 0 ) {
            while ( $ro = mysqli_fetch_assoc( $queryroni ) ) {

                $i = $ro[ 'i' ];

                if ( $i == 0 ) {

                    $sql3 = "SELECT * FROM balance WHERE account_number = '{$phone}'";
                    $query3 = mysqli_query( $con, $sql3 ) or die( 'Query unsucessful' );
                    if ( mysqli_num_rows( $query3 ) > 0 ) {
                        while ( $row3 = mysqli_fetch_assoc( $query3 ) ) {

                            $abl = 500 + 2.5;

                            if ( $row3[ 'balance' ] > $abl ) {

                                $sqq = "UPDATE dps SET `dhoron`='{$dhoron}',`meyad`='{$dhoron2}',`joma`='{$dhoron3}',`name`='{$name}',`number`='{$phone}',`amount`='{$amount}',`i`='1',`date`='{$d}' WHERE number = '{$phone}'";
                                $quu = mysqli_query( $con, $sqq ) or die( 'Query unsucessful' );

                                $bbl = $row3[ 'balance' ] - $amount;
                                $bbl2 = "UPDATE balance SET `balance`= {$bbl} WHERE account_number = '{$phone}'";
                                $bbl3 = mysqli_query( $con, $bbl2 ) or die( 'query unsucessful' );

                            } else {
                                header( 'Location: ./send_bl.php' );
                            }
                        }
                    }

                } else {

                    header ( 'Location: ./dps.php' );
                }

            }
        } else {
            header ( 'Location: ./dps.php' );
        }

    }

}

?>

    <script>
    setTimeout(() => {
        location.reload(true);
    }, 100);
    </script>

</body>

</html>