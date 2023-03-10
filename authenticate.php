<!DOCTYPE html>
<html>

<head>
    <title>MBO-SD-N4</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php

    session_start();

    include('connection.php');

    // Controleren van het wachtwooord en gebruikersnaam.
    $sql = "SELECT * FROM login WHERE (username = :username) AND (password = :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();
    $result = $stmt->fetch();


    // Doorsturen naar de correcte pagina. Als het fout/goed is ingevuld
    if (($_POST['username'] == $result['username'])) {
        $_SESSION['loggedInUser'] = $result['username'];
        header("Location: berichten.php");
        die();
    } else {
        $_SESSION['loggedInUser'] = "fout";
        header("location: verkeerd.php");
    }

    $conn = null;

    ?>

</body>

</html>