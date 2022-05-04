<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Форма регистрации</title>
</head>
    <body>
        <?php require "blocks/header.php" ?> 
        <div class="container mt-4">
            <h1>Форма реєстрації</h1>
            <form action="validation-form/check2.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                <input type="text" class="form-control" name="email" id="email" placeholder="Введіть email"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
                <button class="btn btn-success" type="submit">Зареєструватися</button>
            </form>
        </div>
	    <?php require "blocks/footer.php" ?>
    </body>
</html>
