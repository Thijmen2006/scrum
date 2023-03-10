<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mbo-sd-n4";

$totable = $_POST['aanwie'];
    ## versuurt het bericht naar de database
    $conn = new PDO("mysql::host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO $totable (relatie, voornaam, achternaam, email, bericht) VALUES (:relatie, :voornaam, :achternaam, :email, :bericht)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":relatie", $_POST['relatie']);
    $stmt->bindParam(":voornaam", $_POST['forename']);
    $stmt->bindParam(":achternaam", $_POST['lastname']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":bericht", $_POST['message']);
    $stmt->execute();

    $conn = null;

    header("location:contact.php");
