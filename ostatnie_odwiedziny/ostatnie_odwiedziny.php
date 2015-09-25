<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 25.09.15
 * Time: 16:09
 */
$czasAktualny = time();

if (!isset($_COOKIE["czas"])){
    setcookie("czas", $czasAktualny, time()+10);
    echo "nie ma ciasteczka";
}
else {
    $roznicaCzasu =  $_COOKIE["czas"] - $czasAktualny;
    echo $_COOKIE["czas"] . "lala";
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <title>Formularz</title>
</head>
<body>
<h1> WITAJ</h1>
<p> <?php echo($_COOKIE["czas"] ? "ostatnio byłeś tu o ".$roznicaCzasu."sekund temu": "jeszcze tu nie byłeś" )?></p>
</body>
</html>
