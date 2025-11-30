<?php
    include "./session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/signup.css">
    <title>Open Bank</title>
</head>

<body>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2>Update now your Data....</h2>
        <ul class="ul1">
            <li class="li1"><a href="./user_signup.php">Go Back Home Page</a></li>
        </ul>
    </div>

    <div class="cen2">
        <?php
            include "../conn.php";
            $id = $_GET['id'];
            $sql = "SELECT `id`, `name`, `phone`, `email`, `password`, `gender`, `address`, `image` FROM `signup` WHERE id = {$id}";
            $query = mysqli_query($con,$sql) or die ("query unsucessful");
            if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){      
        ?>
        <form action="./update2.php" method="POST">
            <div class="div">
                <div class="logo1">
                    <img class="logo2" src="../<?php echo $row['image']; ?>">
                </div>
                <div class="cen">
                    <label class="l" for="name">Name: </label>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <input type="text" name="name" id="name" class="fix" value="<?php echo $row['name']; ?>" />
                    <label class="l" for="phone">Call No.: </label>
                    <input type="text" name="phone" id="phone" class="fix" value="<?php echo $row['phone']; ?>" />
                </div>
                <div class="cen">
                    <label class="l" for="email">Email: </label>
                    <input type="email" name="email" id="email" class="fix" value="<?php echo $row['email']; ?>" />
                    <label class="l" for="pass">password: </label>
                    <input type="text" name="pass" id="pass" class="fix" value="<?php echo $row['password']; ?>" />
                </div>
                <div class="cen">
                    <label class="l" for="gender">Gender: </label>
                    <input type="text" name="gender" id="gender" class="fix" value="<?php echo $row['gender']; ?>" />
                    <label class="l" for="address">Address: </label>
                    <input type="text" name="address" id="address" class="fix" value="<?php echo $row['address']; ?>" />
                </div>
                <div class="cen">
                    <input type="submit" value="Update now" id="up_btn">
                </div>
            </div>
        </form>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>