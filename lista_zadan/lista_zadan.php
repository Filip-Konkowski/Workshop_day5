<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 25.09.15
 * Time: 17:16
 */

session_start();
//$_SESSION["licznik"] = -2;
if (!isset($_SESSION["licznik"])){
    $_SESSION["licznik"] = 0;
}
else {
    $_SESSION["licznik"]++;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    setcookie($_SESSION["licznik"], serialize($_POST["zadanie"]), time()+3600 );
}


/*
 * próba z zapisywanie "zadanie" w $_SESSION
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if (!isset($_SESSION["licznik"])){
        $_SESSION["licznik"] = 0;
    }
    else {
        $_SESSION["licznik"]++;
    }
    $index = $_SESSION["licznik"];
    $zadanie = $_POST["zadanie"];
    $_SESSION[$index] = $_POST["zadanie"];
   // array_push($_SESSION[$index], $zadanie);

}
*/

/*
 * Próba z zapisywanie "zadanie" w pustej tabeli $table

if (!$_SESSION["licznik"]){
    $table = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if (!isset($_SESSION["licznik"])){
        $_SESSION["licznik"] = 0;
    }
    else {
        $_SESSION["licznik"]++;
    }
    $index = $_SESSION["licznik"];
   // $table[$index] = $_POST["zadanie"];
    array_push($table[$index], $_POST["zadanie"]);

}
*/

?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <title>Lista zadań</title>
</head>
<body>
    <form action="lista_zadan.php" method="POST" >
        <fieldset>

                <h2> Moja lista zadań</h2>
                <p>
                    <label>  Do wykonania mam: <input type="text" name="zadanie" placeholder="wpisz zadanie"> </label>
                </p>
                <p>
                    <input type="submit" value="wyślij">
                </p>

        </fieldset>
        <a href="lista_wyswietl.php">Wyświetl liste zadań</a>
    </form>

<?php
var_dump($_SESSION["licznik"]);
?>