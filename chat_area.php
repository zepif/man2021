<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Document</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <div class="wrapper container"> 
            <section class="chat-area">
                <header>
                    <?php
                    $link = mysqli_connect("localhost", "root", "root1", "users");
                    $user_id = (INT)$_GET['user_id'];
                    $sql = "SELECT * FROM `user` WHERE `id` LIKE '%$user_id%'";
                    $result = mysqli_query($link, $sql);
                    $user = $result->fetch_assoc();  
                    ?> 
                    <a href="chat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="img/av2.png" alt="">
                    <div class="details">
                            <span> <?php echo $user['name'] . " " . $user['surname'] ?> </span>
                            <p>Active now</p>
                    </div>
                </header>
                <div class="chat-box">
                  
                </div>
                <form action="#" class="typing-area" autocomplete="off">
                    <input type="text" name="outgoing_id" value="<?php echo $_COOKIE['id']; ?>" hidden>
                    <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <input type="text" name="message" class="input-field" placeholder="type a message here">
                    <div id="root"></div>
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>
            </section>
        </div>
        <?php require "blocks/footer.php" ?>
        <script src="chat.js"></script> 
        <script src="js/index.js"></script>
    </body>
</html>
