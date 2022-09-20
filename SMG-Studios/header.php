<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css?<?php echo time(); ?>">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMG</title>
    <link rel="icon" type="image/x-icon" href="images/SMHjpg.jpg">
    <link rel = "stylesheet" href="about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>

<!--- NAVBAR -->
<div class = "banner">
    <div class = "navbar">

        <div class="col">
            <a href = "index.php" class = "image-logo"><img src = "images/SMHremoved.png" class = "logo"></a>
        </div>
        

        <div class="col">
            <ul>
                <button  class="button button1" onclick="window.location.href='team.php'" style="float: right; ">ЕКИП</button>
                <button class="button button1" onclick="window.location.href='blog.php'"  style="float: right">БЛОГ</button>
                <button  class="button button1" onclick="window.location.href='about.php'" style="float: right; ">ПОВЕЧЕ ЗА НАС</button>
                <button class="button button1" onclick="window.location.href='index.php'"  style="float: right">НАЧАЛО</button>
            </ul>
        </div>


    </div>
</div>

</body>
</html>