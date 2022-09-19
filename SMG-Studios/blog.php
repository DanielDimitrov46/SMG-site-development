<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMG</title>
    <link rel="stylesheet" href="team.css">
</head>
<body>
<a href = "index.php"><img class = "logo" src="images/SMHjpg.jpg" style = "width:10%; height:10%"></a>
<h1>Database structures</h1>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "smg";

$connection = new PDO("mysql:host=$servername;dbname=$dbname",  $username , $password);
$rows = $connection->query('SELECT * FROM blog');
foreach ($rows as $row){
?>

<?php
}
?>

</body>
</html>