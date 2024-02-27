<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../scripts/scripts.js"></script>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="onloadGroup('navAdmin')">
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->
<div class="container-fluid">
<div class="row">
<div id="Dashcontainer" class="pt-5 fixed-table-body col-lg-6 col-md-6 col-sm-12 col-xs-12 p-5 mb-0 dashtable3 ">
    <div class="row justify-content-evenly h-100 ">
        <div id="dashleftcolumn" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
            <div id="dashleftcolumn" class="">
                <h3 class="mb-0">Admin Dashboard</h3>
                <table id="dashtable" class="table table-striped table-hover mb-0 dashtable2 ">
                    <thead>
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require 'db.php';
                    $sql = "select * from User";

                    $result = @mysqli_query($cnxn, $sql);

                    while ($row = mysqli_fetch_assoc($result))
                    {

                        $name = $row['name'];
                        $email = $row['email'];
                        $isVisible = $row['visibility'];

                        if($isVisible == 1) {
                            echo'
                 <tr>
                   
                   <td>'.$name.'</td>
                   <td>'.$email.'</td>
                    <th ><button class="ApplicationButtonUP">View User</button></th>
                    <th ><button class="ApplicationButtonDE">Edit User</button></th>
                 </tr>';

                        }

                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
  
<div id="Dashcontainer" class="pt-5 fixed-table-body col-lg-6 col-md-6 col-sm-12 col-xs-12 p-5 mb-0 dashtable3 ">
    <div class="row justify-content-evenly h-100 ">
        <div id="dashleftcolumn" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
            <div id="dashleftcolumn" class="">
                <h3 class="mb-0">Announcements</h3>
                <table id="dashtable" class="table table-striped table-hover mb-0 dashtable2 ">
                    <thead>
                    <tr>
                        <th scope="col">DATE</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">JOB TYPE</th>
                        <th scope="col">EMPLOYER</th>
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                    require 'db.php';
                    $sql = "select * from Announcement";

                    $result = @mysqli_query($cnxn, $sql);

                    while ($row = mysqli_fetch_assoc($result))
                    {

                        $date = $row['date'];
                        $title = $row['title'];
                        $jobType = $row['jobType'];
                        $employer = $row['employer'];
                        $index = $row['id'];

                        echo'
                <form action="viewAnnouncementReceipt.php" method="POST">
                 <tr>
                   <td>'.$date.'</td>
                   <td>'.$title.'</td> 
                   <td>'.$jobType.'</td>
                   <td>'.$employer.'</td>
                   <td scope="col"><button onclick="setId('.$index,')" value="'.$index,'" name="viewBtn" class="ApplicationButtonUP">View</button></th>
                 </tr>
                 </form>';

                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <div class="linkbutton col-12 text-center">
        <a href="announcement.html"><button class="dashButtonLinks" role="button">New Announcement</button></a>

    </div>


    <div id="Dashcontainer" class="pt-5 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="row justify-content-evenly h-100 ">
            <div id="dashleftcolumn" class="p-0">
                <h3 class="mb-0">Recent Application</h3>

                <table id="dashtable" class="table table-striped table-responsive table-hover mb-0 dashtable2 ">
                    <thead>
                    <tr>
                        <th scope="col">DATE</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">STATUS</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    require 'db.php';
                    $sql = "select * from Application";

                    $result = @mysqli_query($cnxn, $sql);

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $date = $row['date'];
                        $title = $row['title'];
                        $status = $row['status'];
                        $index = $row['idNum'];
                        $isVisible = $row['visibility'];

                        if($isVisible == 1) {
                            echo'
               <form action="editApplication.php" method="POST">
                 <tr>
                   <th class="date" scope="row">'.$date.'</th>
                   <td>'.$title.'</td>
                   <td>'.$status.'</td>
                   <td scope="col"><button onclick="setId('.$index,')" value="'.$index,'" name="updateBtn" class="ApplicationButtonUP">Update</button></th>
                    <td scope="col"><button class="ApplicationButtonDE">Delete</button></td>
                 </tr>
                </form>';
                        }

                    }
                    ?>





                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
</div>




    <!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
    <footer id="footerTarget" class="container-fluid text-center"></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>