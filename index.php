<?php
include './conn.php';

if (isset($_POST['rsub'])) {

    $id = $_POST['id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $uplod = $_FILES['uplod']['name'];
    $fol = '../img/img/' . $uplod;
    $tmp = $_FILES['uplod']['tmp_name'];
    $path = pathinfo($uplod, PATHINFO_EXTENSION);
    $low = strtolower($path);
    $ext = ['png', 'jpg', 'jpeg', 'gif', 'webp'];

    date_default_timezone_set("Asia/Dhaka");
    $d = date('Y-m-d h:i:s');

    if (empty($name || $phone || $email || $password || $gender || $address)) {
        echo '';
    } else {

        if (!in_array($low, $ext)) {
            echo '';
            return false;
        } else {
            $mov = move_uploaded_file($tmp, $fol);
        }

        include './conn.php';
        $sql = "SELECT * FROM `signup` WHERE phone = '{$phone}' AND password = '{$password}'";
        $query1 = mysqli_query($con, $sql) or die('Query unsucessful');
        if (mysqli_num_rows($query1) > 0) {
            header('Location: err.php');
            return false;
        } else {
            include './conn.php';
            $sql = "INSERT INTO signup(`name`, `phone`, `email`, `password`, `gender`, `address`, `image`,`date`) VALUES ('{$name}','{$phone}','{$email}','{$password}','{$gender}','{$address}','{$fol}','{$d}')";
            $query1 = mysqli_query($con, $sql) or die('query unsucessful');

            $sql2 = "INSERT INTO balance(`account_number`, `balance`,`date`) VALUES ('{$phone}','','{$d}')";
            $query2 = mysqli_query($con, $sql2) or die('Query unsucessful');

            $sql3 = "INSERT INTO i(`account_number`, `i`, `img`,`date`) VALUES ('{$phone}','0','../img/bonus3.jpg','{$d}')";
            $query3 = mysqli_query($con, $sql3) or die('Query unsucessful');

            $sql4 = "INSERT INTO deposit(`account_name`, `account_number`, `Bkash_transaction_id`, `amount`, `image`,`date`) VALUES ('{$name}','{$phone}','No','0','{$fol}','{$d}')";
            $query4 = mysqli_query($con, $sql4) or die('query unsucessful');

            header('Location: ./signin.php');
            mysqli_close($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../css/regis.css'>
    <link rel='shortcut icon' href='../img/bn.png' type='image/x-icon'>
    <title>Open Bank</title>
</head>

<body>
    <div class='h2'>
        <div class='gruf'>
            <img class='logo' src='../img/bn.png' alt='logo'>
            <img class='open1' src='../img/open.png' alt='open-bank'>
        </div>
        <h2>Register here....</h2>
        <ul class='ul1'>
            <li class='li1'><img class='li2' src='../img/user.png' alt='user'></li>
        </ul>
    </div>

    <div class='allcon'>
        <div class='top'>
            <form onsubmit='return data()' action="<?php $_SERVER['PHP_SELF']; ?>" method='post'
                enctype='multipart/form-data'>
                <div class='flex'>
                    <input type='hidden' name='id'>
                </div>
                <div class='flex'>
                    <input class='fix' type='text' name='name' id='name' placeholder='Name :'>
                </div>
                <div class='flex'>
                    <input class='fix' type='number' name='phone' id='phone' placeholder='Phone number :'>
                </div>
                <div class='flex'>
                    <input class='fix' type='email' name='email' id='email' placeholder='Email address :'>
                </div>
                <div class='flex'>
                    <input class='fix' type='password' name='password' id='password' placeholder='Password :'>
                </div>
                <div class='GEN'>
                    <label for='gender'>Male</label>
                    <input type='radio' name='gender' id='gender' class='che' checked value='Male'>
                    <label for='gender2'>Female</label>
                    <input type='radio' name='gender' id='gender2' class='che' value='Female'>
                    <label for='gender3'>Others</label>
                    <input type='radio' name='gender' id='gender3' class='che' value='Others'>
                </div>
                <div class='flex'>
                    <input class='fix' type='text' name='address' id='address' placeholder='Address :'>
                </div>
                <div class='ffff'>
                    <div class='uplo1'>
                        <label class='rup' for='up'>Upload your
                            picture</label>
                        <input type='file' name='uplod' id='up'>
                    </div>
                    <input class='uplo2' type='submit' name='rsub' value='Register Now'>
                </div>
                <div class='rrr'>
                    <a class='rrrr' href='signin.php'>SignIn here</a>
                </div>
            </form>
        </div>
    </div>
    <div class='error'></div>

    <script src='../js/register.js'></script>
</body>

</html>
