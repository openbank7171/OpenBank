<?php

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );
header( 'Access-Control-Allow-Methods: DELETE' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With' );

$data2 = json_decode( file_get_contents( 'php://input' ), true );
$id = $data2[ 'id' ];

include './conn.php';

$de = "DELETE FROM send_money WHERE id = {$id}";

if ( mysqli_query( $con, $de ) ) {

    echo json_encode( array( 'message' => 'Insert Successful.', 'status' => 'true' ), JSON_PRETTY_PRINT );

} else {

    echo json_encode( array( 'message' => 'Insert failed.', 'status' => 'false' ), JSON_PRETTY_PRINT );

}

?>