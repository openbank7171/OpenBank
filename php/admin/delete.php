<?php
include './session.php';
?>

<?php
$id = $_GET[ 'id' ];

include '../conn.php';
$sql = "DELETE FROM signup WHERE id = {$id}";
$query = mysqli_query( $con, $sql ) or die ( 'query unsucessful' );

$sql1 = "DELETE FROM i WHERE id = {$id}";
$query1 = mysqli_query( $con, $sql1 ) or die ( 'query unsucessful' );

$sql2 = "DELETE FROM balance WHERE id = {$id}";
$query2 = mysqli_query( $con, $sql2 ) or die ( 'query unsucessful' );

$sql3 = "DELETE FROM deposit WHERE id = {$id}";
$query3 = mysqli_query( $con, $sql3 ) or die ( 'query unsucessful' );

$sql3 = "DELETE FROM send_money WHERE id = {$id}";
$query3 = mysqli_query( $con, $sql3 ) or die ( 'query unsucessful' );

$sql3 = "DELETE FROM cash_out WHERE id = {$id}";
$query3 = mysqli_query( $con, $sql3 ) or die ( 'query unsucessful' );

$sql3 = "DELETE FROM dps WHERE id = {$id}";
$query3 = mysqli_query( $con, $sql3 ) or die ( 'query unsucessful' );

header( 'Location: ./user_signup.php' );

mysqli_close( $con );
?>