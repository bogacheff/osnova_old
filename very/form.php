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
			font-family: 'Open Sans';
			src: url('./assets/fonts/OpenSans-Regular.ttf');
			font-style: normal;
			font-weight: 400;
		}

		@font-face {
			font-family: 'Open Sans';
			src: url('./assets/fonts/OpenSans-Semibold.ttf');
			font-style: normal;
			font-weight: 600;
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
			padding: 45vh 0 0;
		}

		.layout-content-layer_short {
			padding: 70vh 0 0;
		}

		.layout-content-layer__cnt {
			background-color: #fff;
			height: 55vh;
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
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Main Street" publisher="Main Street">

		<!-- Form -->
		<amp-story-page id="form">
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img class="logo" src="./assets/very-logo.svg" width="89" height="23" alt="">
				</amp-img>
			</amp-story-grid-layer>			
			<amp-story-grid-layer template="vertical" class="title-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="margin: 0 0 10px;">
						Заказать звонок
					</h1>
					<span class="page-subtitle" style="margin-bottom: 4.7vh;">
						Свяжитесь с&nbsp;нами для получения информации<br>по&nbsp;телефону или в&nbsp;мессенджерах
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
						<button class="btn btn_submit" style="margin-top: 4.7vh;">
							Отправить
						</button>
					</form>
					<span class="subscription-text" style="margin-bottom: 33px;">
						Нажимая кнопку «Отправить», Вы соглашаетесь с&nbsp;Пользовательским соглашением настоящего сайта
					</span>
					<div class="form-socials">
						<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
							<amp-img src="./assets/telegram-icon.svg" width="40" height="40" alt="">
							</amp-img>
						</a>
						<a role="button" onclick="window.location='https://wa.me/79030155954'">
							<amp-img src="./assets/whatsapp-icon.svg" width="40" height="40" alt="">
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