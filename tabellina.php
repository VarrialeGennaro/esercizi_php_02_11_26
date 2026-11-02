<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    if(isset($_GET["numero"])){
        $numero = $_GET["numero"];

        echo "<p> Ecco la tabellina del " .$numero. ":</p>";

        for($i = 1; $i <= 10; $i++){
         $risultato = $numero * $i;

            echo $numero."x".$i. "=" .$risultato."<br>";
        }
    }

   ?>
    <h1>TABELLINE:</h1>
    <form method="get">

    Inserisci un numero:
    <input type="numero" name="numero">
    <input type="submit" value="calcola">


    </form>


</body>
</html>