<?php
    session_start();
    require_once 'vendor/connect.php';
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" title="theme" href="css/theme-dark.css">
</head>
<body>
    <div class="main">
        <div class="main-left">
            <div class="main-left-wrapper">
            <div class="main-left-texts">
            <p class="main-text">Добро пожаловать</p>
            <p class="main-info">в личный кабинет</p>
            </div>
            <div class="buttons">
                <a href="account.php"><button class="data">личные данные</button></a>
                <a href="#"><button class="works active">работы</button></a>
                <a href="teachers.php"><button class="teachers">преподаватели</button></a>
                <a href="#"><button data-bs-toggle="modal" data-bs-target="#modalTwo" class="download">загрузить работу</button></a>
                <a href="vendor/logout.php"><button class="logout-btn">выйти</button></a>
            </div>
            <div class="theme">
                <img src="img/day.png" class="change-theme" data-theme="light" alt="">
                <img src="img/night.png" class="change-theme" data-theme="dark" alt="">
            </div>
            </div>
        </div>
        <div class="main-right">
            <div class="main-right-wrapper ms-auto">
                <div class="data-tab">
                        <p class="my-works-text">Работа за сегодня:</p>
                        <?php

                            $today = date('Y/m/d');

                           $aga = $_SESSION['user']['fullname'];

                            $workCheck = mysqli_query($connect, "SELECT `work_path` FROM `works` WHERE `user_fullname` = '$aga' AND `work_date` = '$today' ");

                            $ygy = mysqli_num_rows($workCheck);

                            $way = mysqli_fetch_row($workCheck);

                            if($ygy == 0) {
                              echo "<p class='non-load'> Вы еще не загрузили работу </p> ";
                            } else {
                              echo "<a download class='today-work' href='{$way[0]}'>Скачать свою загруженную работу</a>";
                            }
                        

                        ?>



                        
                </div>
            </div>
        </div>
    </div>



<!-- Modal 2 -->
<div class="modal fade" id="modalTwo" tabindex="-1" aria-labelledby="modalTwoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Загрузка работы (работа может быть загружена лишь одна за день!)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
                    if($_SESSION['message']) {
                        echo '<div class="error-txt text-center">' . $_SESSION['message'] . ' </div>';
                    }
                unset($_SESSION['message']);
                ?>

            <form action="file-download.php" method="post" enctype='multipart/form-data'>
                <input type="file" name="work" required>
                <input type="text" name="user_fullname" class="fullname-input" placeholder="Введите ФИО полностью без ошибок...">
                <input type="submit" value="Загрузить" class="btn-primary download-submit mt-3">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<script src="js/change.js"></script>
<script src="js/image-preview.js"></script>
<script src="js/account.js"></script>
<script src="js/theme-switch-another.js"></script>
</body>
</html>