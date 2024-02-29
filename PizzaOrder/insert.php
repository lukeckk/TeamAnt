<?php
require 'db.php';

$name = $_POST['orderName'];
$pnumber = $_POST['pnumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['addressCity'];
$state = $_POST['addressState'];

if(isset($_POST['smallSize'])) {
    $size = $_POST['smallSize'];
}
if(isset($_POST['medSize'])) {
    $size = $_POST['medSize'];
}
if(isset($_POST['largeSize'])) {
    $size = $_POST['largeSize'];
}

$notes = $_POST['notes'];

if(isset($_POST['delivery'])) {
    $ordertype = $_POST['delivery'];
}
if(isset($_POST['pickup'])) {
    $ordertype = $_POST['pickup'];
}
$marinara = $_POST['marinara'];
$pepperoni = $_POST['pepperoni'];
$onions = $_POST['onions'];
$bellPeppers = $_POST['bellPeppers'];
$mushrooms = $_POST['mushrooms'];
$cheese = $_POST['cheese'];
$ham = $_POST['ham'];
$alfredoSauce = $_POST['alfredoSauce'];


$marinara = ($marinara == '1') ? 1 : 0;
$pepperoni = ($pepperoni == '1') ? 1 : 0;
$onions = ($onions == '1') ? 1 : 0;
$bellPeppers = ($bellPeppers == '1') ? 1 : 0;
$mushrooms = ($mushrooms == '1') ? 1 : 0;
$cheese = ($cheese == '1') ? 1 : 0;
$ham = ($ham == '1') ? 1 : 0;
$alfredoSauce = ($alfredoSauce == '1') ? 1 : 0;




$sql = "insert into pizza (name, pNumber, email, address, city, state, size, notes, orderType, marinaraSauce, Peperoni, Onions, BellPepper, Mushroom, Cheese, Ham, AlfredoSauce) values ('$name', '$pnumber', '$email', '$address', '$city','$state','$size' ,'$notes' ,'$ordertype' ,'$marinara', '$pepperoni', '$onions', '$bellPeppers', '$mushrooms', '$cheese', '$ham', '$alfredoSauce')";

echo $marinara;

echo ", formatted sql string: " . $sql;

var_dump($_POST);


$result = @mysqli_query($cnxn, $sql);

if ($result) {
    echo "Success!";
    echo "<br><p>We have received your order. Thank you! </p>";
} else {
    echo mysqli_error($cnxn);
}



echo "<br><p>View all the orders: </p> <a href='viewOrders.php' class='btn btn-info' role='button'>ViewOrders</a>";



