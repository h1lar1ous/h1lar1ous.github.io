<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: account.php');
    }

    if ($_SESSION['admin_user']) {
        header('Location: admin-account.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Journal WINDOWS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a style="white-space: nowrap;" class="nav-link" href="#">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Поддержка</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Контакты </a>
              </li>
            </ul>
            <form class="d-flex auth-buttons">
              <a href="role-choice.php" class="register-btn">Регистрация</a>
              <a class="login-btn" href="login-role-choice.php">Войти</a>
            </form>
          </div>
        </div>
      </nav>

    <div class="main">
        <div class="main-left">
                <p class="main-text">WINDOWS</p>
        </div>

    <footer class="footer">
        <div class="soc-buttons">
            <a href="">vk</a>
            <a href="">fb</a>
            <a href="">tw</a>
            <a href="">em</a>
            <a href="">ig</a>
        </div>

        <div class="name">
            <p class="name-text">@ 2022 &nbsp; SCHOOL JOURNAL FROM WINDOWS</p>
        </div>
    </footer>
</body>
<script src="js/core.js"></script>
</html>