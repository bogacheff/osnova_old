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
		}

		.page-title_primary {
			font-size: 48px;
		}

		.content-layer {
			padding: 84px 20px 0;
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
			opacity: .2;
		}

		.form-socials-text {
			font-size: 14px;
			line-height: 1.57;
			letter-spacing: -0.02em;
			color: black;
			margin-left: 11px;
		}
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<!-- Form -->
		<amp-story-page id="form">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/red7-logo.svg" width="57" height="26" alt="">
				</amp-img>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="margin-bottom: 7px;">
						Заказать звонок
					</h1>
					<span class="page-text" style="margin-bottom: 20px;">
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
					<span class="subscription-text" style="margin-bottom: 28px;">
						Нажимая кнопку «Отправить», Вы соглашаетесь с&nbsp;Пользовательским соглашением настоящего сайта
					</span>
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
							Или просто свяжитесь<br>с нами в мессенджере
						</span>
					</div>
				</div>
			</amp-story-grid-layer>
		</amp-story-page>
	</amp-story>

	<!-- <script src="https://testcdn.webstoryz.com/amp-custom/sidebar-handler.js"></script> -->
</body>

</html>