<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="interstitial.php">
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
		@keyframes translate {
			from {
				transform: translateX(0);
			}
			to {
				transform: translateX(-100%);
			}
		}
		
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
			padding: 24.3vh 20px;
		}

		.page-title {
			font-family: 'Bebas Neue';
			font-weight: 400;
			text-transform: uppercase;
			color: white;
			font-size: 8.4vh;
			line-height: 1;			
		}

		.page-title_primary {
			margin: 0;
		}

		.page-title-shadow {
			font-family: 'Bebas Neue';
			font-weight: 400;
			font-size: 17.2vh;
			line-height: 1;
			letter-spacing: 0.01em;
			color: #403D3E;
		}

		.page-text {
			font-size: 16px;
			line-height: 1.375;
			color: white;			
		}

		.red {
			color: #E63E1F;
		}

		.page-1-content {
			padding-left: 46px;
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

		.page-2-content {
			display: flex;
			flex-direction: column;
			padding-left: 5.625vh;
		}

		.page-2-gallery {
			overflow-x: scroll;			
		}

		.page-2-gallery::-webkit-scrollbar {
			display: none;
		}

		.page-2-gallery__content {
			display: flex;
			align-items: flex-start;
			gap: 40px;
			width: fit-content;
			padding-left: 5.625vh;

			animation-name: translate;
			animation-duration: 20s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			animation-fill-mode: both;			
		}

		.page-2-gallery__content amp-img {
			flex: none;
		}

		.attachment-cnt {
			display: flex;
			flex-direction: column;
			gap: 4.7vh;
			background-color: black;
			padding: 6.25vh 4vh;
		}

		.attachment-cnt__title {
			font-family: 'Bebas Neue';
			color: #E63E1F;
			font-size: 3.125vh;
			margin: 0 0 .5vh;
		}

		.attachment-cnt__text {			
			color: white;
			font-size: 2.34vh;
			font-weight: 500;
			line-height: 1.47;
			margin: 0;
		}

		.attachment-cnt__block ul {			
			display: flex;
			flex-direction: column;
			gap: 1.5vh;
			padding: 0;
			margin: 0;
		}

		.attachment-cnt__block ul li {			
			list-style: none;
			color: white;
			font-size: 2.34vh;
			font-weight: 500;
			line-height: 1.47;
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
		<amp-story-page id="page-int-1">						
			<amp-story-grid-layer template="fill">
				<amp-img src="./assets/int-1-bg.jpg"
					width="360"
					height="640"
					layout="responsive"
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div class="page-1-content">
					<h1 class="page-title">
						Апартаменты<br>
						<span class="red">с отделкой</span>
					</h1>
					<p class="page-text">
						Полностью готовое для жизни<br>
						пространство бизнес-класса.
					</p>
					<amp-img src="./assets/2-vars.png" style="margin: 3.125vh 0 3.75vh;"
						width="189"
						height="59"						
						alt="">
					</amp-img>
				</div>	
				<div style="display: flex; gap: 20px; padding-left: 36px;">
					<amp-img src="./assets/optima-img.png"
						width="116"
						height="210"						
						alt="">
					</amp-img>
					<amp-img src="./assets/business-img.png"
						width="116"
						height="210"						
						alt="">
					</amp-img>
				</div>			
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo_white.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>			
		</amp-story-page>

		<!-- PAGE 2 -->
		<amp-story-page id="page-int-2">	
			<amp-story-grid-layer template="fill">
				<amp-img src="./assets/int-2-bg.png"
					width="360"
					height="640"
					layout="responsive"
					alt="">
				</amp-img>
			</amp-story-grid-layer>								
			<amp-story-grid-layer template="vertical" style="padding: 12vh 0 0;">
				<div>
					<div class="page-2-content">
						<span class="page-title-shadow">ОПТИМА</span>
						<h1 class="page-title" style="position: relative; top: -6vh; margin: 0;">
							Отделка<br>
							<span class="red">Оптима</span>
						</h1>
					</div>	
					<div class="page-2-gallery">
						<div class="page-2-gallery__content">
							<a role="button">
								<img src="./assets/interstitial/slide-1.jpg"
									width="192"
									height="256"						
									alt="">							
							</a>
							<a role="button">
								<img src="./assets/interstitial/slide-2.jpg"
									width="192"
									height="256"						
									alt="">	
							</a>
							<a role="button">
								<img src="./assets/interstitial/slide-3.jpg"
									width="192"
									height="256"						
									alt="">	
							</a>
							<a role="button">
								<img src="./assets/interstitial/slide-4.jpg"
									width="192"
									height="256"						
									alt="">	
							</a>
							<a role="button">
								<img src="./assets/interstitial/slide-5.jpg"
									width="300"
									height="202"						
									alt="">	
							</a>																																																											
						</div>					
					</div>	
				</div>						
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo_white.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>	
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Подробнее">
				<div class="attachment-cnt">
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Встроенный свет
						</h3>
						<p class="attachment-cnt__text">
							Светильники-споты белого или черного цвета производства компаний Lightstar, Novotech
						</p>
					</div>
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Межкомнатные двери
						</h3>
						<p class="attachment-cnt__text">
							Высота полотна 2000 – 2100, производство компаний «Дориан», «Волховец» или аналог
						</p>
					</div>							
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Стены (кроме санузла)
						</h3>
						<p class="attachment-cnt__text">
							Краска производства компаний Dulux, Caparol
						</p>
					</div>							
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Напольное покрытие (кроме санузла)
						</h3>
						<p class="attachment-cnt__text">
							Ламинат Kossen, Kronotex или аналог
						</p>
					</div>							
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Напольное покрытие (кроме санузла)
						</h3>
						<p class="attachment-cnt__text">
							Керамогранит производства компаний Kerama Marazzi, Cersanit или аналог
						</p>
					</div>							
					<div class="attachment-cnt__block">
						<h3 class="attachment-cnt__title">
							Сантехника и оборудование:
						</h3>
						<p class="attachment-cnt__text">
							<ul>
								<li>Раковина - AM.PM, Roca</li>
								<li>Смеситель для раковины, ванны, сифон - Hansgrohe, Grohe, Viega</li>
								<li>Ванна, унитаз - Roca, Jacob Delafon, Geberit</li>
								<li>Экран для ванны - керамогранит Kerama Marazzi, Cersanit</li>
								<li>Полотенцесушитель - Terminus, «Сунержа»</li>							
							</ul>																																			
						</p>
					</div>														
				</div>
			</amp-story-page-attachment>		
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