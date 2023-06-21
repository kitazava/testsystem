<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Система тестирования</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container mt-5"> 
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Добавление</h2>
            </div>
                <div class="card-body">
                    <form method="POST" action="operations.php" autocomplete="off">
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Тип</label>
                                <input type="text" name="addtype" value="" class="form-control" id="exampleInputName" >
                            </div>
                        <button type="submit" name="add_type" 
                        class="btn btn-primary"
                        onclick="if (!confirm('Вы действительно хотите продолжить сохранение?')) return false"
                        >
                        Сохранить</button>
                    </form>            
                </div>    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
 
 
 
 
 