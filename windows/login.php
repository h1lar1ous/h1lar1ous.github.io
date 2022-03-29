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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main">
        <section>
            <form action="vendor/signin.php" method="post">
                <header>
                    <p class="header-text">Авторизация</p>
                    <p class="info-main-text">Перейдем в дневник?</p>
                    <?php
                    if($_SESSION['message']) {
                        echo '<div class="error-txt mx-auto">' . $_SESSION['message'] . ' </div>';
                    }
                unset($_SESSION['message']);
                ?>
                </header>
                <div class="field input">
                    <label for="" class="email-label">E-mail</label>
                    <input type="email" name="email">
                </div>
                <div class="field input">
                    <label for="" class="password-label">Пароль</label>
                    <input type="password" name="password">
                </div>
                <div class="field input">
                    <input class="d-block mx-auto" type="submit" value="Авторизоваться">
                </div>
                <a href="role-choice.php" class="back">Еще нет аккаунта? Зарегистрируйтесь</a>
            </form>
        </section>
    </div>
</body>
</html>