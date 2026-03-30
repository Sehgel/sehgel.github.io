<?php
   if( isset($_GET['subscribed'])) {
   	  echo "<br>"; 		
      file_put_contents('logs.txt', $_GET['subscribed'].PHP_EOL , FILE_APPEND | LOCK_EX);
      echo "<br>Thanks for subscribing. We will keep you updated at ". $_GET['subscribed']."<br />";      
   }
?>