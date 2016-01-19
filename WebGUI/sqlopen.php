<?php
//Opens up a SQL connection with the database. this database should contain all your alert definitions.
//Fill in your servername,username and password for the database below
$servername = "FILL IN YOUR DATABASE IP HERE";
$username = "FILL IN YOUR DATABASE USERNAME HERE";
$password = "FILL IN YOUR DATABASE PASSWORD HERE";
// Tries to connect with the database server
try {
    //Fill after dbname= your own database name
    $conn = new PDO("mysql:host=$servername;dbname=YOURDATABASENAME", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
// A catch if the connection fails
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 


