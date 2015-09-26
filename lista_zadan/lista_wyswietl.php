<?php
session_start();
$licznik = $_SESSION["licznik"];
for ($i =0; $i<= $_SESSION["licznik"]; $i++){

    echo " zadanie numer " . $i . ":";
    var_dump(unserialize($_COOKIE[$i]));
}

//var_dump($_SESSION["licznik"]);

?>