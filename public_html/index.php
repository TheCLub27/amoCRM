<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новый сайт успешно создан и готов к работе</title>
  <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css"
        integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
        integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
  <style>


    #ru, #en {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      font-family: 'PT Sans', Arial, sans-serif;
      font-size: 16px;
      height: 100%;
      min-height: 768px;
      margin: 0;
    }

    html {
      height: 100%;
    }

    .top, .bottom, hr {
      flex-shrink: 0;
    }

    hr {
      height: 2px;
      border: 0;
      box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
      margin: 0;
    }

    a {
      color: #2fa3e7;
      text-decoration: none
    }

    a:focus, a:hover {
      color: #157ab5;
      text-decoration: none
    }

    body {
      font-family: 'PT Sans', Arial, sans-serif;
      font-size: 16px;
      height: 100%;
      margin: 0;
    }

    .b-alert {
        font-family: 'PT Sans', Arial, sans-serif;
        position: relative;
        padding: 20px 20px 20px 65px;
        min-height: 60px;
        box-sizing: border-box;
        border: 1px solid #000;
        border-radius: 0;
        background-color: #fff;
        background-repeat: no-repeat;
        color: #000;
        text-align: left;
        font-size: 16px;
        line-height: 20px;
        -webkit-box-shadow: 0 2px 4px rgba(146,149,163,.5);
        box-shadow: 0 2px 4px rgba(146,149,163,.5)
    }

    .b-alert:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/alert.svg)
    }

    .b-alert:before {
        content: "";
        display: block;
        position: absolute;
        top: 19px;
        left: 0;
        width: 45px;
        height: 20px;
        border-radius: 0 4px 4px 0;
        background-repeat: no-repeat;
        background-position: center right 4px
    }

    .b-alert.b-alert--info {
        border-color: #2fa3e7
    }

    .b-alert.b-alert--info:before {
        background-color: #2fa3e7
    }

    .b-alert.b-alert--warning {
        border-color: #fba700
    }

    .b-alert.b-alert--warning:before {
        background-color: #fba700
    }

    .b-alert.b-alert--danger {
        border-color: #bd2327
    }

    .b-alert.b-alert--danger:before {
        background-color: #bd2327
    }

    .b-alert.b-alert--success {
        border-color: #6ec331
    }

    .b-alert.b-alert--success:before {
        background-color: #6ec331
    }

    .b-alert.b-alert--icon-alarm:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/alarm.svg)
    }

    .b-alert.b-alert--icon-backup:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/backup.svg)
    }

    .b-alert.b-alert--icon-card:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/card.svg)
    }

    .b-alert.b-alert--icon-check:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/check.svg)
    }

    .b-alert.b-alert--icon-database:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/database.svg)
    }

    .b-alert.b-alert--icon-delete:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/delete.svg)
    }

    .b-alert.b-alert--icon-domain:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/domain.svg)
    }

    .b-alert.b-alert--icon-info:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/info.svg)
    }

    .b-alert.b-alert--icon-locked:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/locked.svg)
    }

    .b-alert.b-alert--icon-mail:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/mail.svg)
    }

    .b-alert.b-alert--icon-phone:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/phone.svg)
    }

    .b-alert.b-alert--icon-php:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/php.svg)
    }

    .b-alert.b-alert--icon-redis:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/redis.svg)
    }

    .b-alert.b-alert--icon-setup:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/setup.svg)
    }

    .b-alert.b-alert--icon-support:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/support.svg)
    }

    h1, h2 {
      font-family: 'PT Sans Caption', Arial, sans-serif;
      font-weight: normal;
      margin: 0;
    }

    h1 {
      font-size: 21px;
      line-height: 30px;
    }

    h2 {
      font-size: 18px;
    }

    @media screen and (min-width: 801px) {

      body {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-height: 768px;
      }

      .top {
        background-color: #f7f9fa;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
      }

      .bottom {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      header, footer, .hint {
        width: 690px;
        margin: 0 auto;
      }

      .hint {
        padding-top: 30px;
      }

      header {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }

      main {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 740px;
        margin: 0 auto;
      }

      footer {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 690px;
      }

      .logo img {
        max-width: 100%;
        max-height: 75px;
        position: relative;
        top: 15px;
      }

      nav {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-right: 10px;
      }

      nav a {
        padding: 0 15px
      }

      .octo {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      .octo img {
        height: 230px;
        max-height: 230px;
      }

      .icon img {
        height: 75px;
      }

      .footer-col {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 15px 0;
      }

      .footer-col > * {
        padding: 2px;
      }

      .bottom-mobile {
        display: none;
      }
    }

    @media screen and (max-width: 800px) {

      .top {
        margin: 0 auto;
        background-color: #f7f9fa;
      }

      .bottom {
        margin: 0 auto;
        width: 95%;
      }

      header, footer, main {
        width: 95%;
      }

      header, footer, main, .hint {
        margin: 0 auto;
      }

      .hint {
        padding-top: 30px;
        margin-bottom: 30px;
      }

      .logo {
        display: block;
        width: 60%;
        margin: 0 auto;
      }

      .logo img {
        width: 100%;
      }

      .icon img {
        display: none;
      }

      .octo {
        width: 60%;
        margin: 0 auto;
      }

      .octo img {
        width: 100%;
      }

      header nav {
        display: none;
      }

      .bottom {
        display: none;
      }

      .bottom-mobile footer {
        display: table;
        width: 95%;
        margin-bottom: 35px;
      }

      .bottom-mobile footer span {
        text-align: right;
        display: table-cell;
      }

      .bottom-mobile footer txt {
        display: table-cell;
      }

      .bottom-mobile footer h2 {
        margin-top: 20px;
        margin-bottom: 5px;
      }

      .bottom-mobile footer p {
        display: table-row;
        width: 100%;
        line-height: 25px;
      }
    }

    .instruction-row, li {
      margin-bottom: .5rem;
    }

    .fa-li {
      color: #84c738;
    }

    .fa-ul {
      margin-left: 1.3em;
    }

    span.key {
      background-color: white;
      padding: 5px;
      border-radius: 5px;
      box-shadow: 0 0 4px 0 rgba(86, 94, 113, 0.2);
    }

    .gallery {
      padding-top: 20px;
      display: none;
    }

    .gallery a {
      display: block;
      margin-bottom: 30px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <a href="create.php" target="_blank"><button>Создать сделку</button></a>
  <br>
  <a href="update.php" target="_blank"><button>Обновить сделку</button></a>
  <br>
  <form action="import.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept=".csv">
    <button type="submit">Импортировать сделки</button>
</form>
  <!--<a href="file3.php" target="_blank"><button>Открыть файл 3</button></a>-->

</body>
</html>