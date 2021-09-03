<?php


if (isset($_POST['formsend'])) {

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cmotdepasse = $_POST['cmotdepasse'];

    if (!empty($pseudo) && !empty($password) && !empty($email) && !empty($cmotdepasse)) {

        if ($password == $cmotdepasse) {


            $hashpass = password_hash($password, PASSWORD_ARGON2ID);

            require 'database.php';

            $c = $db->prepare("SELECT email FROM user WHERE email = :email");
            $c->execute(['email' => $email]);

            $result = $c->rowCount();

            if ($result == 0) {
                $q = $db->prepare("INSERT INTO user(pseudo,email,password) VALUES(:pseudo,:email,:password)");
                $q->execute([
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $hashpass

                ]);
                echo "Le compte a ete créée";
            }


        }
    }
}
?>