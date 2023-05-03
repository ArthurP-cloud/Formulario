<?php

session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

        print_r ($_SESSION['email']);
        print_r ($_SESSION['senha']);

        header("Location: login.php");

?>