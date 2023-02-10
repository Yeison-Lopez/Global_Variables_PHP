<?php
if(!session_id()){
session_start();
}
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
</head>

<body >


  <?php

  $_SESSION['quantityp']=549;
  $GBvalue=$_SESSION['quantityp'];

  $_SESSION['first_word']="bye";
  $GBword=$_SESSION['first_word'];


  $element="
  <div>
    <a>$GBvalue</a>
  </div>

  <div>
    <a>$GBword</a>
  </div>";

  echo $element;

?>

<div>
  <a href="index.php">Go to the primary page</a>
</div>




</body>
</html>
