<!DOCTYPE html>
<html>

<head>
        <title>MBO-SD-N4</title>
        <link rel="stylesheet" href="style.css">

</head>

<body>
        <?php include("header.php"); ?>


        <!-- de hoofdafbeelding met title -->
        <div class="indexcontainer">

                <div class="home">
                        <div class="uplefttext bg-primary">
                                <p>SOFTWARE DEVELOPER</p>
                        </div>
                        <div class="index1eimage">
                                <img src="afbeeldingen/thumbnail.png" alt="1e achtergrondfoto">
                        </div>

                        <!-- korte info over opleiding -->
                        <div class="d-flex justify-content-around bg-primary" id="index_info">
                        <p class="font-monospace text-white ">Alkmaar</p>
                        <p class="font-monospace text-white "> BOL</p>
                        <p class="font-monospace text-white ">3/4 jaar</p>
                        <p class="font-monospace text-white ">NIVEAU 4</p>
                                
                        </div>
                </div>
        </div>

        <!-- knoppen naar de belangrijkste pagina's -->
        <div class="containerindex">
                <div class="index1efoto">
                        <div id="index1efoto">
                                <img src="afbeeldingen/huidige_studenten_knop.png" class="img-fluid" alt="huidige studenten">
                        </div>
                        <div class="bottomsidetext bg-primary">
                                <a href="huidige_studenten.php" target="_self" class="indexhuidigestudenten">huidige studenten</a>
                        </div>
                </div>

                <div class="index2efoto">
                        <div id="index2efoto">
                                <img src="afbeeldingen/nieuwe_studenten_knop.png" class="img-fluid" alt="nieuwe studenten">
                        </div>
                        <div class="bottomsidetext bg-primary">
                                <a href="nieuwe_studenten.php" target="_self" class="indexnieuwestudenten">nieuwe studenten</a>
                        </div>
                </div>

                <div class="index3efoto">
                        <div id="index3efoto">
                                <img src="afbeeldingen/bedrijven_knop.png" class="img-fluid" alt="bedrijven">
                        </div>
                        <div class="bottomsidetext bg-primary">
                                <a href="bedrijven.php" target="_self" class="indexbedrijven">bedrijven</a>
                        </div>
                </div>
        </div>
        <!-- scripts voor bootstrap  -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <?php include("footer.php"); ?>
</body>

</html>