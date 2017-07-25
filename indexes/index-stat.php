<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Сайт Барбершоп "Бородинский" </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic">
    <link href="css/style2.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

  </head>
  <body>
  <header class="main-header">
    <div class="container clearfix">
      <nav class="main-navigation">
        <ul>
          <li class="active">
            <span>Информация</span>
          </li>
          <li>
            <a href="#">Новости</a>
          </li>
          <li>
            <a href="price.php">Прайс-лист</a>
          </li>
          <li>
            <a href="magazine.php">Магазин</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </nav>
      <div class="user-block">
        <a class="login" href="hTTP://pogodyn.ru">ВХОД</a>
      </div>
    </div> <!-- /container  -->
  </header>
  <main class="container">
    <div class="index-logo">
      <img src="/img/logotype-desktop.png" width="368" height="204" alt="Барбершоп Бородинский">
    </div>
    <section class="features clearfix">
      <div class="features-item">
       <b class="features-name">БЫСТРО</b>
       <p>Мы делаем свою работу быстро!
       Два часа пролетят незаметно и вы - счастливый обладатель
       стильной приески-минутки</p>
      </div>
      <div class="features-item">
      <b class="features-name">КРУТО</b>
        <p>Забудьте, как вы стриглись раньше.
           Мы сделаем из вас легенду футбола
           или кино.  Во всяком случае внешне!
        </p>
      </div>
      <div class="features-item">
        <b class="features-name">Дорого</b>
        <p>Наши мастера - профессионалы своего дела
           и не могут стоить дешево. К тому же, разве цена не дает поределенный статус?
        </p>
      </div>
    </section>
    <div class="index-content  clearfix">
      <div class="index-content-left">
        <h2 class="index-content-title">НОВОСТИ
        </h2>
        <ul class="news-preview">
          <li>
           <p>Нам наконец завезли Ягермайстер! Теперь вы можете пропустить
           стаканчик во время стрижки</p>
           <time datetime="2016-01-11">11 января
           </time>
          </li>
          <li>
            <p>В нашей команде пополнение, Борис
               "БРИТВА" Стригунец,
               обладатель множества титулов и наград пополнил наши стройные ряды
            </p>
           <time datatime="2016-01-18">18 января
           </time>
          </li>
        </ul>
        <a class="btn" href="#">Все новости</a>
      </div>
      <div class="index-content-right">
        <h2 class="index-content-title">Фотогалерея</h2>
<!--    Версия для использования js-библиотеки
                     галереи
        <div class="gallery">
            <figure class="gallery-content">
              <img src="img/photo-1.jpg" width="286" height="164" alt="">
            </figure>
            <button class="btn gallery-prev disabled">Назад
            </button>
            <button class="btn gallery-next">Вперед</button>
        </div> -->
 <!-- Версия для прогрессивного улучшения -->
        <div class="gallery">
          <figure class="gallery-content">
              <a href="#"> <img src="img/photo-1.jpg" width="286" height="164" alt=""></a>
              <a href="#"> <img src="img/photo-1.jpg" width="286" height="164" alt=""></a>
              <a href="#"> <img src="img/photo-1.jpg" width="286" height="164" alt=""></a>
              <a href="#"> <img src="img/photo-1.jpg" width="286" height="164" alt=""></a>
          </figure>
        </div>
<!-- Конец версии прогрессивного улучшения -->
      </div>
    </div>
    <div  class="index-content clearfix">
      <div  class="index-content-left">
        <h2 class="index-content-title">Контактная
                   информация
        </h2>
        <p>Барбершоп "Бородинский"<br>
           Адрес: г.Санкт-Петербург, пр.Лесной
          д.13/8<br>Телефон: +7(812)542-99-53</p>
        <p>Время работы:<br>
           пн-пт: с 10:00 ДО 22:00<br>
           сб-вск: с 10:00 ДО 19:00
        </p>
        <a class="btn js-open-map" href="#">Как проехать</a>
        <a class="btn" href="#">Обратная связь</a>
      </div>
      <div class="index-content-right">
         <h2 class="index-content-title">Записаться</h2>
         <p>Укажите желаемую дату и время и
            мы свяжемся с Вами для подтверждения брони
         </p>
         <form class="appointment-form" action="https://echo.htmlacademy.ru" method="post">
            <input type="text" name="date" value="" placeholder="Дата">
            <input type="text" name="time" value="" placeholder="Время">
            <input type="text" name="name" value="" placeholder="Ваше имя">
            <input type="tel" name="phone" value="" placeholder="Телефон">
            <button class="btn" type="submit">Отправить</button>
         </form>
      </div>
    </div>
  </main>
  <footer  class="main-footer">
    <div class="container clearfix">
      <section class="footer-contacts">Барбершоп
        "Бородинский"<br>Адрес: г. Санкт-Петербург, пр.Лесной, д.13/8<br>
        <a href="#">Как Нас найти?</a><br>
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
  <!-- Блок pop-up модального окна -->
  <div class="modal-content">
    <button class="modal-content-close" type  ="button" title="Закрыть">Закрыть
    </button>
    <h2 class="modal-content-title">
      Личный кабинет
    </h2>
    <p>Введите свой логин и пароль.</p>
    <form class="login-form" action="http://pogodyn.ru" method="post">
      <input class="icon-user" type="text"  name="login" placeholder="Логин" >
      <input class="icon-password" type="password" name="password" placeholder="Пароль" >
      <label class="login-checkbox">
        <input type="checkbox" name=
          "remember">
        <span class="checkbox-indicator"></span>
        Запомните меня
      </label>
      <a class="restore" href="#">
        Я забыл пароль
      </a>
      <button class="btn" type="submit">
        Войти
      </button>
    </form>
  </div>
  <div class="modal-content-map">
    <button class="modal-content-close"
        type="button" title="Закрыть">
       Закрыть
    </button>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d255985.36053943934!2d30.3250575!3d59.91744545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1496427706065" width="560" height="360" frameborder="0" style="border: 0;" allowfullscreen></iframe>

    <!-- <div class="modal-overlay"></div> -->
    <div id="yandex-map"></div>

  </div>
<!-- <script src="../js/jquery.min.js" type="text/javascript"></script> -->

  <!-- Скрипт РЕ для вывода формы входа в модальное окно -->
  <script type="text/javascript" src="../js/popup.js"></script>
  <script>
    var gallery = document.querySelector(".gallery");
    gallery.classList.add("gallery-live");
    // Добавляем управляющие элементы
    // Внимание ! Плохая практика
    // Только для быстрой демонстрации подкода
    var buttons =
      '<button class="btn gallery-prev" type="button">Назад</button>' +
       '<button class="btn gallery-next" type="button">Вперед</button>';
    gallery.innerHTML = gallery.innerHTML + buttons;
    // Зададим начальное состояние кнопок
    var prev = document.querySelector(".gallery-prev");
    prev.classList.add("disabled");
    // Инициализация завершена
    // Далее - типовой код работы галереи:
    // обработка событий, переключение слайдов и пр.
  </script>
  <!--  КОНЕЦ Скрипта РЕ  -->
 </body>
</html>