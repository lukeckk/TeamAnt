<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
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
<div  class="container-fluid col-sm-8 col-xs-8 applicationContainer">
<div class="container-fluid">
    <h3 class="text-center">EDIT USER</h3>

    <?php
    require 'db.php';


    $index = $_POST['ApplicationButtonUP'];
    $index = $_POST['viewBtn'];
    $softDeleteIndex = $_POST['deleteBtn'];

    if($index) {
        $sql = "select * from User where IDNUM=$index";

        $result = @mysqli_query($cnxn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $name = $row['name'];
            $email = $row['email'];
            $cnumber = $row['cohort'];
            $roles = $row['roles'];
            $id = $index;


            echo '<div class="container-fluid col-8 overall border rounded-4 border-3 border-dark ">
	<div class="row">
		<div class="container-fluid" id="signupShared">
			<div class="requiredwarning ">
				<p class="required"></p>

				<p class="requiredwarning2">Required Information</p>
			</div>
<form action="signupReciept.php" id="form" method="post" name="signup">

                <input type="hidden" id="idNum" name="idNum" class="form-control" value="' . $index, '">
				<section class="mb-4"><label class="required" for="name" id="namesignup">Name</label><br />
					<input class="form-control input-default " id="name" name="name" placeholder="" type="text" value="'.$name.'"/>
					<div class="error"></div>
				</section>

				<section class="input-control mb-4" id="orderEmail"><label class="userinfo required" for="email">Email</label><br />
					<input class="form-control" id="email" name="email" placeholder="example@greenriver.edu" type="email" value="'.$email.'"/>
					<div class="error"></div>
				</section>

				<section class="mb-4"><label class="required" for="cohortnumber" id="cnumbersignup">Cohort Number</label><br />
					<input class="form-control input-default" id="cohortnumber" name="cohortnumber" placeholder="0-100" type="number" value="'.$cnumber.'"/>
					<div class="error"></div>
				</section>
				<label class="required">Current Status</label>

				<section class="mb-4">
					<section><input id="flexCheckDefault1" name="status" type="checkbox" value="Seeking Internship" /> <label class="form-check-label" for="flexCheckDefault1"> Seeking Internship </label></section>

					<section><input id="flexCheckDefault2" name="status" type="checkbox" value="Seeking Job" /> <label class="form-check-label" for="flexCheckDefault2"> Seeking Job </label></section>

					<section><input id="flexCheckDefault3" name="status" type="checkbox" value="Not Actively Searching" /> <label class="form-check-label" for="flexCheckDefault3"> Not Actively Searching </label></section>
				</section>

				<section class="mb-4"><label class="form-label" for="textmsgsignup">Type of roles</label><br />
					<textarea class="rounded-3 form-control" id="textmsgsignup" name="textmsgsignup" rows="3" >'.$roles.'</textarea></section>

		</div>
	</div>
</div>

<section class="text-center"><button class="mt-3 dashButtonLinks" type="submit">Submit</button></section>
</form>';
        }
    }
    if($softDeleteIndex) {
        $id = $softDeleteIndex;

        $sql = "UPDATE User SET `visibility` = '0' WHERE idNum=$id";
        $result = @mysqli_query($cnxn, $sql);

        $result = @mysqli_query($cnxn, $sql);

        echo'<p>User Deleted!</p>';
    }





    ?>


</div>


</div>
<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../scripts/scriptsignup.js"></script>
</body>
</html>
