<?php
unset($_SESSION['name']);
$_SESSION = array();
session_destroy();

