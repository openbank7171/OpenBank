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

    include "./up-bl.php";
    include "./conn.php";

    session_start();

    if (isset($_SESSION['num'])) {

        $phone = $_SESSION['num'];

        $sql = "SELECT * FROM signup WHERE phone = '{$phone}'";
        $query = mysqli_query($con,$sql) or die("Query unsucessful");
        if( mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){

                $sql2 = "SELECT * FROM balance WHERE account_number  = '{$phone}'";
                $query2 = mysqli_query($con,$sql2) or die("Query unsucessful");
                if( mysqli_num_rows($query2) > 0){
                    while($row2 = mysqli_fetch_assoc($query2)){


                        $sql3 = "SELECT * FROM i WHERE account_number  = {$phone}";
                        $query3 = mysqli_query($con,$sql3) or die("Query unsucessful");
                        if( mysqli_num_rows($query3) > 0){
                            while($row3 = mysqli_fetch_assoc($query3)){


                                $sql4 = "UPDATE i SET `i`= 1 WHERE account_number = {$phone}";
                                $query4 = mysqli_query($con,$sql4) or die("Query unsucessful");
        

                                $bl = $row2['balance'] + rand(0,80);
                                $bl2 = "UPDATE balance SET `balance`= {$bl} WHERE account_number = {$phone}";
                                $bl3 = mysqli_query($con,$bl2) or die ("query unsucessful");

                                if ($row3['i'] > 0) {
                                    include "./bl.php";
                                }else{
                                    include "./bl.php";
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>
</body>

</html>