<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../scripts/scripts.js"></script>
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>



<body onload="onloadGroup('navDashboard')">
<!--<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>-->
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->



<div id="Dashcontainer" class="container-fluid pt-5">
    <div class="row justify-content-evenly h-100 ">
        <div id="dashleftcolumn" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">


            <h3 class="mb-0">Recent Application </h3>


            <table id="dashtable" class="table table-striped table-hover mb-0">
                <thead>
                <tr>
                    <th scope="col">DATE</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">STATUS</th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>


                <tbody id="tableBody">

                <script>
                    function setId(id)
                    {
                        localStorage.setItem(index, id);
                    }
                </script>

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
                        echo '
                <form  action="editApplication.php" method="POST">
                  <tr>
                    <td class="date" scope="row">' . $date . '</td>
                    <td>' . $title . '</td>
                    <td>' . $status . '</td>
                    <td scope="col"><button onclick="setId(' . $index, ')" value="' . $index, '" name="updateBtn" class="ApplicationButtonUP">Update</button></th>
                    <td scope="col"><button name="deleteBtn" value="' . $index . '"class="ApplicationButtonDE">Delete</button></td>
                  </tr>
                </form>';
                    }
                }
                ?>



                </tbody>

            </table>




            <div class=" linkbutton col-12 text-center">
                <a href="application.html"><button class="dashButtonLinks" role="button">Add new application</button></a>
            </div>
        </div>

        <div id="dashrightcolumn" class="col-lg-4 col-md-4 col-sm-12 col-xs-12  text-left p-0" >
            <h3 class="mb-0">Reminders</h3>


            <table id="remindertable" class="table table-striped mb-0">
                <thead>
                <tr>

                    <!-- Reminder Counter-->
                    <?php
                    require 'db.php';

                    $sql = "select * from Application";

                    $result = @mysqli_query($cnxn, $sql);
                    $counter=0;

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $date = $row['date'];
                        $title = $row['title'];
                        $followUpDate = $row['followUpDate'];
                        $index = $row['idNum'];
                        $currentDate = date('y-m-d');
                        $addonDate = ' + 1 days';
                        $employer = $row['employer'];
                        $visibility = $row['visibility'];

                        if($followUpDate <= (date('Y-m-d', strtotime($currentDate . ' + 5 days'))) && $followUpDate >= (date('Y-m-d', strtotime($currentDate . ' - 5 days'))) && $visibility == 1) {

                            $counter++;
                        }
                    }
                    $sql2 = "select * from Announcement";

                    $result2 = @mysqli_query($cnxn, $sql2);
                    $counter2=0;

                    while ($row = mysqli_fetch_assoc($result2))
                    {
                        $date = $row['date'];
                        $title = $row['title'];
                        $status = $row['status'];
                        $index = $row['id'];
                        $currentDate = date('y-m-d');



                        if($date >= (date('Y-m-d', strtotime($currentDate . ' - 5 days')))) {
                            $counter2++;
                        }
                    }
                    $TotalCount = $counter + $counter2;


                    echo '<th>Total Reminders: '.$TotalCount.'  </th>';
                    ?>
                </tr>
                </thead>
                <tbody>
                <script>
                    function setId(id)
                    {
                        localStorage.setItem(index, id);
                    }
                </script>



                <?php



                require 'db.php';

                $sql = "select * from Application";

                $result = @mysqli_query($cnxn, $sql);

                while ($row = mysqli_fetch_assoc($result))
                {
                    $date = $row['date'];
                    $title = $row['title'];
                    $followUpDate = $row['followUpDate'];
                    $index = $row['idNum'];
                    $currentDate = date('y-m-d');
                    $addonDate = ' + 1 days';
                    $employer = $row['employer'];
                    $visibility = $row['visibility'];
                    $counter++;




                    if($followUpDate <= (date('Y-m-d', strtotime($currentDate . ' + 5 days'))) && $followUpDate >= (date('Y-m-d', strtotime($currentDate . ' - 5 days'))) && $visibility == 1) {
                        echo '<form class="tablecounter" action="editApplication.php" method="POST">
                  <tr>
                   
                    <td>Your Application for <button onclick="setId(' . $index, ')" value="' . $index, '" name="updateBtn" ">'.$title.'</button> role at '.$employer.' is due! </td>
                    
               
                  </tr>
                </form>';
                    }
                }

                $sql2 = "select * from Announcement ORDER BY ID DES";

                $result2 = @mysqli_query($cnxn, $sql2);

                while ($row = mysqli_fetch_assoc($result2))
                {
                    $date = $row['date'];
                    $title = $row['title'];
                    $employer = $row['employer'];
                    $status = $row['status'];
                    $index = $row['id'];
                    $currentDate = date('y-m-d');


                    if($date >= (date('Y-m-d', strtotime($currentDate . ' - 5 days')))) {
                        echo '
                  <form class="tablecounter" action="viewAnnouncementReceipt.php" method="POST">
                  <tr>
                    
                    <td scope="col">Job position of <button onclick="setId('.$index,')" value="'.$index,'" name="viewBtn">'.$title.'</button> at '.$employer.' was announced on '.$date. '! </td>
                 
                  </tr>
                    </form>';
                    }
                }
                ?>


                </tbody>
            </table>


            <!--            <div class=" linkbutton col-12 text-center">-->
            <!--                <a href=""><button class="dashButtonLinks" role="button">Update Account Settings</button></a>-->
            <!--            </div>-->
        </div>
    </div>


</div>







<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>