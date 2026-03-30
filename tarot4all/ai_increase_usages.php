<?php
    $device_id = $_POST["device_id"];
    //Check on the database first
    require('database_connection.php');

    //Register it to the database
    $connection->select_db($database);

    //Delete old register
    $device_id_query = "UPDATE ai_usages SET Count = Count + 1 WHERE DeviceID = '".$device_id."'";
    $connection->query($device_id_query);
    $connection->close();
?>