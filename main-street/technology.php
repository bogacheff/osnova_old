<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="technology.php">
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
			font-family: 'Bebas Neue';
			src: url('./assets/fonts/BebasNeue-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}

		@font-face {
			font-family: 'Bebas Neue';
			src: url('./assets/fonts/BebasNeue-Bold.ttf');
			font-style: normal;
			font-weight: 700;
		}

		@font-face {
			font-family: 'Rubik';
			src: url('./assets/fonts/Rubik-Light.ttf');
			font-style: normal;
			font-weight: 300;
		}

		@font-face {
			font-family: 'Rubik';
			src: url('./assets/fonts/Rubik-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}

		* {
			box-sizing: border-box;
		}

		body {
			font-family: 'Rubik', sans-serif;
		}

		amp-story-page {
			background-color: #fff;
		}

		.logo-layer {
			padding: 5.8vh 20px;
		}

		.logo {
			margin-left: auto;
		}

		.title-layer {
			padding: 13vh 20px;
		}

		.page-title {
			font-family: 'Bebas Neue';
			font-weight: 400;
			text-transform: uppercase;
			color: black;
			font-size: 5.5vh;
			line-height: 1;
			margin: 0 0 20px;
		}

		.page-subtitle {
			display: block;
			font-weight: 400;
			font-size: 15px;
			color: #676968;
			margin-bottom: 20px;
		}

		.page-subtitle_small {
			font-size: 14px;
			color: #231F20;
			line-height: 1.57;
			margin-bottom: 15px;
		}

		.red {
			color: #E63E1F;
		}

		.btn {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 27px;
			position: relative;
			font-family: 'Bebas Neue';
			font-weight: 700;
			font-size: 20px;
			line-height: 1;
			color: white;
			text-transform: uppercase;
			border: none;
			height: 73px;
			width: 100%;
			text-decoration: none;
			background-color: #E63E1F;
			cursor: pointer;
		}

		.btn_arrowed::after {
			content: '';
			width: 46px;
			height: 18px;
			background: url('./assets/location/button-arrow.svg') no-repeat center;
			background-size: contain;
			position: absolute;
			right: 58px;
			top: calc(50% - 9px);
		}

		.cta-layer {
			padding: 0 20px 20px 20px;
		}

		.cta-layer__cnt {
			display: flex;
			align-items: flex-end;
		}

		.attachment-cnt {
			font-family: 'Bebas Neue';
			font-weight: 400;
			font-size: 24px;
			line-height: 1.2;
			letter-spacing: 0.01em;
			color: #E63E1F;
			padding: 20px 20px 0;
			margin: 0 0 16px;
		}

		.attachment-block {
			margin-bottom: 40px;
		}

		.attachment-list {
			display: flex;
			flex-direction: column;
			gap: 20px;
			padding: 0;
			margin: 0;
		}

		.attachment-list li {
			display: flex;
			align-items: center;
			gap: 10px;
			font-family: 'Rubik';
			font-size: 15px;
			color: #676968;
			list-style: none;
		}

		.attachment-list_alternate li {
			display: block;
			position: relative;
			padding-left: 20px;
		}

		.attachment-list_alternate li b {
			color: black;
			font-weight: 600;
		}

		.attachment-list li::before {
			content: '';
			width: 3px;
			height: 3px;
			border-radius: 50%;
			background-color: #676968;
		}

		.attachment-list_alternate li::before {
			position: absolute;
			left: 0;
			top: 8px;
			width: 4px;
			height: 4px;
			background-color: #E63E1F;
		}

		.smartbase-list {
			display: flex;
			flex-direction: column;
		}

		.smartbase-list__item {
			display: flex;
			align-items: center;
			gap: 16px;
			height: 70px;
			border: 1px solid #A9ACAB;
			font-size: 14px;
			line-height: 1.57;
			color: #231F20;
			padding: 0 24px;
		}

		.smartbase-list__item:not(:last-child) {
			border-bottom: none;
		}

		.smartbase-list__item amp-img {
			flex: none;
		}

		.beveled-block {
			display: flex;
			flex-direction: column;
			justify-content: center;
			gap: 8px;
			height: 132px;
			background-color: #231F20;
			position: relative;
			font-size: 15px;
			line-height: 1.47;
			color: white;
			padding: 0 20px;
		}

		.beveled-block::after {
			content: '';
			position: absolute;
			right: 0;
			top: 0;
			height: 132px;
			width: 53px;
			background: url('./assets/services/corner.svg') no-repeat right top;
			background-size: contain;
		}

		.beveled-block_red {
			display: flex;
			align-items: center;
			height: 135px;
			width: 57vw;
			background-color: #E63E1F;
			color: white;
			padding-left: 37px;
		}

		.beveled-block_red::after {
			height: 135px;
			width: 47px;
			background: url('./assets/technology/red-triangle.svg') no-repeat center;
			background-size: contain;
			top: 0;
			right: -47px;
		}

		.page-4-2-red-block {
			padding: 28vh 0 0;
		}

		.page-4-2-image {
			padding: 34vh 0 0;
		}

		.page-4-2-decor {
			justify-items: flex-end;
			padding: 25vh 30px 0 0;
		}

		.page-4-3-bg {
			padding: 31vh 20px 0;
		}

		.page-4-3-list {
			display: flex;
			flex-direction: column;
			gap: 5vh;
		}

		.page-4-3-list__item {
			display: flex;
			align-items: flex-start;
			gap: 16px;
			font-size: 14px;
			line-height: 1.57;
			color: #231F20;
		}

		.page-4-3-list__item amp-img {
			flex: none;
			position: relative;
			bottom: -3px;
		}

		.bottom-gradient {
			position: absolute;
			bottom: -10px;
			left: 0;
			height: 110px;
			width: 100%;
			background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
			opacity: .5;
		}

		.form {
			display: flex;
			flex-direction: column;
			gap: 20px;
			margin-bottom: 12px;
		}

		.input-block {
			display: flex;
			flex-direction: column;
			gap: 10px;
		}

		.input {
			font-size: 18px;
			height: 48px;
			outline: none;
			padding: 0 16px;
		}

		.input-label {
			font-size: 14px;
			color: white;
		}

		.subscription-text {
			font-size: 12px;
			line-height: 1.33;
			color: #676968;
			margin-bottom: 25px;
		}

		.form-socials {
			display: flex;
			align-items: center;
			gap: 20px;
		}

		.form-socials-text {
			font-size: 14px;
			line-height: 1.57;
			letter-spacing: -0.02em;
			color: #FFFFFF;
		}

		@media (orientation: landscape) {
			.page-subtitle {
				font-size: 2vh;
			}

			.smartbase-list__item {
				font-size: 2vh;
			}

			.page-4-3-list__item {
				font-size: 2vh;
			}
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- Page 4-1 -->
		<amp-story-page id="page-4-1">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div>
					<h1 class="page-title" style="margin-bottom: 11px;">
						Умный дом<br>
						<span class="red">«SMART BASE»</span>
					</h1>
					<span class="page-subtitle page-subtitle_small">Технологии интеллектуального дома<br>для большего комфорта:</span>
					<div class="smartbase-list">
						<div class="smartbase-list__item">
							<amp-img src="./assets/technology/calendar.svg" width="29" height="29" alt="">
							</amp-img>
							<span>Освобождение вас<br>от рутинных мелочей</span>
						</div>
						<div class="smartbase-list__item">
							<amp-img src="./assets/technology/comfort.svg" width="29" height="29" alt="">
							</amp-img>
							<span>Повышение комфорта жизни</span>
						</div>
						<div class="smartbase-list__item">
							<amp-img src="./assets/technology/safety.svg" width="29" height="29" alt="">
							</amp-img>
							<span>Обеспечение безопасности<br>семьи и имущества </span>
						</div>
						<div class="smartbase-list__item">
							<amp-img src="./assets/technology/economy.svg" width="29" height="29" alt="">
							</amp-img>
							<span>Экономия денег и сил</span>
						</div>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Подробнее о Smart Base">
				<div class="attachment-cnt">
					<div class="attachment-block">
						<h2 class="attachment-title">Возможности системы Умный дом:</h2>
						<ul class="attachment-list attachment-list_alternate">
							<li><b>Освещение</b> — управляйте каждым источником света по отдельности или всеми одновременно при помощи голоса или приложения</li>
							<li><b>Климат‑контроль</b> — настроит дома комфортную температуру и влажность, а также сэкономит ресурсы во время вашего отсутствия</li>
							<li><b>Шторы и жалюзи</b> — автоматически закроются перед сном и разбудят вас естественным светом утром</li>
							<li><b>Бытовая техника</b> — система объединит устройства в универсального помощника, который и кофе сварит и поддержит чистоту в доме</li>
							<li><b>Смарт‑замок и видеодомофон внутри приложения</b> — встречайте гостей не вставая с дивана</li>
							<li><b>Охранная система с видеонаблюдением</b> — предупредит о потенциальных противоправных действиях в ваше отсутствие</li>
							<li><b>Защита от протечек и пожарная сигнализация</b> — в аварийной ситуации позволят избежать ущерба или могут спасти жизнь</li>
						</ul>
					</div>
				</div>
			</amp-story-page-attachment>
		</amp-story-page>

		<!-- Page 4-2 -->
		<amp-story-page id="page-4-2">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page-4-2-decor" animate-in="fade-in" animate-in-duration="1s">
				<amp-img src="./assets/technology/page4-2-decor.svg" width="114" height="315" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<h1 class="page-title">
					<span class="red">Больше свободы</span><br>
					в планировках
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page-4-2-image">
				<amp-img src="./assets/technology/image4-2.jpg" width="720" height="552" layout="responsive" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page-4-2-red-block" animate-in="fly-in-left" animate-in-duration="1s">
				<div class="beveled-block beveled-block_red">
					Монолитный каркас без несущих стен позволит вам делать любые планировки
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn" role="button" onclick="window.location='technology.php#page=page-4-3'">
						Дополнительные преимущества
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 4-3 -->
		<amp-story-page id="page-4-3">
			<amp-story-grid-layer template="vertical" class="page-4-3-bg">
				<amp-img src="./assets/technology/leave.svg" width="320" height="320" layout="responsive" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<h1 class="page-title">
					Эффективность<br>
					<span class="red">и экономичность квартала</span><br>
				</h1>
				<div class="page-4-3-list">
					<div class="page-4-3-list__item">
						<amp-img src="./assets/technology/warm.svg" width="30" height="30" alt="">
						</amp-img>
						<span>
							Собственный тепловой пункт,<br>который позволит сэкономить<br>на энергопотреблении
						</span>
					</div>
					<div class="page-4-3-list__item">
						<amp-img src="./assets/technology/automate.svg" width="30" height="36" alt="">
						</amp-img>
						<span>
							Автоматизация подачи и расхода<br>отопления, горячей и холодной воды
						</span>
					</div>
					<div class="page-4-3-list__item">
						<amp-img src="./assets/technology/energy-safe.svg" width="30" height="30" alt="">
						</amp-img>
						<span>
							Энергосберегающие материалы<br>стен и фасадов
						</span>
					</div>
					<div class="page-4-3-list__item">
						<amp-img src="./assets/technology/intellectual.svg" width="30" height="30" alt="">
						</amp-img>
						<span>
							Интеллектуальная система<br>управления освещением
						</span>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control callback-form" role="button">
						Узнать больше о технологиях
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
	</amp-story>

	<style>
    #sidebar,
		#sidebarPersonal {
      height: 100vh !important;
      width: 100vw !important;
      max-width: none !important;
      right: 0 !important;
      display: flex !important;
      visibility: hidden;
      opacity: 0;      
      transition: all .3s;
    }

		#sidebar {
			background-color: black;
		}

		#sidebar .page-title {
			color: white;
		}

		#sidebar .page-text {
			font-size: 14px;
			line-height: 1.57;
			letter-spacing: -0.02em;
			color: #676968;
		}
		
		#sidebarPersonal {
			background-color: white;
		}

    #sidebar.shown,
		#sidebarPersonal.shown {
      display: flex !important;
      visibility: visible;
      opacity: 1;
    }

    .sidebar-close {
      cursor: pointer;
			position: absolute;
			right: 20px;
			top: 20px;
			z-index: 999999;
    }

		.sidebar__header {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.sidebar__cnt {
			position: relative;
			width: 100%;			
			padding: 20px 20px 40px;
		}

		.sidebar-logo {
			margin-bottom: 40px;
		}

		@media (max-width: 375px) {
			.sidebar-logo {
				margin-bottom: 0;
			}
		}

    @media (orientation: landscape) {
      #sidebar,
			#sidebarPersonal {
        position: absolute;
        left: 0;
        top: 0;
				width: 100vw;                
      }

			.sidebar__cnt {				
				max-width: 500px;				
				margin: 0 auto;
			}			
    }
  </style>
  <script>
    function comagicSendData(comagicData){
				console.log(comagicData);
				Comagic.addOfflineRequest({
						name: comagicData.name,
						email: comagicData.email,
						phone: comagicData.tel,
						form_name: comagicData.formName,
						message: comagicData.message
				}, function(o) {
						let m = JSON.parse(o.response);
						if(!m.success){
								console.log('Error send data');
								console.log(o.response);
								document.getElementById('send_call_btn').textContent = "Ошибка отправки"
								return;
						}
						document.getElementById('send_call_btn').textContent = "Заявка успешно отправлена"
				});
      }
      
		// ############# Call form Event #############
		document.getElementById('callbackForm')
			.onsubmit = function(){
			event.preventDefault();
			let name = document.getElementById('name');
			let tel = document.getElementById('tel');

			if(tel.value == ''){
					document.getElementById('tel_label').style.color="#FF0000"
					return;
			}

			let comagicData = new Object();
			comagicData.formName = 'Заказать звонок';
			comagicData.name = name.value;
			comagicData.tel = tel.value;
			comagicSendData(comagicData);
		};
		// ############# Call form Event #############

		// ############# formPersonal Event #############
		document.getElementById('formPersonal')
			.onsubmit = function(){
			event.preventDefault();
			let name = document.getElementById('name_pers');
			let tel = document.getElementById('tel_pers');
			let bedrooms_from = document.getElementById('bedrooms_from');
			let bedrooms_to = document.getElementById('bedrooms_to');
			let square_from = document.getElementById('square_from');
			let square_to = document.getElementById('square_to');
			let cost = document.getElementById('cost');

			if(tel.value == ''){
					document.getElementById('tel_label_').style.color="#FF0000"
					return;
			}

			var obj = new Object();
					obj.number_of_bedrooms_from  = bedrooms_from.value;
					obj.number_of_bedrooms_to  = bedrooms_to.value;
					obj.square_from  = square_from.value;
					obj.square_to  = square_to.value;
					obj.cost = cost.value;
			let jsonString= JSON.stringify(obj);

			let comagicData = new Object();
					comagicData.name = name.value;
					comagicData.tel = tel.value;
					comagicData.formName = 'Форма: Получите индивидуальную подборку';
					comagicData.message = jsonString;
			comagicSendData(comagicData);
		};
		// ############# formPersonal Event #############

		// ############# Phone mask #############
		window.addEventListener("DOMContentLoaded", function() {
				[].forEach.call( document.querySelectorAll('.tel'), function(input) {
				var keyCode;
				function mask(event) {
						event.keyCode && (keyCode = event.keyCode);
						var pos = this.selectionStart;
						if (pos < 3) event.preventDefault();
						var matrix = "+7 (___) ___-__-__",
								i = 0,
								def = matrix.replace(/\D/g, ""),
								val = this.value.replace(/\D/g, ""),
								new_value = matrix.replace(/[_\d]/g, function(a) {
										return i < val.length ? val.charAt(i++) || def.charAt(i) : a
								});
						i = new_value.indexOf("_");
						if (i != -1) {
								i < 5 && (i = 3);
								new_value = new_value.slice(0, i)
						}
						var reg = matrix.substr(0, this.value.length).replace(/_+/g,
								function(a) {
										return "\\d{1," + a.length + "}"
								}).replace(/[+()]/g, "\\$&");
						reg = new RegExp("^" + reg + "$");
						if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
						if (event.type == "blur" && this.value.length < 5)  this.value = ""
				}

				input.addEventListener("input", mask, false);
				input.addEventListener("focus", mask, false);
				input.addEventListener("blur", mask, false);
				input.addEventListener("keydown", mask, false)

			});
		});
		// ############# Phone mask #############
		
		let playerControlEl, pauseControlEl;

    document.addEventListener('DOMContentLoaded', evt => {
      sidebarHandler.call(this, evt);
      searchAmpControls.call(this, evt);
    })

    function searchAmpControls() {
      const callback = function(mutationsList, observer) {
        for (const mutation of mutationsList) {
          if (mutation.previousSibling && mutation.previousSibling.className && mutation.previousSibling.className.includes('system')) {
            playerControlEl = mutation.previousSibling.shadowRoot
              .querySelector('aside')
              .querySelector('.i-amphtml-story-play-control');
            pauseControlEl = mutation.previousSibling.shadowRoot
              .querySelector('aside')
              .querySelector('.i-amphtml-story-pause-control');
            observer.disconnect();
          }
        }
      };
      const observer = new MutationObserver(callback);
      observer.observe(document.body.querySelector('amp-story'), {
        childList: true
      });
    }

    function sidebarHandler() {
      let sidebarEl;
      const controlElems = document.querySelectorAll('.sidebar-control');
      const closeElems = document.querySelectorAll('.sidebar-close');
			const form = document.getElementById('formPersonal');

      closeElems.forEach(elem => elem.onclick = (evt) => {
        evt.target.closest('.sidebar-el').classList.remove('shown');
        if (!!playerControlEl) {
          playerControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
				form.reset();
      })

      controlElems.forEach(elem => elem.onclick = () => {
        elem.classList.contains('callback-form')
					? sidebarEl = document.querySelector('#sidebar')	
					: sidebarEl = document.querySelector('#sidebarPersonal')								
				
				sidebarEl.classList.toggle('shown');

        document.addEventListener('click', (event) => {
          if (event.target.classList.contains('sidebar_holder')) {
            sidebarEl.classList.remove('shown');
            if (!!playerControlEl) {
              playerControlEl.dispatchEvent(new Event('click', {
                bubbles: true
              }));
            }
          }
        })

        if (!!pauseControlEl) {
          pauseControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
      });
    }
  </script>

	<script>
		const controlButtons = document.querySelectorAll('.slider__control');
		let timer = setInterval(nextSlide, 3000);

		const swiper = new Swiper('.slider', {			
			slidesPerView: 'auto',
			spaceBetween: 20,
			freeMode: true,
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			}
		});

		function nextSlide() {
			swiper.slideNext();
		}		

		controlButtons.forEach(el => {
			el.addEventListener('click', () => {
				clearInterval(timer);
				setTimeout(() => {
					timer = setInterval(nextSlide, 5000);
				}, 0)		
			})
		})
	</script>

<script type="text/javascript">
		var __cs = __cs || [];
		__cs.push(["setCsAccount", "P9MGH_SwFkyiulNp2y0zlvS_NsTzwYlk"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>