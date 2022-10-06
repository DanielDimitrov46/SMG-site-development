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
<body>

<!--- NAVBAR -->
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<div class="banner" style="position: fixed; width: 100%; z-index: 500; ">
    <div class="topnav" id="myTopnav" style="box-shadow: 2px 1px 10px gray;">
        <a href = "index.php" class = "image-logo"><img src = "images/da%20te%20eba.png" class = "logo"></a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="col"

</div>
</div>

<br><br><br>

<!--<div class = "banner" style="position: fixed; width: 100%; z-index: 500; ">-->
<!--    <div class = "navbar" style="box-shadow: 2px 1px 10px gray; ">-->
<!---->
<!--        <nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--            <a class="navbar-brand" href="#">Navbar</a>-->
<!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <div class="collapse navbar-collapse" id="navbarNav">-->
<!--                <ul class="navbar-nav">-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Features</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Pricing</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link disabled" href="#">Disabled</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!---->
<!--        <div class="col">-->
<!--            <a href = "index.php" class = "image-logo"><img src = "images/da%20te%20eba.png" class = "logo" style="width: 15%"></a>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--        <div class="col">-->
<!--            <ul>-->
<!--                <button  class="button button1" onclick="window.location.href='team.php'" style="float: right; ">ЕКИП</button>-->
<!--                <button class="button button1" onclick="window.location.href='blog.php'"  style="float: right">БЛОГ</button>-->
<!--                <button  class="button button1" onclick="window.location.href='about.php'" style="float: right; ">ПОВЕЧЕ ЗА НАС</button>-->
<!--                <button class="button button1" onclick="window.location.href='index.php'"  style="float: right">НАЧАЛО</button>-->
<!--            </ul>-->
<!--        </div>-->
<!---->

    </div>
</div>

</body>
</html>

<script>/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }</script>