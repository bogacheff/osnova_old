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
			background-color: black;
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
			color: white;
			font-size: 5.5vh;
			line-height: 1.2;
			margin: 0;
		}

		.page-subtitle {
			display: block;
			font-weight: 400;
			font-size: 14px;
			color: #676968;
			line-height: 1.57;
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

		.btn_submit {
			height: 49px;
			margin-top: 13px;
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

		<!-- Form -->
		<amp-story-page id="form">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/mainstreet-logo_white.svg" width="151" height="32" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" style="justify-content: flex-start; align-content: flex-start; padding: 0 131px 0 0;">
				<amp-img class="logo" src="./assets/location/page2-2-decor.svg" width="85" height="64" alt="">
				</amp-img>
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title">
						Заказать звонок
					</h1>
					<span class="page-subtitle">
						Свяжитесь с&nbsp;нами для получения информации по&nbsp;телефону или в&nbsp;мессенджерах
					</span>
					<form class="form" action="">
						<div class="input-block">
							<label class="input-label" for="name">Ваше имя</label>
							<input class="input" name="name" type="text">
						</div>
						<div class="input-block">
							<label class="input-label" for="phone">Ваш номер телефона</label>
							<input class="input" name="phone" type="text">
						</div>
						<button class="btn btn_submit">
							Отправить
						</button>
					</form>
					<span class="subscription-text">
						Нажимая кнопку «Отправить», Вы соглашаетесь с&nbsp;Пользовательским соглашением настоящего сайта
					</span>
					<div class="form-socials">
						<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
							<amp-img src="./assets/telegram-icon.svg" width="32" height="27" alt="">
							</amp-img>
						</a>
						<a role="button" onclick="window.location='https://wa.me/79030155954'">
							<amp-img src="./assets/whatsapp-icon.svg" width="32" height="32" alt="">
							</amp-img>
						</a>
						<span class="form-socials-text">
							Или просто напишите нам в удобном для вас мессенджере
						</span>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
	</amp-story>

	<!-- <script src="https://testcdn.webstoryz.com/amp-custom/sidebar-handler.js"></script> -->
</body>

</html>