<?php
    session_start();
    require_once 'vendor/connect.php';
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
    <link rel="stylesheet" href="css/admin-account.css">
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
                <a href="admin-classes.php"><button class="group">мой класс</button></a>
                <a href="#"><button class="works active">работы</button></a>
                <a href="admin-students.php"><button class="teachers">ученики</button></a>
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
                        <p class="my-works-text">Работы учеников:</p>
                        <?php

                            $sql = mysqli_query($connect, 'SELECT `work_path`, `work_date`, `user_fullname` FROM `works` ');
                            
                            $amountCheck = mysqli_num_rows($sql);

                            if($amountCheck != 0) {

                            while($result = mysqli_fetch_array($sql)) {

                              echo "
                              <div class='works-wrapper'>
                                  <p class='student-work'> Работа {$result['user_fullname']} за {$result['work_date']} &nbsp; <a download class='work-download' href='{$result['work_path']}'> скачать работу </a> </p> 
                              </div>
                              ";
                            }

                          } else {
                            echo "Ученики не загрузили работ!";
                          }

                        ?>



                        <!-- <form action="vendor/mark-work.php" method="post" enctype='multipart/form-data'>
                        <input style="width:300px;" type="text" name="mark" placeholder="введите оценку... (от 2 до 5)">
                        <input type="submit" value="оценить">
                        </form> -->
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обновление данных</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="vendor/info-update.php" method="post" enctype='multipart/form-data'>
            <header>Введите данные, которые хотите обновить
            <?php
                    if($_SESSION['message']) {
                        echo '<div class="error-txt text-center">' . $_SESSION['message'] . ' </div>';
                    }
                unset($_SESSION['message']);
                ?>
            </header>
        <div class="field input">
                    <label for="" class="fullname-label">ФИО</label>
                    <input type="text" name="fullname">
                </div>
                <div class="field input">
                    <label for="" class="date-label">Дата рождения</label>
                    <input type="date" name="date">
                </div>
                <div class="field input">
                    <label for="" class="institut-label">Учебное заведение</label>
                    <input type="text" name="institut">
                </div>
                <div class="field input">
                    <label for="" class="college-label">Факультет</label>
                    <input type="text" name="college">
                </div>
                <div class="field input">
                    <input type="submit" class="mx-auto d-block mt-3" value="Обновить">
                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
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

            <form action="vendor/file-download.php" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000">
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