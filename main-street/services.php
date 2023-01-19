<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="services.php">
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

		@keyframes arrowBlink-1 {
			0% {
				opacity: 1;
			}

			50% {
				opacity: 0;
			}

			100% {
				opacity: 0;
			}
		}

		@keyframes arrowBlink-2 {
			0% {
				opacity: 0;
			}

			50% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@keyframes arrowBlink-3 {
			0% {
				opacity: 0;
			}

			50% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		* {
			box-sizing: border-box;
		}

		body {
			font-family: 'Rubik', sans-serif;
		}

		amp-story-page {
			background: white;
		}

		.logo-layer {
			background-color: white;
			padding: 5.8vh 20px;
		}

		.logo {
			margin-left: auto;
		}

		.title-layer {
			padding: 12vh 20px;
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

		.service-description-layer {
			padding: 30.6vh 0 0 0;
		}

		.service-description {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			height: 40vh;
			background: no-repeat bottom center;
			background-size: cover;
			font-weight: 500;
			font-size: 15px;
			line-height: 1.47;
			color: #FFFFFF;
			padding: 24px 20px;
		}

		.service-description_01 {
			background-image: url('./assets/services/image-01.jpg');
		}

		.service-description_02 {
			background-image: url('./assets/services/image-02.jpg');
		}

		.service-description_03 {
			background-image: url('./assets/services/image-03.jpg');
		}

		.car-layer {
			padding: 25vh 0 0 0;
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
			padding: 0 0 0 20px;
		}

		.beveled-block::after {
			content: '';
			position: absolute;
			right: -53px;
			top: 0;
			height: 132px;
			width: 179px;
			background: url('./assets/beveled-block.svg') no-repeat center;
			background-size: contain;
		}

		.beveled-block_04 {
			width: calc(60.83vw - 53px);
		}

		.beveled-block_05 {
			width: calc(49.7vw - 53px);
		}

		.beveled-block_06 {
			width: calc(49.7vw - 53px);
		}

		.carplaces-layer {
			padding: 54vh 20px 0 0;
		}

		.beveled-block span {
			position: relative;
			z-index: 10;
		}

		.carplaces-layer__cnt {
			display: flex;
			align-items: flex-end;
			justify-content: space-between;
		}

		.smarthouse-layer {
			padding: 35vh 0 0;
		}

		.smarthouse-layer__content {
			display: flex;
			flex-direction: column;
			gap: 16px;
		}

		.phone-layer {
			justify-items: flex-end;
			padding: 35vh 0 0;
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

		.attachment-list li::before {
			content: '';
			width: 3px;
			height: 3px;
			border-radius: 50%;
			background-color: #676968;
		}

		.btn-arrow {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
			animation: 2s infinite both linear running;
		}

		.btn-arrow_1 {
			animation-name: arrowBlink-1;
		}

		.btn-arrow_2 {
			animation-name: arrowBlink-2;
		}

		.btn-arrow_3 {
			animation-name: arrowBlink-3;
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
			.service-description {
				font-size: 2vh;
			}
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- Page 3-1 -->
		<amp-story-page id="page-3-1">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title" style="padding-left: 20px;">
					Закрытая<br>
					<span class="red">территория комфорта</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="service-description-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="service-description service-description_01">
					<amp-img src="./assets/services/01.svg" width="77" height="88" alt="">
					</amp-img>
					<span>
						Ваш двор&nbsp;— уютная зеленая «гостиная» с&nbsp;лаунж-зоной для прогулок и&nbsp;отдыха
					</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn" role="button" onclick="window.location='services.php#page=page-3-2'">
						<amp-img class="btn-arrow btn-arrow_1" src="./assets/services/arrow-frame-1.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_2" src="./assets/services/arrow-frame-2.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_3" src="./assets/services/arrow-frame-3.svg" width="52" height="30" alt="">
						</amp-img>
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 3-2 -->
		<amp-story-page id="page-3-2">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title" style="padding-left: 20px;">
					Все для<br>
					<span class="red">активного отдыха</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="service-description-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="service-description service-description_02">
					<amp-img src="./assets/services/02.svg" width="77" height="88" alt="">
					</amp-img>
					<span>
						Workout-зона с уличными тренажерами
					</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn" role="button" onclick="window.location='services.php#page=page-3-3'">
						<amp-img class="btn-arrow btn-arrow_1" src="./assets/services/arrow-frame-1.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_2" src="./assets/services/arrow-frame-2.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_3" src="./assets/services/arrow-frame-3.svg" width="52" height="30" alt="">
						</amp-img>
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 3-3 -->
		<amp-story-page id="page-3-3">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title" style="padding-left: 20px;" style="font-size: 32px;">
					Безопасность<br>
					<span class="red">и развлечения для детей</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="service-description-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="service-description service-description_03">
					<amp-img src="./assets/services/03.svg" width="77" height="88" alt="">
					</amp-img>
					<span>
						Детская площадка с&nbsp;ротондой станет любимым местом для игр ваших детей
					</span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn" role="button" onclick="window.location='services.php#page=page-3-4'">
						<amp-img class="btn-arrow btn-arrow_1" src="./assets/services/arrow-frame-1.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_2" src="./assets/services/arrow-frame-2.svg" width="52" height="30" alt="">
						</amp-img>
						<amp-img class="btn-arrow btn-arrow_3" src="./assets/services/arrow-frame-3.svg" width="52" height="30" alt="">
						</amp-img>
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 3-4 -->
		<amp-story-page id="page-3-4">
			<amp-story-grid-layer template="vertical" class="logo-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="car-layer" animate-in="fade-in" animate-in-duration="1s">
				<amp-img src="./assets/services/car.png" width="720" height="451" layout="responsive" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="carplaces-layer">
				<div class="carplaces-layer__cnt">
					<div class="beveled-block beveled-block_04" animate-in="fly-in-left" animate-in-duration="1s">
						<amp-img src="./assets/services/carplace-icon.svg" width="30" height="30" alt="">
						</amp-img>
						<span>236<br>машиномест</span>
					</div>
					<amp-img src="./assets/services/04.svg" width="89" height="86" alt="" animate-in="fly-in-bottom" animate-in-duration="1s">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;" animate-in="fade-in" animate-in-duration="1s">
				<h1 class="page-title" style="padding-left: 20px;">
					Подземный<br>
					<span class="red">двухуровневый<br>паркинг</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control callback-form" role="button">
						Забронировать паркинг-место
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 3-5 -->
		<amp-story-page id="page-3-5">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="phone-layer">
				<amp-img src="./assets/services/phone.png" width="167" height="309" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="smarthouse-layer">
				<div class="smarthouse-layer__cnt">
					<div class="smarthouse-layer__content">
						<amp-img style="margin-left: 20px;" src="./assets/services/05.svg" width="86" height="86" alt="" animate-in="fly-in-left" animate-in-duration="1s">
						</amp-img>
						<div class="beveled-block beveled-block_05" animate-in="fade-in" animate-in-duration="1s">
							<span>
								Все для вашего<br>комфорта в&nbsp;одном<br>приложении!
							</span>
						</div>
						<span style="margin-left: 20px; width: 50%; font-weight: 400; font-size: 15px; line-height: 1.47;">Объедините<br>Ваш “умный дом”<br>и&nbsp;сервисы комплекса.</span>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;">
				<h1 class="page-title" style="padding-left: 20px;">
					Больше, чем<br>
					<span class="red">просто "умный дом"</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-cnt">
					<div class="attachment-block">
						<h2 class="attachment-title">Сервисы управляющей компании<br>и&nbsp;социальная платформа</h2>
						<ul class="attachment-list">
							<li>Заказ гостевых пропусков</li>
							<li>Вход в ЖК по FaceID или карте</li>
							<li>Открытие шлагбаумов и ворот</li>
							<li>Распознавание госномеров</li>
							<li>Постамат: доставка/отправления</li>
							<li>Шеринг квартир и машиномест</li>
							<li>Аренда инструментов и вещей</li>
							<li>Вызов электрика или сантехника</li>
							<li>Новости и оповещения от УК</li>
							<li>Связь с консьержем, охраной, УК</li>
							<li>Чат для общения с соседями</li>
							<li>Сервис для голосования</li>
						</ul>
					</div>
					<div class="attachment-block">
						<h2 class="attachment-title">УПРАВЛЕНИЕ УСТРОЙСТВАМИ<br>И СОЗДАНИЕ СЦЕНАРИЕВ</h2>
						<ul class="attachment-list">
							<li>Видеодомофон в приложении</li>
							<li>Охранная сигнализация</li>
							<li>Датчики пожара и протечки</li>
							<li>Видеонаблюдение</li>
							<li>Данные счетчиков и оплата</li>
							<li>Умные бытовые устройства</li>
							<li>Управление светом</li>
							<li>Контроль климата</li>
							<li>Управление мультимедиа</li>
							<li>Организация сценариев автоматизации</li>
						</ul>
					</div>
				</div>
			</amp-story-page-attachment>
		</amp-story-page>

		<!-- Page 3-6 -->
		<amp-story-page id="page-3-6">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="phone-layer">
				<amp-img src="./assets/services/phone.png" width="167" height="309" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="smarthouse-layer">
				<div class="smarthouse-layer__cnt">
					<div class="smarthouse-layer__content" style="padding-top: 38px;">
						<div class="beveled-block beveled-block_06" animate-in="fade-in" animate-in-duration="1s">
							<span style="font-size: 14px; line-height: 1.33">
								Доставка продуктов и&nbsp;информация об&nbsp;акциях в&nbsp;ближайших<br>магазинах
							</span>
						</div>
						<amp-img style="margin: 26px 0 0 20px;" src="./assets/services/06.svg" width="86" height="86" alt="" animate-in="fly-in-bottom" animate-in-duration="1s">
						</amp-img>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer" style="padding-left: 0;">
				<h1 class="page-title" style="padding-left: 20px;">
					Маркетплейс:<br>
					<span class="red">платформа товаров<br>и услуг</span>
				</h1>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Посмотреть функционал">
				<div class="attachment-cnt">
					<h2 class="attachment-title">Акции от&nbsp;близлежащих<br>компаний, магазинов и&nbsp;сервисов</h2>
					<div class="attachment-block">
						<h2 class="attachment-title">Бытовые услуги</h2>
						<ul class="attachment-list">
							<li>химчистка и прачечная,</li>
							<li>уборка и клининг,</li>
							<li>ремонт бытовой техники и строительство</li>
						</ul>
					</div>
					<h2 class="attachment-title">Доставка из&nbsp;кафе, ресторанов, кофеен, сервисов доставки еды</h2>
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