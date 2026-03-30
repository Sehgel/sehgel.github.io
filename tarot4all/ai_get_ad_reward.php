<?php
    $device_id = $_POST["device_id"];
    $is_premium = $_POST["is_premium"];
    //Check on the database first
    require('database_connection.php');
    require_once('constants.php');

    //Register it to the database
    $connection->select_db($database);

    //Delete old register
    $count = $AI_TRIES_COUNT;
    if($is_premium == "TRUE")
        $count = $AI_TRIES_COUNT_PREMIUM;

    $device_id_query = "UPDATE ai_usages SET Count = $count - $REWARD_PER_AD WHERE DeviceID = '".$device_id."'";
    $connection->query($device_id_query);
    $connection->close();

    die(TRUE);
?>