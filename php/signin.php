<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>
    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../img/bn.png" alt="logo">
            <img class="open1" src="../img/open.png" alt="open-bank">
        </div>
        <h2>SignIn here....</h2>
        <ul class="ul1">
            <li class="li1"><img class="li2" src="../img/user.png" alt="user"></li>
        </ul>
    </div>

    <div class="allcon">
        <div class="top">
            <form onsubmit="return da()" action="home_page.php" method="post">
                <div class="flex">
                    <input type="hidden" name="id">
                </div>

                <div class="flex">
                    <input class="fix" type="number" name="phone" id="rphone" placeholder="Phone number :">
                </div>
                <div class="flex">
                    <input class="fix" type="password" name="password" id="rpassword" placeholder="Password :">
                </div>
                <div class="ffff">
                    <input class="uplo3" type="submit" name="sub2" value="SignIn Now">
                    <a class="uplo2" href="register.php">Register Now</a>
            </form>
        </div>
    </div>
    <?php

    if (isset($_POST['sub2'])) {
        include "./conn.php";
        $id = $_POST['id'];
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $password = mysqli_real_escape_string($con,$_POST['password']);   

        if (empty($phone)) {
            header('Location: ./signin.php');
        }
        else if (empty($password)) {
            header('Location: ./signin.php');
        }
        else{
            if (isset($phone)) {
                if (isset($password)) {
                    include "./conn.php";
                    $sql = "SELECT * FROM signup WHERE phone = '{$phone}' AND password = '{$password}'";
                    $query = mysqli_query($con,$sql) or die ("Query unsucessful");
                    if( mysqli_num_rows($query) > 0){
                        header("Location: ./home_page.php");
                        mysqli_close($con);
                    }else{
                        header("Location: ./signin.php");
                        return false;
                    }
                }   
            }
        }
    }
?>

    <div id="roni"></div>
    <script src="../js/login.js"></script>
</body>

</html>