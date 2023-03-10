<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="style.css">

    <meta charset="utf-8">
</head>

<body>

    <?php include("header.php"); ?>



    <div class="login">
        <h1>Login</h1>

        <!-- hier is het inlog menu -->
        <form action="authenticate.php" method="post">
            <label for="username">
                <!-- dit is het kleine foto naast de input -->
                <i class="fas fa-user"><img src="afbeeldingen/login_profile.png" class="inlog_afbeelding2" alt="profile"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"><img src="afbeeldingen/inloggen.png" class="inlog_afbeelding" alt="lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" class="login_button" value="Login">
        </form>
    </div>


    <!-- scripts voor bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php include("footer.php"); ?>

</body>

</html>