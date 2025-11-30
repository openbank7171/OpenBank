<?php
include './session.php';
?>

<?php
$id = $_GET[ 'id' ];

include '../conn.php';
$sql = "DELETE FROM contact_us WHERE id = {$id}";
$query = mysqli_query( $con, $sql ) or die ( 'query unsucessful' );

header( 'Location: ./castomar.php' );

mysqli_close( $con );
?>