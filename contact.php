<!DOCTYPE html>
<html lang="en">

<head>
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include("header.php"); ?>


    <div class="contactcontainer">

        <div id="firstimage">

            <img class="contact_afbeelding" src="afbeeldingen/contact_afbeelding.png" alt="afbeelding">
            <div class="contacttext">
                <h1 id="vragen">Heeft u een vraag?</h1>
                <h1 id="contact">Neem contact met ons op</h1>
            </div>
        </div>

        <br>

        <!-- contact servicepunt alkmaar -->
        <div class="servicepuntcontact">

            <p>Heeft u een vraag?</p>
            <p>Neem contact op met het servicepunt.</p>
            <p><a href="mailto: receptiealk@horizoncollege.nl" class="contactgegevens">receptiealk@horizoncollege.nl</a></p>
            <p><a href="tel: (072) 547 66 00" class="contactgegevens">(072) 547 66 00</a></p>
        </div>

        <br>

        <div class="contactformulier">
            <p>U kunt ook het onderstaande formulier invullen als u een vraag of klacht heeft.</p>
        </div>

        <br>

        <!-- het contactformulier -->
        <div class="formulier d-flex justify-content-center">
            <div class="container" style="margin-bottom: 50px; margin-top: 30px">
                <section class="mb-4">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="d-flex text-center">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <div class="row">

                                        <!-- dropdown -->
                                        <div class="col-md-6">
                                            <label for="dropdown_wie">Aan wie wilt u een vraag stellen?</label>
                                            <br>
                                            <select id="dropdown_wie" name="aanwie">
                                                <option style="display:none">Maak een keuze</option>
                                                <option value="makers" name="makers">Makers van de website</option>
                                                <option value="docent" name="docentwie">Docent</option>
                                                <option value="servicepunt" name="service">Servicepunt</option>
                                            </select>
                                        </div>
                                        <!-- dropdown -->

                                        <!-- dropdown -->
                                        <div class="col-md-6">
                                            <label for="dropdown_relatie">Uw relatie met het Horizon College</label>
                                            <br>
                                            <select id="dropdown_relatie" name="relatie">
                                                <option style="display:none">Maak een keuze</option>
                                                <option value="student" name="student">Student</option>
                                                <option value="docentrel" name="docentrel">Docent</option>
                                                <option value="ouder" name="ouder">Ouder</option>
                                                <option value="anders" name="anders">Anders</option>
                                            </select>
                                        </div>
                                        <!-- dropdown -->

                                        <!-- NAAM -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <br>
                                                <label for="forename" class="d-block p text-black font-weight-bold">voornaam</label>
                                                <input type="text" required id="forename" name="forename" class="form-control" style="padding: 13px;">
                                                <label for="lastname" class="d-block p text-black font-weight-bold">achternaam</label>
                                                <input type="text" id="lastname" name="lastname" class="form-control" style="padding: 13px;">
                                            </div>
                                        </div>
                                        <!-- NAAM -->

                                        <!-- E-mail -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <br>
                                                <label for="email" class="d-block p text-black font-weight-bold">E-mail</label>
                                                <input type="email" id="email" name="email" class="form-control" style="padding: 13px">
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <!-- telefoonnummer -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="subject" class="d-block p text-black font-weight-bold">Telefoonnummer</label>
                                                <input type="number" id="phonenumb" name="phonenumb" class="form-control" style="padding: 13px;">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <!-- het bericht -->
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <label for="message" class="d-block p text-black font-weight-bold">Bericht</label>
                                                <textarea maxlength="500" type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <br>

                                    <!-- Button voor versturen-->
                                    <div class="text-left text-md-left d-flex justify-content-center text-center" style="margin-bottom: -40px;">
                                        <button type="submit" class="verzend">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <svg viewBox="0 0 24 24" width="24" height="24">
                                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <span>Send</span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <?php include("footer.php"); ?>
</body>

</html>