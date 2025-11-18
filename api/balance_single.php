<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    $data2 = json_decode(file_get_contents("php://input"),true);
    $user_phone = $data2['user_phone'];

    include "../php/conn.php";

    $sql = "SELECT * FROM balance WHERE account_number = '{$user_phone}'";
    $query = mysqli_query($con, $sql) or die("Query unsucessful");

    if (mysqli_num_rows($query) > 0) {

        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        echo json_encode($data, JSON_PRETTY_PRINT);

    }else{

        echo json_encode(array('message' => 'No Record Found', 'status' => 'false'), JSON_PRETTY_PRINT);
    
    }
    
?>