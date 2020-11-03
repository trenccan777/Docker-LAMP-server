<?php

$dbname = 'test';
$password = 'admin';
$user = 'admin';
$host = 'db';


$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error) {
    echo 'Connection unsuccessful: '. $conn->connect_error; 
}
else {
    echo 'Connection successful';
}

?> 