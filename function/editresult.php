<?php
    require_once 'connect.php';
?>
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
    <div class="container mt-5"> 
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Редактирование</h2>
            </div>
                <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $result_id = mysqli_real_escape_string($connect,$_GET['id']);
                            $query = "SELECT * FROM results WHERE id='$result_id'";
                            $query_run = mysqli_query($connect,$query);
                            if(mysqli_num_rows($query_run)>0){
                                $result = mysqli_fetch_array($query_run);
                                ?>
                                    <form method="POST" action="operations.php" autocomplete="off">
                                        <input type="hidden" name="result_id" value="<?= $result['id']; ?>">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Минимальный балл</label>
                                            <input type="text" name="min_ball" value="<?= $result['score_min']; ?>" class="form-control" id="exampleInputName" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Максимальный балл</label>
                                            <input type="text" name="max_ball" value="<?= $result['score_max']; ?>" class="form-control" id="exampleInputName" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Результат</label>
                                            <input type="text" name="result" value="<?= $result['result']; ?>" class="form-control" id="exampleInputName" >
                                        </div>
                                        <button type="submit" name="edit_result" 
                                        class="btn btn-primary"
                                        onclick="if (!confirm('Вы действительно хотите продолжить сохранение?')) return false"
                                        >
                                        Сохранить</button>
                                    </form>
                                <?php
                            }
                            else{
                                echo "<h4>Нет такого</h4>";
                            }
                        }
                        ?>
                </div>    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>