<?php

    $resultats = "";
    if (isset($_POST['query']) && !empty($_POST['query'])) {

    $query = preg_replace("^a-zA-Z ?0-9]#i", "", $_POST['query']);
    if ($_POST['filtre'] == "fps"){

    } elseif ($_POST['filtre'] == "sport"){


    }elseif ($_POST['filtre'] == "action"){

    }

    }
?>



<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form action="recherche" method="post">
            <input type="search" name="query" maxlength="20" size="20" id="query">

           <select name="Filtre">
               <option value="fps">Fps</option>
               <option value="action">Action</option>
               <option value="sport">Sport</option>
           </select>

            <input type="submit" value="Rechercher">
        </form>
        <?php echo $resultats?>

    </body>










</html>