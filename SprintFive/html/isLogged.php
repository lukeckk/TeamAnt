<?php

session_start();

if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
    header('Location: https://teamant.greenriverdev.com/SprintFive/html/loginPage.php');
    die();
}
echo '<script>console.log("isLogged Traceback");</script>';
?>


