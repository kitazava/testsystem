<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="wrapper">
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
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
                <div class="mt-5" >
                    <div class="d-flex text-center flex-column">
                        <h1>Напишите нам</h1>
                        <p>По вопросам контента, найденных ошибок и любым другим.</p>
                    </div>            
                </div>
            <div class="form">  
                <form method="post" action="function/send.php" autocomplete="off">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Почта</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTema" class="form-label">Тема</label>
                        <input type="text" name="header" class="form-control" id="exampleInputTema" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextareaMessege" class="form-label">Сообщение</label>
                        <textarea class="form-control" name="messege" id="exampleFormControlTextareaMessege" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
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