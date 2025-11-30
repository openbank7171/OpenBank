<?php
include './session.php';
?>

<?php
$id = $_GET[ 'id' ];
include '../conn.php';
$sql3 = "DELETE FROM loanemi WHERE id = {$id}";
$query3 = mysqli_query( $con, $sql3 ) or die ( 'query unsucessful' );

header( 'Location: ./loan.php' );

mysqli_close( $con );
?>