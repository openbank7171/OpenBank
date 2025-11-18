<?php
    include "./session.php";
?>


<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gen = $_POST['gender'];
    $add = $_POST['address'];

    include "../conn.php";
    $sql = "UPDATE signup SET `name`='{$name}',`phone`='{$phone}',`email`='{$email}',`password`='{$pass}',`gender`='{$gen}',`address`='{$add}' WHERE id = {$id}";
    $query = mysqli_query($con,$sql) or die ("query unsucessful");

    header("Location: ./user_signup.php");

    mysqli_close($con);
?>