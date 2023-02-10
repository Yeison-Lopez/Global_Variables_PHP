<?php
if(!session_id()){
  session_start();
  $Array=[1,2,3];
  $Word='hello';
  $Value=555;
}
if(!isset($_SESSION['first_array'])) {$_SESSION['first_array'] = $Array;}
if(!isset($_SESSION['first_word'])) {$_SESSION['first_word']=$Word;}
if(!isset($_SESSION['quantityp'])) {$_SESSION['quantityp']=$Value;}

?>


<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>STORE</title>


</head>

<body >


  <?php

  $GBvalue=$_SESSION['quantityp'];
  $GBword=$_SESSION['first_word'];

  $element="
  <div>

    <a>$GBvalue</a>

  </div>
  <div>

    <a>$GBword</a>

  </div>";
  echo $element;

  $GBarray=print_r($_SESSION['first_array']);

?>

<div>
  <a href="page2.php">Go to the secondary page</a>
</div>



</body>
</html>
