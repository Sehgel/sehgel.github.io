<?php
    $version = 3;//1 is PRELAUNCH_TITLE, 2 is SOON_ON_AMAZON, 3 is GET_YOUR_DECK_ON_AMAZON
    $redirect = "https://www.tarot4all.com";
    switch ($version) {
        case 1:
        default:
            $redirect = "https://www.tarot4all.com/pre_launch";
            break;
        case 2:
            $redirect = "https://www.tarot4all.com/soon_on_amazon";
            break;
        case 3:
            $redirect = "https://www.tarot4all.com/get_your_deck";
            break;
    }
    echo "$version,$redirect";
?>