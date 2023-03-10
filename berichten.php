<!DOCTYPE html>
<html>

<head>
    <title>berichten</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php
    ## hier wordt de session gestart
    session_start();
    if (!isset($_SESSION['loggedInUser']) || $_SESSION['loggedInUser'] == "fout") {
        header("location: index.php");
    }

    include('connection.php');

    ## eerste SQL statement voor de data uit tabel makers
    $sql = "SELECT * FROM makers";
    $bericht = $conn->prepare($sql);
    $bericht->execute();
    $bericht->setFetchMode(PDO::FETCH_ASSOC);

    include("navbar.php"); ?>
    <br>
    <br>
    <br>
    <?php

    echo "<h1 class='loginsuccess'>Welkom " . $_SESSION['loggedInUser'] . "</h1>";
    ?>

    <!-- Hier wordt de berichtentabel voor de makers getoont -->
    <div class="berichten-container">
        <div class="messages">
            <h1>Berichten voor de makers van de website:</h1>

            <table>
                <tr>
                    <td>Relatie</td>
                    <td>Voornaam</td>
                    <td>Achternaam</td>
                    <td>E-mail adres</td>
                    <td>Bericht</td>
                </tr>
                <?php

                ## de kopjes zijn  door middel van een foreach loop ingeladen
                foreach ($bericht as $row) {
                    echo "<tr><td>" . $row['relatie'] . "</td><td>" . $row['voornaam'] . "</td><td>" . $row['achternaam'] . "</td><td>" . $row['email'] . "</td><td>" . $row['bericht'] . "</td></tr>";
                }

                ?>
            </table>

            <br><br>

            <!-- Hier wordt de berichtentabel voor de docenten getoont -->

            <h1>Berichten voor de docenten:</h1>

            <table>
                <tr>
                    <td>Relatie</td>
                    <td>Voornaam</td>
                    <td>Achternaam</td>
                    <td>E-mail adres</td>
                    <td>Bericht</td>
                </tr>
                <?php


                ## tweede SQL statement voor de gegevens uit het tabel docent
                $sql = "SELECT * FROM docent";
                $bericht = $conn->prepare($sql);
                $bericht->execute();
                $bericht->setFetchMode(PDO::FETCH_ASSOC);

                ## de kopjes zijn  door middel van een foreach loop ingeladen
                foreach ($bericht as $row) {
                    echo "<tr><td>" . $row['relatie'] . "</td><td>" . $row['voornaam'] . "</td><td>" . $row['achternaam'] . "</td><td>" . $row['email'] . "</td><td>" . $row['bericht'] . "</td></tr>";
                }

                ?>
            </table>

            <br><br>

            <!-- Hier wordt de berichtentabel voor het servicepunt getoont -->

            <h1>Berichten voor het servicepunt:</h1>

            <table>
                <tr>
                    <td>Relatie</td>
                    <td>Voornaam</td>
                    <td>Achternaam</td>
                    <td>E-mail adres</td>
                    <td>Bericht</td>
                </tr>
                <?php


                ## laatste SQL voor de gegevens voor het servicepunt tabel
                $sql = "SELECT * FROM servicepunt";
                $bericht = $conn->prepare($sql);
                $bericht->execute();
                $bericht->setFetchMode(PDO::FETCH_ASSOC);

                ## de kopjes zijn  door middel van een foreach loop ingeladen
                foreach ($bericht as $row) {
                    echo "<tr><td>" . $row['relatie'] . "</td><td>" . $row['voornaam'] . "</td><td>" . $row['achternaam'] . "</td><td>" . $row['email'] . "</td><td>" . $row['bericht'] . "</td></tr>";
                }

                ?>
            </table>

        </div>
    </div>
    <?php include("footer.php");
    $conn = null; ?>
</body>

</html>