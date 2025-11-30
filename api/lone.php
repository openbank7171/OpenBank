<?php

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );
header( 'Access-Control-Allow-Methods: POST,GET,PUT,DELETE' );
header( 'Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With' );

include '../php/conn.php';

$sql = 'SELECT * FROM loanemi';
$query = mysqli_query( $con, $sql ) or die ( 'Query unsucessful' );

if ( mysqli_num_rows( $query ) > 0 ) {

    $data = mysqli_fetch_all( $query, MYSQLI_ASSOC );
    echo json_encode( $data, JSON_PRETTY_PRINT );

} else {

    echo json_encode( array( 'message' => 'No Record Found', 'status' => 'false' ), JSON_PRETTY_PRINT );

}

?>