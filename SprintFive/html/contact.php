<html lang="en" data-bs-theme="dark" id="htmlTag">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Submission</title>
        <!--CDN IMPORTS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="../scripts/scripts.js"></script>
        <link href="../styles/styles.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
        <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>



    <body onload="onloadGroup('navContact')">
<!--    <nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
    <nav id="navbarTarget"></nav>
    <!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->

    <div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
        <div id="receptShared" class="rounded-4 ">

                <?php
            if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]))
            {
                echo '<h1 class="font-weight-bold">Name</h1>';
                echo "<h3 class='bg-white'>".$_POST["name"]."</h3>";

                echo '<h1 class="font-weight-bold">Email</h1>';
                echo "<h3 class='bg-white'>".$_POST["email"]."</h3>";

                echo '<h1 class=font-weight-bold">Message</h1>';
                echo "<h3 class='bg-white'>".$_POST["message"]."</h3>";

                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                mail("adh1056@comcast.net", "PHP Contact Form", "Name: ".$name."\n Email: ".$email."\n Message: ".$message);
            }
            else
            {
                echo '<h1>Please fill out the form!</h1>';
            }
            ?>
        </div>
    </div>
    <!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>