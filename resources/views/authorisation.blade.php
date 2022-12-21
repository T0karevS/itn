<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/index.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/style.css")}}'>
    <title>Document</title>
</head>
<body>
    <form action="connect/login.php" class="form-container" method="post" enctype="multipart/form-data">
        <h1>Авторизация</h1>
        <div class="registration__item">
            <input type="text" name="email" class="registration__control" placeholder="Ваш email">
        </div>
        <div class="registration__item">
            <input type="password" name="password" class="registration__control" placeholder="Введите свой пароль">
        </div>
        <button type="submit" class="btn">Войти</button>
        <a href="../registration" class="registration__text">Еще нет аккаунта?</a>
    </form>
</body>
</html>