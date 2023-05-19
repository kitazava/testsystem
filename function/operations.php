<?php 
    require_once 'connect.php';
    
    if(isset($_POST['edit_test'])){
        $title = mysqli_real_escape_string($connect, $_POST['title']);
        $language = mysqli_real_escape_string($connect, $_POST['language']);
        $test_id = mysqli_real_escape_string($connect, $_POST['test_id']);
        $query = "UPDATE  tests SET  title='$title', type_language='$language' WHERE id='$test_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['delete_test'])){
        $test_id = mysqli_real_escape_string($connect, $_POST['delete_test']);
        $query = "DELETE FROM tests WHERE id='$test_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }


    if(isset($_POST['edit_question'])){
        $question = mysqli_real_escape_string($connect, $_POST['question']);
        $question_id = mysqli_real_escape_string($connect, $_POST['question_id']);
        $query = "UPDATE questions SET  question='$question' WHERE id='$question_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['delete_question'])){
        $question_id = mysqli_real_escape_string($connect, $_POST['delete_question']);
        $query = "DELETE FROM questions WHERE id='$question_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['edit_answer'])){
        $answer = mysqli_real_escape_string($connect, $_POST['answer']);
        $score = mysqli_real_escape_string($connect, $_POST['score']);
        $answer_id = mysqli_real_escape_string($connect, $_POST['answer_id']);
        $query = "UPDATE answers SET  answer='$answer', score='$score' WHERE id='$answer_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['delete_answer'])){
        $answer_id = mysqli_real_escape_string($connect, $_POST['delete_answer']);
        $query = "DELETE FROM answers WHERE id='$answer_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['edit_result'])){
        $min_ball = mysqli_real_escape_string($connect, $_POST['min_ball']);
        $max_ball = mysqli_real_escape_string($connect, $_POST['max_ball']);
        $result = mysqli_real_escape_string($connect, $_POST['result']);
        $result_id = mysqli_real_escape_string($connect, $_POST['result_id']);
        $query = "UPDATE results SET  score_min='$min_ball', score_max='$max_ball', result='$result' WHERE id='$result_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }

    if(isset($_POST['delete_result'])){
        $result_id = mysqli_real_escape_string($connect, $_POST['delete_result']);
        $query = "DELETE FROM results WHERE id='$result_id'";
        $query_run = mysqli_query($connect,$query);
        header('Location: ../adminpanel.php');
    }