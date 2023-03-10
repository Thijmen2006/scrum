<?php

// Als je op uitloggen druk dan wordt dit geactiveerd
// hierdoer 
session_start();
session_destroy();
header('location: login.php');
die();

?>