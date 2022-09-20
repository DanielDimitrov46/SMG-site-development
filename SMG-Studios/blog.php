<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ('header.php');
    ?>
</head>
<body>
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