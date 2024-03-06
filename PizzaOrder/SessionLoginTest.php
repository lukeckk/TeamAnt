<?php
 session_start();
 
    $name = $_POST['uname'];
    $password = $_POST['password'];

    if($name == 'admin' && $password == 'admin') 
    {
      
        header("Location: index.html");
        
    }
    else
    {
        echo "Please enter the correct username or password";
    }
    
?>