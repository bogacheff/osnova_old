<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="layout.html">
	<meta name="format-detection" content="telephone=no">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<style amp-custom>
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

		@font-face {
			font-family: 'Montserrat';
			src: url('./assets/fonts/Montserrat-Medium.ttf');
			font-style: normal;
			font-weight: 500;
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
			font-family: 'Oranienbaum';
			font-weight: 400;
			font-size: 40px;
			line-height: 1;
			color: #3F4440;
			margin: 0 0 1.875vh
		}

		.content-layer {
			padding: 10.3vh 30px 0;
		}

		.page-text {			
			font-size: 14px;
			line-height: 1.43;
			color: #3F4440;
			margin: 0 0 3.125vh;
		}
		
		.page-text_white {						
			color: white;			
		}	

		.layout-layer {
			background: #F4F4F4;
			padding: 9.4vh 20px 0;
		}

		.layout-title {
			font-family: 'Bebas Neue';
			font-weight: 400;
			font-size: 34px;
			line-height: 1;
			text-transform: uppercase;
			letter-spacing: 0.01em;
			margin: 0 0 25px;
		}

		.layout-image {
			margin: 0 auto;
		}

		.layout-layer__cnt {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}

		.layout-content-layer {
			padding: 42vh 0 0;
		}

		.layout-content-layer_short {
			padding: 70vh 0 0;
		}

		.layout-content-layer__cnt {
			background-color: #fff;
			height: 58vh;
			padding: 40px 20px 0;
		}

		.layout-content-layer_short .layout-content-layer__cnt {
			height: 30vh;
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
			width: 100%;
			border-radius: 31px;
			color: white;
			font-size: 16px;
			background-color: #4D9D34;
			cursor: pointer;
			box-shadow: none;
		}

		.btn:hover {
			background-color: #4D9D34 !important;
			box-shadow: none;
		}

		.btn_small-font {
			text-transform: none;
			font-size: 14px;
		}

		.btn_dark {			
			background-color: #205640;			
		}

		.btn_dark:hover {			
			background-color: #205640 !important;			
		}

		.marked-list {
			display: flex;
			flex-direction: column;
			gap: 8px;
			font-size: 14px;
			line-height: 1.43;
			color: #3F4440;
			padding: 0;
			margin: 0;
		}

		.marked-list li {
			display: flex;
			align-items: flex-start;
			gap: 10px;
			list-style: none;			
		}

		.marked-list li::before {
			content: '';
			width: 3px;
			height: 3px;
			border-radius: 50%;
			background-color: #3F4440;
			position: relative;
			top: 9px;
		}

		.attachment-list {
			display: flex;
			flex-direction: column;
			padding: 0;
			margin: 0;
		}
		
		.attachment-list li {
			display: flex;
			align-items: center;
			list-style: none;			
			height: 52px;
			border-bottom: 1px solid #E2DFCA;
			font-size: 14px;
			line-height: 1.43;
			color: #3F4440;
		}

		.attachment-list li:first-of-type {			
			border-top: 1px solid #E2DFCA;			
		}

		.block-title {
			font-family: 'Oranienbaum';
			font-weight: 400;
			font-size: 28px;
			color: rgba(63, 68, 64, 1);
		}

		.attachment-container {
			padding: 12px 30px 60px;
		}

		.page-subsciption {
			padding: 0 30px 0;
		}

		.page-subsciption .page-text {
			display: block;
			margin: auto 0 128px;
		}

		.attachment-item {
			border: 1px solid #E2DFCA;
			padding: 34px 24px;
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

		.messengers-popup {
			display: none;
			align-items: center;
			flex-direction: column;
			gap: 8px;
			width: 124px;
			position: absolute;
			left: 50%;
			top: 0;
			z-index: 999;
			transform: translateY(calc(-100% - 15px)) translateX(-50%);
			background: #FFFFFF;
			box-shadow: 0px 0px 90px rgba(0, 0, 0, 0.08), 0px 4.2126px 21.063px rgba(0, 0, 0, 0.15);
			border-radius: 12px;
			padding: 11px;
		}

		.messengers-popup::after {
			content: '';
			width: 12px;
			height: 6px;
			background: url('./assets/popup-pointer.svg') no-repeat center;
			background-size: contain;
			position: absolute;
			bottom: -6px;
			left: calc(50% - 6px);
		}

		.messengers-popup.active {
			display: flex;
		}

		.messengers-popup button {
			position: relative;
			/* z-index: 10; */
			width: 36px;
			height: 36px;
			border: none;
			background: none;
			padding: 0;
		}

		/* .messengers-popup a img {
			position: absolute;
			top: 0;
			left: 0;
			width: 36px;
			height: 36px;
		} */

		.messengers-popup__buttons {
			display: flex;
			align-items: center;
			gap: 11px;
		}

		.messengers-popup__title {
			font-size: 12px;
			letter-spacing: -0.02em;
			color: #676968;
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

		.layout-params-list {
			display: flex;
			flex-direction: column;
			gap: 17px;
		}

		.layout-params-list li {
			display: flex;
			align-items: center;
			gap: 9px;
		}

		.layout-params-list .page-text {
			margin: 0;
		}

		.ordered-list {
			display: flex;
			flex-direction: column;
			gap: 5px;
			padding: 0;
			margin: 0 0 0 20px;
		}

		.ordered-list li {
			font-weight: 400;
			font-size: 13px;						
			color: #373A3B;
		}

		.price-block {
			display: block;
			font-family: 'Montserrat';
			font-weight: 500;
			font-size: 24px;		
			letter-spacing: 0.01em;			
			color: #3F4440;
			width: fit-content;
			margin: 0 auto;
		}

		.cta-layer {
			padding: 0 20px 20px 20px;
		}

		.cta-layer__cnt {
			display: flex;
			align-items: flex-end;
		}

		.carousel-item img {
			box-shadow: 0px 3.39804px 25.4853px -2.54853px rgba(0, 0, 0, 0.1);
			width: 200px;
			height: 200px;
			object-fit: cover;
		}

		@media (max-width: 375px) {
			.cta-layer {			
				padding-bottom: 20px;
			}

			.swiper-slide {
				height: 30vh;				
			}

			.parks-list__item img {
				width: 32px;
				height: auto;
			}

			.page-1-3-content {
				padding: 235px 30px 0;
			}

			.page-1-4-content {
				padding-top: 340px;
			}

			.page-1-4-gradient {
				padding: 230px 0 0;
			}

			.page-subsciption .page-text {				
				margin-bottom: 108px;
			}

			.page-title {
				font-size: 28px;
			}		

			.whatsapp-form__submit-btn {
				margin: 2.5vh 0 1.5vh;
			}
		}

		@media (orientation: landscape) {
			.layout-content-layer {
				padding: 45vh 0 0;
			}
			
			.layout-content-layer__cnt {				
				height: 55vh;				
			}

			.layout-content-layer_short {
				padding: 70vh 0 0;
			}

			.layout-content-layer_short .layout-content-layer__cnt {
				height: 30vh;
			}
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="Very">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- Page 5-1 -->
		<amp-story-page id="page-5-1">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-1.png" width="219" height="219" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 30px;">Квартира-студия 23.46 м²</h1>
					<ul class="layout-params-list" style="margin-bottom: 34px;">
						<li>
							<amp-img src="./assets/layouts-icons/windows-icon.svg"
								width="32"
								height="28"								
								alt="">
							</amp-img>
							<span class="page-text">Панорамные окна</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/botanic-view.svg"
								width="32"
								height="30"								
								alt="">
							</amp-img>
							<span class="page-text">Вид на Малый Ботанический сад</span>
						</li>							
					</ul>
					<span class="price-block">10 369 320 ₽</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-container" style="padding-left: 20px; padding-right: 20px;">
					<h2 class="block-title" style="margin: 0 0 12px;">Общая площадь - 23.46 м²</h2>
					<ol class="ordered-list">
						<li>Кухня-гостиная — 16.53 м²</li>
						<li>Коридор — 3.74 м²</li>
						<li>Санузел — 3.19 м²</li>
					</ol>
					<h2 class="block-title">Особенности</h2>
					<ul class="attachment-list" style="margin-bottom: 40px;">
						<li>Панорамные окна</li>
						<li>Вид на Малый Ботанический сад</li>						
					</ul>
					<div style="position: relative;">
						<button class="btn btn_small-font" style="margin-bottom: 16px;" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</button>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<button role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</button>
								<button role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</button>
							</div>
						</div>
						<button role="button" class="btn btn_dark btn_small-font sidebar-control">Получить индивидуальную подборку</button>
					</div>					
				</div>
			</amp-story-page-attachment>					
		</amp-story-page>

		<!-- Page 5-2 -->
		<amp-story-page id="page-5-2">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-2.png" width="219" height="219" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 30px;">1-комнатная квартира 42.18 м²</h1>
					<ul class="layout-params-list" style="margin-bottom: 33px;">
						<li>
							<amp-img src="./assets/layouts-icons/windows-icon.svg"
								width="32"
								height="28"								
								alt="">
							</amp-img>
							<span class="page-text">Панорамные окна</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/wardrobe-icon.svg"
								width="32"
								height="32"								
								alt="">
							</amp-img>
							<span class="page-text">Гардеробная</span>
						</li>							
					</ul>
					<span class="price-block">15 600 000 ₽</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-container" style="padding-left: 20px; padding-right: 20px;">
					<h2 class="block-title" style="margin: 0 0 12px;">Общая площадь - 42.18 м²</h2>
					<ol class="ordered-list">
						<li>Гостиная — 18.9 м²</li>
						<li>Кухня — 14.01 м²</li>
						<li>Коридор — 5.69 м²</li>
						<li>Санузел — 3.58 м²</li>
					</ol>
					<h2 class="block-title">Особенности</h2>
					<ul class="attachment-list" style="margin-bottom: 40px;">
						<li>Панорамные окна</li>
						<li>Гардеробная</li>
						<li>Прихожая без транзитных путей</li>
						<li>Вид на Малый Ботанический сад</li>						
					</ul>
					<div style="position: relative;">
						<button class="btn btn_small-font" style="margin-bottom: 16px;" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</button>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<button role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</button>
								<button role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</button>
							</div>
						</div>
						<button onclick="window.location='./layouts.php#page=page-5-11'" class="btn btn_dark btn_small-font sidebar-control">Получить индивидуальную подборку</button>
					</div>	
				</div>
			</amp-story-page-attachment>					
		</amp-story-page>

		<!-- Page 5-3 -->
		<amp-story-page id="page-5-3">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-3.png" width="219" height="219" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 30px;">2-комнатная квартира 46.05 м²</h1>
					<ul class="layout-params-list" style="margin-bottom: 33px;">
						<li>
							<amp-img src="./assets/layouts-icons/multispace-icon.svg"
								width="32"
								height="28"								
								alt="">
							</amp-img>
							<span class="page-text">Мультипространство (без несущих стен)</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/euroformat-icon.svg"
								width="32"
								height="32"								
								alt="">
							</amp-img>
							<span class="page-text">Квартира евроформата</span>
						</li>							
					</ul>
					<span class="price-block">18 558 150 ₽</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-container" style="padding-left: 20px; padding-right: 20px;">
					<h2 class="block-title" style="margin: 0 0 12px;">Общая площадь — 46.05 м²</h2>
					<ol class="ordered-list">
						<li>Кухня-гостиная — 23.97 м²</li>
						<li>Спальня — 13 м²</li>
						<li>Коридор — 4.9 м²</li>
						<li>Санузел — 4.18 м²</li>
					</ol>
					<h2 class="block-title">Особенности</h2>
					<ul class="attachment-list" style="margin-bottom: 40px;">
						<li>Панорамные окна</li>
						<li>Мультипространство (без несущих стен)</li>
						<li>Вид на Малый Ботанический сад</li>
						<li>Квартира евроформата</li>
						<li>Квартира с большой ванной комнатой</li>						
					</ul>
					<div style="position: relative;">
						<button class="btn btn_small-font" style="margin-bottom: 16px;" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</button>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<button role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</button>
								<button role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</button>
							</div>
						</div>
						<button onclick="window.location='./layouts.php#page=page-5-11'" class="btn btn_dark btn_small-font sidebar-control">Получить индивидуальную подборку</button>
					</div>	
				</div>
			</amp-story-page-attachment>					
		</amp-story-page>

		<!-- Page 5-4 -->
		<amp-story-page id="page-5-4">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-4.png" width="219" height="219" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 30px;">2-комнатная квартира 51.67 м²</h1>
					<ul class="layout-params-list" style="margin-bottom: 33px;">
						<li>
							<amp-img src="./assets/layouts-icons/euroformat-icon.svg"
								width="32"
								height="32"								
								alt="">
							</amp-img>
							<span class="page-text">Квартира евроформата</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/bathroom-icon.svg"
								width="32"
								height="30"								
								alt="">
							</amp-img>
							<span class="page-text">Квартира с большой ванной комнатой</span>
						</li>							
					</ul>
					<span class="price-block">20 668 000 ₽</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-container" style="padding-left: 20px; padding-right: 20px;">
					<h2 class="block-title" style="margin: 0 0 12px;">Общая площадь — 51.67 м²</h2>
					<ol class="ordered-list">
						<li>Кухня-гостиная — 26.69 м²</li>
						<li>Спальня — 16.77 м²</li>
						<li>Коридор — 3.18 м²</li>
						<li>Санузел — 5.03 м²</li>
					</ol>
					<h2 class="block-title">Особенности</h2>
					<ul class="attachment-list" style="margin-bottom: 40px;">
						<li>Панорамные окна</li>
						<li>Мультипространство (без несущих стен)</li>
						<li>Вид на Малый Ботанический сад</li>
						<li>Квартира евроформата</li>
						<li>Квартира с большой ванной комнатой</li>											
					</ul>
					<div style="position: relative;">
						<button class="btn btn_small-font" style="margin-bottom: 16px;" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</button>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<button role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</button>
								<button role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</button>
							</div>
						</div>
						<button onclick="window.location='./layouts.php#page=page-5-11'" class="btn btn_dark btn_small-font sidebar-control">Получить индивидуальную подборку</button>
					</div>	
				</div>
			</amp-story-page-attachment>					
		</amp-story-page>

		<!-- Page 5-5 -->
		<amp-story-page id="page-5-5">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-5.png" width="219" height="219" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 30px;">3-комнатная квартира 72.27 м²</h1>
					<ul class="layout-params-list" style="margin-bottom: 33px;">
						<li>
							<amp-img src="./assets/layouts-icons/compass-icon.svg"
								width="32"
								height="32"								
								alt="">
							</amp-img>
							<span class="page-text">Окна с видом на 2 стороны света</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/botanic-view.svg"
								width="32"
								height="30"								
								alt="">
							</amp-img>
							<span class="page-text">Вид на Малый Ботанический сад</span>
						</li>
						<li>
							<amp-img src="./assets/layouts-icons/ostankino-view.svg"
								width="32"
								height="32"								
								alt="">
							</amp-img>
							<span class="page-text">Вид на Останкино</span>
						</li>							
					</ul>
					<span class="price-block">28 329 840 ₽</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-container" style="padding-left: 20px; padding-right: 20px;">
					<h2 class="block-title" style="margin: 0 0 12px;">Общая площадь — 72.27 м²</h2>
					<ol class="ordered-list">
						<li>Кухня-гостиная — 25.4 м²</li>
						<li>Спальня — 14.66 м²</li>
						<li>Спальня — 16.22 м²</li>
						<li>Коридор — 2.55 м²</li>
						<li>Коридор — 4.85 м²</li>
						<li>Санузел — 4.27 м²</li>
						<li>Санузел — 4.32 м²</li>
					</ol>
					<h2 class="block-title">Особенности</h2>
					<ul class="attachment-list" style="margin-bottom: 40px;">
						<li>Окна с видом на 2 стороны света</li>
						<li>Панорамные окна</li>
						<li>Вид на Малый Ботанический сад</li>
						<li>Вид на парк Останкино</li>
						<li>2 ванные комнаты и более</li>
						<li>Квартира евроформата</li>
						<li>Квартира с большой ванной комнатой</li>									
					</ul>
					<div style="position: relative;">
						<button class="btn btn_small-font" style="margin-bottom: 16px;" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</button>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<button role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</button>
								<button role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</button>
							</div>
						</div>
						<button onclick="window.location='./layouts.php#page=page-5-11'" class="btn btn_dark btn_small-font sidebar-control">Получить индивидуальную подборку</button>
					</div>	
				</div>
			</amp-story-page-attachment>					
		</amp-story-page>

		<!-- Page 5-10 -->
		<amp-story-page id="page-5-10">
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div style="display: flex; flex-direction: column; justify-content: flex-start;">
					<h1 class="page-title">
						Доступно еще<br>15 видов планировок.						
					</h1>
					<span class="page-text" style="font-size: 15px; line-height: 1.47; margin-bottom: 9.4vh;">
						Получите индивидуальную подборку по&nbsp;вашим параметрам и&nbsp;ознакомьтесь со&nbsp;всеми вариантами планировок.
					</span>
					<div class="carousel" style="height: 200px;">
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-1.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-2.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-3.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-4.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-5.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-6.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-7.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-8.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-9.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-10.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-11.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-12.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-13.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="200" src="./assets/layouts-slider/layout-14.png">
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/very-logo.svg"
					width="89"
					height="23"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a role="button" onclick="window.location='./layouts.php#page=page-5-11'" class="btn btn_small-font sidebar-control" onclick="window.location='layouts.php#page=page-5-11'">
						Получить индивидуальную подборку
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
				dist: -200,
				shift: -60,
				numVisible: 14,
			});
		});
	</script>

	<!-- <script src="https://testcdn.webstoryz.com/amp-custom/sidebar-handler.js"></script> -->
</body>

</html>