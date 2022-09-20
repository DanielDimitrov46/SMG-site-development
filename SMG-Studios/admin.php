<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="admin.css?<?php echo time(); ?>">

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
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "smg";

$connection = new PDO("mysql:host=$servername;dbname=$dbname",  $username , $password);
$rows = $connection->query('SELECT * FROM Team');
foreach ($rows as $row){
?>

<div class="flex-container">
    <img src="images/team/<?= $row['idteam'] ?>.jpg" width= "150" height= "150" style="float:left;">
    <div" style = "float:left;  margin-left:15px;">
        <a href = "description.php?id=<?=$row['idteam'] ?>"; style ="text-decoration: none; color: blue"><?= $row['name_of_member'] ?></a><br>
         <?= $row['position'] ?>.<br>
    </div>
    <div style="clear:both;"></div>
</div>
<br>

<?php
}
?>

</body>
</html>