<?php
require_once('constants.php');

$platform = "";
$is_post = FALSE;

if(isset($_SESSION['platform'])){
    $platform = $_SESSION['platform'];
}else if(isset($_POST['platform'])){
    $platform = $_POST['platform'];
    $is_post = TRUE;
}else{
    echo "Error, try again later.";
    return;
}

if($platform == "Android" || $platform == "WindowsEditor" || $platform == "LinuxEditor"){
    $_SESSION['latest_version'] = $ANDROID_LATEST_VERSION;
}
else{
    $_SESSION['latest_version'] = $IPHONE_LATEST_VERSION;
}

if($is_post){
    echo $_SESSION['latest_version'];
}

?>