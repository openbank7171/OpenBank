<?php
    include "./session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/search.css">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2>User SignUp Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./user_signup.php">Go Back Home Page</a></li>
        </ul>
    </div>

    <div class="err">
        <h2 class="err2"><?php echo "No records founs"; ?></h2>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        if ($_POST['search']) {

            include "../conn.php";
            $sql1 = "SELECT * FROM signup WHERE id = {$_POST['search']}";
            $query1 = mysqli_query($con,$sql1) or die ("Query unsucessful");
            if(mysqli_num_rows($query1) > 0){
                while($row = mysqli_fetch_assoc($query1)){
                    ?>
    <div class="box">
        <div class="card">
            <div class="logo1">
                <img class="logo2" src="../<?php echo $row['image']; ?>">
            </div>
            <div class="flex">
                <h3 class="d1"> ID : <?php echo $row['id']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d2"> Name : <?php echo $row['name']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d3"> Phone No. : <?php echo $row['phone']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d4"> Email : <?php echo $row['email']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d5"> Password : <?php echo $row['password']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d6"> Gender : <?php echo $row['gender']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d7"> Address : <?php echo $row['address']; ?></h3>
            </div>
        </div>
    </div>
    <?php
                }
            }
            
        }else{
            header('Location: ./user_signup.php');
        }
    }
?>



    <?php

    if (isset($_POST['sub'])) {
        if ($_POST['sea']) {


            include "../conn.php";
            $sql1 = "SELECT * FROM signup WHERE phone = '{$_POST['sea']}'";
            $query1 = mysqli_query($con,$sql1) or die ("Query unsucessful");
            if(mysqli_num_rows($query1) > 0){
                while($row = mysqli_fetch_assoc($query1)){
                    ?>
    <div class="box">
        <div class="card">
            <div class="logo1">
                <img class="logo2" src="../<?php echo $row['image']; ?>">
            </div>
            <div class="flex">
                <h3 class="d1"> ID : <?php echo $row['id']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d2"> Name : <?php echo $row['name']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d3"> Phone No. : <?php echo $row['phone']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d4"> Email : <?php echo $row['email']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d5"> Password : <?php echo $row['password']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d6"> Gender : <?php echo $row['gender']; ?></h3>
            </div>
            <div class="flex">
                <h3 class="d7"> Address : <?php echo $row['address']; ?></h3>
            </div>
        </div>
    </div>
    <?php
                }
            }
            
        }else{
            header('Location: ./user_signup.php');
        }
    }
?>

</body>

</html>