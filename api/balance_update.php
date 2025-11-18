<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    $data2 = json_decode(file_get_contents("php://input"),true);
    $user_phone = $data2['user_phone'];
    $user_tk = $data2['user_tk'];

    include "../php/conn.php";

    $sql = "SELECT * FROM balance WHERE account_number = '{$user_phone}'";
    $query = mysqli_query($con, $sql) or die("Query unsucessful");
    if (mysqli_num_rows($query) > 0) {
         while ($row = mysqli_fetch_assoc($query)) {

            $bl = $row['balance'] + $user_tk;

            $sql2 = "UPDATE balance SET `balance`='{$bl}' WHERE account_number = '{$user_phone}'";
            $query2 = mysqli_query($con, $sql2) or die("Query unsucessful");

         }

    }else{

        echo json_encode(array('message' => 'No Record Found', 'status' => 'false'), JSON_PRETTY_PRINT);
    
    }
    
?>