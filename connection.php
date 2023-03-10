<!-- gegevens voor het opzetten van de database connectie -->
<?php
$servername = "localhost";
$dbuser = "root";
$dbpass = '';
$dbname = "mbo-sd-n4";

$conn = new PDO("mysql::host=$servername;dbname=$dbname", $dbuser, $dbpass);
?>