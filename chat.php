<!--<?php
    if(!$_COOKIE['user']){
        header("location: login.php");
    }
?> -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <!-- <link href="font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Document</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <div class="wrapper container"> 
            <section class="users">
                <header>
                    <div class="content">
                        <img src="img/av2.png" alt="">
                        <div class="details">
                            <span> <?=$_COOKIE['name']?> <?=$_COOKIE['surname']?> </span>
                            <p>Active now</p>
                        </div>
                    </div>
                    <a href="validation-form/exit.php" class="logout">logout</a>
                </header>
                <div class="search">
                    <span class="text"> Select an user to start chat</span>
                    <input type="text" placeholder="Enter name to search">
                    <button><i class="fas fa-search"> </i></button>
                </div>
                <div class="users-list">
                    <?php require "friend.php" ?>
                </div>
            </section>
        </div>
        <?php require "blocks/footer.php" ?>
    </body>
</html>
