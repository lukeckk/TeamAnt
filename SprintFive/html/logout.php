<?php
unset($_SESSION['username']);
$_SESSION = array();
session_destroy();

header('Location: https://teamant.greenriverdev.com/SprintFive/html/login.html');
die();
