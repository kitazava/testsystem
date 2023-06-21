<?php
    require_once './function/connect.php';
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
    $tests = "SELECT * FROM tests";
    $tests_run = mysqli_query($connect, $tests);
    $questions = "SELECT * FROM questions ";
    $questions_run = mysqli_query($connect, $questions);
    $answers = "SELECT * FROM answers";
    $answers_run = mysqli_query($connect, $answers);
    $results = "SELECT * FROM results";
    $results_run = mysqli_query($connect, $results);
    $types = "SELECT * FROM f_type";
    $types_run = mysqli_query($connect, $types);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="adminpanel">
<div class="main_admin">
    <div class="main_content">
        <div class="d-flex justify-content-center">
            <form class="d-flex flex-column">
                <h2 ><?= $_SESSION['user']['full_name'] ?></h2>
                <a href="#" class="btn btn-link"><?= $_SESSION['user']['email'] ?></a>
                <a href="function/logout.php" class="btn btn-danger btn-sm">Выход</a>
                <a href="../admin.php" class="btn btn-primary btn-sm">На гланую</a>
            </form>
        </div>
        <div class="container">
            <a href="addtest.php" class="btn btn-primary btn-sm">Добавить тест</a>
        </div>
        <div class="container">
            <a href="./function/addtype.php" class="btn btn-primary btn-sm">Добавить язык</a>
        </div>
        <div class="container mt-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="border: 1px solid #000000">
                <div class="card-header">
                    <h2 class="text-center">Таблица тестов</h2>
                </div>
                <table class="table table-bordered mb-0 ">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Название теста</th>
                            <th scope="col">ID фильтра</th>
                            <th scope="col">Операции</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($tests_run)>0)
                        {
                            foreach($tests_run as $test):
                                ?>
                                        <tr>
                                        <th scope="row"> <?php echo $test['id'];?> </th>
                                            <td><?php echo $test['title']; ?></td>
                                            <td><?php echo $test['type_id']; ?></td>
                                            <td>
                                                <a href="./function/edittest.php?id=<?=$test['id']; ?>" class="btn btn-success btn-sm">Редактировать</a>
                                                <a href="./function/complementtest.php?=<?=$test['id']; ?>" class="btn btn-secondary btn-sm">Дополнить тест</a>
                                                <form action="./function/operations.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_test" value="<?=$test['id']; ?>" 
                                                    class="btn btn-danger btn-sm"
                                                    onclick="if (!confirm('Вы действительно хотите удалить эту запись?')) return false"
                                                    >Удалить</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                <?php
                            endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container mt-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="border: 1px solid #000000">
                <div class="card-header">
                    <h2 class="text-center">Таблица фильтров</h2>
                </div>
                <table class="table table-bordered mb-0 ">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Язык</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($types_run)>0)
                        {
                            foreach($types_run as $type):
                                ?>
                                        <tr>
                                        <th scope="row"> <?php echo $type['id'];?> </th>
                                            <td><?php echo $type['type']; ?></td>
                                            <td>
                                                <a href="./function/edittype.php?id=<?=$type['id']; ?>" class="btn btn-success btn-sm">Редактировать</a>
                                                <form action="./function/operations.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_type" value="<?=$type['id']; ?>"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="if (!confirm('Вы действительно хотите удалить эту запись?')) return false"
                                                    >Удалить</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                <?php
                            endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container mt-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="border: 1px solid #000000">
                <div class="card-header">
                    <h2 class="text-center">Таблица вопросов</h2>
                </div>
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Номер теста</th>
                            <th scope="col">Вопрос</th>
                            <th scope="col">Операции</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody >
                                <?php
                                if(mysqli_num_rows($questions_run)>0)
                                {
                                    foreach($questions_run as $question):
                                        ?>
                                                    <tr >
                                                    <th scope="row"><?php echo $question['id']; ?></th>
                                                        <td><?php echo $question['test_id']; ?></td>
                                                        <td><?php echo $question['question']; ?></td>
                                                        <td>
                                                            <a href="./function/editquestion.php?id=<?=$question['id']; ?>?test_id=<?=$question['test_id'];?>" class="btn btn-success btn-sm">Редактировать</a>
                                                            <form action="./function/operations.php" method="POST" class="d-inline">
                                                                <button type="submit" name="delete_question" value="<?=$question['id']; ?>"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="if (!confirm('Вы действительно хотите удалить эту запись?')) return false"
                                                                >
                                                                Удалить</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                        <?php
                                    endforeach;
                                }
                                ?>   
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="border: 1px solid #000000">
                <div class="card-header">
                    <h2 class="text-center">Таблица ответов</h2>
                </div>
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Номер вопроса</th>
                            <th scope="col">Ответ</th>
                            <th scope="col">Балл за ответ </th>
                            <th scope="col">Операции</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody >
                                <?php
                                if(mysqli_num_rows($answers_run)>0)
                                {
                                    foreach($answers_run as $answer):
                                        ?>
                                                    <tr >
                                                    <th scope="row"><?php echo $answer['id']; ?></th>
                                                        <td><?php echo $answer['question_id']; ?></td>
                                                        <td><?php echo $answer['answer']; ?></td>
                                                        <td><?php echo $answer['score']; ?></td>
                                                        <td>
                                                            <a href="./function/editanswer.php?id=<?=$answer['id']; ?>?question_id=<?=$answer['question_id'];?>" class="btn btn-success btn-sm">Редактировать</a>
                                                            <form action="./function/operations.php" method="POST" class="d-inline">
                                                                <button type="submit" name="delete_answer" value="<?=$answer['id']; ?>"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="if (!confirm('Вы действительно хотите удалить эту запись?')) return false"
                                                                >Удалить</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                        <?php
                                    endforeach;
                                }
                                ?>   
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
        <div class="container mb-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="border: 1px solid #000000">
                <div class="card-header">
                    <h2 class="text-center">Таблица результатов</h2>
                </div>
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Номер теста</th>
                            <th scope="col">Минимальный балл</th>
                            <th scope="col">Максимальный балл </th>
                            <th scope="col">Результат</th>
                            <th scope="col">Операции</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody >
                                <?php
                                if(mysqli_num_rows($results_run)>0)
                                {
                                    foreach($results_run as $result):
                                        ?>
                                                    <tr >
                                                    <th scope="row"><?php echo $result['id']; ?></th>
                                                        <td><?php echo $result['test_id']; ?></td>
                                                        <td><?php echo $result['score_min']; ?></td>
                                                        <td><?php echo $result['score_max']; ?></td>
                                                        <td><?php echo $result['result']; ?></td>
                                                        <td>
                                                            <a href="./function/editresult.php?id=<?=$result['id'];?>?id=<?=$result['test_id']; ?>" class="btn btn-success btn-sm">Редактировать</a>
                                                            <form action="./function/operations.php" method="POST" class="d-inline">
                                                                <button type="submit" name="delete_result" value="<?=$result['id']; ?>"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="if (!confirm('Вы действительно хотите удалить эту запись?')) return false"
                                                                >Удалить</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                        <?php
                                    endforeach;
                                }
                                ?>   
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>