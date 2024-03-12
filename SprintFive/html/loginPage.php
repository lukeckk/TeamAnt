<?php
session_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../scripts/scripts.js"></script>
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>



<body onload="onloadGroup('navDashboard')">
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->


<div id="Dashcontainer" class="container-fluid mb-5">
<h3 class="text-center">Login</h3>

    <div class="container-fluid col-8 overall border rounded-4 border-3 border-dark ">
    <div class="container-fluid" id="signupShared">

    <form action="loginEndpoint.php" id="form" method="post" name="login">
        <section class="mb-4"><label class="required" for="username" id="usernamelogin">Username</label><br />
            <input class="form-control input-default " id="username" name="username" placeholder="" required="" type="text" />
            <div class="error"></div>
        </section>

        <section class="input-control mb-4" id="loginpassword"><label class="userinfo required" for="password">Email</label><br />
            <input class="form-control" id="password" name="password" placeholder="" required="" type="text" />
            <div class="error"></div>
        </section>


    </div>
    </div>

    <section class="text-center"><button class="mt-3 dashButtonLinks" type="submit">Submit</button></section>
    </form>









</div>

<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>