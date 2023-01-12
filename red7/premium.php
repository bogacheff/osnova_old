<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>RED7</title>
	<link rel="canonical" href="index.html">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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
			font-size: 32px;
			font-weight: 300;
			color: #000;
		}

		.page-title_primary {
			font-size: 48px;
		}

		.content-layer {
			padding: 70px 20px 0;
		}

		.page-text {
			font-size: 14px;
			line-height: 1.57;
			color: #484748;
		}			

		.cta-layer {			
			padding: 0 20px 32px;
		}

		.btn {
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

		.marked-list {
			display: flex;
			flex-direction: column;
			gap: 6px;
			padding: 0;
			margin: 0;
		}

		.marked-list li {
			display: flex;
			align-items: flex-start;
			gap: 16px;
			list-style: none;
			font-size: 18px;
			line-height: 1.3;
			color: #6D6D6D;
		}

		.marked-list li::before {
			content: '';
			width: 5px;
			height: 5px;
			background: #E30613;
			flex: none;
			margin-top: 10px;
		}

		.bottom-gradient {
			position: relative;
			bottom: -6px;
			height: 85px;
			background: linear-gradient(to top, #000 0%, rgba(0,0,0,0) 100%);
			opacity: .3;
			margin-top: auto;
		}

		.bottom-gradient-layer {
			padding: 0;
		}

		.attachment-container {
			padding: 20px;
		}

		.attachment-title {
			font-weight: 300;
			font-size: 20px;
			letter-spacing: -0.02em;
			text-transform: uppercase;
			color: #050006;
		}

		.attachment-block-title {
			display: flex;
			align-items: center;
			gap: 14px;
			font-weight: 300;
			font-size: 21px;						
			letter-spacing: -0.02em;
			color: #000000;
			margin: 0 0 9px;
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
			color: #000;	
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

		@media (max-width: 375px) {
					
			.cta-layer {			
				padding-bottom: 20px;
			}	
			
			.page-title {
				font-size: 28px;
			}

			.marked-list li {		
				gap: 9px;				
				font-size: 14px;				
			}

			.marked-list li::before {			
				margin-top: 7px;
			}
		}
				
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="RED7">

		<?php require_once('sidebar.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page6-1">			
			<amp-story-grid-layer template="vertical" style="padding: 0;">
				<amp-img src="./assets/page-6-1-bg.jpg"
					width="360"
					height="230"
					layout="responsive"
					alt="">
				</amp-img>	
				<div style="padding: 0 20px;">
					<h1 class="page-title" style="margin: 0 0 20px;">
						<span>Encore</span>
						<span style="align-self: center; color: #E30613;">Fitness & SPA</span>
						<span style="align-self: flex-end; color: #E30613;">в Вашем доме</span>
					</h1>
					<ul class="marked-list">
						<li>2 этажа дома площадью 3 500 кв. м.</li>
						<li>25-ти метровый бассейн</li>
						<li>термальный комплекс</li>
						<li>групповые и&nbsp;персональные тренинги</li>
					</ul>
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo_white.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Записаться на показ					
				</a>
			</amp-story-grid-layer>				
		</amp-story-page>	
		
		<!-- PAGE 2 -->
		<amp-story-page id="page6-2">			
			<amp-story-grid-layer template="vertical" style="padding: 0;">
				<amp-img src="./assets/page-6-2-bg.jpg"
					width="360"
					height="230"
					layout="responsive"
					alt="">
				</amp-img>	
				<div style="padding: 0 20px;">
					<h1 class="page-title" style="margin: 0 0 20px;">
						<span>Круглосуточный</span>						
						<span style="align-self: flex-end; color: #E30613;">консьерж-сервис</span>
					</h1>
					<p class="page-text" style="margin-bottom: 10px;"><b>Доверьте опытным консьержам:</b></p>
					<ul class="marked-list">
						<li>уборку апартаментов</li>
						<li>химчистку и ремонт</li>
						<li>заказ билетов и трансферов</li>
						<li>бронирование столиков в ресторане</li>
						<li>заказ еды </li>
						<li>вызов такси</li>
						<li>заказ и доставку подарков</li>						
					</ul>
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo_white.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Записаться на показ					
				</a>
			</amp-story-grid-layer>				
		</amp-story-page>	

		<!-- PAGE 3 -->
		<amp-story-page id="page6-3">			
			<amp-story-grid-layer template="vertical" style="padding: 0;">
				<amp-img src="./assets/page-6-3-bg.jpg"
					width="360"
					height="230"
					layout="responsive"
					alt="">
				</amp-img>	
				<div style="padding: 0 20px;">
					<h1 class="page-title" style="margin: 0 0 20px;">
						<span>4-х уровневый</span>						
						<span style="color: #E30613;">паркинг</span>
					</h1>
					<ul class="marked-list">
						<li>коэффициент 1:1</li>											
						<li>боксы для хранения сезонных вещей</li>
						<li>отдельная площадка для служб доставки и&nbsp;разгрузки грузовых автомобилей</li>
					</ul>
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo_white.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Записаться на показ					
				</a>
			</amp-story-grid-layer>				
		</amp-story-page>	
	</amp-story>	

	<style>
    #sidebar {
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

    #sidebar.shown {
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
      #sidebar {
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
      const sidebarEl = document.querySelector('#sidebar');
      const controlElems = document.querySelectorAll('.sidebar-control');
      const closeElem = document.querySelector('.sidebar-close');

      closeElem.onclick = () => {
        sidebarEl.classList.remove('shown');
        if (!!playerControlEl) {
          playerControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
      }

      controlElems.forEach(elem => elem.onclick = () => {
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
</body>

</html>