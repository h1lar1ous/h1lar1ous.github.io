<?php
    session_start();
    require_once 'vendor/connect.php';
    require_once 'vendor/students-array.php';
    require_once 'vendor/groups-array.php';

    if ($_SESSION['user']) {
        header('Location: account.php');
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
            <p class="main-info">в личный кабинет 
            </p>
            </div>
            <div class="buttons">
                <a href="admin-account.php"><button class="data">личные данные</button></a>
                <button class="group active">мои классы</button>
                <a href="admin-works.php"><button class="works">работы</button></a>
                <a href="admin-students.php"><button class="teachers">ученики</button></a>
                <a href="vendor/admin-logout.php"><button class="logout-btn">выйти</button></a>
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
                    <p class="your-groups-text text-center">
                        Ваши классы:
                    </p>

                    <div class="clases-block mx-auto">

                    <?php

                        require_once 'vendor/connect.php';


                        $rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
                        $lat=array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');
                        
                        
                        $result = mysqli_query($connect, "SHOW TABLES FROM windows");

                        while ($row = str_replace($lat, $rus, mysqli_fetch_row($result))) {
                            if($row[0] != 'УСЕРС' && $row[0] != 'wОРКС') {
                                echo "
                                <a class='class-redirect-link' href='admin-students.php'> <button class='class xl-2'> {$row[0]}\n </button> </a>
                            ";
                            }
                        }
                        

                        
                    ?>

                        
                    </div>

                    
                    

                    <a href="create-form.php" class="create-group mx-auto d-block"><button class="mx-auto d-block">Создать класс</button></a>
                </div>
            </div>
        </div>
    </div>
<script src="js/change.js"></script>
<script src="js/users-check.js"></script>
<script src="js/theme-switch-another.js"></script>
</body>
</html>


<!-- <?php
                        $sql = mysqli_query($connect, 'SELECT `image`, `fullname`, `isadmin` FROM `users` WHERE `isadmin` = 0 ');
                        while ($result = mysqli_fetch_array($sql)) {
                        echo "
                        <img width='50' height='50' src='{$result['image']}' </img>
                        <p class='student-text'> {$result['fullname']} </p> 
                        ";
                        }
                    ?> -->