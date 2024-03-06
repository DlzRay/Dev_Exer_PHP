
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
      <label name="name">Name: </label><br>
      <input name="numero"></input>   
      <input type="submit"></input>   
   </form>

   <?php
   $numero = $_GET["numero"];
   echo "O número informado foi " . $numero . ".\n";
   ?>

</body>
</html>
