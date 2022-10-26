<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">

    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0">

    <title>SMG STUDIOS</title>
    <link rel="icon" type="image/x-icon" href="images/da%20te%20eba.png">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body>
<?php
include ('header.php');
?>
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
<?php
include ('credits.php');
?>
</body>
</html>