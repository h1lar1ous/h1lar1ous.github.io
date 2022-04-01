<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");

    if(!$check_user || mysqli_num_rows($check_user) == 0) {
        $_SESSION['message'] = "Неверный логин или пароль";
        header('Location: ../login.php');
    } else {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "fullname" => $user['fullname'],
            "email" => $user['email'],
            "date" => $user['date'],
            "institut" => $user['institut'],
            "college" => $user['college'],
            "image" => $user['image']
        ];

        header('Location: ../account.php');
    }
?>