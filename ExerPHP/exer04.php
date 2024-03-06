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
      <label name="numero1">Informe sua primeira Nota:</label>
      <input name="numero1"></input><br> 
      <label name="numero2">Informe o segunda Nota:</label>
      <input name="numero2"></input><br>
      <label name="numero3">Informe o terceira Nota:</label>
      <input name="numero3"></input><br>
      <input type="submit"></input><br>   
   </form>

   <?php

    $numero1 = $_GET ['numero1'];
    $numero2 =  $_GET ["numero2"];
    $numero3 =  $_GET["numero3"];

    $media = ($numero1 + $numero2 + $numero3) / 3;
    
    echo "A media será:" . $media;
    
   ?>

</body>
</html>