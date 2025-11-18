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
        style="height: 100vh; width: 100%px; display: flex; justify-content: center; align-items: center; background: linear-gradient(rgb(0, 233, 254), #f26a6a);">
        <h2 class="err2"
            style="height: 300px; width: 500px; color: white; box-shadow: 0px 0px 10px black; background: red; border-radius: 5px; display: flex; justify-content: center; align-items: center;">
            <?php echo "Account already exists"; ?>
        </h2>
    </div>
    <script>
    setTimeout(() => {
        location.href = "./signin.php";
    }, 7500);
    </script>
</body>

</html>