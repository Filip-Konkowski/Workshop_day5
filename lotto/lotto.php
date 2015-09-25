<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 25.09.15
 * Time: 10:47
 */
$liczbyLosowane = [];
if ($_SERVER["REQUEST_METHOD"] === "POST"){

}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <title>Lotto</title>
</head>
<body>
    <form action="lotto.php" method="POST">
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
