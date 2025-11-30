<?php
include './session.php';
?>

<?php
$id = $_GET[ 'id' ];

include '../conn.php';
$sql = "DELETE FROM send_money WHERE id = {$id}";
$query = mysqli_query( $con, $sql ) or die ( 'query unsucessful' );

header( 'Location: ./send_money.php' );

mysqli_close( $con );
?>