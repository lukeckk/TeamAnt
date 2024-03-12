<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
    header('Location: https://teamant.greenriverdev.com/SprintFive/html/login.html');
    die();
}


