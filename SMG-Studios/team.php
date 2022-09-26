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
$dbname = "SMG";

$connection = new PDO("mysql:host=$servername;dbname=$dbname",  $username , $password);
$rows = $connection->query('SELECT * FROM Team');

foreach ($rows as $row){
?>

<div class="flex-container">
    <img src="images/team/<?= $row['id'] ?>.jpg" width= "150" height= "150" style="float:left;">
    <div" style = "float:left;  margin-left:15px;">
        <a href = "description.php?id=<?=$row['id'] ?>"; style ="text-decoration: none; color: blue"><?= $row['name'] ?></a><br>
         <?= $row['position'] ?>.<br>
    </div>
    <div style="clear:both;"></div>
</div>
<br>

<?php
}
?>
<?php
include ('credits.php');
?>
</body>
</html>