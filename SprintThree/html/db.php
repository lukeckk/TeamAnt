<?php

$username = 'teamantg';
$password = ')X4sW9qgMc(Y60';
$hostname = 'localhost';
$database = 'teamantg_ATT';

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("Connection Error: " . mysqli_connect_error());
