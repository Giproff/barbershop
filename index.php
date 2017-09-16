<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Проект Барбершоп "Бородинский" мобильный </title>

<!-- В этом проекте фонты подключаются локально через класс .scaffolding.less,
     а не через сайт Googl
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic"> -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <!-- Только для IE < 9, чтобы понимал HTML5 -->

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
    </script>
    <script src="js/picturefill.js" async></script> -->
  </head>

  <body>
    <header class="page-header">
      <h1 class="visually-hidden">Барбершоп «Бородинский» — истинно мужская классика</h1>
      <div class="page-header__logo">
<!--         <img src="img/logotype-mobile.svg" width="320" height="150" alt="Барбершоп 'Бородинский'"> -->
        <picture>
          <source media="(min-width: 992px)"  srcset="img/logo3.png">
          <source media="(min-width: 768px)"  srcset="img/logo2.png">
          <img srcset="img/logotype-mobile.png"  alt="Барбершоп `Бородинский`">
        </picture>
      </div>

      <nav class="main-nav main-nav--closed main-nav--nojs">

        <button class="main-nav__toggle " type="
          button">Открыть меню
        </button>

        <div class="main-nav__wrapper clearfix">

          <ul class="main-nav__items">
            <li class="main-nav__item main-nav__item--active">
              <a>Главная</a>
            </li>
            <li class="main-nav__item">
              <a href="magazine.php">Наши работы</a>
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

    <section class="stats stats--closed">

      <header class="stats__header">
        <h2 class="stats__title visually-hidden">Статистика Барбершопа</h2>
        <b class="stats__slogan">Стрижка у нас<br>
        это выгодно!</b>
        <p class="stats__intro">Мужская стрижка требует точного подхода. Обратимся к статистике:</p>
        <small class="stats__legend stats__legend--top">
          <sup>*</sup>— приведённые данные ложь
        </small>
      </header>

      <table class="stats__items">

        <tr>
          <td class="stats__value">
            1 500<sup>*</sup>
          </td>
        <td class="stats__field">
            рублей <br>вложений</td>
        </tr>
        <tr>
          <td class="stats__value">7 200</td>
          <td class="stats__field">
            секунд<br> времени мастера
          </td>
        </tr>
        <tr>
          <td class="stats__value">
            90 000
          </td>
          <td class="stats__field">
            постриженных<br> волос
          </td>
        </tr>
        <tr>
          <td class="stats__value">
            500 000<sup>*</sup>
          </td>
          <td class="stats__field">
            лайков<br> и комплиментов
          </td>
        </tr>

      </table>

      <small class="stats__legend stats__legend--bottom">
          <sup>*</sup> — приведённые данные ложь
      </small>
    </section>

    <section class="advantages">
      <div class="advantages__wrapper slider">
        <h2 class="advantages__title visually-hidden">Наши преимущества</h2>
        <div class="advantages-sliders">
          <input class="slider__input" type="radio" name="advantages" id="advantages-input-1" checked>
          <input class="slider__input" type="radio" name="advantages" id="advantages-input-2">
          <input class="slider__input" type="radio" name="advantages" id="advantages-input-3">
        </div>
        <ul class="advantages__items">
          <li class="advantages__item advantages__item--fast slider__item">
            <img  src="/img/advantage-1-mini.png" width="96" height="96">
            <h3 class="advantages__item-title">Быстро</h3>
            <p>Мы делаем свою работу быстро! Два часа пролетят незаметно
               и вы — счастливый обладатель стильной прически.
            </p>
          </li>
          <li class="advantages__item advantages__item--fast slider__item">
            <img src="/img/advantage-2-mini.png" width="96" height="96">
            <h3 class="advantages__item-title">
              Круто
            </h3>
            <p>Забудьте, как Вы стриглись раньше. Мы сделаем из вас звезду футбола или кино. Во всяком случае внешне.
            </p>
          </li>
          <li class="advantages__item advantages__item--fast slider__item">
            <img src="/img/advantage-3-mini.png" width="96" height="96">
            <h3 class="advantages__item-title">
              Дорого
            </h3>
            <p>Наши мастера-профессионалы своего дела и не могут стоить дешево. К тому же, разве цена не дает определенный статус.
            </p>
          </li>
        </ul>
        <div class="advantages__toggles slider__toggles">
          <label class="slider__toggle" for="advantages-input-1">1 </label>
          <label class="slider__toggle" for="advantages-input-2">2 </label>
          <label class="slider__toggle" for="advantages-input-3">3</label>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="news__wrapper">
        <h2 class="news__title">Новости и акции</h2>
        <ul class="news__items">
          <li class="news__item">
            <time class="news__date" datetime="2015-09-29">
              <b>29</b> сент
            </time>
            <p>Нам наконец-то завезли Егермейстер!
               Теперь вы можете пропустить стаканчик во время стрижки.
            </p>
          </li>
          <li class="news__item">
            <time class="news__date" datetime="2016-09-19">
              <b>19</b>сент
            </time>
            <p>В нашей команде пополнение, Борис "Бритва" Стригунец, обладатель множества титулов и наград пополнил наши стройные ряды. Спешите записаться!</p>
          </li>
        </ul>
        <a class="news__to-all  btn" href="#">Показать все</a>
      </div>
    </section>

    <section class="reviews">
      <div class="reviews__wrapper slider">
        <h2 class="reviews__title">Отзывы о нас</h2>
        <a class="reviews__write btn" href="">
          Оставить свой</a>
        <div class="reviews__items">

          <blockquote class="reviews__item slider__item">
            <div class="reviews__auhor-foto">
              <img src="img/barker.jpg" width="50" height="33" alt="Фото Трэвиса Баркера">
            </div>
            <cite class="reviews__auhor-name">Трэвис Баркер</cite>
            <p>Спасибо за лысину! Был проездом в Москве, заскочил побриться, чтобы было видно новую татуировку!</p>
          </blockquote>

          <button class="reviews__prev" type="button">Предыдущий отзыв</button>
          <button class="reviews__next" type="button">Следующий отзыв</button>

        </div>
        <div class="reviews__toggles slider__toggles">
          <input class="slider__input" type="radio" name="reviews" id="slider__item-1"  checked>
          <input class="slider__input" type="radio" name="reviews" id="slider__item-2">
          <input class="slider__input" type="radio" name="reviews" id="slider__item-3">
        </div>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <p class="page-footer__contacts">
          Барбершоп &laquo;Бородинский&raquo
          <br>
          г. Санкт-Петербург, ул. Большая Конюшенная 19/8
          <br>
          <a href="tel:+78125556666">
            <span class="page-footer__contacts-hidden">Тел.:</span> +7 (812) 555-66-66
          </a>
        </p>

        <div class="social-container">
          <b class="social-container-header">Давайте дружить!</b>

          <ul class="social-list">
            <li>
              <a href="#" class="social-link social-link-vk">
                <span class="visually-hidden">Вконтакте</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="15" viewBox="0 0 26.14 14.91">
                  <path d="M26 13.47l-.09-.17a13.55 13.55 0 0 0-2.6-3q-.87-.83-1.1-1.12A1 1 0 0 1 22 8a10.27 10.27 0 0 1 1.22-1.78l.88-1.16q2.35-3.13 2-4L26 .94a.8.8 0 0 0-.4-.22 2.14 2.14 0 0 0-.87 0h-3.92a.51.51 0 0 0-.27 0h-.3a.6.6 0 0 0-.15.14.93.93 0 0 0-.14.24 22.22 22.22 0 0 1-1.46 3.06q-.5.84-.93 1.46a7 7 0 0 1-.71.91 4.94 4.94 0 0 1-.52.47q-.23.18-.35.15l-.23-.05a.9.9 0 0 1-.31-.33 1.49 1.49 0 0 1-.16-.53v-.55-.65-.57-1.12-1-.75a3.14 3.14 0 0 0 0-.62 2.12 2.12 0 0 0-.14-.44.73.73 0 0 0-.28-.33 1.57 1.57 0 0 0-.46-.18A9 9 0 0 0 12.57 0a8.93 8.93 0 0 0-3.25.33 1.83 1.83 0 0 0-.52.41q-.25.3-.07.33a1.67 1.67 0 0 1 1.16.59l.08.16a2.6 2.6 0 0 1 .19.63 6.32 6.32 0 0 1 .12 1 10.59 10.59 0 0 1 0 1.7q-.07.71-.13 1.1a2.21 2.21 0 0 1-.18.64 2.69 2.69 0 0 1-.16.3l-.07.07a1 1 0 0 1-.37.07.86.86 0 0 1-.46-.19 3.27 3.27 0 0 1-.56-.52 7 7 0 0 1-.66-.93q-.37-.6-.76-1.42l-.22-.39q-.2-.38-.56-1.11t-.62-1.43A.9.9 0 0 0 5.2.9h-.07a.93.93 0 0 0-.22-.16A1.44 1.44 0 0 0 4.6.65L.87.68A1 1 0 0 0 .1.94L0 1a.44.44 0 0 0 0 .22 1.08 1.08 0 0 0 .08.37Q.9 3.53 1.86 5.31t1.66 2.87Q4.23 9.27 5 10.24t1 1.24l.37.41.34.33a8.06 8.06 0 0 0 1 .78 16.34 16.34 0 0 0 1.4.9 7.6 7.6 0 0 0 1.79.72 6.19 6.19 0 0 0 2 .22h1.57a1.08 1.08 0 0 0 .72-.3l.05-.07a.9.9 0 0 0 .1-.25 1.38 1.38 0 0 0 0-.37 4.48 4.48 0 0 1 .09-1.05 2.77 2.77 0 0 1 .23-.71 1.74 1.74 0 0 1 .29-.4 1.19 1.19 0 0 1 .23-.2h.11a.86.86 0 0 1 .77.21 4.52 4.52 0 0 1 .83.79q.39.47.93 1.05a6.41 6.41 0 0 0 1 .87l.27.16a3.31 3.31 0 0 0 .71.3 1.53 1.53 0 0 0 .76.07l3.48-.05a1.58 1.58 0 0 0 .8-.17.68.68 0 0 0 .34-.37 1.06 1.06 0 0 0 0-.46 1.71 1.71 0 0 0-.1-.36z" fill="#fff">
                  </path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="social-link social-link-fb">
                <span class="visually-hidden">Фейсбук</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 10.15 21.74">
                  <path d="M3.34 1.12A4.77 4.77 0 0 1 6.53 0h3.61v3.81H7.81a1.07 1.07 0 0 0-1.09.83v2.55h3.42c-.08 1.23-.24 2.45-.41 3.67h-3v10.87H2.21V10.86H0V7.21h2.19V3.66a3.83 3.83 0 0 1 1.15-2.54z" fill="#fff">
                  </path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="social-link social-link-insta">
                <span class="visually-hidden">Инстаграм</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M18 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-8 6a4 4 0 1 1-4 4 4 4 0 0 1 4-4zM2.5 18a.47.47 0 0 1-.5-.5V9h2.1a3.4 3.4 0 0 0-.1 1 6 6 0 1 0 12 0 3.4 3.4 0 0 0-.1-1H18v8.5a.47.47 0 0 1-.5.5zM18 4.5a.47.47 0 0 1-.5.5h-2a.47.47 0 0 1-.5-.5v-2a.47.47 0 0 1 .5-.5h2a.47.47 0 0 1 .5.5z" fill="#fff">
                  </path>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <p class="page-footer__copyright">
          <b>Разработано:</b>
          <a href="#" class="button page-footer__copyright-link">HTML Academy</a>
        </p>
      </div>
    </footer>

  <script src="../js/menuToggle.js" type="text/javascript"></script>

  </body>
</html>