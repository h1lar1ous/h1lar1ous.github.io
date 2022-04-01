<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $isadmin = '1';

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `isadmin` = '$isadmin' ");

    if(mysqli_num_rows($check_user) == 0) {
        $_SESSION['message'] = "Неверный логин или пароль";
        header('Location: ../admin-login.php');
    } else {
        $admin_user = mysqli_fetch_assoc($check_user);

        $_SESSION['admin_user'] = [
            "id" => $admin_user['id'],
            "fullname" => $admin_user['fullname'],
            "email" => $admin_user['email'],
            "college" => $admin_user['college']
        ];

        header('Location: ../admin-account.php');
    }
?>