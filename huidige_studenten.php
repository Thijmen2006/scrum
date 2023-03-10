<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="style.css">
    <title>Huidige studenten</title>
</head>


<body>

    <?php include("header.php"); ?>


    <!-- knoppen naar connectme en eduarte -->
    <div class="huidige_studentencontainer">
        <div class="buttoncontainer">
            <div class="button-borders">
                <button class="connectme_button" onclick='window.open("https://connectme.horizoncollege.nl/");return false;'>ConnectMe</button>
            </div>

            <button href="#" onclick='window.open("https://horizon-student.educus.nl/agenda?0");return false;' class="eduarte_button">Eduarte</button>

        </div>

        <!-- afbeeldingen met tekst -->

        <div class="containerbedrijven">
            <div class="test">
                <img class="connectmeafb" src="afbeeldingen/connectmij.png" alt="Connectmeachtergrond">
            </div>
            <div class="tekstvlakgrijs">
                <p>Binnen het Horizon maken wij veel gebruik van Connectme. Maar wat kan je daar eigenlijk mee?
                    Ten eerste kan je jouw laatste cijfers erop zien. Maar er staan ook veel links in, bijvoorbeeld naar Microsoft Word, naar Outlook en Excel.
                    Ook kan je er het laatste nieuws van het Horizon zien, of contact opnemen met de schoolhelpdesk.
                    Onder cijfers kun je jouw rooster in het kort zien.</p>
            </div>
        </div>

        <div class="containerbedrijven">
            <div class="test">
                <img src="afbeeldingen/eduarte.png" class="eduarte" alt="Eduarteachtergrond">
            </div>
            <div class="tekstvlakgrijs">
                <p>Er wordt ook veel gebruik gemaakt van Eduarte, wat veel lijkt op Magister of Zermelo. Op eduarte kan je jouw rooster zien, of jouw cijferlijst bekijken. Ook kan je je ziekmelden via eduarte, door eenvoudig op de absentieknop te drukken. Een studiepuntenoverzicht is ook beschikbaar.
                    Op het overzicht kan je het aantal punten die je reeds behaald hebt zien, alsook hoeveel punten er nog te halen vallen in de opleiding. Op Eduarte vind je ook informatie over jouw stage als je stage loopt.</p>
            </div>
        </div>
    </div>
    <!-- scripts voor bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php include("footer.php"); ?>

</body>

</html>