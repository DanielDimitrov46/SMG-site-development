<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMG</title>
</head>
<body>
  <h1>Database structures</h1>
<?php

$submitPlus = @$_POST['plus'];
$submitMinus = @$_POST['minus'];

if ( $submitPlus ) {

  $n1 = $_POST['number1'];
  $n2 = $_POST['number2'];
  
  echo $n1 + $n2;
  
  echo "<br><br>";
}

if ( $submitMinus ) {

  $n1 = $_POST['number1'];
  $n2 = $_POST['number2'];
  
  echo $n1 - $n2;
  
  echo "<br><br>";
}


// placeholder

?>


<form action="form.php" method="post">
  
<label for="f1"> Number 1</label>

<input id="f1" type="text" name="number1" value="" autocomplete="off">
<br><br>
  
  
<label for="f2"> Number 2</label>

<input id="f2" type="text" name="number2" value="" autocomplete="off">

<br>

<input type="submit" name="plus" value="+">
<input type="submit" name="minus" value="-">

</form>  
</body>
</html>
