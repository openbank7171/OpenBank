<?php

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );
header( 'Access-Control-Allow-Methods: POST,GET,PUT,DELETE' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With' );

$data2 = json_decode( file_get_contents( 'php://input' ), true );
$dhoron = $data2[ 'dhoron' ];
$meyad = $data2[ 'meyad' ];
$joma = $data2[ 'joma' ];
$name = $data2[ 'name' ];
$number = $data2[ 'number' ];
$amount = $data2[ 'amount' ];
$i = $data2[ 'i' ];

date_default_timezone_set( 'Asia/Dhaka' );
$d = date( 'Y-m-d h:i:s' );

include '../php/conn.php';

$sql = "INSERT INTO dps(`dhoron`, `meyad`, `joma`, `name`, `number`, `amount`, `i`, `date`) VALUES ('{$dhoron}','{$meyad}','{$joma}','{$name}','{$number}','{$amount}','{$i}','{$d}')";

if ( mysqli_query( $con, $sql ) ) {

    echo json_encode( array( 'message' => 'Insert Successful.', 'status' => 'true' ), JSON_PRETTY_PRINT );

} else {

    echo json_encode( array( 'message' => 'Insert failed.', 'status' => 'false' ), JSON_PRETTY_PRINT );

}

?>