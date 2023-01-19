<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="index.php">
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
			padding: 15.19vh 20px;
		}

		.page-title {
			font-family: 'Bebas Neue';
			font-weight: 400;
			text-transform: uppercase;
			color: black;
			font-size: 6.15vh;
			line-height: 1;
		}

		.red {
			color: #E63E1F;
		}

		.location-image-cnt {
			display: flex;
			align-items: flex-end;
			position: relative;
			left: -20px;
			height: 42vh;
			width: calc(100% + 40px);
		}

		.location-image-cnt amp-img {
			width: 55%;
		}

		.location-image-cnt span {
			width: 45%;
		}

		.location-image-cnt span b {
			font-weight: 600;
			color: black;
		}

		.page1-bg {
			height: 100vh;
			padding-top: 15vh;
		}

		.page1-bg-img {
			transform: rotate(-21.02deg);
			width: 80vw;
		}

		.page1-text-layer {
			padding: 55vh 0 0;
		}

		.page1-textblock {
			width: 50%;
			font-weight: 300;
			font-size: 15px;
			line-height: 1.47;
			color: white;
			background-color: #231F20;
			position: relative;
			padding: 20px 24px 24px 20px;
		}

		.page1-textblock::after {
			content: '';
			position: absolute;
			right: 0;
			bottom: 0;
			width: 24px;
			height: 78px;
			background: url('./assets/keys/page1-corner.svg') no-repeat center;
			background-size: contain;
		}

		.btn {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 27px;
			font-family: 'Bebas Neue';
			font-weight: 700;
			font-size: 20px;
			color: white;
			text-transform: uppercase;
			border: none;
			height: 73px;
			width: 100%;
			text-decoration: none;
			background-color: #E63E1F;
			cursor: pointer;
		}

		.cta-layer {
			padding: 0 20px 20px 20px;
		}

		.cta-layer__cnt {
			display: flex;
			align-items: flex-end;
		}

		.page1-bottom-layer {
			align-items: flex-end;
			justify-content: flex-end;
			padding: 0;
		}

		.page1-bottom-img {
			position: relative;
			left: -50px;
			bottom: -10px;
		}

		.block-title {
			font-family: 'Bebas Neue';
			font-weight: 400;
			font-size: 22px;
			line-height: 1.18;
			letter-spacing: 0.01em;
			color: #E63E1F;
			margin: 0 0 6px;
		}

		.text {
			font-weight: 400;
			font-size: 14px;
			line-height: 1.57;
			color: #231F20;
			margin: 0;
		}

		.page2-content-item {
			border: 1px solid #A9ACAB;
			padding: 20px 28px;
		}

		.page2-content-item:not(:last-of-type) {
			border-bottom: none;
		}

		.page3-content-item {
			display: flex;
			align-items: center;
			gap: 24px;
			height: 98px;
			border: 1px solid #A9ACAB;
			padding: 0 24px 0 32px;
		}

		.page3-content-item:not(:last-of-type) {
			border-bottom: none;
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

		.whatsapp-form {
			display: flex;
			flex-direction: column;
			gap: 12px;
		}

		.whatsapp-form__row {
			display: flex;
			align-items: center;
		}

		.whatsapp-form__row-title {
			width: 40%;
			font-size: 14px;
			line-height: 1.2;
			letter-spacing: -0.02em;
			color: #231F20;
		}

		.whatsapp-form__input-block {
			display: flex;
			align-items: center;
			width: 60%;
			height: 48px;
			border: 1px solid #A9ACAB;
		}

		.whatsapp-form__input-block-item {
			display: flex;
			align-items: center;
			gap: 8px;
			height: 22px;
			padding-left: 14px;
		}

		.whatsapp-form__input-block-item input {
			border: none !important;
			width: 100%;
			height: 22px;
			min-width: none;
			outline: none !important;
			appearance: none !important;
			font-size: 14px;
			line-height: 1;
			letter-spacing: -0.02em;
			color: #676968;
			position: relative;
			bottom: -2px;
			padding: 0 !important;
		}

		.whatsapp-form__input-block-item input:focus,
		.whatsapp-form__input-block-item input:active {
			border: none !important;
			outline: none !important;
			appearance: none !important;
		}

		.whatsapp-form__input-block-item:not(:last-child) {
			border-right: 1px solid rgba(0, 0, 0, 0.15);
		}

		.whatsapp-form__input-block-item span {
			font-size: 14px;
			line-height: 1;
			letter-spacing: -0.02em;
			color: #231F20;
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

		@media (min-width: 376px) and (orientation: portrait) {
			.page1-textblock {
				font-size: 16px;
			}

			.page1-bg {
				padding-top: 24vh;
			}

			.page1-text-layer {
				padding: 55vh 0 0;
			}
		}

		@media (orientation: landscape) {
			.page1-textblock {
				font-size: 18px;
			}

			.page1-bg {
				padding-top: 22vh;
			}

			.page1-text-layer {
				padding: 61.48vh 0 0;
			}

			.cta-layer__cnt {
				padding-bottom: 20px;
			}

			.text {				
				font-size: 2vh;				
			}
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page1">
			<amp-story-grid-layer template="thirds" class="page1-bottom-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img grid-area="lower-third" class="page1-bottom-img" src="./assets/keys/page1-decor.svg" width="76" height="170" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page1-bg" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="page1-bg-img" src="./assets/keys/page1-img.png" width="343" height="325" layout="responsive" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title">
					Квартал Mainstreet<br>
					<span class="red">полностью готов!</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page1-text-layer" animate-in="fade-in" animate-in-duration="1s">
				<span class="page1-textblock">
					Получайте ключи от&nbsp;апартаментов бизнес-класса в&nbsp;день покупки
				</span>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div grid-area="lower-third" class="cta-layer__cnt">
					<a class="btn" role="button" onclick="window.location='index.php#page=page2'">Все преимущества</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- PAGE 2 -->
		<amp-story-page id="page2">
			<amp-story-grid-layer template="vertical" class="title-layer" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title">
					Гарантии<br>
					<span class="red">надежности</span>
				</h1>
				<div class="page2-content">
					<div class="page2-content-item">
						<h2 class="block-title">Надежный застройщик</h2>
						<p class="text">
							На текущий момент в девелоперском портфеле ГК «Основа» 20 жилых проектов на разных стадиях
						</p>
					</div>
					<div class="page2-content-item">
						<h2 class="block-title">Соответствие стандартам качества</h2>
						<p class="text">
							Полное соответствие заявленным стандартам качества и материалам, запланированным в проекте
						</p>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control" role="button">Получить индивидуальную подборку</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- PAGE 3 -->
		<amp-story-page id="page3">
			<amp-story-grid-layer template="vertical" class="title-layer" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title">
					Идеальное<br>
					<span class="red">вложение</span>
				</h1>
				<div class="page3-content">
					<div class="page3-content-item">
						<amp-img src="./assets/keys/wallet.svg" width="40" height="40" alt="">
						</amp-img>
						<p class="text">
							Не переплачивайте за ипотеку, ожидая сдачу
						</p>
					</div>
					<div class="page3-content-item">
						<amp-img src="./assets/keys/shield.svg" width="40" height="40" alt="">
						</amp-img>
						<p class="text">
							Без риска срыва сроков
						</p>
					</div>
					<div class="page3-content-item">
						<amp-img src="./assets/keys/brush.svg" width="40" height="40" alt="">
						</amp-img>
						<p class="text">
							Сразу приступайте к ремонту
						</p>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control callback-form" role="button">Подобрать инвест-объекты</a>
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
		
		let playerControlEl, pauseControlEl, shareControlEl;

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
						shareControlEl = mutation.previousSibling.shadowRoot
              .querySelector('aside')
              .querySelector('.i-amphtml-story-share-control');
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
  </script>

	<!-- <script>
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
	</script> -->
	<script type="text/javascript">
		var __cs = __cs || [];
		__cs.push(["setCsAccount", "P9MGH_SwFkyiulNp2y0zlvS_NsTzwYlk"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>