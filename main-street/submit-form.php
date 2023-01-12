<!doctype html>
<html ⚡>

<head>
  <meta charset="utf-8">
  <title>Module</title>
  <link rel="canonical" href="index.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style><noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://testcdn.webstoryz.com/amp-custom/amp-sidebar-custom.js"></script>

  <style amp-custom>
    @font-face {
      font-family: 'Onest';
      src: url('./assets/fonts/OnestBold1602-hint.ttf');
      font-weight: 700;
    }

    @font-face {
      font-family: 'Onest';
      src: url('./assets/fonts/OnestMedium1602-hint.ttf');
      font-weight: 500;
    }

    @font-face {
      font-family: 'Onest';
      src: url('./assets/fonts/OnestRegular1602-hint.ttf');
      font-weight: 400;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Onest', sans-serif;
    }

    #sidebar {
      height: 100vh !important;
      width: 100vw !important;
      max-width: none !important;
      right: 0 !important;
      display: flex !important;
      visibility: hidden;
      opacity: 0;
      transform: scale(.95);
      transform-origin: top right;
      transition: all .3s;
    }

    #sidebar.shown {
      display: flex !important;
      visibility: visible;
      opacity: 1;
      transform: scale(1);
    }

    .sidebar-content {
      position: relative;
      width: 100%;
      z-index: 999999;
      color: black;
      background-color: #DAE4F0;
      padding: 7.23vh 5.33vw 7.59vh;
    }

    .sidebar-content_menu {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    .sidebar-control {
      cursor: pointer;
    }

    .sidebar-close {
      cursor: pointer;
    }

    .primary-slide {
      padding: 0;
    }

    .primary-slide__content {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      color: white;
      padding: 7.23vh 6.67vw 0;
    }

    .primary-title {
      font-size: 6.15vh;
      margin: 0 0 2.53vh;
    }

    .primary-description {
      font-size: 3.25vh;
      margin: 0 0 4.88vh;
    }

    .slide-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .slide-head_primary {
      margin-bottom: 3.6vh;
    }

    .slide-head_about {
      margin-bottom: 2.7vh;
    }

    .slide-head_section {
      margin-bottom: 10.13vh;
    }

    .slide-head_product {
      justify-content: flex-end;
      height: 36px;
      padding: 0 6.67vw;
      margin-bottom: 0;
    }

    .slide-head_sidebar {
      margin-bottom: 4.7vh;
    }

    .tap-for-slide {
      display: flex;
      align-items: center;
      font-size: 2.17vh;
    }

    .tap-for-slide amp-img {
      width: 4.16vh;
      margin-right: 1.27vh;
    }

    .menu-list {
      display: flex;
      flex-direction: column;
      background-color: #fff;
      border-radius: 2.7vh;
      padding: 0;
      margin: 0 0 5.06vh;
    }

    .menu-list li {
      display: flex;
      align-items: center;
      height: 10.13vh;
      font-size: 18px;
      border-bottom: #DAE4F0 1px solid;
      color: #2F2F2F;
      padding-left: 3.73vw;
    }

    .menu-list li a {
      display: flex;
      align-items: center;
      flex: auto;
      height: 5.8vh;
      cursor: pointer;
      background: url('./assets/arrow-right.svg') no-repeat right center;
      background-size: contain;
    }

    .menu-list li a sup {
      position: relative;
      top: -4px;
      right: -4px;
      font-size: 12px;
      color: #005ECB;
    }

    .menu-list li a amp-img {
      flex: none;
      width: 5.8vh;
      margin-right: 3.2vw;
    }

    .submit-button {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 11.57vh;
      border-radius: 1.8vh;
      border: none;
      background-color: #005ECB;
      color: white;
      font-size: 20px;
      text-decoration: none;
      cursor: pointer;
      margin-bottom: 9.95vh;
    }

    .blue-link {
      position: absolute;
      bottom: 7.6vh;
      left: 50%;
      transform: translateX(-50%);
      color: #005ECB;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
      margin: 0 auto;
    }

    .section-slide {
      background-color: #DAE4F0;
      padding: 0;
    }

    .section-slide__content {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      color: white;
      padding: 7.23vh 6.67vw 0;
    }

    .section-cover-image {
      width: 66.7%;
      margin-bottom: 8.3vh;
    }

    .section-title {
      font-size: 30px;
      font-weight: 500;
      color: #445870;
      margin: 0 0 2.53vh;
    }

    .view-section-btn {
      display: flex;
      align-items: center;
      color: #445870;
      font-size: 2.17vh;
      font-weight: 700;
      text-transform: uppercase;
      height: 4.34vh;
      cursor: pointer;
    }

    .view-section-btn amp-img {
      width: 4.34vh;
      margin-right: 1.87vw;
    }

    .product-slide {
      padding: 0;
    }

    .product-slide__content {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      padding: 7.23vh 0 0;
    }

    .product-image {
      width: 35%;
      margin-bottom: 1.45vh;
    }

    .product-title {
      font-weight: 700;
      font-size: 20px;
      text-align: center;
      text-transform: uppercase;
      color: #2F2F2F;
      margin: 0 0 4.5vh;
    }

    .product-title__header {
      font-size: 14px;
      text-transform: none;
    }

    .product-parameters {
      flex: auto;
      background-color: white;
      border-radius: 5.06vh 5.06vh 0 0;
      width: 100%;
      padding: 3.6vh 5.06vh 0;
    }

    .product-parameters__title {
      font-size: 14px;
      font-weight: 500;
      margin: 0 0 1.63vh;
    }

    .product-parameters__list {
      font-size: 12px;
      padding: 0;
      margin: 0;
    }

    .product-parameters__list li {
      display: flex;
      align-items: center;
      list-style: none;
      line-height: 1.33;
      min-height: 4.7vh;
      margin-bottom: 1.8vh;
    }

    .product-parameters__list li amp-img {
      flex: none;
      width: 4.7vh;
      margin-right: 1.08vh;
    }

    .attachment {
      padding: 2.35vh 4vh 5.42vh;
    }

    .attachment__title {
      text-align: center;
      margin: 0 0 2.9vh;
    }

    .attachment__description {
      font-size: 12px;
      line-height: 1.5;
      margin: 0 0 6vh;
    }

    .parameters-title {
      font-size: 14px;
      font-weight: 500;
      margin: 0 0 2.9vh;
    }

    .attachment__list {
      padding: 0;
      margin: 0 0 5.8vh;
    }

    .attachment__list li {
      list-style: none;
      font-size: 14px;
      line-height: 1.43;
      color: #8D8F94;
    }

    .attachment__list li:not(:last-child) {
      margin-bottom: 2.17vh;
    }

    .attachment__list_bulleted:not(:last-child) {
      margin: 2.17vh 0 2.17vh;
    }

    .attachment__list_bulleted {
      margin: 2.17vh 0 0;
    }

    .attachment__list_bulleted li {
      background: url('./assets/bullet-icon.svg') no-repeat left 8px;
      padding-left: 20px;
    }

    .attachment__list-title {
      display: block;
      font-size: 14px;
      font-weight: 500;
      text-transform: uppercase;
      color: black;
      margin-bottom: 1.45vh;
    }

    .parameters-subtitle {
      font-size: 12px;
      font-weight: 500;
      margin-bottom: 2.9vh;
    }

    .download-button {
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: #005ECB;
      font-size: 14px;
      height: 9.04vh;
      background-color: #F3F2F4;
      border-radius: 1.08vh;
      cursor: pointer;
    }

    .download-button amp-img {
      flex: none;
      width: 26px;
      margin-right: 2.53vh;
    }

    .sell-button-container {
      border-top: #F3F2F4 1px solid;
      padding-top: 4.9vh;
      margin-top: 7.23vh;
    }

    .sell-button {
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: white;
      font-size: 14px;
      height: 9.04vh;
      background-color: #005ECB;
      border-radius: 1.08vh;
      cursor: pointer;
    }

    .slide-buttons-layer {
      background-color: #DAE4F0;
      padding: 13.9vh 0 0;
    }

    .slide-buttons {
      display: flex;
      justify-content: space-between;
      height: 17.36vh;
    }

    .slide-buttons_start {
      justify-content: flex-end;
    }

    .slide-buttons_end {
      justify-content: flex-start;
    }

    .slide-buttons amp-img {
      width: 4.52vh;
      cursor: pointer;
    }

    .product-slide-header {
      padding: 7.23vh 0 0;
    }

    .bottom-gradient {
      position: absolute;
      left: 0;
      bottom: 0;
      height: 90px;
      width: 100%;
      background: linear-gradient(360deg, rgba(73, 73, 73, 0.61) 0%, rgba(217, 217, 217, 0) 100%);
    }

    .about-slide {
      padding: 0;
    }

    .about-slide__content {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      color: white;
      padding: 7.23vh 6.67vw 0;
    }

    .about-title {
      font-size: 26px;
      color: white;
      padding-bottom: 2.35vh;
      border-bottom: 3px white solid;
      margin: 0 0 2.7vh;
    }

    .about-secondary-title {
      font-size: 26px;
      color: white;
      margin: 0 0 3.6vh;
    }

    .about-slide__top {
      margin-bottom: 6.5vh;
    }

    .about-slide__parameters {
      display: flex;
    }

    .about-slide__parameter {
      border-bottom: 1px solid white;
      padding-bottom: 1.45vh;
      margin-right: 15vw;
    }

    .about-slide__parameter-title {
      font-size: 26px;
    }

    .about-slide__parameter-caption {
      font-size: 14px;
      font-weight: 500;
      white-space: nowrap;
    }

    .about-slide__list {
      position: relative;
      left: -6.67vw;
      padding: 0;
      margin: 0;
    }

    .about-slide__list li {
      background: url('./assets/long-marker.svg') no-repeat left 2px;
      list-style: none;
      font-size: 14px;
      font-weight: 500;
      padding-left: 81px;
      margin-bottom: 2.53vh;
    }

    .form {
      display: flex;
      flex-direction: column;
    }

    .form-title-block {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 3.07vh;
    }

    .form-title {
      color: #2F2F2F;
      font-size: 26px;
      margin: 0 0 1.45vh;
    }

    .form-subtitle {
      font-size: 14px;
      font-weight: 500;
      color: #2F2F2F;
      margin: 0;
    }

    .text-input {
      height: 58px;
      border-radius: 10px;
      background: #F8F9FD;
      border: 1px solid #DCDCE8;
      font-size: 14px;
      padding: 0 16px;
      margin-bottom: 2.17vh;
    }

    .text-area {
      min-height: 18.44vh;
      border-radius: 10px;
      background: #F8F9FD;
      border: 1px solid #DCDCE8;
      font-size: 14px;
      padding: 16px;
      margin-bottom: 2.17vh;
    }

    .submit-button_form {
      margin-bottom: 1.63vh;
    }

    .privacy-block {
      display: flex;
      width: fit-content;
      margin: 0 auto;
    }

    .privacy-block__text {
      font-size: 12px;
      color: #000C21;
      line-height: 1.67;
    }

    .privacy-block__text a {
      color: #009BFC;
      text-decoration: none;
    }

    .checkbox {
      width: 16px;
      height: 16px;
      margin-right: 7px;
    }

    .success {
      display: none;
      align-items: center;
      justify-content: center;
      position: absolute;
      font-size: 18px;
      text-align: center;
      color: #005ECB;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #DAE4F0;
      z-index: 99999999;
    }

    .success h3 {
      font-size: 24px;
      margin-bottom: 1.5vh;
    }

    .error-alert {
      display: none;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      text-align: center;
      color: #005ECB;
      line-height: 1.33;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #DAE4F0;
      z-index: 99999999;
    }

    @media (min-width: 376px) {
      .section-title {
        font-size: 34px;
      }

      .product-title {
        font-size: 24px;
      }

      .product-title__header {
        font-size: 18px;
      }

      .product-parameters__list {
        font-size: 16px;
      }

      .attachment__description {
        font-size: 16px;
      }

      .parameters-title {
        font-size: 18px;
      }

      .attachment__list li {
        font-size: 16px;
      }

      .attachment__list-title {
        font-size: 16px;
      }

      .parameters-subtitle {
        font-size: 14px;
      }

      .download-button {
        font-size: 16px;
      }

      .download-button amp-img {
        width: 26px;
        margin-right: 2.53vh;
      }

      .sell-button {
        font-size: 16px;
      }

      .about-title {
        font-size: 30px;
      }

      .about-slide__parameter-title {
        font-size: 30px;
      }

      .about-slide__parameter-caption {
        font-size: 16px;
      }

      .about-secondary-title {
        font-size: 30px;
      }

      .about-slide__list li {
        background: url('./assets/long-marker.svg') no-repeat left 5px;
        font-size: 16px;
        padding-left: 90px;
      }
    }

    @media (orientation: landscape) {
      #sidebar {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translateX(-50%);
        width: calc(100vh * 69 / 116) !important;
      }

      #sidebar.shown {
        transform: scale(1) translateX(-50%);
      }

      .menu-list li {
        font-size: 2.5vh;
      }

      .menu-list li a sup {
        font-size: 1.8vh;
      }

      .submit-button {
        font-size: 2.5vh;
      }

      .blue-link {
        font-size: 2.5vh;
      }

      .section-title {
        font-size: 4.5vh;
      }

      .product-title {
        font-size: 3vh;
      }

      .product-title__header {
        font-size: 2.2vh;
      }

      .product-parameters__list {
        font-size: 1.9vh;
      }

      .product-parameters__title {
        font-size: 2.2vh;
      }

      .parameters-subtitle {
        font-size: 1.4vh;
      }

      .download-button {
        font-size: 2vh;
      }

      .sell-button {
        font-size: 2vh;
      }

      .attachment__list-title {
        font-size: 2.2vh;
      }

      .about-title {
        font-size: 4.2vh;
      }

      .about-slide__parameter-title {
        font-size: 4.2vh;
      }

      .about-slide__parameter-caption {
        font-size: 2.2vh;
      }

      .about-secondary-title {
        font-size: 4.2vh;
      }

      .about-slide__list li {
        background: url('./assets/long-marker.svg') no-repeat left 5px;
        font-size: 2.2vh;
        padding-left: 100px;
      }
    }
  </style>
