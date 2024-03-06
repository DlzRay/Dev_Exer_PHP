
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
      <label name="numero1">Informe o  primeiro Numeros:</label>
      <input name="numero1"></input><br> 
      <label name="numero">Informe o  segundo Numeros:</label>
      <input name="numero2"></input><br> 
      <input type="submit"></input><br>   
   </form>

   <?php

    $numero1 = floatval ($_GET['numero1']);
    $numero2 = floatval ($_GET['numero2']);

    $soma = $numero1 + $numero2;

    echo "Soma:" . $soma;
   ?>

</body>
</html>