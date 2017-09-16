<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Наши работы</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
    </script>
    <script src="js/picturefill.js" async></script>
  </head>
  <body>

  <main class="page-main page-main--inner">
    <header class="page-header">
      <h1 class="visually-hidden">Барбершоп «Бородинский» — истинно мужская классика</h1>
      <div class="page-header__logo">
        <picture>
          <source media="(min-width: 992px)"  srcset="img/logo3.png">
          <source media="(min-width: 768px)"  srcset="img/logo2.png">
          <img srcset="img/logotype-mobile.png" alt="Барбершоп `Бородинский`">
        </picture>
      </div>

      <nav class="main-nav main-nav--closed main-nav--nojs">

        <button class="main-nav__toggle " type="
        button">Открыть меню
        </button>

        <div class="main-nav__wrapper clearfix">

          <ul class="main-nav__items">
            <li class="main-nav__item">
              <a href="index.php">Главная</a>
            </li>
            <li class="main-nav__item main-nav__item--active">
              <a>Наши работы</a>
            </li>
            <li class="main-nav__item">
              <a href="catalog.php">Прейскурант</a>
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

    <section class="page-title">
      <div class="page-title__wrapper">
       <h1 class="page-title__text">НАШИ РАБОТЫ</h1>
       <a class="page-title__to-main btn" href=""></a>
      </div>
    </section>

    <section class="works-list">
      <div class="works-list__wrapper">

        <article class="works-item works-item--work-of-month">
          <div class="works-item__img-wrapper">
            <picture>
              <source media="(min-width: 992px)"  srcset="img/photo-1-desktop.jpg 1x, img/photo-1-desktop@2x.jpg 2x">
              <source media="(min-width: 768px)" srcset="img/photo-1-tablet.jpg 1x, img/photo-1-tablet@2x.jpg 2x">
              <img src="img/photo-1-mobile.jpg" srcset="img/photo-1-mobile@2x.jpg 2x" alt="Пример нашей работы" class="works-item__img">
            </picture>
          </div>
          <div class="works-item__review">
            <div class="works-item__review-text">
              <h1 class="works-item__title">Лжепетр Мчиславский</h1>
              <blockquote class="works-item__blockquote">Где я только не стригся, но так как делаете это вы - не умеет никто другой! Еще раз спасибо и до скорого !
              </blockquote>
            </div>
            <div class="works-item__parameter-list">
              <div class="works-item__parameter-item works-item__parameter-item-haircut">Стрижка</div>
            <div class="works-item__parameter-item works-item__parameter-item-shaving">Бритье</div>
            <div class="works-item__parameter-item works-item__parameter-item-mustache">Усы</div>
            </div>
          </div>
        </article>

        <article class="works-item">
          <div class="works-item__img-wrapper">
            <picture>
              <source media="(min-width: 960px)" srcset="img/photo-2-desktop.jpg 1x, img/photo-2-desktop@2x.jpg 2x">
              <source media="(min-width: 768px)" srcset="img/photo-2-tablet.jpg 1x, img/photo-2-tablet@2x.jpg 2x">
              <img src="img/photo-2-mobile.jpg" srcset="img/photo-2-mobile@2x.jpg 2x" alt="Пример нашей работы" class="works-item__img">
            </picture>
          </div>
          <div class="works-item__review">
            <div class="works-item__review-text">
              <h1 class="works-item__title">Саша Мальцев</h1>
              <blockquote class="works-item__blockquote">Попросил омолодить  и омолодили! Кто теперь скажет, что мне 45?</blockquote>
            </div>
            <div class="works-item__parameter-list">
              <div class="works-item__parameter-item works-item__parameter-item-haircut">Стрижка</div>
            </div>
          </div>
        </article>

        <article class="works-item">
          <div class="works-item__img-wrapper">
            <picture>
              <source media="(min-width: 960px)" srcset="img/photo-3-desktop.jpg 1x, img/photo-3-desktop@2x.jpg 2x">
              <source media="(min-width: 768px)" srcset="img/photo-3-tablet.jpg 1x, img/photo-3-tablet@2x.jpg 2x">
              <img src="img/photo-3-mobile.jpg" srcset="img/photo-3-mobile@2x.jpg 2x" alt="Пример нашей работы" class="works-item__img">
            </picture>
          </div>
          <div class="works-item__review">
            <div class="works-item__review-text">
              <h1 class="works-item__title">Владимир Иваныч</h1>
              <blockquote class="works-item__blockquote">К зимнему сезону - готов!</blockquote>
            </div>
            <div class="works-item__parameter-list">
              <div class="works-item__parameter-item works-item__parameter-item-shaving">Бритье</div>
              <div class="works-item__parameter-item works-item__parameter-item-mustache">Усы</div>
            </div>
          </div>
        </article>

        <article class="works-item">
          <div class="works-item__img-wrapper">
            <picture>
              <source media="(min-width: 960px)" srcset="img/photo-4-desktop.jpg 1x, img/photo-4-desktop@2x.jpg 2x">
              <source media="(min-width: 768px)" srcset="img/photo-4-tablet.jpg 1x, img/photo-4-tablet@2x.jpg 2x">
              <img src="img/photo-4-mobile.jpg" srcset="img/photo-4-mobile@2x.jpg 2x" alt="Пример нашей работы" class="works-item__img">
            </picture>
          </div>
          <div class="works-item__review">
            <div class="works-item__review-text">
              <h1 class="works-item__title">Винстон Синий</h1>
              <blockquote class="works-item__blockquote">Как только зарастаю и волосы начинают мешать видеть - бегом в Бородинский!</blockquote>
            </div>
            <div class="works-item__parameter-list">
              <div class="works-item__parameter-item works-item__parameter-item-shaving">Бритье</div>
              <div class="works-item__parameter-item works-item__parameter-item-mustache">Усы</div>
            </div>
          </div>
        </article>
      </div>

    </section>
  </main>
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