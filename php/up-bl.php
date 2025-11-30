<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body style="overflow: hidden; height: 100vh; width: 100%; margin: 0px; padding: 0px;">

    <?php
        
        if (isset($_POST['claim'])) {

            $num = $_POST['num'];
        
            session_start();
        
            $_SESSION['num'] = $num;

            header('Location: ./bonus.php');

        }
    ?>

</body>

</html>