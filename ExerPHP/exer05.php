<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <form method="get">
      <label name="numero1">Informe Metros:</label>
      <input name="numero1"></input><br> 
      <input type="submit"></input><br>   
   </form>

   <?php

    $numero1 = floatval ($_GET ['numero1']);

    $cen = $numero1 * 100;
    
    echo $numero1 . "Metros: ";
    echo $cen . "Centimetros: ";
    
   ?>

</body>
</html>