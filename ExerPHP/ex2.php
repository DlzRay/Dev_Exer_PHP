
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
      <label name="name">Informe o raio de um circulo: </label><br>
      <input name="numero"></input>   
      <input type="submit"></input>   
   </form>

   <?php
   $dois = 2;
   $numero = $_GET["numero"];
   $area = (M_PI * $numero) *(M_PI * $numero);
   $per = M_PI * $numero * $numero;
   echo "O Raio é: " . $numero . "<br> 
   Perímetro: ". $per . "\n <br>
   Area: ". $area;

   ?>

</body>
</html>