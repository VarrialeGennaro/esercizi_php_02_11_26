<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    if(isset($_GET["num1"], $_GET["num2"])){
        
       
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        
        
        $media = ($num1 + $num2) / 2;
        
        
        echo "<p>La media tra " . $num1 . " e " . $num2 . " è: " . $media . "</p>";
    }
?>

<container>
<form method="GET">
    <p>Inserisci due numeri:</p>
    
  
    <input type="number" name="num1" required>
    
   
    <input type="number" name="num2" required>
    
   
    <input type="submit" value="Calcola Media">
</form>
</container>


    
</body>
</html>