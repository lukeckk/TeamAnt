<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
    <head>
        <title>Display</title>
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