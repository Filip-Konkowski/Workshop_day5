

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <title>Lotto</title>
</head>
<body>
    <form action="lotto.php?start=1&end=10" method="POST">
        <fieldset>
            <legend>Losowanie Lotto</legend>
            <p>
                Wymierze liczby od 1 do 49 do losowania
            </p>
            <p>
                <label>
                    <?php
                        for ($liczba =1; $liczba <= 49; $liczba++){
                            echo ("<input type=checkbox value=$liczba name=checkbox_$liczba >" . $liczba . "<br>");
                        }
                    ?>
                </label>
            </p>

        </fieldset>
        <input type="submit" value="Losowanie">
    </form>

</body>
</html>

<?php


function generowanie($start,$end){
    $start = (int)($start);
    $end = (int)($end);
    $liczbyLosowane = [];
    $wylosowane = [];
    for ($i =$start; $i <= $end; $i++){
        $liczbyLosowane[] = $i;
    }
    shuffle($liczbyLosowane);

    for ($i =0; $i <= 6; $i++){
        $wylosowane[] = $liczbyLosowane[$i];
    }

    return $wylosowane;
}



$wylosowaneLiczby = generowanie(($_GET["start"]),($_GET["end"]));
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if ((count($_POST) == 6)) {    // ma sprawdzać czy jest 6 checkbox'ów zaznaczonych
        $wynikLosowania = array_diff($wylosowaneLiczby, $_POST);
        $stringWylosowaneLiczby = implode(", ", $wylosowaneLiczby);
        $stringWybrane = implode(", ", $_POST);
        $stringWynikLosowania = implode(", ", $wynikLosowania);
        if ((count($wynikLosowania)) == 0){
            echo "Wynik losowania to " .$wylosowaneLiczby . "nie udało Ci się żadnej zgadnąć";
        }
        else {
            echo "Wybrałeś liczby" .$stringWybrane . "<br> Wylosowane liczby to: " .$stringWylosowaneLiczby . "<br> Nie udało ci się zgadnąć liczby " . $stringWynikLosowania;
        }
    }
    else {
        echo "<h2>Gościu zaznaczyłeś niewłaściwą ilość liczb</h2>";
    }
}

?>