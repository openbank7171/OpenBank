<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    $data2 = json_decode(file_get_contents("php://input"),true);
    $user_phone = $data2['user_phone'];

    include "../php/conn.php";

    $sql = "DELETE FROM cash_out WHERE number = '{$user_phone}'";

    if (mysqli_query($con, $sql)) {

        echo json_encode(array('message' => 'Delete Successful.', 'status' => 'true'), JSON_PRETTY_PRINT);
    
    }else{

        echo json_encode(array('message' => 'Delete failed.', 'status' => 'false'), JSON_PRETTY_PRINT);
    
    }
    
?>