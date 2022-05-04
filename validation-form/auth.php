<?php 
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass = md5($pass.$email);
    $link = mysqli_connect("localhost", "root", "root1", "users");
    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'";
    $result = mysqli_query($link, $sql);
    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
        exit();
    } 
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        print('такой пользователь не найден');
        exit();
    } 
    //print_r($user);
    //exit();
    setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, "/");
    setcookie('user', $user['nickname'], time() + 60 * 60 * 24 * 30, "/");
    setcookie('email', $user['email'], time() + 60 * 60 * 24 * 30, "/");
    setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, "/");
    setcookie('surname', $user['surname'], time() + 60 * 60 * 24 * 30, "/");
    setcookie('user_type', $user['user_type'], time() + 60 * 60 * 24 * 30, "/");
    $sql = "UPDATE `user` SET `status` = 'online' WHERE `id` = '$user[id]'";
    //print($_COOKIE['email']);
    header('Location: /');
?>
