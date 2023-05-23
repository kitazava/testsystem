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
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-6">
        <div class="container">
            <a href="adminpanel.php" class="btn btn-primary btn-sm">Вернуться</a>
        </div>
        <form action="admin.php?do=save" method="post">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-center">Добавление теста</h2>
                </div>

                <div class="card-body">
                    <div>
                        <label for="title" class="form-label">Название теста</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div>
                        <label for="title" class="form-label">Язык программирования</label>
                        <input type="text" name="language" id="language" class="form-control">
                    </div>
                    <div class="mt-5 text-center">
                        <h4>Добавление вопросов</h4>
                    </div>
                    <div class="questions">
                        <div class="question-items">
                            <div class="mt-4">
                                <label for="question_1" class="form-label">Вопрос #1</label>
                                <input type="text" name="question_1" id="question_1" class="form-control">
                                <div class="answers">
                                    <div class="answer-items">
                                        <div>
                                            <label for="answer_text_1_1" class="form-label">Ответ #1</label>
                                            <input type="text" name="answer_text_1_1" id="answer_text_1_1" class="form-control">
                                        </div>
                                        <div class="mt-2">
                                            <label for="answer_score_1_1" class="form-label">Балл за ответ #1</label>
                                            <input type="text" name="answer_score_1_1" id="answer_score_1_1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="button" class="btn btn-light border addAnswer" data-question="1" data-answer="1">Добавить вариант ответа</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary addQuestion">Добавить вопрос</button>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <h4>Добавление результатов</h4>
                    </div>
                    <div class="results">
                        <div class="result-items">
                            <div class="mt-4">
                                <div class="">
                                    <label for="result_1" class="form-label">Результат #1</label>
                                    <textarea name="result_1" id="result_1" class="form-control"></textarea>
                                </div>
                                <div class="mt-2">
                                    <label for="result_score_min_1" class="form-label">Балл (от) #1</label>
                                    <input type="text" name="result_score_min_1" id="result_score_min_1" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <label for="result_score_max_1" class="form-label">Балл (до) #1</label>
                                    <input type="text" name="result_score_max_1" id="result_score_max_1" class="form-control">
                                </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-primary addResult">Добавить результат</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4 mb-4">
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
 
 
 
 
 