<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Пример адаптивной таблицы </title>

<!-- В этом проекте фонты подключаются локально через класс .scaffolding.less,
     а не через сайт Googl
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic"> -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </head>

  <body>

    <header class="page-header">
      <!-- <h1 class="visually-hidden">Барбершоп «Бородинский» — истинно мужская классика</h1>
      <div class="page-header__logo">
      </div> -->

      <nav class="main-nav main-nav--closed main-nav--nojs">

        <button class="main-nav__toggle " type="
          button">Открыть меню
        </button>

        <div class="main-nav__wrapper clearfix">

          <ul class="main-nav__items">
            <li class="main-nav__item ">
              <a href="index.php">Главная</a>
            </li>
            <li class="main-nav__item">
              <a href="magazine.php">Магазин</a>
            </li>
            <li class="main-nav__item main-nav__item--active">
              <a>Прейскурант</a>
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

    <section class="price price__inner">
      <h1 class="price__header">Прейскурант</h1>
      <table class="price__table">
        <tr>
          <td class="col-1">1</td>
          <td class="col-2">Классическая стрижка</td>
          <td class="col-3">с мытьем головы</td>
          <td class="col-4">1 500 руб.</td>
        </tr>
        <tr>
          <td class="col-1">2</td>
          <td class="col-2">Современный вариант</td>
          <td class="col-3">с мытьем головы</td>
          <td class="col-4">1 500 руб.</td>
        </tr>
        <tr>
          <td class="col-1">3</td>
          <td class="col-2">Индивидуальный подход</td>
          <td class="col-3">с мытьем головы</td>
          <td class="col-4">2 000 руб.</td>
        </tr>
        <tr>
          <td class="col-1">4</td>
          <td class="col-2">Бритье бороды</td>
          <td class="col-3">без мытья</td>
          <td class="col-4">500 руб.</td>
        </tr>
        <tr>
          <td class="col-1">5</td>
          <td class="col-2">Бритье головы</td>
          <td class="col-3">с мытьем головы</td>
          <td class="col-4">1 000 руб.</td>
        </tr>
    </table>
    <p class="price__discount">
      С 10:00 до 14:00 скидка 20%
    </p>
    </section>

        <!-- Футер -->
    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <p class="page-footer__contacts">
          <b>Барбершоп «Бородинский»</b>
          <br>
          г. Санкт-Петербург, ул. Большая Конюшенная 19/8
          <br>
          <a href="tel:+78125556666">
            <span class="page-footer__contacts-hidden">Тел.:</span> +7 (812) 555-66-66
          </a>
        </p>
        <p class="page-footer__social">
          <span class="social-links">
            <a class="social-link social-link--vk" href="https://vk.com/htmlacademy">
              Мы в Вконтакте
            </a>
            <a class="social-link social-link--fb" href="https://www.facebook.com/htmlacademy">
              Мы в Фейсбуке
            </a>
            <a class="social-link social-link--in" href="https://www.instagram.com/htmlacademy">
              Мы в Инстаграме
            </a>
          </span>
        </p>
        <p class="page-footer__copyright">
          Разработано :<br>
          <a class="btn page-footer__copyright-link" href="https://htmlacademy.ru/intensive/daptive"> HTML ACADEMY
          </a>
        </p
          >
      </div>
    </footer>

  <script src="../js/menuToggle.js" type="text/javascript"></script>

  </body>
</html>