<?php
session_start();
unset($_SESSION['username']);
$_SESSION = array();
session_destroy();

header('Location: https://teamant.greenriverdev.com/SprintFive/html/loginPage.php');
die();
