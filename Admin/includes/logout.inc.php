<?php

unset($_POST['logout']);
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
 ?>