</head>

<body>
  <amp-story standalone canShowSystemLayerButtons="false" title="Module" publisher="Module">
    <amp-sidebar id="sidebar">
      <div class="sidebar-content">
        <div class="slide-head slide-head_sidebar">
          <a role="button" onclick="window.location='./index.php#coverPage'">
            <amp-img src="./assets/module-logo.svg" width="80" height="36" alt="">
            </amp-img>
          </a>
          <a class="sidebar-close" role="button">
            <amp-img src="./assets/sidebar-close-icon.svg" width="24" height="24" alt="">
            </amp-img>
          </a>
        </div>
        <ul class="menu-list">
          <li>
            <a role="button" onclick="window.location='./microelectronics.php#page=section1'">
              <amp-img src="./assets/microelectronic-icon.svg" width="32" height="32" layout="responsive" alt="">
              </amp-img>
              Микроэлектроника
            </a>
          </li>
          <li>
            <a role="button" onclick="window.location='./computer-tech.php#page=section2'">
              <amp-img src="./assets/computer-tech-icon.svg" width="32" height="32" layout="responsive" alt="">
              </amp-img>
              Вычислительная техника
            </a>
          </li>
          <li>
            <a role="button" onclick="window.location='./navigation-modules.php#page=section3'">
              <amp-img src="./assets/navigation-icon.svg" width="32" height="32" layout="responsive" alt="">
              </amp-img>
              Навигация
            </a>
          </li>
          <li>
            <a role="button" onclick="window.location='./sf-blocks.php#page=section4'">
              <amp-img src="./assets/sf-blocks-icon.svg" width="32" height="32" layout="responsive" alt="">
              </amp-img>
              CФ-блоки
            </a>
          </li>
        </ul>
        <a class="submit-button" role="button" onclick="window.location='./submit-form.php#formPage'">Оставить заявку</a>
        <a class="blue-link" href="mailto:rusales@module.ru">rusales@module.ru</a>
      </div>
    </amp-sidebar>

    <!-- FORM -->
    <amp-story-page id="formPage">
      <amp-story-grid-layer template="vertical" style="padding: 0;">
        <div class="success">
          <span style="text-align: center;">
            <h3>Спасибо за заявку!</h3><br>
            Наш менеджер скоро<br>
            свяжется с вами!
          </span>
        </div>
        <div class="error-alert">
          <span style="text-align: center;">
            Что-то пошло не так.<br>
            Пожалуйста, попробуйте позже
          </span>
        </div>

        <div class="sidebar-content sidebar-content_menu">
          <div class="slide-head slide-head_sidebar">
            <amp-img src="./assets/module-logo.svg" width="80" height="36" alt="">
            </amp-img>
            <a class="sidebar-control" role="button">
              <amp-img src="./assets/menu-icon.svg" width="63" height="12" alt="">
              </amp-img>
            </a>
          </div>
          <div class="form-title-block">
            <h1 class="form-title">Напишите нам</h1>
            <p class="form-subtitle">Наш менеджер свяжется с вами</p>
          </div>
          <form class="form" id="requestForm" method="POST">
            <input class="text-input" type="text" name="name" id="name" placeholder="Введите ваше имя" required>
            <input class="text-input" type="email" name="email" id="email" placeholder="Введите ваш e-mail" required>
            <textarea class="text-area" name="message" id="message" placeholder="Введите текст сообщения"></textarea>
            <button type="submit" class="submit-button submit-button_form" role="button">Отправить заявку</button>
            <div class="privacy-block">
              <input class="checkbox" type="checkbox" checked required>
              <span class="privacy-block__text">
                Нажимая на кнопку, вы соглашаетесь<br>с <a href="https://www.module.ru/privacy" target="_blank">Политикой конфиденциальности</a>
              </span>
            </div>
          </form>
        </div>
      </amp-story-grid-layer>
    </amp-story-page>
  </amp-story>

  <script>
    const form = document.querySelector('#requestForm');
    const successEl = document.querySelector('.success');
    const errorEl = document.querySelector('.error-alert');

    if (!form) {
      throw new ReferenceError('form not found!');
    }
    form.oninput = () => {
      successEl.style.display = 'none';
      errorEl.style.display = 'none';
    }
    form.onsubmit = (evt) => {
      evt.preventDefault();
      fetch('request.php', {
          method: 'post',
          body: JSON.stringify({
            name: form.elements['name'].value,
            email: form.elements['email'].value,
            message: form.elements['message'].value
          }),
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        })
        .then(result => {
          if (result.status === 200) {
            successEl.style.display = 'flex';
            setTimeout(() => {
              successEl.style.display = 'none';
            }, 3000)
            form.reset();
          }
          if (result.status !== 200) {
            errorEl.style.display = 'flex';
            setTimeout(() => {
              errorEl.style.display = 'none';
            }, 2000)
            console.error(result.statusText);
          }
        })
        .catch(console.error);
    }
  </script>

  <script src="https://testcdn.webstoryz.com/amp-custom/sidebar-handler.js"></script>
</body>

</html>