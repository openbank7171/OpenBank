<?php
    include "./session.php";
?>

<?php
    $id = $_GET['id'];
    
    include "../conn.php";
    $sql = "DELETE FROM balance WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./balance.php");

    mysqli_close($con);
?>