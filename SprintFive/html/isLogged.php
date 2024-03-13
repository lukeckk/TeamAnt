<?php

session_start();
require 'db.php';

if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
    header('Location: https://teamant.greenriverdev.com/SprintFive/html/loginPage.php');
    die();
}

require 'db.php';

$sql = "SELECT * FROM `User` WHERE `username` ='".$_SESSION['username']."';";


$result = @mysqli_query($cnxn, $sql);

$foundUser = ($result->num_rows == 1);

if ($foundUser) {
    echo '<script>console.log("isLogged found a user.");</script>';
} else {
    $errormsg = mysqli_error($cnxn);
    echo '<script>console.log("isLogged query failed: '.$errormsg.' ");</script>';
}

while ($row = mysqli_fetch_assoc($result)) {
   $isLoggedFullName = $row['name'];
    echo '<script>localStorage.setItem("fullName","'.$isLoggedFullName.'");</script>';
}

echo '<script>console.log("isLogged Traceback");</script>';
?>


