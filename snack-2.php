<?php
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

//?name=andrea&mail=andrea@hotmail.it&age=30

if(isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])){


    if(strlen($_GET["name"]) > 3 && strpos($_GET["mail"], "@") != null && strpos($_GET["mail"], ".") != null && intval($_GET["age"]) == true) {
        echo "Accesso riuscito";
    }
    else{
        echo"Accesso negato";
    }
}
else{
    echo"Accesso negato";
}


?>


