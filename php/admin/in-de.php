<?php
    include "./session.php";
?>

<?php
    $id = $_GET['id'];
    
    include "../conn.php";
    $sql = "DELETE FROM i WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./user_signup.php");

    mysqli_close($con);
?>