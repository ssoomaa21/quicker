<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "ssoomaa21@gmail.com";
  $subject = "Новое сообщение от $name";
  $body = "Имя: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body)) {
    echo "Сообщение успешно отправлено!";
  } else {
    echo "Что-то пошло не так при отправке сообщения.";
  }
}
?>