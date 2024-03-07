<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width">
    <title>Pizza Order</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
</head>
<body id="pizzaBackground">
<section><label id="heading">Please Log In</label></section>

<form action="sessionLoginTest.php" id="form" method="post" name="pizzaOrder">

    <section class="input-control"><label for="uname">Username</label><br />
        <input class="form-control" id="logInID" name="uname" placeholder="" type="text" />
        <div class="error"></div>
    </section>
    <!-- Phone -->

    <section class="input-control" id=""><label class="" for="password">Password</label><br />
        <input class="form-control" id="password" name="password" placeholder="" type="text" />
        <div class="error"></div>
    </section>


    <section id="">
        <button type="submit" class="">Log In</button>
    </section>


</form>

<!--<script src="script.js"></script>-->





</body>
</html>