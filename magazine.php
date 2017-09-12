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
              <source media="(min-width: 961px)"  srcset="img/photo-1-desktop.jpg 1x, img/photo-1-desktop@2x.jpg 2x">
              <source media="(min-width: 784px)" srcset="img/photo-1-tablet.jpg 1x, img/photo-1-tablet@2x.jpg 2x">
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