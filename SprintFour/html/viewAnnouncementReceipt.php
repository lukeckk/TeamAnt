<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Application</title>
    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="onloadGroup()">
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->
<!-- APPLICATION BODY CODE STARTS HERE -->
<div  class="container-fluid col-sm-8 col-xs-8 applicationContainer">
    <h3 class="text-center">VIEW ANNOUNCEMENT</h3>
</div>
  <div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
    <div id="receptShared" class="rounded-4 ">
    
        <?php
        
        $index = $_POST['viewBtn'];
    
        require 'db.php';
        $sql = "select * from Announcement where id=$index";
    
        $result = @mysqli_query($cnxn, $sql);
    
        while ($row = mysqli_fetch_assoc($result))
        {
    
            $id = $index;
    
            $date = $row['date'];
            $title = $row['title'];
            $jobType = $row['jobType'];
            $employer = $row['employer'];
            $index = $row['id'];
            $location = $row['location'];
            $info = $row['info'];
            $url = $row['url'];
    
            echo '<h1 class="font-weight-bold">Date</h1>';
            echo '<h3 class="bg-white">'.$date."</h3>";
    
            echo '<h1 class="font-weight-bold">Title</h1>';
            echo '<h3 class="bg-white">'.$title."</h3>";
    
            echo '<h1 class="font-weight-bold">Job Type</h1>';
            echo '<h3 class="bg-white">'.$jobType."</h3>";
    
            echo '<h1 class="font-weight-bold">Employer</h1>';
            echo '<h3 class="bg-white">'.$employer."</h3>";
    
            echo '<h1 class="font-weight-bold">Location</h1>';
            echo '<h3 class="bg-white">'.$location."</h3>";
    
            echo '<h1 class="font-weight-bold">Information</h1>';
            echo '<h3 class="bg-white">'.$info."</h3>";
    
            echo '<h1 class="font-weight-bold">URL</h1>';
            echo '<h3 class="bg-white">'.$url."</h3>";
        }
        ?>
    </div>
</div>

<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../scripts/scripts.js"></script>
</body>
</html>