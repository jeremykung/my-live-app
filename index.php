<?php

echo "My App";

// mysql://b89beb74622156:729f7b00@us-cdbr-east-05.cleardb.net/heroku_c2147563eac7740?reconnect=true

$username = 'b89beb74622156';
$password = '729f7b00';
$hostname = 'us-cdbr-east-05.cleardb.net';
$database = 'heroku_c2147563eac7740';

// CONNECT TO DATABASE
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// People without their ClearDB installed
// $servername = "us-cdbr-east-05.cleardb.net";
// $username = "be4c22fe1bd451";
// $password = "0128e3d6";
// $database = "heroku_f4c1f1b843cd581";

?>
