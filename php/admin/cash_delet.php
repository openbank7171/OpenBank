<?php
include './session.php';
?>

<?php
$id = $_GET[ 'id' ];

include '../conn.php';
$sql = "DELETE FROM cash_out WHERE id = {$id}";
$query = mysqli_query( $con, $sql ) or die ( 'query unsucessful' );

header( 'Location: ./cash_out.php' );

mysqli_close( $con );
?>