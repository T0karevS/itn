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
    <form action="connect/signup.php" class="form-container" method="post" enctype="multipart/form-data">
        <h1>Регистрация</h1>
        <div class="registration__item">
            <input type="text" name="nickname" class="registration__control" placeholder="Ваш ник">
        </div>
        <div class="registration__item">
            <input type="email" name="email" class="registration__control" placeholder="Введите свой Email">
        </div>
        <div class="registration__item">
            <input type="password" name="password" class="registration__control" placeholder="Введите свой пароль">
        </div>
        <div class="registration__item">
            <input type="password" name="password_c" class="registration__control" placeholder="Подтвердите свой пароль">
        </div>
        <button type="submit" class="btn">Зарегистрироваться</button>
        <a href="../authorisation" class="registration__text">Есть аккаунт?</a>
    </form>
</body>
</html>