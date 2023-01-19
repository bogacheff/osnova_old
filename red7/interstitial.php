<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>RED7</title>
	<link rel="canonical" href="interstitial.php">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<style amp-custom>		
		
		@font-face {
			font-family: 'CeraPro';
			src: url('./assets/fonts/CeraPro-Light.ttf');
			font-style: normal;
			font-weight: 300;
		}
		
		@font-face {
			font-family: 'CeraPro';
			src: url('./assets/fonts/CeraPro-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}	

		@font-face {
			font-family: 'CeraPro';
			src: url('./assets/fonts/CeraPro-Bold.ttf');
			font-style: normal;
			font-weight: 700;
		}	

		body {
			font-family: 'CeraPro', sans-serif;
		}

		amp-story-page {
			background-color: #fff;
		}

		.logo-layer {
			padding: 20px;
		}

		.page-title {
			display: flex;
			flex-direction: column;
			line-height: 1;
			text-transform: uppercase;
			font-size: 4.25vh;
			font-weight: 300;
			color: #000;
		}

		.page-title_large {		
			font-size: 6.25vh;			
		}

		.page-title_primary {
			font-size: 48px;
		}

		.content-layer {
			padding: 70px 20px 0;
		}

		.page-text {
			font-size: 18px;
			line-height: 1.57;
			color: #484748;
		}

		.carousel-item img {
			box-shadow: 0px 3.39804px 25.4853px -2.54853px rgba(0, 0, 0, 0.1);			
			object-fit: cover;
		}

		.slider {
			position: relative;
			left: -30px;
			width: calc(100% + 60px);
		}		

		.slider__navigation {
			display: flex;
			align-items: center;
			justify-content: space-between;			
			padding: 0 30px 0 0;
			margin-top: 20px;
		}
		
		.slider__controls {
			display: flex;
			align-items: center;
			gap: 18px;
			height: 37px;
			position: relative;
		}

		.slider__control {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 37px;
			height: 37px;
			border-radius: 50%;
			border: 1px solid #D3D7DA;
			position: static;			
			margin: 0;
		}

		.slider__control::after {
			content: '';
			width: 8px;
			height: 14px;
			background: no-repeat center;
			background-size: contain;
		}

		.swiper-button-prev::after {
			background-image: url('./assets/nav-arrow-left.svg');
		}

		.swiper-button-next::after {
			background-image: url('./assets/nav-arrow-right.svg');
		}

		.swiper-pagination {
			position: static;
			display: flex;
			align-items: flex-start;
			width: fit-content;			
			color: rgba(0,0,0,.25);
			font-size: 18px;
			line-height: 1;			
		}

		.swiper-pagination-current {
			color: rgba(0,0,0,1);
			margin-right: 10px;
		}

		.swiper-pagination-total {
			margin-left: 10px;
		}

		.cta-layer {			
			padding: 0 20px 32px;
		}

		.btn,
		.btn:hover,
		.btn:active,
		.btn:focus {
			display: flex;
			align-items: center;
			justify-content: center;
			border: none;
			gap: 16px;
			height: 52px;			
			color: white;
			font-size: 16px;
			background-color: #E40613;
			cursor: pointer;
		}

		.swiper-slide {			
			display: flex;
			flex-direction: column;
			align-items: flex-end;
			gap: 16px;
			width: auto;			
		}		

		.swiper-slide span {
			font-size: 14px;
			line-height: 1.43;
			text-align: right;
		}	

		.page-1-4-content {
			border: 1px solid rgba(213, 219, 222, 0.45);
			padding: 20px;
		}

		.page-1-4-content__item {
			display: flex;
			align-items: flex-start;
			gap: 28px;
		}

		.page-1-4-content__item:not(:last-child) {
			border-bottom: 1px solid #ECEEF0;
		}

		.page-1-4-content__text {
			display: flex;
			flex-direction: column;
			gap: 8px;
		}

		.page-1-4-content__text p {
			display: flex;
			flex-direction: column;
			font-size: 18px;
			margin: 0;
		}

		.page-1-4-content__item-img {
			display: flex;
			align-items: center;
			flex-direction: column;
			gap: 4px;
			font-size: 14px;
			width: 50px;
		}

		.whatsapp-form {
			display: flex;
			flex-direction: column;
			gap: 12px;
			margin-bottom: 10px;
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
			border: 1px solid black;
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
			gap: 8px;
		}

		.form-socials a {
			display: flex;
			align-items: center;
			justify-content: center;
			flex: none;
			width: 40px;
			height: 40px;
			border: 1px solid black;
		}

		.form-socials a amp-img {
			transform: scale(.7);			
		}

		.form-socials-text {
			font-size: 14px;
			line-height: 1.57;
			letter-spacing: -0.02em;
			color: black;
			margin-left: 11px;
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
			color: black;
			height: 48px;
			outline: none;
			padding: 0 16px;
		}

		.input-label {
			font-size: 13px;			
			color: black;
		}

		.subscription-text {
			font-size: 12px;
			line-height: 1.33;			
			letter-spacing: -0.02em;
			color: #8E9FAC;
		}		

		.marked-list {
			display: flex;
			flex-direction: column;
			gap: 6px;
			font-size: 14px;
			padding: 0;
			margin: 0 0 24px;
		}

		.marked-list li {
			display: flex;
			align-items: center;
			gap: 8px;
			list-style: none;		
			color: #484748;	
		}

		.marked-list li::before {
			content: '';
			width: 5px;
			height: 5px;
			background-color: #E30613;
			flex: none;			
		}

		.list-title {
			font-weight: 400;
			font-size: 21px;			
			letter-spacing: -0.02em;
			color: #000000;
			margin: 0 0 10px;
		}

		@media (max-width: 375px) {
			
			.page-text {
				font-size: 14px;			
			}
			
			.swiper-slide img {
				height: 170px;
				object-fit: cover;
				object-position: left top;
			}

			.swiper-slide span {
				font-size: 12px;
				line-height: 1.33;				
			}	

			.slider__navigation {				
				margin-top: 16px;
			}

			.cta-layer {			
				padding-bottom: 20px;
			}

			.page-1-4-content__text p {				
				font-size: 14px;				
			}
		}

		@media (orientation: landscape) {
			.page-title {				
				/* font-size: 4.5vh;				 */
			}

			.page-title_primary {
				font-size: 8vh;
			}

			.page-text {
				font-size: 2vh;				
			}

			.content-layer {
				padding: 90px 30px 0;
			}

			.btn,
			.btn:hover,
			.btn:active,
			.btn:focus {				
				height: 8vh;							
				font-size: 2vh;				
			}

			.page-1-4-content__text p {			
				font-size: 2vh;				
			}

			.marked-list {				
				font-size: 18px;				
			}
		}
				
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="Main Street">		

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page-int-1">
			<amp-story-grid-layer template="fill">
				<amp-img src="./assets/int-1-img.jpg"
					width="320"
					height="640"
					layout="responsive"
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" onclick="window.location='#page=page1-2'" class="btn" grid-area="lower-third" style="margin-top: auto;">
					Дом шедевр
				</a>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div>
					<h1 class="page-title page-title_large" style="margin: 0 0 2vh;">
						<span>Клубный дом</span>
						<span style="align-self: flex-end; color: #E30613;">RED7</span>
					</h1>
					<p class="page-text">
						Модный, дерзкий, ошеломляющий,
						приковывает к&nbsp;себе внимание яркой индивидуальностью, выходит за&nbsp;рамки привычного пространства и&nbsp;времени.
					</p>						
				</div>				
			</amp-story-grid-layer>
		</amp-story-page>	

		<!-- PAGE 2 -->
		<amp-story-page id="page1-2">			
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="content-layer" style="padding-top: 70px;">
				<div>
					<h1 class="page-title page-title_large" style="margin: 0 0 3vh;">
						<span>Дом&nbsp;&ndash;&nbsp;<span style="color: #E30613;">шедевр</span></span>						
					</h1>										
					<h2 class="list-title">В RED7 сошлось все:</h2>
					<ul class="marked-list">
						<li>Расположение в&nbsp;историческом центре</li>
						<li>МосквыАрхитектурная индивидуальность</li>
						<li>Премиальные сервисы дома</li>
					</ul>
					<div class="carousel" style="height: 350px; position: relative; top: -50px;">
						<a class="carousel-item" style="width: 319px; height: 209px;">
							<img width="319" height="209" src="./assets/interstitial-slider/slide-1.jpg">
						</a>
						<a class="carousel-item" style="width: 193px; height: 273px;">
							<img width="193" height="273" src="./assets/interstitial-slider/slide-2.jpg">
						</a>
						<a class="carousel-item" style="width: 209px; height: 278px;">
							<img width="209" height="278" src="./assets/interstitial-slider/slide-3.jpg">
						</a>						
					</div>
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Подберем апартаменты для Вас
				</a>
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
      background-color: white;
      transition: all .3s;
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
		document.addEventListener('DOMContentLoaded', function() {
			var elem = document.querySelector('.carousel');
			var instance = M.Carousel.init(elem, {
				dist: -300,
				shift: -10,
				numVisible: 3,
			});

			setInterval(() => {
				instance.next();
			}, 3000)
		});
	</script>

<script type="text/javascript">
		var __cs = __cs || [];
		__cs.push(["setCsAccount", "P9MGH_SwFkyiulNp2y0zlvS_NsTzwYlk"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>