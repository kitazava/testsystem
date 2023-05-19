<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: adminpanel.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="wrapper">
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ТЕСТЫ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auth.php">Войти</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="form">
                <form action="function/singup.php"  method="post">
                    <div class="mb-3">
                        <label for="exampleInputFIO" class="form-label">ФИО</label>
                        <input type="text" name="full_name" class="form-control" id="exampleInputFIO" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputLogin" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="exampleInputLogin">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Почта</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImage" class="form-label">Изображение профиля</label>
                        <input type="file" name="avatar" class="form-control" id="exampleInputImage">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Подтверждение пароля</label>
                        <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword2">
                    </div>
                    <p>
                        У вас уже есть аккаунт? - <a href="/auth.php">авторизируйтесь</a>!
                    </p>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
        </div>  
    </div>
    <div class="footer">
        <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="admin.php" class="nav-link px-2 text-muted">Главная</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Контакты</a></li>
                <li class="nav-item"><a href="auth.php" class="nav-link px-2 text-muted">Войти</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link px-2 text-muted">Регистрация</a></li>
            </ul>
            <p class="text-center text-muted">&copy; <?php echo date('Y')?> Все права защищены</p>
        </footer>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>