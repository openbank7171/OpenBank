<?php
    include "../conn.php";

    session_start();
    if (isset($_SESSION['username'])) {
        if (isset($_SESSION['pass'])) {
            header('Location: ./user_signup.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/signin.css">
    <link rel="stylesheet" href="../../css/sign.css">
    <link rel="shortcut icon" href="../../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>

    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../../img/bn.png" alt="logo">
            <img class="open1" src="../../img/open.png" alt="open-bank">
        </div>
        <h2 style="color:aliceblue;">My Admin</h2>
        <ul class="ul1">
            <li class="li1"><img class="li2" src="../../img/user.png" alt="user"></li>
        </ul>
    </div>

    <div class="allcon">
        <div class="top">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="flex">
                    <input type="hidden" name="id">
                </div>

                <div class="flex">
                    <input class="fix" type="text" name="name" id="name" placeholder="User Name :">
                </div>
                <div class="flex">
                    <input class="fix" type="password" name="password" id="rpassword" placeholder="Password :">
                </div>
                <div class="ffff">
                    <input class="uplo3" type="submit" name="sub3" value="LogIn Now">
            </form>
        </div>
    </div>

</body>

</html>



<?php
    if (isset($_POST['sub3'])) {

        $name = "MD@RONI";
        $pass = "123";

        $name2 = $_POST['name'];
        $pass2 = $_POST['password'];

        if ($name2 == $name) {
            if ($pass2 == $pass) {

                session_start();
                $_SESSION['username'] = $name;
                $_SESSION['pass'] = $pass;

                header('Location: ./user_signup.php');

            }else{
                header('Location: ./index.php');
            }
        }

    }
?>