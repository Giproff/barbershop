<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Магазин Барбершоп мобильный</title>

    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <header class="page-header">
      <h1 class="visually-hidden">Барбершоп «Бородинский» — истинно мужская классика</h1>
      <div class="page-header__logo">
      </div>

      <nav class="main-nav main-nav--closed main-nav--nojs">

        <button class="main-nav__toggle " type="button">Открыть меню
        </button>

      <div class="main-nav__wrapper clearfix">

        <ul class="main-nav__items">
          <li class="main-nav__item">
            <a href="index.php">Главная</a>
          </li>
          <li class="main-nav__item main-nav__item--active">
            <a>Магазин</a>
          </li>
          <li class="main-nav__item">
            <a href="price.php">Прайс-лист</a>
          </li>
          <li class="main-nav__item">
            <a href="vh-vw.php">VH и VW</a>
          </li>
          <li class="main-nav__item">
            <a href="flex.php">flex</a>
          </li>
        </ul>

        <ul class="main-nav__user-items">
          <li class="main-nav__user-item">
            <a class="main-nav__user-login" href="#" title="Войти">Вход</a>
          </li>
        </ul>

       </div>
      </nav>
    </header>

  <footer  class="main-footer">
    <div class="container clearfix">
      <section class="footer-contacts">
        Барбершоп "Бородинский"<br>
        Адрес: г. Санкт-Петербург, пр.Лесной, д.13/8<br>
        <a href="#">Как Нас найти?</a>
        <br>
        Телефон: +7 (812) 542-99-53
      </section>
      <section class="footer-social">
        <p>Давайте дружить !</p>
        <a class="social-btn social-btn-vk" href="#">Вконтакте</a>
        <a class="social-btn social-btn-fb" href="#">Фейсбук</a>
        <a class="social-btn social-btn-inst" href="#">Инстаграм</a>
      </section>
      <section class="footer-copyright">
        <p>Разработано:</p>
        <a class="btn" href="https://htmlacademy.ru">HTML Academy</a>
      </section>
    </div>
  </footer>

  <script src="../js/menuToggle.js" type="text/javascript"></script>

 </body>
</html>