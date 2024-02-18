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
<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->


<div id="Dashcontainer" class="container-fluid pt-5">
  <div class="row justify-content-evenly h-100 ">
    <div id="dashleftcolumn" class="col-lg-7 col-md-7 col-sm-12 col-xs-12 p-0">
      <h3 class="mb-0">Recent Application</h3>
      
       <div class="container  applicationContainer">
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
          
              echo'
              <tr>
                <th class="date" scope="row">'.$date.'</th>
                <td>'.$title.'</td>
                <td>'.$status.'</td>
                <th scope="col"><button class="ApplicationButtonUP">Update</button></th>
                <th scope="col"><button class="ApplicationButtonDE">Delete</button></th>
              </tr>';

          }
        ?>
        
      
       
        <tr>
          <td class="loadmore text-center" colspan="5" ><p id="LeftLoadMore">Load More</p></td>
        </tr>
        
        </tbody>
        
      </table>

        </div>
    


      <div class=" linkbutton col-12 text-center">
        <a href="application.html"><button class="dashButtonLinks" role="button">Add new application</button></a>
      </div>
    </div>

    <div id="dashrightcolumn" class="col-lg-4 col-md-4 col-sm-12 col-xs-12  text-left p-0" >
      <h3 class="mb-0">Reminders</h3>
      <table id="remindertable" class="table table-striped mb-0">
        <thead>
        <tr>
          <th>Total Reminders: ##</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th class="reminder" scope="row">You have received a reply!</th>
        </tr>
        <tr>
          <th class="reminder" scope="row">You have a pending request!</th>
        </tr>
        <tr>
          <th class="reminder" scope="row">You have received a reply!</th>
        </tr>
        <tr>
          <th class="reminder" scope="row">You have a pending request!</th>
        </tr>
        <tr>
          <th class="reminder" scope="row">You have received a reply!</th>
        </tr>
        <tr>
          <th class="reminder" scope="row">You have a pending request!</th>
        </tr>
        <tr>
          <td class="loadmore text-center" colspan="5"><p id="RightLoadMore">Load More</p></td>
        </tr>
        </tbody>
      </table>


    <div class=" linkbutton col-12 text-center">
      <a href=""><button class="dashButtonLinks" role="button">Update Account Settings</button></a>
    </div>
    </div>
  </div>


</div>







<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>