<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>
    <div class="err"
        style="height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; background: linear-gradient(rgb(0, 233, 254), #f26a6a); padding: 15px;">
        <img src="../img/sbl.png" style="height: 200px; width: 200px;">
        <br>
        <h2 style="color: green; text-shadow: 0px 0px 1px rgb(255, 255, 255);"> There are not enough funds in your
            account. </h2>
        <h3 style="color: green; text-shadow: 0px 0px 1px rgb(255, 255, 255);"> আপনার অ্যাকাউন্টে পর্যাপ্ত পরিমাণ টাকা
            নেই। </h3>
    </div>

    <script>
    setTimeout(() => {
        location.href = "./signin.php";
    }, 7500);
    </script>
</body>

</html>