<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>RED7</title>
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
			font-size: 18px;
			line-height: 1.57;
			color: #484748;
		}		

		.layout-layer {
			background: white;
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
			padding: 45vh 0 0;
		}

		.layout-content-layer_short {
			padding: 70vh 0 0;
		}

		.layout-content-layer__cnt {
			background-color: #F1F2F4;
			height: 55vh;
			padding: 24px 17px 0;
		}

		.layout-content-layer_short .layout-content-layer__cnt {
			height: 30vh;
		}

		.cta-layer {			
			padding: 0 20px 32px;
		}

		.btn {
			display: flex;
			align-items: center;
			justify-content: center;
			border: none;
			text-decoration: none;
			gap: 16px;
			height: 52px;			
			color: white;
			font-size: 16px;
			background-color: #E40613;
			cursor: pointer;
		}

		.btn:hover,
		.btn:active,
		.btn:visited,
		.btn:focus {
			background-color: #E40613 !important;
		}

		.btn_secondary {			
			border: #E40613 1px solid;		
			color: black;			
			background-color: white;		
		}

		.btn_secondary:hover,
		.btn_secondary:active,
		.btn_secondary:visited,
		.btn_secondary:focus {
			background-color: white !important;		
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
			gap: 9px;
			list-style: none;
			font-size: 14px;
			line-height: 1.3;
			color: #6D6D6D;
		}

		.marked-list li::before {
			content: '';
			width: 5px;
			height: 5px;
			background: #E30613;
			flex: none;
			margin-top: 7px;
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

		.block-title {
			font-weight: 300;
			font-size: 28px;
			line-height: 1.29;			
			text-transform: uppercase;
			color: #050006;
		}

		.layout-params-list {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 10px;
			counter-reset: params;
			margin-bottom: 27px;
		}

		.layout-params-list li {
			display: flex;			
			gap: 6px;
			font-size: 13px;
			line-height: 1.3;			
			letter-spacing: -0.02em;
			color: #484748;			
		}

		.layout-params-list li::before {
			counter-increment: params;
			content: counter(params);
			display: flex;
			align-items: center;
			justify-content: center;
			width: 18px;
			height: 18px;
			border-radius: 50%;
			border: 1px solid #D5D5D5;
			font-size: 13px;			
			letter-spacing: -0.02em;
			color: #E30613;
			margin-top: .1vh;
		}

		.price-block {
			font-size: 20px;			
			text-transform: uppercase;
			color: #050006;
		}

		.double-cta {
			display: flex;
			gap: 8px;
			position: relative;			
			margin-top: auto;
		}

		.double-cta a {
			flex: auto;
			height: 73px;
			text-transform: none;
			line-height: 1.2;
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

		.messengers-popup a {
			position: relative;
			/* z-index: 10; */
			width: 36px;
			height: 36px;
			border: none;
			background: none;
			padding: 0;
		}

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

		.carousel-item img {
			box-shadow: 0px 3.39804px 25.4853px -2.54853px rgba(0, 0, 0, 0.1);
			width: 200px;
			height: 201px;
			object-fit: cover;
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

		@media (max-width: 375px) {			
			
			.cta-layer {			
				padding-bottom: 20px;
			}

			.layout-content-layer {
				padding: 42vh 0 0;
			}

			.layout-content-layer__cnt {				
				height: 58vh;				
			}

			.layout-params-list {				
				margin-bottom: 16px;
			}

			.layout-image {
				position: relative;
				top: -60px;
				scale: .7;				
			}

			.page-text {
				font-size: 14px;				
			}	
		}

		@media (orientation: landscape) {
			.page-title {				
				font-size: 4.5vh;				
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

			.btn {				
				height: 8vh;							
				font-size: 2vh;				
			}

			.btn_secondary {								
				font-size: 1.5vh;				
			}

			.page-2-1-content__item {
				font-size: 2vh;				
			}

			.page-2-1-content__block {
				gap: 30px;	
			}

			.marked-list li {
				font-size: 2vh;
			}

			.marked-list li::before {				
				margin-top: 1.1vh;
			}

			.block-title {
				font-size: 3vh;
			}

			.price-block {
				font-size: 2.5vh;
			}

			.layout-params-list li {				
				font-size: 2vh;		
			}

			.layout-content-layer__cnt {				
				padding: 36px 24px 0;
			}

			.layout-params-list {
				gap: 2vh;
			}
		}
				
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<?php require_once('sidebar-personal.php'); ?>

		<!-- Page 1 -->
		<amp-story-page id="page-7-1">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-1.jpg" width="214" height="261" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 3vh;">Студия, 54.17 м²</h1>
					<ul class="layout-params-list">
						<li class="page-text">Холл — 3.91 м²</li>
						<li class="page-text">Кухня-гостиная&nbsp;— 29.28&nbsp;м²</li>
						<li class="page-text">Ванная - 4.26 м²</li>
						<li class="page-text">Балкон - 8.36 м²</li>
						<li class="page-text">Балкон - 8.36 м²</li>
					</ul>
					<span class="price-block">10 369 320 ₽</span>
				</div>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div grid-area="lower-third" class="double-cta">
					<a class="btn" role="button" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</a>
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
					<a role="button" class="btn btn_secondary sidebar-control">
						Получить<br>индивидуальную<br>подборку
					</a>
				</div>						
		</amp-story-page>

		<!-- Page 2 -->
		<amp-story-page id="page-7-2">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-2.jpg" width="214" height="262" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 3vh;">
						Двухуровневая<br>студия 44.72 м²
					</h1>
					<ul class="layout-params-list">
						<li class="page-text">Холл — 3.3 м²</li>
						<li class="page-text">Кухня-гостиная&nbsp;— 24.07&nbsp;м²</li>
						<li class="page-text">Спальня — 12.44 м²</li>
						<li class="page-text">Ванная — 4.91 м²</li>						
					</ul>
					<span class="price-block">37 788 400 ₽</span>
				</div>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div grid-area="lower-third" class="double-cta">
					<a role="button" class="btn" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</a>
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
					<a role="button" class="btn btn_secondary sidebar-control">
						Получить<br>индивидуальную<br>подборку
					</a>
				</div>						
		</amp-story-page>

		<!-- Page 3 -->
		<amp-story-page id="page-7-3">
			<amp-story-grid-layer template="vertical" class="layout-layer">
				<div class="layout-layer__cnt">					
					<amp-img style="align-self: center;" class="layout-image" src="./assets/layouts/layout-3.jpg" width="214" height="261" alt="">
					</amp-img>
				</div>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="layout-content-layer">
				<div class="layout-content-layer__cnt">
					<h1 class="block-title" style="margin: 0 0 3vh;">
						Евро-3 68.61 м²
					</h1>
					<ul class="layout-params-list">
						<li class="page-text">Холл — 5.34 м²</li>
						<li class="page-text">Кухня-гостиная&nbsp;— 24.93&nbsp;м²</li>
						<li class="page-text">Спальня — 13.43 м²</li>
						<li class="page-text">Спальня — 16.59 м²</li>						
						<li class="page-text">Ванная — 2.82 м²</li>						
						<li class="page-text">Ванная — 5.5 м²</li>						
					</ul>
					<span class="price-block">37 788 400 ₽</span>
				</div>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<div grid-area="lower-third" class="double-cta">
					<a role="button" class="btn" onclick="this.nextElementSibling.classList.toggle('active')">Забронировать</a>
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
					<a role="button" class="btn btn_secondary sidebar-control">
						Получить<br>индивидуальную<br>подборку
					</a>
				</div>						
		</amp-story-page>

		<!-- Page 4 -->
		<amp-story-page id="page-7-4">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div>
					<h1 class="page-title" style="margin: 0 0 6vh;">
						<span>Доступно</span>
						<span>несколько видов</span>
						<span style="align-self: flex-end;">планировок</span>
					</h1>	
					<div class="carousel" style="height: 201px; margin-bottom: 32px;">
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-1.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-2.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-3.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-4.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-5.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-6.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-7.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-8.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-9.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-10.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-11.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-12.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-13.png">
						</a>
						<a class="carousel-item">
							<img width="200" height="201" src="./assets/slider-layouts/layout-14.png">
						</a>
					</div>	
					<p class="page-text">
						Получите индивидуальную подборку по&nbsp;вашим параметрам и&nbsp;ознакомьтесь со&nbsp;всеми вариантами планировок.
					</p>				
				</div>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="text-transform: none; margin-top: auto;">
					Получить индивидуальную подборку					
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>					
	</amp-story>

	<style>
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

    #sidebarPersonal.shown {
      display: flex !important;
      visibility: visible;
      opacity: 1;
			z-index: 999998;
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
			background-color: #fff;
			z-index: 999998;
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
      const sidebarEl = document.querySelector('#sidebarPersonal');
      const controlElems = document.querySelectorAll('.sidebar-control');
      const closeElem = document.querySelector('.sidebar-close');
			const form = document.getElementById('formPersonal');

      closeElem.onclick = () => {
        sidebarEl.classList.remove('shown');
        if (!!playerControlEl) {
          playerControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
				form.reset();
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

	<script type="text/javascript">
		var __cs = __cs || [];
		__cs.push(["setCsAccount", "P9MGH_SwFkyiulNp2y0zlvS_NsTzwYlk"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>