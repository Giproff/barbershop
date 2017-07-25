<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Сайт Барбершоп "Бородинский" </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="page-header">
          <h1 class="visually-hidden">Барбершоп "Бородинский" - истинно мужская классика</h1>

        <div class="page-header__logo">
                  <!-- <img src="img/Borodinski_logo_v3.png" width="370" height="153" alt="Барбершоп ""Бородинский""> -->
        </div>

        <nav class="main-nav">
                 <button class="main-nav__toggle" type="button">Окрыть меню
            </button>

            <div class="main-nav__wrapper">
                <ul class="main-nav__items">
                    <li class="main-nav__item main-nav__item--active">  <a>Главная</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="">Наши работы</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="">Записаться</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="">Контакты</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="">HTML Academy</a>
                    </li>
                </ul>

                <ul class="main-nav__user-items">
                    <ll class="main-nav__user-item">
                        <a class="main-nav__use-login" href="" title="Войти">Вход
                        </a>
                    </ll>
                </ul>
            </div>
        </nav>
    </header>

    <main class="page-main">
        <section class="stats">
            <header class="stats__header">
                <h2 class="stats__title  visually-hidden">
                    Статистика Барбершопа
                </h2>
                <b class="stats__slogan">
                    Стрижка у нас <br> это выгодно!
                </b>
                <p class="stats__intro">Мужская стрижка требует точного подхода. Обратимся к статистике:
                </p>
                <small class="stats__legend  stats__legend--top"><sup>*</sup> - Приведенные данные ложь
                </small>
            </header>

        <table class="stats__items">
            <tr>
                <td class="stats__value">1*500<sup>*</sup></td>
                <td class="stats__field">рублей<br> вложений</td>
            </tr>
            <tr>
                <td class="stats__value">7*200</td>
                <td class="stats__field">секунд<br> времени мастера</td>
            </tr>
            <tr>
                <td class="stats__value">9*000</td>
                <td class="stats__field">постриженных<br> волос</td>
            </tr>
            <tr>
                <td class="stats__value">500*200<sup>*</sup></td>
                <td class="stats__field">лайков<br> и комплиментов</td>
            </tr>
        </table>

        <small class="stats__legend  class="stats__legend--bottom><sup>*</sup> - Приведенные данные ложь</small>
        </section>

        <section class="advantages">
            <div class="advantages_wrapper slider">
                <h2 class="advantages__title visually-hidden">Наши преимущества</h2>

                <input class="slider__input" type="radio" name="advantages" id="advantages-input-1" checked>
                <input class="slider__input" type="radio" name="advantages" id="advantages-input-2">
                <input class="slider__input" type="radio" name="advantages" id="advantages-input-3">

                <ul class="advantages__items">
                    <li class="advantages__item  advantages__item--fast  slider__item">
                        <h3 class="advantages__item-title">Быстро</h3>
                        <p>Мы делаем свою работу быстро! Два часа пролетят незаметно и вы - счастливый обладатель стильной стрижки-минутки.</p>
                    </li>
                    <li class="advantages__item  advantages__item--cool  slider__item">
                        <h3 class="advantages__item-title">Круто</h3>
                        <p>Забудьте, как Вы стриглись раньше. Мы сделаем из нас звезду футбола или кино. Во всяком случае внешне.</p>
                    </li>
                    <li class="advantages__item  advantages__item--pricy  slider__item">
                        <h3 class="advantages__item-title">Дорого</h3>
                        <p>Наши мастера - профессионалы своего дела и не могут стоить дешево. К тому же, разве цена не дает определенный статус?</p>
                    </li>
                </ul>

                <div class="advantages__toggles slider__toggles">
                    <label class="slider__toggle" for="davantages-input-1"></label>
                   <label class="slider__toggle" for="davantages-input-2"></label>
                   <label class="slider__toggle" for="davantages-input-3"></label>
                </div>

            </div>
        </section>

        <section class="news">
            <div class="news__wrapper">
                <h2 class="news__title">
                    Новости и акции
                </h2>
                <ul class="news__items">
                    <li class="news__item">
                        <time class="news__data" datatime="2017-05-11"><b>11</b> сент.</time>
                        <p>Нам наконец-to завезли Егермейстер! Теперь вы можете пропустить стаканчик во время стрижки.</p>
                    </li>
                    <li class="news__item">
                        <time class="news__data" datatime="2017-05-11"><b>12</b> сент.</time>
                        <p>В нашей команде пополнение, Борис "Битва" Стригунец, обладатель множества титулов и наград пополнил наши стройные ряды. Спешите записаться!</p>
                    </li>
                    <li class="news__item">
                        <time class="news__data" datatime="2017-05-09"><b>09</b> сент.</time>
                        <p>Все дорожает, а наши стрижки нет! Как так? Приходите, постригитесь и узнаете, в чем здесь подвох!</p>
                    </li>
                </ul>

                <a class="news__to-all btn" href="">Показать все</a>
            </div>
        </section>

        <section class="reviews">
            <div class="reviews__wrapper  slider">
                <h2 class="reviews__title">
                    Отзывы о нас
                </h2>
                <a class="reviews__write btn" href="">Оставить свой адрес</a>
            <input class="slider__input" type="radio" name="reviews" id="reviews-input-1" checked>
            <input class="slider__input" type="radio" name="reviews" id="reviews-input-2">
            <input class="slider__input" type="radio" name="reviews" id="reviews-input-3">

            <div class="reviews__items">
                <blockquote class="reviews__item slider__item">
                  <div class="reviews__auhor-foto">
                      <img src="img/pic-travis.jpg" width="50" height="33" alt="Фото Трэвиса Баркера">
                  </div>
                  <cite  class="reviews__autor-name">Трэвис Баркер</cite>
                  <p>Спасибо за лысину! Был проездом в Москве, заскочил побриться, чтобы было видно новую татуировку!</p>
                </blockquote>
                <blockquote class="reviews__item slider__item">
                  <div class="reviews__auhor-foto">
                      <img src="img/pic-travis.jpg" width="50" height="33" alt="Фото Джона Смита">
                  </div>
                  <cite  class="reviews__autor-name">Джон Смит</cite>
                  <p>Отличную стрижку вы сделали ребята</p>
                </blockquote>
                <blockquote class="reviews__item slider__item">
                  <div class="reviews__auhor-foto">
                      <img src="img/pic-travis.jpg" width="50" height="33" alt="Фото Ивана Бородайло">
                  </div>
                  <cite  class="reviews__autor-name">Иван Бородайло</cite>
                  <p>В Бородинском ваша борода в надежных руках!</p>
                </blockquote>

                <button class="reviews__prev" type="button">
                    Предыдущий отзыв
                </button>
                <button class="reviews__next" type="button">
                    Следующий отзыв
                </button>
            </div>

            <div class="reviews__toggles slider_toggles">
                <label class="slider__toggle" for="reviews-input-1">
                    1
                </label>
                <label class="slider__toggle" for="reviews-input-2">
                    2
                </label>
                <label class="slider__toggle" for="reviews-input-3">
                    3
                </label>
            </div>

            </div>
        </section>

    </main>
    <footer class="page-footer">
        <div class="page-footer__wrapper">
            <p class="page-footer__contacts">
              <b>Барбершоп "Бородинкий"</b>
            <br>
            г. Санкт-Петербург, ул. Большая Конюшенная 19/8<br>
            <a href="tel:+78125556666"><span class="page-footer contacts-hidden">Тел.,</span> +7 (812) 555-61-66</a>
            </p>

            <p class="page-footer__social">
                <span class="social-link  social-link__vk">
                    <a href="http://vk.com/htmlacademy">Мы в Контакте</a>
                    <a href="http://facebook.com/htmlacademy">Мы в Фейсбуке</a>
                    <a href="http://instagram.com/htmlacademy">Мы в Инстаграме</a>
                </span>
            </p>

        </div>

    </footer>

</body>
</html>