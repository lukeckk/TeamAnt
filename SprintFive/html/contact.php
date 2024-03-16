<?php
require 'isLogged.php';
$isAdminVar = $_SESSION['isAdmin'];
?>
<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../scripts/scripts.js"></script>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<?php
if ($isAdminVar == 1) {
    echo " <body onload = \"AfterLoginonloadGroup('contact', 1)\">";
} else {
    echo " <body onload = \"AfterLoginonloadGroup('contact', 0)\"> ";
}
?>
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->




<div class="container-fluid contactContainer">
    <h3 class="text-center pt-3">CONTACT US</h3>
    <div class="row justify-content-evenly">
        <div class="col-8">
            <form name="contactForm" method="post" action="contactReceipt.php">
                <div id="contactShared" class="border rounded-4 border-3 border-dark ">
                    <!--Contact Name-->
                    <label for="contactName" class="form-label text-start required">Full Name</label>
                    <input type="text" class="form-control" name="name" id="contactName" aria-describedby="emailHelp" required>
                    <!--Contact Email-->
                    <label for="contactEmail" class="form-label required">Email address</label>
                    <input type="email" class="form-control" name="email" id="contactEmail" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    <!--Contact Message-->
                    <section class="mb-4">
                        <label for="contactMessage" class="col-3 required">Message</label>
                        <textArea  id="contactMessage" rows="8" name="message" class="rounded-3 form-control" required></textArea>
                    </section>
                </div>
                <section class="text-center">
                    <button type="submit" class="mt-3 dashButtonLinks">Submit</button>
                </section>
            </form>
        </div>
    </div>
</div>




<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>