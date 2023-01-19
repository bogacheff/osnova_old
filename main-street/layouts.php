<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>Main Street</title>
	<link rel="canonical" href="layouts.php">
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
			background: none;
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

		.btn:not(.btn_secondary):hover {
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

		.btn_secondary {
			color: black;
			background: none;
			border: 1px solid #E63E1F;
		}

		.btn_secondary:hover {
			background-color: #fff !important;
		}

		.cta-layer {
			padding: 0 20px 20px 20px;
		}

		.cta-layer__cnt {
			display: flex;
			align-items: flex-end;
		}

		.cta-layer__cnt_vertical {
			flex-direction: column;
			align-items: flex-start;
			justify-content: flex-end;
			gap: 20px;
		}

		.cta-layer__buttons {
			display: flex;
			gap: 8px;
			width: 100%;
			position: relative;
		}

		.cta-layer__buttons .btn {
			font-size: 18px;
		}

		.cta-layer__price-block {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 8px;
			width: 100%;
		}

		.cta-layer__price {
			font-family: 'Bebas Neue', sans-serif;
			font-size: 30px;
			line-height: 1;
			letter-spacing: 0.01em;
			text-transform: uppercase;
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
			padding: 31vh 0 0;
		}

		.page-4-2-image {
			padding: 37vh 0 0;
		}

		.page-4-2-decor {
			justify-items: flex-end;
			padding: 27vh 30px 0 0;
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

		.layout-layer {
			background: #F4F4F4;
			padding: 14vh 20px 0;
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
			padding: 51vh 0 0;
		}

		.layout-content-layer_short {
			padding: 70vh 0 0;
		}

		.layout-content-layer__cnt {
			background-color: #fff;
			height: 49vh;
			padding: 24px 20px 0;
		}

		.layout-content-layer_short .layout-content-layer__cnt {
			height: 30vh;
		}

		.layout-params-list {
			columns: 2;
			font-weight: 400;
			font-size: 14px;
			line-height: 2;
			letter-spacing: -0.02em;
			color: #676968;
			padding: 0;
			margin: 0;
		}

		.layout-params-list li {
			display: flex;
			align-items: center;
			gap: 9px;
			list-style: none;
			white-space: nowrap;
		}

		.layout-params-list li::before {
			content: '';
			width: 3px;
			height: 3px;
			background-color: #676968;
			border-radius: 50%;
		}

		.present-label {
			display: flex;
			justify-content: center;
			gap: 9px;
			font-weight: 500;
			font-size: 14px;
			line-height: 1.29;
			color: #000000;
			border: 1px solid #A9ACAB;
			width: calc(50% - 4px);
			padding: 8px 10px;
		}

		.rooms-list {
			display: flex;
			flex-direction: column;
			gap: 13px;
			counter-reset: roomCounter;
			padding: 0;
			margin: 0;
		}

		.rooms-list li {
			display: flex;
			align-items: center;
			gap: 15px;
			list-style: none;
			font-family: 'Rubik';
			font-size: 15px;
			color: #676968;
		}

		.rooms-list li::before {
			content: counter(roomCounter);
			counter-increment: roomCounter;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 5px;
			border: 1px solid #676968;
			font-weight: 400;
			font-size: 15px;
			line-height: 1;
			color: #676968;
			width: 27px;
			height: 20px;
		}

		.page5-10-subtitle {
			display: block;
			font-size: 15px;
			line-height: 22px;
			color: #676968;
		}

		.carousel-item img {
			box-shadow: 0px 3.39804px 25.4853px -2.54853px rgba(0, 0, 0, 0.1);
			width: 200px;
			height: 201px;
			object-fit: cover;
		}

		.rouble-sign {
			font-family: 'Rubik', 'Roboto', sans-serif;
		}

		.attachment-title {
			font-weight: 400;
			font-size: 24px;
			line-height: 1.2;
			letter-spacing: 0.01em;
			color: #E63E1F;
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
			color: black;
		}

		.messengers-popup {
			display: none;
			align-items: center;
			flex-direction: column;
			gap: 8px;
			width: 124px;
			position: absolute;
			left: 80px;
			top: 0;
			transform: translateY(calc(-100% - 15px));
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

		@media (orientation: landscape) {
			.layout-content-layer {
				padding: 50vh 0 0;
			}
			
			.layout-content-layer__cnt {				
				height: 50vh;				
			}

			.layout-content-layer_short {
				padding: 70vh 0 0;
			}

			.layout-content-layer_short .layout-content-layer__cnt {
				height: 30vh;
			}

			.page5-10-subtitle {
				font-size: 2vh;
			}

			.layout-params-list {
				font-size: 2vh;
			}
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>
		<?php require_once('sidebar-personal.php'); ?>

		<!-- Page 5-1 -->
		<amp-story-page id="page-5-1">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">Студия 27.7 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-1.png" width="218" height="149" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл — 6.9 м²</li>
						<li>Санузел — 4.7 м²</li>
						<li>Кухня-гостиная — 29.28 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">11 517 500 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-2 -->
		<amp-story-page id="page-5-2">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">1-комнатная, 42.6 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-2.png" width="218" height="138" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 5.1 м²</li>
						<li>Спальня - 13.3 м²</li>
						<li>Коридор - 3.6 м²</li>
						<li>Кухня - 12.1 м²</li>
						<li>Гардероб - 4 м²</li>
						<li>Санузел - 4.4 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">16 699 200 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-3 -->
		<amp-story-page id="page-5-3">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">2-комнатная 43.1 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-3.png" width="162" height="157" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 7 м²</li>
						<li>Спальня - 13.9 м²</li>
						<li>Санузел - 4.1 м²</li>
						<li>Кухня - 13.8 м²</li>
						<li>Гардероб - 4.3 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">14 729 000 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-4 -->
		<amp-story-page id="page-5-4">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">2-комнатная 55.8 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-4.png" width="162" height="152" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 4.4 м²</li>
						<li>Спальня - 14.6 м²</li>
						<li>Коридор - 5.6 м²</li>
						<li>Санузел - 4.1 м²</li>
						<li>Кухня - 13 м²</li>
						<li>Гардероб - 11.4 м²</li>
						<li>Санузел - 2.7 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">17 200 000 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-5 -->
		<amp-story-page id="page-5-5">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">2-комнатная 61.7 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-5.png" width="162" height="156" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 10.9 м²</li>
						<li>Спальня - 19.8 м²</li>
						<li>Санузел - 4.3 м²</li>
						<li>Кухня - 11.3 м²</li>
						<li>Спальня - 15.4 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">18 129 300 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-6 -->
		<amp-story-page id="page-5-6">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">3-комнатная 90.8 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-6.png" width="162" height="144" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 10.1 м²</li>
						<li>Спальня - 22.5 м²</li>
						<li>Спальня - 12.8 м²</li>
						<li>Санузел - 2.8 м²</li>
						<li>Кухня - 15.1 м²</li>
						<li>Спальня - 14.6 м²</li>
						<li>Коридор - 6 м²</li>
						<li>Санузел - 6.2 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">26 579 500 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-7 -->
		<amp-story-page id="page-5-7">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">3-комнатная 79.8 М²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-7.png" width="162" height="159" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<ul class="layout-params-list">
						<li>Холл - 10.7 м²</li>
						<li>Гостиная - 15.4 м²</li>
						<li>Спальня - 16 м²</li>
						<li>Санузел - 4 м²</li>
						<li>Кухня - 15.1 м²</li>
						<li>Спальня - 16 м²</li>
						<li>Коридор - 6.4 м²</li>
					</ul>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div class="cta-layer__cnt cta-layer__cnt_vertical" grid-area="lower-third">
					<div class="cta-layer__price-block">
						<span class="cta-layer__price">24 708 000 <span class="rouble-sign">₽</span></span>
						<div class="present-label">
							<amp-img src="./assets/layouts/conditioner.svg" width="29" height="25" alt="">
							</amp-img>
							<span>Кондиционер<br>в подарок!</span>
						</div>
					</div>
					<div class="cta-layer__buttons">
						<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">
							Забронировать
						</a>
						<div class="messengers-popup">
							<span class="messengers-popup__title">Свяжитесь с нами</span>
							<div class="messengers-popup__buttons">
								<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
									<img src="./assets/telegram-icon_color.svg" layout="responsive" width="36" height="36" alt="">
								</a>
								<a role="button" onclick="window.location='https://wa.me/79030155954'">
									<img src="./assets/whatsapp-icon_color.svg" width="36" height="36" alt="">
								</a>
							</div>
						</div>
						<a class="btn btn_secondary sidebar-control" role="button">
							Получить<br>индивидуальную<br>подборку
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-8 -->
		<amp-story-page id="page-5-8">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">Евро-3 79.8 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-8.png" width="181" height="263" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer layout-content-layer_short">
				<div class="layout-content-layer__cnt">
					<span class="cta-layer__price">24 708 000 <span class="rouble-sign">₽</span></span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Подробнее">
				<div class="attachment-cnt">
					<div class="attachment-block">
						<h2 class="attachment-title" style="font-weight: 400;">Площадь комнат</h2>
						<ul class="rooms-list">
							<li>Холл - 3 м²</li>
							<li>Кухня-гостиная - 24.3 м²</li>
							<li>Спальня - 20.3 м²</li>
							<li>Спальня - 14.8 м²</li>
							<li>Гардероб - 4.5 м²</li>
							<li>Коридор - 6.5 м²</li>
							<li>Санузел - 4.4 м²</li>
							<li>Кладовая - 2.1 м²</li>
						</ul>
					</div>
					<div class="attachment-block">
						<h2 class="attachment-title" style="font-weight: 400;">Особенности планировки</h2>
						<ul class="attachment-list attachment-list_alternate">
							<li>светлый распашной апартамент с видом на две стороны света</li>
							<li>большие жилые комнаты</li>
							<li>функциональная кухня-гостиная с двумя окнами</li>
							<li>наличие двух изолированных гардеробных</li>
							<li>комфортная ванная комната</li>
						</ul>
					</div>
				</div>
			</amp-story-page-attachment>
		</amp-story-page>

		<!-- Page 5-9 -->
		<amp-story-page id="page-5-9">
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">
					<h1 class="layout-title">3-комнатная, 90.1 м²</h1>
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/pages/layout5-9.png" width="255" height="261" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer layout-content-layer_short">
				<div class="layout-content-layer__cnt">
					<span class="cta-layer__price">25 228 000 <span class="rouble-sign">₽</span></span>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" style="padding: 0;">
				<div class="bottom-gradient" grid-area="lower-third"></div>
			</amp-story-grid-layer>
			<amp-story-page-attachment layout="nodisplay" data-cta-text="Подробнее">
				<div class="attachment-cnt">
					<div class="attachment-block">
						<h2 class="attachment-title" style="font-weight: 400;">Площадь комнат</h2>
						<ul class="rooms-list">
							<li>Холл - 10.1 м²</li>
							<li>Кухня - 15.1 м²</li>
							<li>Спальня - 22.5 м²</li>
							<li>Спальня - 14.6 м²</li>
							<li>Спальня - 12.8 м²</li>
							<li>Коридор - 6 м²</li>
							<li>Санузел - 2.8 м²</li>
							<li>Санузел - 6.2 м²</li>
						</ul>
					</div>
				</div>
			</amp-story-page-attachment>
		</amp-story-page>

		<!-- Page 5-10 -->
		<amp-story-page id="page-5-10">
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div>
					<h1 class="page-title">
						Доступно несколько<br>
						<span style="color: rgba(230, 62, 31, 1);">видов планировок</span>
					</h1>
					<span class="page5-10-subtitle" style="margin-bottom: 8vh;">
						Получите индивидуальную подборку по&nbsp;вашим параметрам и&nbsp;ознакомьтесь со&nbsp;всеми вариантами планировок.
					</span>
					<div class="carousel" style="height: 201px;">
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-1.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-2.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-3.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-4.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-5.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-6.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-7.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-8.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-9.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-10.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-11.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-12.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-13.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/layouts/layout-14.png">
						</a>
					</div>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer" animate-in="fade-in" animate-in-duration="1s">
				<div class="cta-layer__cnt" grid-area="lower-third">
					<a class="btn sidebar-control" role="button" onclick="window.location='layouts.php#page=page-5-11'">
						Получить индивидуальную подборку
					</a>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>

		<!-- Page 5-11
		<amp-story-page id="page-5-11">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div>
					<h1 class="page-title" style="font-size: 34px;">
						Получите<br>
						<span style="color: #E63E1F;">индивидуальную подборку</span>
					</h1>
					<div class="whatsapp-form">
						<div class="whatsapp-form__row">
							<span class="whatsapp-form__row-title">Количество спален</span>
							<div class="whatsapp-form__input-block">
								<div class="whatsapp-form__input-block-item">
									<span>от</span>
									<input type="text" placeholder="1">
								</div>
								<div class="whatsapp-form__input-block-item">
									<span>до</span>
									<input type="text" placeholder="5">
								</div>
							</div>
						</div>
						<div class="whatsapp-form__row">
							<span class="whatsapp-form__row-title">Стоимость</span>
							<div class="whatsapp-form__input-block">
								<div class="whatsapp-form__input-block-item">
									<span>до</span>
									<input type="text" placeholder="70 078 296 ₽">
								</div>
							</div>
						</div>
						<div class="whatsapp-form__row">
							<span class="whatsapp-form__row-title">Площадь</span>
							<div class="whatsapp-form__input-block">
								<div class="whatsapp-form__input-block-item">
									<span>от</span>
									<input type="text" placeholder="30">
								</div>
								<div class="whatsapp-form__input-block-item">
									<span>до</span>
									<input type="text" placeholder="180">
								</div>
							</div>
						</div>
						<div class="whatsapp-form__row">
							<span class="whatsapp-form__row-title">Имя</span>
							<div class="whatsapp-form__input-block">
								<div class="whatsapp-form__input-block-item">
									<input type="text" placeholder="Ваше имя">
								</div>
							</div>
						</div>
						<div class="whatsapp-form__row">
							<span class="whatsapp-form__row-title">Телефон</span>
							<div class="whatsapp-form__input-block">
								<div class="whatsapp-form__input-block-item">
									<input type="text" placeholder="+7 900 123 45 67">
								</div>
							</div>
						</div>
						<button class="btn" style="margin: 6px 0 16px;">Получить подборку</button>
					</div>
					<div class="form-socials">
						<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
							<amp-img src="./assets/telegram-icon_black.svg" width="32" height="27" alt="">
							</amp-img>
						</a>
						<a role="button" onclick="window.location='https://wa.me/79030155954'">
							<amp-img src="./assets/whatsapp-icon_black.svg" width="32" height="32" alt="">
							</amp-img>
						</a>
						<span class="form-socials-text">
							Или просто напишите нам в удобном для вас мессенджере
						</span>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page> -->
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
			z-index: 999999;
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
							document.getElementById('construct_btn_send').textContent = "Ошибка отправки"
							return;
					}
					document.getElementById('send_call_btn').textContent = "Заявка успешно отправлена"
					document.getElementById('construct_btn_send').textContent = "Заявка успешно отправлена"
			});
		}

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
		document.addEventListener('DOMContentLoaded', function() {
			var elem = document.querySelector('.carousel');
			var instance = M.Carousel.init(elem, {
				dist: -200,
				shift: -60,
				numVisible: 14,
			});
		});
	</script>
	<script type="text/javascript">
		var __cs = __cs || [];
		__cs.push(["setCsAccount", "P9MGH_SwFkyiulNp2y0zlvS_NsTzwYlk"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>