<?php
    //GMT-7
    date_default_timezone_set("America/Denver");

    $device_id = $_POST["device_id"];
    $is_premium = $_POST["is_premium"];
    //Check on the database first
    require('database_connection.php');
    require_once('constants.php');

    //Register it to the database
    $connection->select_db($database);

    //Delete old register
    $device_id_query = "SELECT Count, LastUsage FROM ai_usages WHERE DeviceID = '".$device_id."'";
    $result = ($connection->query($device_id_query))->fetch_assoc();
    $connection->close();


    if ($result){

        $count = $result["Count"];
        $last_usage = $result["LastUsage"];
        
        $now = time();
        $difference = $now - strtotime($last_usage);
        $difference = ($difference / (60 * 60 * 24));
        if($difference >= 1.0)//Check if one day passed
        {
            //Check on the database first
            require('database_connection.php');

            //Register it to the database
            $connection->select_db($database);

            //Delete old register
            $device_id_query = "UPDATE ai_usages SET Count = 0, LastUsage = '".date("Y-m-d")."' WHERE DeviceID = '".$device_id."'";
            $connection->query($device_id_query);
            $connection->close();

            echo(TRUE);
            return;
        }else if($is_premium == TRUE)
        {
            if($count >= $AI_TRIES_COUNT_PREMIUM){
                echo(FALSE);
                return;
            }
        }
        else if($count >= $AI_TRIES_COUNT)
        {
            echo(FALSE);
            return;
        }
        echo(TRUE);
        return;
    }else{
        //Check on the database first
        require('database_connection.php');

        //Register it to the database
        $connection->select_db($database);

        //Delete old register
        $device_id_query = "INSERT INTO ai_usages (DeviceID, Count, LastUsage) VALUE ('".$device_id."',1,'".date("Y-m-d")."')";
        $connection->query($device_id_query);
        $connection->close();
        echo(TRUE);
        return;
    }
?>