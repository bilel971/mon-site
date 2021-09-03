<!DOCTYPE html>
<html>
<head>
    <title>IamBilolGaming</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="block-login">
    <h1 class="login">Login</h1>
    <form class="login" method="post">
        <input type="text" name="cpseudo" id="cpseudo" placeholder="Votre Pseudo" required><br/>
        <input type="password" name="cpassword" id="cpassword" placeholder="Votre mot de passe" required><br/>
        <input type="email" name="lemail" id="lemail" placeholder="Votre adresse mail" required><br/>
        <input type="submit" name="formlogin" id="formlogin" value="Login">
    </form>

    <?php require 'includes/login.php'; ?>
</div>

<div class="block-signin">
    <h1 class="signin">Signin</h1>
    <form class="signin" method="post">

        <input type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required><br/>

        <input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
        <input type="password" name="cmotdepasse" id="cmotdepasse" placeholder="Confirmez votre mot de passe"
               required><br/>

        <input type="email" name="email" id="email" placeholder="Votre adresse mail" required><br/>

        <input type="submit" name="formsend" id="formsend" value="Signin">

    </form>

    <?php require 'includes/signin.php'; ?>
</div>


<?php require 'home.html'; ?>


</body>
</html>