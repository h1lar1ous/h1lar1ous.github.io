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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
                  <a target="_blank" style="white-space: nowrap;" class="nav-link" href="https://vk.com/school_journal2022">О нас</a>
                </li>
                <li class="nav-item">
                  <a target="_blank" mailto:romzaxh555@gmail.com?subject=Обращение в поддержку class="nav-link">Поддержка</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Новости</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link contacts" href="#contacts-anchor">Контакты </a>
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
    <p class="main-text">WINDOWS</p>

    <div class="info-block mx-auto">
      <div class="first-info">
        <div class="first-avatar-conv mx-auto">
          <img class="mx-auto d-block" src="img/first-icon.png" alt="">
        </div>
        <div class="text-conv-block">
          <p class="first-conv-text">
              Удобство
          </p>
          <p class="second-conv-text">Наличие межплатформенности,<br>посещение рассчитано<br>и на мобильном устройстве</p>
        </div>
      </div>

      <div class="second-info">
          <div class="second-avatar-theme mx-auto">
            <img src="img/second-icon.png" alt="" class="mx-auto d-block">
          </div>
          <div class="text-theme-block">
            <p class="first-theme-text">
                Темная тема
            </p>
            <p class="second-theme-text">Комфортное использование<br>сервиса в ночное время суток</p>
          </div>
      </div>

      <div class="third-info">
          <div class="third-avatar-int mx-auto">
            <img src="img/third-icon.png" alt="" class="mx-auto d-block">
          </div>
          <div class="text-int-block">
            <p class="first-int-text">
              Интерфейс
            </p>
            <p class="second-int-text">Понятный и удобный интерфейс.<br>При возникновении вопросов<br>поддержка всегда поможет вам<br>с решением проблемы</p>
          </div>
      </div>

    </div>

    <div class="last-block">
      <div class="last-wrapper mx-auto">
      <div class="column-icons-wrapper">
        <div class="first-column-icons">
          <div class="first-column-icon-one"></div>
          <div class="second-column-icon-one"></div>
        </div>

        <div class="second-column-icons">
          <div class="first-column-icon-two"></div>
          <div class="second-column-icon-two"></div>
        </div>
      </div>

      <div class="last-main-elems">
          <p class="last-main-text"><span class="last-span">Вместе</span> создаем<br>дневник будущего</p>
          <p class="last-info-text">регистрация в пару кликов</p>
          <a style="margin: 0 auto;" href="role-choice.php"><button class="goto">перейти в дневник</button></a>
      </div>
      </div>
    </div>
  </div>

<footer class="footer">
  <div class="soc-buttons me-auto" id="contacts-anchor">
    <a target="_blank" href="https://vk.com/school_journal2022" class="vk"><img src="img/vk-icon.png" alt="" class="vk-icon"></a>
    <a target="_blank" href="mailto:romzaxh555@gmail.com?subject=Обращение в поддержку" class="mail"><img src="img/mail-icon.png" alt="" class="mail-icon"></a>
    <a target="_blank" href="https://t.me/school_journal" class="tg"><img src="img/tg-icon.png" alt="" class="tg-icon"></a>
  </div>

  <div class="footer-text">
    (c) 2022 || SCHOOL JOURNAL FROM WINDOWS
  </div>
</footer>
</body>
<script src="js/core.js"></script>
</html>