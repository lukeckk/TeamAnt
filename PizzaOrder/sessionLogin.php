<?php
    $name = $_POST['logInID'];
    $password = $_POST['password'];

    if($name == 'admin' && $password == 'admin') {
        session_start();
        $_SESSION['name'] = "admin";


        echo "Session ID: ".session_id()."<br>";
        echo "Username: ".$_SESSION['name']."<br>";


    }
    else
    {

        echo "Incorret Credentials";
    }

