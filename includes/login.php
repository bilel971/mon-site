
<?php
require_once 'database.php';

if (isset($_POST['formlogin'])) {

    $cpseudo = $_POST['cpseudo'];
    $cpassword = $_POST['cpassword'];


    if (!empty($cpseudo) && !empty($cpassword)) {


        $q = $db->prepare("SELECT * FROM users WHERE pseudo = :cpseudo");
        $q->execute(['cpseudo' => $cpseudo]);
        $result = $q->fetch();

        if ($result == true) {

            $hashpassword = $result['password'];
            if (password_verify($cpassword, $hashpassword)) {
                echo "Mot de passe acceptée ";
            } else {
                echo "Le mot de passe est incorrecte";
            }
        }

    }
}
