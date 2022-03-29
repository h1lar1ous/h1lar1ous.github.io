<?php
    session_start();
    require_once 'connect.php';
    

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $password = $_POST['password'];

    $password = md5($password);


    mysqli_query($connect, "INSERT INTO `users` (`id`, `fullname`, `email`, `date`, `institut`, `college`, `password`, `image`, `isadmin`) VALUES (NULL, '$fullname', '$email', NULL, NULL, '$college', '$password', NULL, '1')");
  
          $_SESSION['message'] = "Регистрация успешна!";
          header('Location: ../teacher-login.php');
?>














