<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="layout.html">
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
			background-color: white;
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

		.red {
			color: #E63E1F;
		}

		/* .location-image-layer {
			padding: 39.42vh 0 0;
		} */

		.location-image-cnt {
			display: flex;
			align-items: flex-end;
			height: 265px;
			background: url('./assets/location/page1-img.png') no-repeat left center;
			background-size: contain;
			font-size: 15px;
			color: rgba(103, 105, 104, 1);
			padding: 0 20px 0 50vw;
		}

		.location-image-cnt span {
			color: #676968;
			font-size: 15px;
		}

		.location-image-cnt span b {
			font-weight: 600;
			color: black;
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

		.btn:hover,
		.btn:active,
		.btn:focus {
			background-color: #E63E1F !important;
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

		.page-2-1-decor {
			justify-items: flex-end;
			padding: 68px 0 0;
		}

		.page-2-2-list {
			display: flex;
			flex-direction: column;
			gap: 18px;
			padding: 0;
			margin: 0;
		}

		.page-2-2-list-item {
			display: flex;
			align-items: center;
			list-style: none;
			font-family: 'Bebas Neue';
			font-size: 24px;
			text-transform: uppercase;
			letter-spacing: 0.01em;
		}

		.page-2-2-list-item amp-img {
			margin: 0 16px 0 20px;
		}

		.page-2-2-list-item-time {
			font-family: 'Rubik';
			font-size: 18px;
			text-transform: none;
		}

		.page-2-2-list-item::before {
			content: '';
			width: 5px;
			height: 5px;
			border-radius: 50%;
			background-color: #E63E1F;
			margin-right: 7px;
		}

		.page-2-3-list {
			display: flex;
			flex-direction: column;
			gap: 15px;
			padding: 0;
			margin: 0;
		}

		.page-2-3-list-item {
			display: flex;
			align-items: center;
			gap: 10px;
			font-size: 15px;
			list-style: none;
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
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- COVER PAGE -->
		<amp-story-page id="page-2-1">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="page-2-1-decor" animate-in="fade-in" animate-in-duration="1s">
				<amp-img src="./assets/location/location-decor.svg" width="59" height="296" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title" style="padding-left: 20px;">
					Комплекс апартаментов<br>
					<span class="red">на главном проспекте cтолицы</span>
				</h1>
				<div class="location-image-cnt">
					<span>
						Кутузовский — первый московский проспект <b>концепции «без светофоров»</b>
					</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn btn_arrowed" role="button" onclick="window.location='location.php#page=page-2-2'">
						Дальше
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 2-2 -->
		<amp-story-page id="page-2-2">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" style="justify-content: flex-start; align-content: flex-start; padding: 0 131px 0 0;" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/location/page2-2-decor.svg" width="85" height="64" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title">
					<span class="red">Доступная</span> Москва
				</h1>
				<ul class="page-2-2-list">
					<li class="page-2-2-list-item">«Москва-сити»
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">12 мин</span>
					</li>
					<li class="page-2-2-list-item">ТРЦ «океания»
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">10 мин</span>
					</li>
					<li class="page-2-2-list-item">Трц «Времена года»
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">10 мин</span>
					</li>
					<li class="page-2-2-list-item">парк победы
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">8 мин</span>
					</li>
					<li class="page-2-2-list-item">Филевский парк
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">15 мин</span>
					</li>
					<li class="page-2-2-list-item">Кремль
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">17 мин</span>
					</li>
					<li class="page-2-2-list-item">Патриаршие пруды
						<amp-img src="./assets/location/auto-icon.svg" width="23" height="16" alt="">
						</amp-img>
						<span class="page-2-2-list-item-time">20 мин</span>
					</li>
				</ul>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control callback-form" role="button">
						Подберём варианты для вас
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 2-3 -->
		<amp-story-page id="page-2-3">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" style="justify-content: flex-start; align-content: flex-start; padding: 0 131px 0 0;" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/location/page2-2-decor.svg" width="85" height="64" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" animate-in="fade-in" animate-in-duration="1s">
				<div>
					<h1 class="page-title" style="margin-bottom: 0;">
						<span class="red">Насыщенная</span> инфраструктура
					</h1>
					<span class="page-subtitle">Все что нужно для гармоничной жизни:</span>
					<ul class="page-2-3-list">
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_1.svg" width="30" height="33" alt="">
							</amp-img>
							парки
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_2.svg" width="30" height="27" alt="">
							</amp-img>
							детские сады
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_3.svg" width="30" height="30" alt="">
							</amp-img>
							школы
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_4.svg" width="30" height="29" alt="">
							</amp-img>
							спортивные объекты
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_5.svg" width="30" height="30" alt="">
							</amp-img>
							торговые центры
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_6.svg" width="30" height="31" alt="">
							</amp-img>
							фитнес-клубы
						</li>
						<li class="page-2-3-list-item">
							<amp-img src="./assets/location/page2-3_7.svg" width="30" height="30" alt="">
							</amp-img>
							рестораны
						</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control callback-form" role="button">
						Подробнее о всех преимуществах
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
</body>

</html>