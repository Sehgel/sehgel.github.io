<?php
require_once('constants.php');

$language = "";
$is_post = FALSE;

if(isset($_SESSION['language'])){
    $language = $_SESSION['language'];
}else if(isset($_POST['language'])){
    $language = $_POST['language'];
    $is_post = TRUE;
}else{
    echo "Error, try again later.";
    return;
}

if($language == "en"){
    echo $AI_PROMPT_ONE_EN . "^" . $AI_PROMPT_THREE_EN . "^" . $AI_PROMPT_CROSS_EN;
}
else if($language == "es"){
    echo $AI_PROMPT_ONE_ES . "^" . $AI_PROMPT_THREE_ES . "^" . $AI_PROMPT_CROSS_ES;
}

?>