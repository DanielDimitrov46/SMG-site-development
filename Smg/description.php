<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Description</title>
</head>
<body>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "smg";
$connection = new PDO("mysql:host=$servername;dbname=$dbname",  $username , $password);
$rows = $connection->query('SELECT description FROM Team');
foreach ($rows as $row){
?>
<div class = "description">
    <h1>Description:<br><?= $row['description'] = $row['idteam'] ?></h1>

</div>

<?php
}
?>
</body>
</html>