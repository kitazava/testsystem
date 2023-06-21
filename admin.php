<?php
    include_once  'db.php';
    include_once  './function/connect.php';

    $do = trim(strip_tags($_GET['do']));
    if ($do == 'save') {
        $title = trim($_POST['title']);
        $type_language = trim($_POST['language']);
        $res = $db->prepare("INSERT IGNORE INTO tests (`title`) VALUES (:title)");
        $res->execute([
            ':title' => $title,
        ]);
        $testId = $db->lastInsertId();

        $questionNum = 1;
        while (isset($_POST['question_' . $questionNum])) {
            $question = trim($_POST['question_' . $questionNum]);
            if (empty($question)) {
                continue;
            }

            $res = $db->prepare("INSERT IGNORE INTO questions (`test_id`, `question`) VALUES (:test_id, :question)");
            $res->execute([
                ':test_id' => $testId,
                ':question' => $question,
            ]);
            $questionId = $db->lastInsertId();

            $answerNum = 1;
            while (isset($_POST['answer_text_' . $questionNum . '_' . $answerNum])) {
                $answer = trim($_POST['answer_text_' . $questionNum . '_' . $answerNum]);
                $score = trim($_POST['answer_score_' . $questionNum . '_' . $answerNum]);
                if (empty($answer)) {
                    continue;
                }

                $res = $db->prepare("INSERT IGNORE INTO answers (`question_id`, `answer`, `score`) 
                                    VALUES (:question_id, :answer, :score)");
                $res->execute([
                    ':question_id' => $questionId,
                    ':answer' => $answer,
                    ':score' => $score,
                    
                ]);

                $answerNum++;
            }
            $questionNum++;
        }

        $resultNum = 1;
        while (isset($_POST['result_' . $resultNum])) {
            $result = trim($_POST['result_' . $resultNum]);
            $scoreMin = trim($_POST['result_score_min_' . $resultNum]);
            $scoreMax = trim($_POST['result_score_max_' . $resultNum]);

            $res = $db->prepare("INSERT IGNORE INTO results (`test_id`, `score_min`, `score_max`, `result`) 
                                    VALUES (:test_id, :score_min, :score_max, :result)");
            $res->execute([
                ':test_id' => $testId,
                ':score_min' => $scoreMin,
                ':score_max' => $scoreMax,
                ':result' => $result,
            ]);

            $resultNum++;
        }

        header ('Location: admin.php?do=list');
    }

    if ($do != 'add') {
        $do = 'list';
    }

    
?>


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
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-12">
                        <form action="search.php" method="GET">
                            <div class="input-group">
                                <input type="search_inp" id="form1" name="search" class="form-control" placeholder="Поиск"  />
                                <button type="submit" class="btn btn-primary">Поиск</button>
                            </div>
                        </form>       
                </div>
                    
                
                <div class="col-md-3">
                    <form action="" method="GET">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5>Фильтр 
                                    <button type="submit" class="btn btn-primary btn-sm float-end">Фильтровать</button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <hr>
                                <?php
                                    $type_query = "SELECT * FROM f_type";
                                    $type_query_run = mysqli_query($connect,$type_query );
                                    if(mysqli_num_rows($type_query_run)>0)
                                    {
                                        foreach($type_query_run as $type)
                                        {
                                            $checked = [];
                                            if(isset($_GET['type']))
                                            {
                                                $checked = $_GET['type'];
                                            }
                                            ?>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" name="type[]" value="<?=$type['id']; ?>"
                                                    <?php if(in_array($type['id'], $checked)) { echo "checked";}?>
                                                    />
                                                    <?= $type['type']; ?>
                                                </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "Нет найденных языков";
                                    }
                                ?>
                                <hr>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9 mt-3">
                    <div class="card ">
                        <div class="card-body row">
                            <?php include_once 'inc/' . $do . '.php'; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <div class="footer">
        <footer class="py-3 my-4">
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