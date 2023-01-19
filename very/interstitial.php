<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Very</title>
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
	
		@keyframes falling {
			0% {
				opacity: 0;
				transform: translateY(0);
			}
			25% {
				opacity: 1;
				transform: translateY(100%);
			}
			80% {				
				opacity: 1;
				transform: translateY(300%);
			}
			100% {				
				transform: translateY(330%);
				opacity: 0;
			}
		}

		@keyframes rocking {
			0% {
				transform: translateX(-50%) rotate(35deg);
			}
			100% {
				transform: translateX(50%) rotate(-35deg);
			}
		}
		
		@font-face {
			font-family: 'Open Sans';
			src: url('./assets/fonts/OpenSans-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}

		@font-face {
			font-family: 'Open Sans';
			src: url('./assets/fonts/OpenSans-Bold.ttf');
			font-style: normal;
			font-weight: 700;
		}

		@font-face {
			font-family: 'Roboto';
			src: url('./assets/fonts/Roboto-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}

		@font-face {
			font-family: 'Oranienbaum';
			src: url('./assets/fonts/Oranienbaum-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}
		
		amp-story-page {
			background-color: #fff;
		}

		body {
			font-family: 'Open Sans';
		}

		.logo-layer {
			justify-items: flex-end;
			padding: 3.125vh 30px;
		}

		.page-title {
			display: flex;
			align-items: center;
			gap: 3.33vw;
			font-family: 'Oranienbaum';
			font-weight: 400;
			font-size: 6.25vh;
			line-height: 1;
			color: #205640;
			text-align: center;
			margin: 0 0 2.5vh
		}

		.page-title img {
			position: relative;
			top: -5px;
		}

		.content-layer {
			padding: 10vh 30px 0;
		}

		.page-text {			
			font-size: 2vh;
			line-height: 1.85;
			text-align: center;
			letter-spacing: 0.02em;
			text-transform: uppercase;
			color: #3F4440;
			margin: 0 0 3.125vh;
		}				

		.cta-layer {			
			padding: 0 30px 32px;
		}

		.btn {
			display: flex;
			align-items: center;
			justify-content: center;
			border: none;
			gap: 19px;
			height: 62px;
			border-radius: 31px;
			color: white;
			font-size: 16px;
			background-color: #4D9D34;
			cursor: pointer;
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
			width: 100%;
			height: 48px;
			border-radius: 24px;
			border: none;
			background: #F8F8F8;
			box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.03);
			font-size: 18px;
			padding: 0 20px;
		}

		.input-label {
			font-family: 'Open Sans';
			font-weight: 600;
			font-size: 13px;			
			color: #3F4440;
		}

		.subscription-text {
			font-size: 12px;
			line-height: 1.33;
			letter-spacing: -0.02em;
			color: #8E9FAC;
		}

		.form-socials {
			display: flex;
			align-items: center;
			gap: 9px;
		}

		.form-socials-text {
			font-weight: 400;
			font-size: 15px;
			line-height: 1.47;	
			color: #8E9FAC;
			margin-left: 14px;
		}	

		.page-subtitle {
			font-weight: 400;
			font-size: 14px;
			line-height: 1.57;
			color: #3F4440;
		}

		.title-layer {
			padding: 15vh 20px 0;
		}

		.leaves-layer {
			height: 100vh;		
			padding: 0;
		}

		.leave {
			animation-name: falling;
			animation-duration: 12s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}

		.leave-img {
			animation-name: rocking;
			animation-duration: 4s;
			animation-direction: alternate;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
		}

		.whatsapp-form {
			display: flex;
			flex-direction: column;
			gap: 12px;
		}

		.whatsapp-form__submit-btn {
			margin: 7.5vh 0 2.34vh;
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
			border-radius: 24px;
			border: none;
			background: #F8F8F8;
			box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.03);
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
			background: #F8F8F8;
			position: relative;
			bottom: -3px;
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
			gap: 9px;
		}

		.form-socials-text {
			font-size: 15px;
			line-height: 1.47;
			color: #8E9FAC;
		}

		.block-title {
			font-family: 'Oranienbaum';
			font-weight: 400;
			font-size: 28px;
			color: rgba(63, 68, 64, 1);
		}

		@media (max-width: 375px) {
			.cta-layer {			
				padding-bottom: 20px;
			}	

			.content-layer {
				padding: 10.3vh 30px 0;
			}
		}

		@media (orientation: landscape) {
			.page-text {			
				font-size: 2vh;				
			}	
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="Very">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page-int-1">				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column; align-items: center;">
					<h1 class="page-title">
						<img
							src="./assets/very-logo.svg"
							width="143"
							height="37"
							alt=""
						>
						— это:
					</h1>
					<p class="page-text">
						Открыть дверь и&nbsp;попасть в&nbsp;парк.<br>
						Услышать шум леса, а&nbsp;не&nbsp;машин.
					</p>	
					<amp-img src="./assets/int-1-img.jpg" style="margin-bottom: 1.875vh;"
						width="277"
						height="331"						
						alt="">
					</amp-img>	
					<p class="page-text">
						Оказаться на&nbsp;природе в&nbsp;Мегаполисе.
					</p>				
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="leaves-layer">
				<div class="position: relative;">
					<div class="leave" style="margin-top: 34vh;">
						<img class="leave-img" src="./assets/leaves/leave-1.png"
							width="89"
							height="75"						
							alt="">					
					</div>
					<div style="position: absolute; top: 62vh; right: 10px;">
						<img class="leave-img" src="./assets/leaves/leave-2.png" style="animation-duration: 8s;"
							width="81"
							height="88"						
							alt="">					
					</div>
				</div>				
			</amp-story-grid-layer>
		</amp-story-page>	
		
		<!-- PAGE 2 -->
		<amp-story-page id="page-int-2">				
			<amp-story-grid-layer template="vertical" class="content-layer" style="padding-left: 0; padding-right: 0;">
				<div style="display: flex; flex-direction: column; align-items: center;">
					<h1 class="page-title">
						<img
							src="./assets/very-logo.svg"
							width="143"
							height="37"
							alt=""
						>
						— это:
					</h1>
					<p class="page-text" style="margin-bottom: 6.25vh;">
						Ощущать, как весна сменяет зиму,<br>
						слышать, как дышит земля после дождя…
					</p>	
					<img src="./assets/int-2-img.jpg" style="width: 100%;" animate-in="fade-in" animate-in-duration="2s"
						width="360"
						height="234"						
						alt="">					
					<p class="page-text" style="margin-top: 4vh;">
						Единственный в&nbsp;Москве<br>
						эко-квартал в&nbsp;окружении 600&nbsp;га<br>
						зеленых прогулочных зон
					</p>				
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="leaves-layer">
				<div class="position: relative;">
					<div style="margin-top: 61vh; margin-left: 5.6vw;">
						<img class="leave-img" src="./assets/leaves/leave-3.png"
							width="64"
							height="73"						
							alt="">					
					</div>
					<div style="position: absolute; top: 28vh; right: -10px;">
						<img class="leave-img" src="./assets/leaves/leave-4.png" style="animation-duration: 8s; animation-delay: .5s;"
							width="125"
							height="120"						
							alt="">					
					</div>
				</div>				
			</amp-story-grid-layer>
		</amp-story-page>	

		<!-- PAGE 3 -->
		<amp-story-page id="page-int-3">			
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Получить индивидуальную подборку					
				</a>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="content-layer" style="padding-left: 0; padding-right: 0;">
				<div style="display: flex; flex-direction: column; align-items: center;">
					<h1 class="page-title">
						<img
							src="./assets/very-logo.svg"
							width="143"
							height="37"
							alt=""
						>
						— это:
					</h1>
					<p class="page-text" style="margin-bottom: 6.25vh;">
						Замедлиться,<br>
						чтобы почувствовать течение жизни
					</p>	
					<img src="./assets/int-3-img.jpg" style="width: 100%;" animate-in="fade-in" animate-in-duration="2s"
						width="360"
						height="234"						
						alt="">					
					<p class="page-text" style="margin-top: 4vh;">
						Наслаждаться живописными видами<br>
						из окна своей квартиры
					</p>				
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="leaves-layer">
				<div class="position: relative;">
					<div style="margin-top: 28vh; margin-left: -10px;">
						<img class="leave-img" src="./assets/leaves/leave-5.png" style="animation-duration: 7s"
							width="109"
							height="120"						
							alt="">					
					</div>
					<div style="position: absolute; top: 63vh; right: 20px;">
						<img class="leave-img" src="./assets/leaves/leave-6.png" style="animation-duration: 8s; animation-delay: 1.5s;"
							width="80"
							height="75"						
							alt="">					
					</div>
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
		const controlButtons = document.querySelectorAll('.slider__control');
		let timer = setInterval(nextSlide, 3000);

		const swiper = new Swiper('.slider', {			
			slidesPerView: 1,
			spaceBetween: 10,
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
					timer = setInterval(nextSlide, 3000);
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