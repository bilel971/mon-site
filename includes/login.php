<?php

if (isset($_POST['formlogin'])) {

    $cpseudo = $_POST['cpseudo'];
    $cpassword = $_POST['cpassword'];
    $lemail = $_POST['lemail'];

    if (!empty($cpseudo) && !empty($cpassword) && !empty($lemail)) {

        require 'database.php';
        $q = $db->prepare("SELECT * FROM user WHERE email = :email");
        $q->execute(['email' => $lemail]);
        $result = $q->fetch();

        if ($result == true) {

            $hashpassword = $result['password'];
            if (password_verify($cpassword, $hashpassword)) {
                echo "Mot de passe acceptée ";
            } else {
                echo "Le mot de passe est incorrecte";
            }
        } else {
            echo "Le compte portant l'email " . $lemail . " n'existe pas";
        }

    }
}
