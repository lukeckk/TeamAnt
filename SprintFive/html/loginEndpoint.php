<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <title>Form Submission</title>
    <!--CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../scripts/scripts.js"></script>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="onloadGroup('navAdmin')">
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>

<div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
    <div id="receptShared" class="rounded-4 ">

        <?php
        if(!isset($_POST["username"]) || !isset($_POST["password"])) {
            echo '<h1>Please complete the form!</h1>';
            die();
        }


        require 'db.php';

        $user = $_POST["username"];
        $pass = hash('sha256',$_POST["password"]);

        //echo "DEBUG INFO: " . $pass. '<br>';






        $sql = "SELECT * FROM `User` WHERE `username` = '".$user."' AND `password` = '".$pass."'";

        $result = @mysqli_query($cnxn, $sql);
        $foundUser = ($result->num_rows == 1);

        if ($foundUser) {
            echo "<br><h3 class='text-center'>Success</h3>!";
            $_SESSION['username'] = $user;

            echo "<br> <h3 class='text-center'>Logged in as: ".$_SESSION['username']."</h3>";

        } else {
            echo mysqli_error($cnxn);
            echo "<h3 class='text-center'>Invalid Login.</h3>";
        }


        ?>



    </div>
</div>
<footer id="footerTarget" class="container-fluid text-center"></footer>
</body>
</html>