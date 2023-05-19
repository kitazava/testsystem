
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];
$mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
mail("vanya.kitaev.7777@gmail.com", $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
header("Location: ../contact.php")
?>