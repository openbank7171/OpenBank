<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/home3.css">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>

    <?php

    if (isset($_POST['sub2'])) {

        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        session_start();
        $phone2 = $_SESSION['phone'] = $phone;
        $password2 = $_SESSION['password'] = $password;

        if (empty($phone)) {
            header("Location: ./signin.php");
            return false;
        } else if (empty($password)) {
            header("Location: ./signin.php");
            return false;
        } else {
            if (isset($_POST['name']) || isset($_POST['phone']) || isset($_POST['password'])) {
                include "./conn.php";
                $sql = "SELECT * FROM signup WHERE phone = '{$phone}' AND password = '{$password}'";
                $query = mysqli_query($con, $sql) or die("Query unsucessful");
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
    ?>



    <?php
                        include "./conn.php";
                        $sql2 = "SELECT * FROM balance WHERE account_number = '{$phone}'";
                        $query2 = mysqli_query($con, $sql2) or die("Query unsucessful");
                        if (mysqli_num_rows($query2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($query2)) {
                        ?>



    <div class="h2">
        <div class="gruf">
            <img class="logo" src="../img/bn.png" alt="logo">
            <img class="open1" src="../img/open.png" alt="open-bank">
        </div>
        <h3 id="hb">
            Your Balance Is :
            <input type="number" name="amount" class="bl" id="amount" placeholder="000.00" disabled
                value="<?php echo $row2['balance']; ?>"
                style="outline: none; box-shadow: 0px 0px 5px black; border-radius: 5px; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); text-align: center; width: 180px; background: transparent;">
            <span class="reload"
                style="cursor: pointer; font-size: 22px; margin-left: 5px; color: red; text-align: center; text-shadow: 0px 0px 0px black;">
                ⟳</span>
        </h3>
        <ul class="ul1">
            <button id="depo">Deposit now</button>
            <li class="li1">
                <img class="li2" name="im" src="<?php echo $row['image']; ?>" alt="user">
            </li>
        </ul>
    </div>

    <div class="con">
        <div class="con2"
            style="transition: 0.3s; visibility: hidden; background: rgba(00, 00, 00, 0.9); margin-top: -100px; position: fixed; height: 100vh; width: 100vw; overflow: hidden; display: flex; justify-content: center; align-items: center;">
            <div class="deposit"
                style="overflow-y: scroll; transition: 0.3s; visibility: hidden; box-shadow: 0px 0px 20px green; border: 3px solid silver; width: 700px; height: 800px; background: rgba(40, 182, 229, 0.93); border-radius: 10px; padding: 2px;">
                <img id="clo" src="../img/clo.png"
                    style="height: 40px; width: 40px; border-radius: 50%; margin-left: 620px; margin-top: 10px; box-shadow: 0px 0px 10px white; cursor: pointer;">
                <div class="ob">
                    <img src="../img/bn.png" class="im1">
                    <img src="../img/open.png" class="im">
                </div>
                <div
                    style="display: flex; justify-content: space-between; gap: 10px; align-items: center; margin-top: 50px; border-radius: 5px; border: 2px solid wheat; padding: 10px; box-shadow: 0px 0px 10px white;">
                    <h3
                        style="display: flex; justify-content: center; align-items: center; padding: 15px; background: rgba(214, 55, 124, 1); border-radius: 5px; color: white; text-shadow: 0px 0px 0px black;">
                        💲✅✅ Get a Special Bonus with Our New 6-Month Deposit Scheme!
                        Deposit any amount, and after 6 months, you’ll receive an extra 50% profit on your deposited
                        amount.
                        That means your main balance will increase by 50% in just 6 months! ✅✅💲 🎢🎁🧧

                        Your deposited balance will be added to your account within 1 to 2 minutes after making the
                        deposit. 💯%

                        <br><br>

                        ✅✅✅ You can start this deposit account with a minimum of only 200 Taka.
                        Once you deposit 200 Taka, your account will be activated, and after the fixed period, you’ll
                        receive attractive profit and bonus rewards.
                        This is a simple and profitable savings plan designed especially for new users. 💵📥💰

                        Deposit Number: 01323825406 ✅✅✅
                        <img src="../img/bkash.jpg"
                            style="width: 1000px; height: 300px; margin-left:20px; border-radius: 5px; box-shadow: 0px 0px 10px black; border: 3px solid gray;">
                    </h3>

                </div>

                <div
                    style="display: flex; justify-content: space-between; gap: 10px; align-items: center; margin-top: 20px; margin-bottom: 20px; border-radius: 5px; border: 2px solid wheat; padding: 10px; box-shadow: 0px 0px 10px white;">
                    <h3
                        style="display: flex; justify-content: center; align-items: center; padding: 20px; background: rgba(214, 55, 124, 1); border-radius: 5px; color: white; text-shadow: 0px 0px 0px black; width: 100%;">

                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                                <input type="text" name="name2" id="name2" placeholder="Enter your account name *"
                                    style="height: 35px; width: 250px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(214, 55, 124, 1); margin-bottom: 20px;">

                                <input type="number" name="amount" id="amount" placeholder="( Min 200 ৳ )"
                                    style="height: 35px; width: 130px; outline: none; padding: 10px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                            </div>

                            <input type="number" name="number" id="number" placeholder="Enter your account number *"
                                style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(214, 55, 124, 1); margin-bottom: 20px;">
                            <br>
                            <input type="text" name="transaction" id="transaction id" class="transaction"
                                placeholder="Bkash transaction id *"
                                style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(214, 55, 124, 1); margin-bottom: 20px;">

                            <div
                                style="margin-top: -10px; display: flex; justify-content: center; align-items: center; gap: 10px;">

                                <label for="uplod" style="margin-top: -15px;">Upload your profile picture : </label>
                                <input type="file" name="uplod" id="uplod"
                                    style="margin-bottom: 15px; padding: 5px; height: 35px; width: 120px; border-radius: 5px; border: none; background: linear-gradient(to top left, rgb(8, 212, 230),green); color: white; box-shadow: 0px 0px 5px black; font-size: 18px; cursor: pointer; text-shadow: 0px 0px 5px rgba(0, 0, 0, 1);">
                            </div>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <input type="submit" value="Submit now" name="submit2" id="submit2"
                                    style="padding: 5px; height: 40px; width: 200px; border-radius: 5px; border: none; background: green; color: white; box-shadow: 0px 0px 5px black; font-size: 18px; cursor: pointer; text-shadow: 0px 0px 5px rgba(0, 0, 0, 1);">
                            </div>
                        </form>
                    </h3>
                </div>
            </div>
        </div>
    </div>



    <div class="boxxx"
        style="visibility: hidden; background: rgba(0, 0, 0, 0.86); position:fixed; height: 100vh; width: 100%; margin-top: -100px; display: flex; justify-content: center; align-items: center;">
        <div class="boxxx2"
            style=" border-radius: 5px; padding: 5px; background: rgba(175, 101, 3, 1); height: 720px; width: 520px;">

            <div class="ob">
                <img src="../img/bn.png" class="im1">
                <img src="../img/open.png" class="im">
            </div>

            <form action="u_d.php" method="POST" enctype="multipart/form-data">

                <div
                    style="margin-bottom: 20px; display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                    <label for="uplod2"
                        style="box-shadow: 0px 0px 5px rgba(00, 00, 00, 1); padding: 5px; border-radius:50%; display: flex; justify-content: center; align-items: center;">
                        <img name="im"
                            style="box-shadow: 0px 0px 5px rgba(00, 00, 00, 0.8); height: 120px; width: 120px; border: 3px solid yellow; border-radius: 50%;"
                            src="<?php echo $row['image']; ?>" alt="user">
                    </label>
                    <input type="file" name="uplod2" id="uplod2" style="display: none;" disabled>
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="text" disabled name="uname" id="uname" value=" Name :    <?php echo $row['name']; ?>"
                        placeholder="Update your name *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="text" disabled name="unumber" id="unumber"
                        value="Account No. :    <?php echo $row['phone']; ?>" placeholder="Update your phone No. *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="email" disabled name="uemail" id="uemail"
                        value="Email address :    <?php echo $row['email']; ?>" placeholder="
                        Update your email address *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="text" disabled name="ugender" id="ugender"
                        value="Gender :    <?php echo $row['gender']; ?>" placeholder="Update your gender *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="text" disabled name="uaddress" id="uaddress"
                        value="Home address :    <?php echo $row['address']; ?>"
                        placeholder="Update your home address *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                    <input type="text" disabled name="uaddress" id="uaddress"
                        value="Your balance :    <?php echo $row2['balance'] . ' Tk'; ?>"
                        placeholder="Update your home address *"
                        style="background: white; font-weight: bold; height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
                </div>


                <div style="display: flex; justify-content: center; align-items: center;">
                    <div type="submit" id="update"
                        style="display: flex; justify-content: center; align-items: center; background: white; font-weight: bold; padding: 5px; height: 40px; width: 200px; border-radius: 5px; border: none; background: green; color: white; box-shadow: 0px 0px 5px black; font-size: 18px; cursor: pointer; text-shadow: 0px 0px 5px rgba(0, 0, 0, 1);">
                        Back
                        to Home page</div>
                </div>
            </form>
        </div>
    </div>


    <?php
                                        include "./offcan.php";
                                        include "./card.php";
                                        include "./scr.php";
                                        include "./app.php";
                                        include "./ms.php";
                                        include "./loan.php";
                                        ?>

    <!-- Send money -->

    <div class="sendbox" id="sendbox"
        style="visibility: hidden; z-index:2; background: rgba(0, 0, 0, 0.87); position:fixed; height: 100vh; width: 100%; margin-top: -23.1%; display: flex; justify-content: center; align-items: center;">
        <div class="sss">
            <div class="sendbox1" id="sendbox1"
                style="box-shadow: 0px 0px 10px black; border-radius: 5px; padding: 5px; background: black; height: 630px; width: 600px;">
                <img src="../img/clo.png" id="scl3"
                    style="height: 40px; width: 40px; border-radius: 50%; margin-left: 540px; margin-top: 10px;  box-shadow: 0px 0px 10px white; cursor: pointer;">

                <div class="ob">
                    <img src="../img/bn.png" class="im1">
                    <img src="../img/open.png" class="im">
                </div>

                <div class="ppp">
                    <h2><span class="ts">Send</span> money</h2>
                    <img src="../img/send3.gif" class="roket">
                </div>
                <form action="./send_money.php" method="post" onsubmit="return send_money()">
                    <div class="fb">
                        <input type="hidden" name="id" id="uiduid" value="<?php echo $row2['id']; ?>">

                        <input type="hidden" name="number" id="ssnumber" value="<?php echo $row['phone']; ?>">

                        <input type="hidden" name="ssname" id="ssname" value="<?php echo $row['name']; ?>">

                        <input type="hidden" name="pass" value="<?php echo $row['password']; ?>">

                        <input type="number" name="un" id="un" placeholder="Account Number : __________"
                            style="height: 40px; width: 230px; padding: 10px; font-size: 16px; color: green; -webkit-text-fill-color: green; font-weight: bold; outline:none; border: 2.5px solid black; border-radius: 5px; box-shadow: 0px 0px 6px #ffffff; background: rgba(225, 225, 225, 0.9); margin-top: 20px;">

                        <input type="number" name="ua" id="ua" placeholder="Enter Amount : __________"
                            style="height: 40px; width: 230px; padding: 10px; font-size: 16px; color: black; -webkit-text-fill-color: black; font-weight: bold; outline:none; border: 2.5px solid black; border-radius: 5px; box-shadow: 0px 0px 6px #ffffff; background: rgba(225, 225, 225, 0.9); margin-top: 30px;">

                        <input type="password" name="up" id="up" placeholder="Card PIN : __________"
                            style="height: 40px; width: 230px; padding: 10px; font-size: 16px; color: #DC143C; -webkit-text-fill-color: #DC143C; font-weight: bold; outline:none; border: 2.5px solid black; border-radius: 5px; box-shadow: 0px 0px 6px #ffffff; background: rgba(225, 225, 225, 0.9); margin-top: 30px;">

                        <input type="submit" name="usend" value="Send money" id="senmo" style="margin-top: 80px;">

                        <div class=" er">
                            <p class="er1"></p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Cash out -->

    <div class="cashout">
        <div class="sss">
            <div class="sendbox1" id="sendbox1"
                style="box-shadow: 0px 0px 10px black; border-radius: 5px; padding: 5px; background: rgb(248, 0, 103); height: 630px; width: 600px;">
                <img src="../img/clo.png" id="scl" class="scl"
                    style="height: 40px; width: 40px; border-radius: 50%; margin-left: 540px; margin-top: 10px;  box-shadow: 0px 0px 10px white; cursor: pointer;">

                <div class="ob">
                    <img src="../img/bn.png" class="im1">
                    <img src="../img/open.png" class="im">
                </div>

                <div class="ppp1">
                    <h2><span class="ts1">Cash</span> out</h2>
                    <img src="../img/send3.gif" class="roket1">
                </div>

                <form action="./cashout.php" method="post" onsubmit="return cashoutf()">
                    <div class="ds">
                        <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">

                        <input type="hidden" name="number" id="ssnumber" value="<?php echo $row['phone']; ?>">

                        <input type="hidden" name="ssname" id="ssname" value="<?php echo $row['name']; ?>">

                        <input type="hidden" name="pass" value="<?php echo $row['password']; ?>">

                        <input type="number" name="un1" id="un1" placeholder="Account Number : __________">

                        <input type=" number" name="ua1" id="ua1" placeholder="Enter Amount : __________">

                        <input type="password" name="up1" id="up1" placeholder="Card PIN : __________">

                        <input type="submit" name="cash" id="cash" value="Cash out">

                        <div class="err">
                            <p class="err1"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
    const reload = document.querySelector(".reload");
    reload.addEventListener("click", () => {
        setTimeout(() => {
            location.reload(true);
        }, 500);
    });
    </script>

    <script src="../js/home1.js"></script>



    <?php
                                        include "./src.php";
                                        ?>


    <?php
    if (isset($_POST['submit2'])) {

        $name2 = $_POST['name2'];
        $amount = $_POST['amount'];
        $number = $_POST['number'];
        $transaction = $_POST['transaction'];


        if (empty($name2)) {
            header('Location: ./err3.php');
            return false;
        } else if (empty($amount)) {
            header('Location: ./err3.php');
            return false;
        } else if (empty($number)) {
            header('Location: ./err3.php');
            return false;
        } else if (empty($transaction)) {
            header('Location: ./err3.php');
            return false;
        } else {
            include "./conn.php";
            $sql = "SELECT * FROM deposit WHERE account_number = '{$number}'";
            $query = mysqli_query($con, $sql) or die("Query unsucessful");
            if (mysqli_num_rows($query) > 0) {
                header('Location: err2.php');
                return false;
            } else {

                $uplod = $_FILES['uplod']['name'];
                $fol = "../img/img/" . $uplod;
                $tmp = $_FILES['uplod']['tmp_name'];
                $path = pathinfo($uplod, PATHINFO_EXTENSION);
                $low = strtolower($path);
                $ext = ['png', 'jpg', 'jpeg', 'gif', 'webp'];

                if (!in_array($low, $ext)) {
                    echo "";
                    return false;
                } else {
                    $mov = move_uploaded_file($tmp, $fol);
                }

                include "./conn.php";
                $sql4 = "UPDATE deposit SET `account_name`='{$name2}',`account_number`='{$number}',`Bkash_transaction_id`='{$transaction}',`amount`='{$amount}',`image`='{$fol}' WHERE `account_number`='{$number}';";
                $query4 = mysqli_query($con, $sql4) or die("query unsucessful");

                header('Location: ./d_ok.php');
                mysqli_close($con);
            }
        }
    }
    ?>


    <?php
                            }
                        }
                        ?>


    <?php
                    }
                    mysqli_close($con);
                } else {
                    header("Location: ./signin.php");
                    return false;
                }
            }
        }
    }
    ?>

</body>

</html>