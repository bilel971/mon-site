<?php include "recherche.php";?>
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

<!-- Haut de page -->
<header>

    <h1 class="tete">
        TITRE
    </h1>

</header>

<!-- Menu de navigation -->

<nav class="menu">
    <ul>
        <li class="bouton">
            <a class="acceuil" href="#">
                Acceuil

            </a>
        </li>


        <li class="bouton">
            <a class="categorie" href="categories.html">
                Catégorie
            </a>
        </li>
    </ul>
</nav>

<!-- Contenue sous forme de boite -->

<h2 class="header">
    Voici les nouveautés du moment !
</h2>

<div id="content">

    <div class="leftbox">
        <h2 class="titre1">
            Le dernier Battlefield 2042 arrive !
        </h2>
        <iframe width="500" height="500" src="https://www.youtube.com/embed/ASzOzrB-a9E" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

    </div>


    <div class="rightbox">
        <h2 class="titre2">
            Tout se qu'il faut savoir sur le nouveaux Pokemon Unite !
        </h2>
        <iframe width="500" height="500" src="https://www.youtube.com/embed/oElrP4oAwjA" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>


</div>

<div id="contenue">

    <div class="bottombox">
        <h2 class="titre3">
            Nouvelle saison sur Warzone les nouveautés ?
        </h2>
        <iframe width="500" height="500" src="https://www.youtube.com/embed/e0RRog6gcYg" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>

    <div class="topbox">
        <h2 class="titre4">
            Nouveau personage sur Valorant que vaut-il?
        </h2>
        <iframe width="500" height="500" src="https://www.youtube.com/embed/f-BggI-kHt4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>

</div>


<footer>
    <p>
        Copryright &copy; IamBilol - 2021-2022 All Right Reserved
    </p>
</footer>






</body>
</html>