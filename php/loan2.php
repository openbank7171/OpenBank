<?php
include './conn.php';

if ( isset( $_POST[ 'submitbtn' ] ) ) {

    $loan_name = $_POST[ 'loan_name' ];
    $loan_number = $_POST[ 'loan_number' ];
    $loan_amount = $_POST[ 'loan_amount' ];
    $loan_loan = $_POST[ 'loan_loan' ];

    $sql = "SELECT * FROM loanemi WHERE number = '{$loan_number}'";
    $query = mysqli_query( $con, $sql ) or die( 'Query unsucessful' );
    if ( mysqli_num_rows( $query ) > 0 ) {
        while ( $row = mysqli_fetch_assoc( $query ) ) {

            header( 'Location: ./loan_no.php' );
        }
    } else {

        $uplod = $_FILES[ 'loan_pic' ][ 'name' ];
        $fol = '../img/NID Card/' . $uplod;
        $tmp = $_FILES[ 'loan_pic' ][ 'tmp_name' ];
        $path = pathinfo( $uplod, PATHINFO_EXTENSION );
        $low = strtolower( $path );
        $ext = [ 'png', 'jpg', 'jpeg', 'gif', 'webp' ];

        if ( !in_array( $low, $ext ) ) {
            echo '';
            return false;
        } else {
            $mov = move_uploaded_file( $tmp, $fol );
        }

        $uplod2 = $_FILES[ 'nid_f' ][ 'name' ];
        $fol2 = '../img/NID Card/' . $uplod2;
        $tmp2 = $_FILES[ 'nid_f' ][ 'tmp_name' ];
        $path2 = pathinfo( $uplod2, PATHINFO_EXTENSION );
        $low2 = strtolower( $path2 );
        $ext2 = [ 'png', 'jpg', 'jpeg', 'gif', 'webp' ];

        if ( !in_array( $low2, $ext2 ) ) {
            echo '';
            return false;
        } else {
            $mov2 = move_uploaded_file( $tmp2, $fol2 );
        }

        $uplod3 = $_FILES[ 'nid_b' ][ 'name' ];
        $fol3 = '../img/NID Card/' . $uplod3;
        $tmp3 = $_FILES[ 'nid_b' ][ 'tmp_name' ];
        $path3 = pathinfo( $uplod3, PATHINFO_EXTENSION );
        $low3 = strtolower( $path3 );
        $ext3 = [ 'png', 'jpg', 'jpeg', 'gif', 'webp' ];

        if ( !in_array( $low3, $ext3 ) ) {
            echo '';
            return false;
        } else {
            $mov3 = move_uploaded_file( $tmp3, $fol3 );
        }

        date_default_timezone_set( 'Asia/Dhaka' );
        $d = date( 'Y-m-d h:i:s' );

        $sql9 = "INSERT INTO loanemi(`name`, `number`, `amount`, `din`, `pic`, `nid_f`, `nid_b`, `date`) VALUES ('{$loan_name}','{$loan_number}','{$loan_amount}','{$loan_loan}','{$fol}','{$fol2}','{$fol3}','{$d}')";
        $query9 = mysqli_query( $con, $sql9 ) or die( 'Query unsucessful' );

    }
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='../img/bn.png' type='image/x-icon'>
    <link rel='stylesheet' href='../css/home.css'>
    <link rel='stylesheet' href='../css/home3.css'>
    <title>Open Bank</title>
</head>

<body>

    <div class='tiloan' style=' margin-top: -10px; display: flex; justify-content: center; align-items: center;'>
        <img class='logo' src='../img/bn.png' alt='logo'>
        <img class='title' src='../img/open.png'
            style='box-shadow: 0px 0px 10px white; border-radius: 5px; background: rgba(4, 218, 189, 1); padding: 5px; height: 50px; width: 250px;'>
    </div>
    <hr>

    <div class='loan_succ'>
        <img src='../img//loan_succ.png' id='l_succ'>
        <h3 style='color: green; text-shadow: 0px 0px 5px rgba(255, 255, 255, 1);'>
            ✅ লোন ইএমআই জমা সফল হয়েছে
        </h3>
        <p>
            আপনার লোন ইএমআই সফলভাবে জমা হয়েছে। ১ থেকে ২ দিনের মধ্যে অর্থ আপনার অ্যাকাউন্টে জমা হয়ে যাবে, যদি আপনার
            প্রদত্ত তথ্যগুলো সঠিক থাকে।
        </p>
        <h4>
            📌 ধন্যবাদ আমাদের সেবা ব্যবহার করার জন্য।
        </h4>
    </div>

    <script>
    setTimeout(() => {
        location.href = './signin.php';
    }, 4000);
    </script>
</body>

</html>