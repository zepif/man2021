<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    if (mb_strlen($login) <= 0 || mb_strlen($login) > 45) {
        echo 'Недопустимая длина логина';
        exit();
    } else if (mb_strlen($email) <= 0 || mb_strlen($email) > 75) {
        echo 'Недопустимая длина email';
        exit();
    } else if (mb_strlen($pass) <= 0 || mb_strlen($pass) > 75) {
        echo 'Недопустимая длина пароля';
        exit();
    }
    //$const = 'a';
    //$link = new mysqli('localhost', 'root', '');
    //$sql = 'INSERT INTO `user`(`email`, `nickname`, `password`) VALUES($email, $login, $pass)';
    //$result = mysqli_query($link, $sql);
    $pass = md5($pass.$email);
    $link = mysqli_connect("localhost", "root", "root1", "users");

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    else {
        //$sql = 'INSERT INTO cities SET name = "Санкт-Петербург"';
        $sql = "INSERT INTO `user`(`email`, `nickname`, `password`, `user_type`) VALUES('$email', '$login', '$pass', 'user')";
        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }  
    }
    header('Location: register.php'); // потом будет ссылка на профиль
    exit();
?>
