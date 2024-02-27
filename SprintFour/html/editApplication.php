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
    <h3 class="text-center">EDIT APPLICATION</h3>
    <?php

    require 'db.php';
    //echo $_POST['updateBtn'];
    $index = $_POST['updateBtn'];
    $softDeleteIndex = $_POST['deleteBtn'];

    if($index){    //Update Request Starts Here
    $sql = "select * from Application where idNum=$index";

    $result = @mysqli_query($cnxn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $index;
        $date = $row['date'];
        $title = $row['title'];
        $status = $row['status'];
        $employer = $row['employer'];
        $followUpDate = $row['followUpDate'];
        $jobDescription = $row['jobDescription'];
        $jobDescriptionURL = $row['jobDescriptionURL'];
        $updates = $row['updates'];

        echo '<form action="editAppReceipt.php" method="POST">
                <div id="applicationShared" class="rounded-4">
        
                    <input type="hidden" id="idNum" name="idNum" class="form-control" value="' . $index, '">
        
                    <label for="employer" class="form-label text-start mt-3">Employer Name</label>
                    <input type="text" id="employer" name="employer" class="form-control" value="' . $employer, '">
        
                    <label for="role" class="form-label text-start mt-3">Name of Role</label>
                    <input type="text" id="role" name="role" class="form-control" value="' . $title, '">
        
                    <label for="job" class="col-5 mt-3">Job Description URL</label>
                    <input type="text" id="job" name="job" class="form-control" value="' . $jobDescriptionURL, '">
        
                    <label for="description" class="form-label text-start mt-3">Job Description</label>
                    <textarea id="description" name="description" rows="4" cols="50" class="form-control">' . $jobDescription, '</textarea>
        
                    <label for="date" class="form-label text-start mt-3"></label>Date of Application</label>
                    <input type="date" id="date" name="date" class="form-control" value="' . $date, '">
        
                    <section class="form-label text-start mt-3">
                        <label for="dropdown" class="form-label text-start mt-3">Status</label>
                        <select id="dropdown" name="status">
                            <option>' . $status, '</option>
                            <option>Need to Apply</option>
                            <option>Applied</option>
                            <option>Interviewing</option>
                            <option>Rejected</option>
                            <option>Accepted</option>
                            <option>Inactive / Expired</option>
                        </select>
        
                    </section>
        
                    <label for="updates" class="form-label text-start mt-3">Updates</label>
                    <textarea name="updates" id="updates" rows="4" cols="50" class=" form-control">' . $updates, '</textarea>
        
                    <label for="followUp" class="form-label text-start mt-3" id="followUpDate">Follow-up Date</label>
                    <input type="date" id="followUp" name="followUp" value="' . $followUpDate, '">
                </div>
                <section class="mb-4 text-center">
                    <button type="submit" class="mt-3 dashButtonLinks">Submit</button>
                </section>
            </form>';
    }
    if ($softDeleteIndex) { //Delete Request Starts Here
                $id = $softDeleteIndex;
                $sql = "UPDATE Application SET `visiblity` = '0' WHERE idNum='".$id."'";

                $result = @mysqli_query($cnxn, $sql);

                echo '<p>Application Deleted.</p>';

                header("Location: https://teamant.greenriverdev.com/SprintFour/html/dashboard.php");
                exit();

        }


    }
    ?>
</div>

<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../scripts/scripts.js"></script>
</body>
</html>