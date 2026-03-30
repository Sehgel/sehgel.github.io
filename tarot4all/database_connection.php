<?php
$servername = "database-5016063709.webspace-host.com";
$username = "dbu4121098";
$password = "AsdfasDB#&";
$database = "dbs13085140";
// Create connection
$connection = new mysqli($servername, $username, $password);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully";
?> 