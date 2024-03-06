<?php
unset($_SESSION['uname']);
$_SESSION = array();
session_destroy();

