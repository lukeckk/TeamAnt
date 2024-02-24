
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
    <head>
        <title>Form Submission</title>
        <!--CDN-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="../scripts/scripts.js.bak"></script>
        <link href="../styles/styles.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
        <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body onload="onloadGroup('navAdmin')">
<!--    <nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
    <nav id="navbarTarget"></nav>

      <div class="container-fluid col-sm-8 col-xs-8 receptContainer mt-3">
        <div id="receptShared" class="rounded-4 ">
         
        <?php

            $employer = $_POST['employer'];
            $role = $_POST['role'];
            $job = $_POST['job'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            $updates = $_POST['updates'];
            $followUp = $_POST['followUp'];


            if(isset($_POST["employer"]) && isset($_POST["role"]) )
            {
            
                echo '<h1 class="font-weight-bold">Employer Name</h1>';
                echo '<h3 class="bg-white">'.$employer."</h3>";

                echo '<h1 class="font-weight-bold">Name of Role</h1>';
                echo '<h3 class="bg-white">'.$role."</h3>";

                echo '<h1 class="font-weight-bold">Job Description URL</h1>';
                echo '<h3 class="bg-white">'.$job."</h3>";

                echo '<h1 class="font-weight-bold">Job Description</h1>';
                echo '<h3 class="bg-white">'.$description."</h3>";

                echo '<h1 class="font-weight-bold">Date of Application</h1>';
                echo '<h3 class="bg-white">'.$date."</h3>";

                echo '<h1 class="font-weight-bold">Status</h1>';
                echo '<h3 class="bg-white">'.$status."</h3>";

                echo '<h1 class="font-weight-bold">Updates</h1>';
                echo '<h3 class="bg-white">'.$updates."</h3>";
                
                echo '<h1 class="font-weight-bold">Follow up Date</h1>';
                echo '<h3 class="bg-white">'.$followUp."</h3>";

                
            }
                
            else
                {
                    echo '<h1>Please complete the form!</h1>';
                }
                
                
                require 'db.php';

                $sql = "insert into Application (employer, title, jobDescriptionURL, jobDescription, date, status, updates, followUpDate) values ('$employer', '$role', '$job', '$description', '$date','$status','$updates' ,'$followUp')";
                
                $result = @mysqli_query($cnxn, $sql);


                
                
        ?>
        
        
        
        </div>
    </div>
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    </body>
</html>