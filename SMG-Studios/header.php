<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css?<?php echo time(); ?>">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMG</title>
    <link rel="icon" type="image/x-icon" href="images/da%20te%20eba.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .navbar-custom {
        background-color: #dee5d5;
        width: 100%;
    }
</style>
<body>

<!--- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-custom py-4 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class = "logo" src="images/da te eba.png" alt="..."></a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon my-toggler">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <button class="button button1" onclick="window.location.href='index.php'"  style="float: right">НАЧАЛО</button>
                <button  class="button button1" onclick="window.location.href='about.php'" style="float: right; ">ПОВЕЧЕ ЗА НАС</button>
                <button class="button button1" onclick="window.location.href='blog.php'"  style="float: right">БЛОГ</button>
                <button  class="button button1" onclick="window.location.href='team.php'" style="float: right; ">ЕКИП</button>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>

