
text/x-generic recept.php ( HTML document, ASCII text )
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

      <div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
        <div id="receptShared" class="rounded-4 ">
         
        <?php
      if(isset($_POST["title"]) && isset($_POST["employer"]) && $_POST['title'] != "" && $_POST['jobType'] != "" && $_POST['email'] != "")
        {

            echo '<h1 class="font-weight-bold">Title</h1>';
            echo '<h3 class="bg-white">'.$_POST["title"]."</h3>";

            echo '<h1 class="font-weight-bold">Job Type</h1>';
            echo '<h3 class="bg-white">'.$_POST["jobType"]."</h3>";

            echo '<h1 class="font-weight-bold">Location</h1>';
            echo '<h3 class="bg-white">'.$_POST["location"]."</h3>";

            echo '<h1 class="font-weight-bold">Employer</h1>';
            echo '<h3 class="bg-white">'.$_POST["employer"]."</h3>";

            echo '<h1 class="font-weight-bold">More Information</h1>';
            echo '<h3 class="bg-white">'.$_POST["information"]."</h3>";

            echo '<h1 class="font-weight-bold">Url</h1>';
            echo '<h3 class="bg-white">'.$_POST["url"]."</h3>";

            echo '<h1 class="font-weight-bold">Email Address of Receiver</h1>';
            echo '<h3 class="bg-white">'.$_POST["email"]."</h3>";

            
            $to = $_POST["email"];
            $subject = "Admin Announcement Form";
            $information = $_POST["information"];


            mail($to, $subject, "Title: ".$_POST["title"]."\n Email: ".$_POST["email"]."\n Information: ".$information);
        }
        else
        {
            echo '<h1>Please complete the form!</h1>';
        }
        ?>
        
        </div>
    </div>
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    </body>
</html>