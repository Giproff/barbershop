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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </head>

  <body>
    <header class="page-header">
      <h1 class="visually-hidden">Барбершоп «Бородинский» — истинно мужская классика</h1>
      <div class="page-header__logo">
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
              <a href="magazine.php">Магазин</a>
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