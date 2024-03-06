<?php
session_start();

if($_SESSION[$name] == "admin" && $_SESSION[$password] == "admin")
{

?>
   
    <!DOCTYPE html>
    <html lang="en">
    <head><meta charset="utf-8"><meta name="viewport" content="width=device-width">
    	<title>Pizza Order</title>
    	<link href="style.css" rel="stylesheet" type="text/css" />
    	<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    </head>
    <body>
    
    	<form action="insert.php" id="form" method="post" name="pizzaOrder">
    <section><label id="heading">Order a Pizza!</label></section>
    
    <section class="input-control"><label for="orderName">Name:</label><br />
    <input class="form-control" id="orderName" name="orderName" placeholder="Full Name" type="text" />
    <div class="error"></div>
    </section>
    <!-- Phone -->
    
    <section class="input-control" id="phone"><label class="userinfo" for="pnumber">Phone Number</label><br />
    <input class="form-control" id="pnumber" name="pnumber" placeholder="+1" type="number" />
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="orderEmail"><label class="userinfo" for="email">Email</label><br />
    <input class="form-control" id="email" name="email" placeholder="example@greenriver.edu" type="email" />
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="orderAddress"><label class="userinfo" for="address">Street Address</label><br />
    <input class="form-control" id="address" name="address" type="text" />
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="orderAddressCity"><label class="userinfo" for="addressCity">City</label><br />
    <input class="form-control" id="addressCity" name="addressCity" type="text" />
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="orderAddressState"><label class="userinfo" for="addressState">State</label><br />
    <input class="form-control" id="addressState" name="addressState" placeholder="Washington State Only" type="text" />
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="pizzaSize"><!-- Size (small, medium, large) --><br />
    <label>Pizza Size</label><br/>
    <input class="form-check-input" id="small" name="smallSize" type="checkbox" value="Small" />
    	<label class="form-check-label" for="small"> Small </label>
    	<input class="form-check-input" id="medium" name="medSize" type="checkbox" value="Medium" />
    	<label class="form-check-label" for="medium"> Medium </label>
    	<input class="form-check-input" id="large" name="largeSize" type="checkbox" value="Large" />
    	<label class="form-check-label" for="large"> Large </label>
    
    </section>
    
    <div class="error"></div>
    
    <section class="input-control" id="pizzaToppings"><!-- Topping (8 different toppings)--><br />
    
    	<label>Pizza toppings</label><br />
    	<input class="Toppingclass" id="marinara" name="marinara" type="checkbox" value="1" />
    	<label class="form-check-label" for="marinara"> Marinara Sauce </label>
    
    	<input class="Toppingclass" id="pepperoni" name="pepperoni" type="checkbox" value="1" />
    	<label class="form-check-label" for="pepperoni"> Pepperoni </label>
    
    	<input class="Toppingclass" id="onions" name="onions" type="checkbox" value="1" />
    	<label class="form-check-label" for="onions"> Onions </label><br />
    
    	<input class="Toppingclass" id="bellPeppers" name="bellPeppers" type="checkbox" value="1" />
    	<label class="form-check-label" for="bellPeppers"> Bell Pepper </label>
    
    	<input class="Toppingclass" id="mushrooms" name="mushrooms" type="checkbox" value="1" />
    	<label class="form-check-label" for="mushrooms"> Mushroom </label>
    
    	<input class="Toppingclass" id="cheese" name="cheese" type="checkbox" value="1" />
    	<label class="form-check-label" for="cheese"> Cheese </label><br />
    
    	<input class="Toppingclass" id="ham" name="ham" type="checkbox" value="1" />
    	<label class="form-check-label" for="ham"> Ham </label>
    
    	<input class="Toppingclass" id="alfredoSauce" name="alfredoSauce" type="checkbox" value="1" />
    	<label class="form-check-label" for="alfredoSauce"> Alfredo sauce </label>
    
    
    
    <div class="error"></div>
    </section>
    
    <section class="input-control" id="orderNotes"><!-- Notes (text area) --><label for="notes">Notes </label><br />
    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea></section>
    
    <section class="input-control" id="pickup"><!-- Pickup option (Radio button: Delivery / Pickup) --><label for="pickup">
    	Pickup Option
    </label><br />
    	<label>
    		<input name="delivery" type="radio" value="delivery" /> Delivery
    	</label>
    	<label>
    		<input name="pickup" type="radio" value="pickup" /> In Store
    	</label>
    
    <div class="error"></div>
    </section>
    
    <section id="submit">
    	<input class="submitbutton" type="submit" value="Submit" />
    </section>
    
    
    
    </form>
    
    <script src="script.js"></script><!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    --><script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity=
            "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    	<div class="text-center p-2 border border-dark-5 rounded">
    		<a href="viewOrders.php" class="btn btn-info" role="button">ViewOrders</a>
    	</div>
    
    </body>
    </html>
    
}

