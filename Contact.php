<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $to = 'shandabylosasha@gmail.com'; // Замените на ваш email
    $subject = 'Новое сообщение с сайта';
    $message = "Имя: $name\nEmail: $email\nНомер телефона: $phone";
    $headers = 'From: shandabylosasha@gmail.com'; // Замените на ваш email

    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Сообщение успешно отправлено!");</script>';
    } else {
        echo '<script>alert("Ошибка при отправке сообщения!");</script>';
    }
}
?>
