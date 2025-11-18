<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>


    <?php

    if (isset($_POST['cash'])) {

        $id = $_POST['id'];
        $number = $_POST['number'];
        $pass = $_POST['pass'];
        
        $phone = $_POST['un1'];
        $password = $_POST['up1'];
        $amount = $_POST['ua1'];
        

        if ($pass == $password) {
            include './conn.php';
            $sql = "SELECT * FROM signup WHERE phone = '{$number}' AND password = '{$password}'";
            $query = mysqli_query($con, $sql) or die('Query unsucessful');
            while ($row = mysqli_fetch_assoc($query)) {
                if (mysqli_num_rows($query) > 0) {

                    $sql2 = "SELECT * FROM balance WHERE id = '{$id}'";
                $query2 = mysqli_query($con, $sql2) or die('Query unsucessful');
                if (mysqli_num_rows($query2) > 0) {
                    while ($row2 = mysqli_fetch_assoc($query2)) {

                        if ($row['phone'] == $phone) {

                            header('Location: ./send_my.php');
                        } else {

                            $abl = $amount + 5;

                            if ($row2['balance'] > $abl) {

                                if ($amount < 500) {
                                    
                                    $bl = $row2['balance'] - 2.5;
                                    $bl -= $amount;
                                    $bl2 = "UPDATE balance SET `balance`= {$bl} WHERE id = {$id}";
                                    $bl3 = mysqli_query($con, $bl2) or die('query unsucessful');
    
                                }else if ($amount >= 500) {
                                    
                                    $bl = $row2['balance'] - 5;
                                    $bl -= $amount;
                                    $bl2 = "UPDATE balance SET `balance`= {$bl} WHERE id = {$id}";
                                    $bl3 = mysqli_query($con, $bl2) or die('query unsucessful');
    
                                }else if ($amount >= 1000) {

                                    $amount2 = $amount;
                                    
                                    for ($amount; $amount <= $amount2; $amount++) { 
                                        $bat = $amount / 200;

                                        $bl = $row2['balance'] - $bat;
                                        $bl -= $amount;
                                        $bl2 = "UPDATE balance SET `balance`= {$bl} WHERE id = {$id}";
                                        $bl3 = mysqli_query($con, $bl2) or die('query unsucessful');

                                    }
                                }else{
                                    header('Location: ./send_bl.php');
                                }
                                

                                $sql3 = "SELECT * FROM balance WHERE account_number = '{$phone}'";
                                $query3 = mysqli_query($con, $sql3) or die('Query unsucessful');
                                if (mysqli_num_rows($query2) > 0) {
                                    while ($row3 = mysqli_fetch_assoc($query3)) {

                                        $bbl = $row3['balance'] + $amount;
                                        $bbl2 = "UPDATE balance SET `balance`= {$bbl} WHERE account_number = '{$phone}'";
                                        $bbl3 = mysqli_query($con, $bbl2) or die('query unsucessful');


                                        date_default_timezone_set("Asia/Dhaka");
                                        $d = date('Y-m-d h:i:s');

                                        function trans($len = 10){
                                            $t = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                            $st = strlen($t);
                                            $str = "";
   
                                            for ($i=0; $i < $len; $i++) { 
                                                $str .= $t[mt_rand(0,$st -1)];
                                            }

                                            return $str;
                                        }
                                        $tr = trans();


                                        $ring = '../audio/iphone-notification-67593.mp3';

                                        $sql4 = "INSERT INTO cash_out(`number`, `number2`, `tk`, `transaction`, `ring`, `date`) VALUES ('{$phone}', '{$number}', '{$amount}', '{$tr}', '{$ring}', '{$d}')";
                                        $query4 = mysqli_query($con, $sql4) or die('query unsucessful');

                                        header('Location: ./cash_outs.php');
                                    }
                                } else {
                                    header('Location: ./signin.php');
                                }
                            } else {
                                header('Location: ./send_bl.php');
                            }
                        }
                    }

                }

                }   
            }
        }else{
            header('Location: ./send_pi.php');
        }
    }

    ?>

</body>

</html>