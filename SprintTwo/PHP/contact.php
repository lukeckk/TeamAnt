<html lang="en">
    <head>
        <title>Display</title>
    </head>
    <body>
        <h1>Display</h1>
        <?php
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]))
        {
            echo '<h1>Name</h1>';
            echo "<h3>".$_POST["name"]."</h3>";
            echo '<h1>Email</h1>';
            echo "<h3>".$_POST["email"]."</h3>";
            echo '<h1>Message</h1>';
            echo "<h3>".$_POST["message"]."</h3>";
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            mail("adh1056@comcast.net", "PHP Contact Formt", "Name: ".$name."\n Email: ".$email."\n Message: ".$message);
        }
        else
        {
            echo '<h1>Please full out the form!</h1>';
        }
        ?>
    </body>
</html>