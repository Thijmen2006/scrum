<!DOCTYPE html>

<html>

<head>
    <title>Nieuwe studenten</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include("header.php"); ?>`



    <!-- De tekstvlakken, somige met afbeelding. Ze zijn alle van de zelfde containerclass. Samenvoeging zou de opmaak breken -->

    <div class="containercentre" id="firsttext">
        <div class="stripetext">
            <p>Wil jij leren hoe je een website maakt, loginsystemen bouwt of hoe je gegevens opslaat in een database en die gebruikt op jouw site?</p>
            <p>Dan is dit de opleiding voor jou! Hier leer je alle middelen om een moderne en dynamische website op te zetten</p>
        </div>
    </div>

    <div class="containercentre">
        <div class="test">
            <div class="test2">
                <img class="connectme" src="afbeeldingen/connectme.png">
            </div>
        </div>
        <div class="textbox">
            <p>Een voorbeeld van Connectme. Connectme is een Teams plug-in waarop je jouw cijfers en rooster kunt zien. Een soort geïntergreerd magister.</p>
        </div>
    </div>

    <div class="containercentre">
        <div class="test">
            <div class="test2">
                <img class="jarvis" src="afbeeldingen/jarvis.jpg">
            </div>
        </div>
        <div class="textbox">
            <p>Het grootste deel van de opleiding: Jarvis. De bolletjes op de website zijn hoofdstukken met een boel opdrachten erin.</p>
        </div>
    </div>

    <div class="containercentre">
        <div class="stripetext">
            <p>Wij werken voornamelijk met Jarvis. Dat is een programma waarin je allerlei programmeeropdrachten moet maken.</p>
        </div>

        <div class="stripetext">
            <p>Net als elke andere MBO-opleiding volgen wij ook de vakken Nederlands, Engels, rekenen en maatschappijleer.</p>
        </div>

        <div class="stripetext">
            <p>Op deze opleiding leer je HTML en CSS, PHP, Javascript, Databases en nog veel meer.</p>
        </div>
    </div>

    <!-- javascript van bootstrap. zorgt ervoor dat de navbar goed is. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php include("footer.php"); ?>

</body>

</html>