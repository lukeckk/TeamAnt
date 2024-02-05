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
    <nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>

        <?php
        if(isset($_POST["title"]) && isset($_POST["employer"]))
        {

            echo '<h1>Title</h1>';
            echo "<h3>".$_POST["title"]."</h3>";

            echo '<h1>Job Type</h1>';
            echo "<h3>".$_POST["jobType"]."</h3>";

            echo '<h1>Location</h1>';
            echo "<h3>".$_POST["location"]."</h3>";

            echo '<h1>Employer</h1>';
            echo "<h3>".$_POST["employer"]."</h3>";

            echo '<h1>More Information</h1>';
            echo "<h3>".$_POST["information"]."</h3>";

            echo '<h1>Url</h1>';
            echo "<h3>".$_POST["url"]."</h3>";

            echo "<h1>Receiver's Email Address</h1>";
            echo "<h3>".$_POST["email"]."</h3>";

            
            $to = $_POST["email"];
            $subject = "Admin Announcement Form";
            $information = $_POST["information"];


            mail($to, $subject, "Title: ".$_POST["title"]."\n Email: ".$_POST["email"]."\n Information: ".$information);
        }
        else
        {
            echo '<h1>Please full out the form!</h1>';
        }
        ?>
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    </body>
</html>