<?php
    session_start();
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
    <link rel="stylesheet" href="css/group-form.css">
</head>
<body>
    <div class="main">
        <section>
            <form action="vendor/create-group.php" method="post" enctype='multipart/form-data'>
                <header>
                    <p class="header-text">Создание класса</p>
                    <?php
                    if($_SESSION['message']) {
                        echo '<div class="error-txt mx-auto">' . $_SESSION['message'] . ' </div>';
                    }
                unset($_SESSION['message']);
                ?>
                </header>
                <div class="field input">
                    <label for="" class="class-label">Название класса (номер, буква)</label>
                    <input type="text" name="classname">
                </div>
                <div class="field input create-field">
                    <input class="d-block mx-auto" type="submit" value="Создать">
                </div>
                <a href="admin-account.php" class="back mx-auto d-block mt-3">Назад</a>
            </form>
        </section>
    </div>
</body>
<script src="js/image-preview.js"></script>
<script src="js/role-choice.js"></script>
</html>