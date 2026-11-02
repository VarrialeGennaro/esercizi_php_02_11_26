<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    if (isset($_GET["user"], $_GET["userconf"])) {
        if ($_GET["user"] === $_GET["userconf"]) {
            echo "<p>Username corretta</p>";
        } else {
            echo "<p>Le username non coincidono</p>";
        }
    } else {
    }

    
    if (isset($_GET["numero"], $_GET["numeroconf"])) {
        if ($_GET["numero"] === $_GET["numeroconf"]) {
            echo "<p>Password accettata</p>";
        } else {
            echo "<p>Le password non coincidono</p>";
        }
    } else {
    }
?>


    <h1>USER LOGIN: </h1>
    <form method="get">
        Inserisci il tuo nome:
        <input type="text" name="user"><br><br>
        Conferma il tuo nome:
        <input type="text" name="userconf"><br><br>
        <hr>
        Inserisci la tua password:
        <input type="number" name="numero"><br><br>
        Conferma la tua password:
        <input type="number" name="numeroconf">

        <input type="submit">
        



    </form>


</body>
</html>