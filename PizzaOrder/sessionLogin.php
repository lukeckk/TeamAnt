<?php
    $name = $_POST['logInID'];
    $password = $_POST['password'];

    if($name == 'admin' && $password == 'admin') {
        session_start();
        $_SESSION['name'] = "admin";


        echo "Session ID: ".session_id()."<br>";
        echo "Username: ".$_SESSION['name']."<br>";

//        echo "<script> location.href='index.php'</script>";


    }
    else
    {

        echo "<script> alert('Incorret Credentials')</script>";
        echo "<script>location.href='login.php'</script>";
    }

