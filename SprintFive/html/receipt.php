<?php
require 'isLogged.php';
$isAdminVar = $_SESSION['isAdmin'];

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
    
    <?php
    if ($isAdminVar == 1) {
        echo " <body onload = \"AfterLoginonloadGroup('receipt', 1)\">";
    } else {
        echo " <body onload = \"AfterLoginonloadGroup('receipt', 0)\"> ";
    }
    ?>
<!--    <nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
    <nav id="navbarTarget"></nav>

      <div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
        <div id="receptShared" class="rounded-4 ">
         
        <?php
      if(isset($_POST["title"]) && isset($_POST["employer"]) && $_POST['title'] != "" && $_POST['jobType'] != "")
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



            

            $subject = "Admin Announcement Form";
            $information = $_POST["information"];
            

            $date = date('d-m-y');
            $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
            $jobType = filter_var($_POST['jobType'],FILTER_SANITIZE_STRING);
            $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
            $employer = filter_var($_POST['employer'],FILTER_SANITIZE_STRING);
            $information = filter_var($_POST['information'],FILTER_SANITIZE_STRING);
            $url = filter_var($_POST['url'],FILTER_SANITIZE_URL);

          $message = 'Title: '.$title.' Job Type: '.$jobType.'  Location: '.$location.' Employer: '.$employer.' Information: '.$information.' URL: '.$url.' ';




        }
        else
        {
            echo '<h1>Please complete the form!</h1>';
        }

        require 'db.php';

        $sql = "insert into Announcement (date, title, jobType, employer, location, info, url) values ('$date', '$title', '$jobType', '$employer', '$location','$information','$url')";

        $result = @mysqli_query($cnxn, $sql);




        $sql2 = "SELECT email FROM User";
        $result2 = @mysqli_query($cnxn, $sql2);

        while ($row_data = mysqli_fetch_array($result2)) {
            $to = $row_data['email'];
            $from = "Teamant@greenriver.edu";
            $headers = "From: $from\r\n";

            mail($to, $subject, $message , $headers);


        }

       

        if ($result2) {
            echo "Success!";
            echo "<br><p>We have received your request. Thank you! </p>";
        } else {
            echo mysqli_error($cnxn);
        }

        ?>
        
        </div>
    </div>
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    </body>
</html>