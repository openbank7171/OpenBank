<?php

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );
header( 'Access-Control-Allow-Methods: POST,GET,PUT,DELETE' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With' );

$data2 = json_decode( file_get_contents( 'php://input' ), true );
$name = $data2[ 'name' ];
$phone = $data2[ 'phone' ];
$email = $data2[ 'email' ];
$text = $data2[ 'text' ];

date_default_timezone_set( 'Asia/Dhaka' );
$d = date( 'Y-m-d h:i:s' );

include '../php/conn.php';

$sql = "INSERT INTO contact_us(`name`, `number`, `email`, `text`, `date`) VALUES ('{$name}','{$phone}','{$email}','{$text}','{$d}')";

if ( mysqli_query( $con, $sql ) ) {

    echo json_encode( array( 'message' => 'Insert Successful.', 'status' => 'true' ), JSON_PRETTY_PRINT );

} else {

    echo json_encode( array( 'message' => 'Insert failed.', 'status' => 'false' ), JSON_PRETTY_PRINT );

}

?>