<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 25.09.15
 * Time: 10:15
 */
$imieDostepu = "Filip";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["login"])){
        $imie = trim($_POST["login"]);
        if ($imie == $imieDostepu){
            $wyswietl = ("Cześć " . $imie);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <title>Formularz</title>
</head>
<body>
    <form action="napisz_hello_world.php" method="POST">
        <p>
            Imię Użytkownika:
            <input type="text" name="login" >
        </p>
        <input type="submit" value="wyślij">
    </form>
    <p><?php echo $wyswietl?$wyswietl: ""  ?></p>
</body>
</html>
