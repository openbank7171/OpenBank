<?php
    include "./session.php";
?>


<?php
    include "../conn.php";

    session_start();

    session_unset();

    session_destroy();

    header('Location: ./index.php');
?>