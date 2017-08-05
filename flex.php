<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Блоки на flex</title>

    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </head>

  <body>

      <nav class="main-nav main-nav--closed main-nav--nojs">
        <div class="main-nav__wrapper clearfix">

          <ul class="main-nav__items">
            <li class="main-nav__item">
              <a href="index.php">Главная</a>
            </li>
            <li class="main-nav__item">
              <a href="#">Магазин</a>
            </li>
            <li class="main-nav__item">
              <a href="catalog.php">Прейскурант</a>
            </li>
            <li class="main-nav__item">
              <a href="vh-vw.php">VH и VW</a>
            </li>
            <li class="main-nav__item main-nav__item--active">
              <a>flex</a>
            </li>
          </ul>

          <ul class="main-nav__user-items">
            <li class="main-nav__user-item">
              <a class="main-nav__user-login" href="#" title="Войти">Вход</a>
            </li>
          </ul>

        </div>
      </nav>

      <h2>Направления осей</h2>
      <div class="flex-container dim">
           <div>1</div>
           <div>2</div>
           <div>3</div>
           <div>4</div>
           <div>5</div>
           <!-- <div>6</div>
           <div>7</div>
           <div>8</div>
           <div>9</div> -->
      </div>
      <div class="block-mock"></div>
  </body>
</html>