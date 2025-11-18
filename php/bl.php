<?php
include './up-bl.php';
include 'conn.php';

session_start();

if ( isset( $_SESSION[ 'num' ] ) ) {

    $phone = $_SESSION[ 'num' ];

    $sql = "SELECT * FROM signup WHERE phone = '{$phone}'";
    $query = mysqli_query( $con, $sql ) or die( 'Query unsucessful' );
    if ( mysqli_num_rows( $query ) > 0 ) {
        while( $row = mysqli_fetch_assoc( $query ) ) {

            $sql2 = "SELECT * FROM balance WHERE account_number  = '{$phone}'";
            $query2 = mysqli_query( $con, $sql2 ) or die( 'Query unsucessful' );
            if ( mysqli_num_rows( $query2 ) > 0 ) {
                while( $row2 = mysqli_fetch_assoc( $query2 ) ) {

                    $sql3 = "SELECT * FROM i WHERE account_number  = {$phone}";
                    $query3 = mysqli_query( $con, $sql3 ) or die( 'Query unsucessful' );
                    if ( mysqli_num_rows( $query3 ) > 0 ) {
                        while( $row3 = mysqli_fetch_assoc( $query3 ) ) {

                            ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='../img/bn.png' type='image/x-icon'>
    <title>Open Bank</title>
</head>

<body>

    <div class='boxxx1'
        style='background: rgba(0, 0, 0, 0.6); overflow: hidden; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;'>
        <div class='boxxx2'
            style='box-shadow: 0px 0px 10px black; border-radius: 5px; padding: 5px; background: rgba(255, 0, 119, 0.8); height: 650px; width: 600px;'>

            <div class='ti'
                style='margin-bottom: 40px; margin-top: 70px; display: flex; justify-content: center; align-items: center;'>
                <img class='title' src='../img/open.png'
                    style='box-shadow: 0px 0px 10px white; border-radius: 5px; background: rgba(255, 0, 119, 0.8); padding: 5px; height: 50px; width: 250px;'>
            </div>

            <div class='ti' style='margin-bottom: 40px; display: flex; justify-content: center; align-items: center;'>
                <h2 style='color:aliceblue;'>🎉🎇 Claim your bonus 🎇🎉</h2>
            </div>

            <div class='ti' style='margin-bottom: 40px; display: flex; justify-content: center; align-items: center;'>
                <img src="<?php echo $row3['img']; ?>" id='bon'
                    style='height: 230px; width: 230px; margin-top: 30px; border-radius: 5px; box-shadow: 0px 0px 10px black;'>
            </div>

            <div class='ti' style='margin-top: 20px; display: flex; justify-content: center; align-items: center;'>
                <h2 style='color:aliceblue;' id='time'>Go to the home screen.</h2>
            </div>

        </div>
    </div>

    <script>
    setTimeout(() => {
        location.href = './signin.php';
    }, 1000);
    </script>

</body>

</html>

<?php

                        }
                    }
                }
            }
        }
    }
}

?>