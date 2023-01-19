<amp-sidebar id="sidebar" class="sidebar-el">	
	<div class="sidebar__cnt">
		<div class="sidebar__header" style="margin-bottom: 40px;">
			<amp-img src="./assets/very-logo.svg"
				width="89"
				height="23"					
				alt="">
			</amp-img>
			<a class="sidebar-close" role="button">
				<amp-img src="./assets/sidebar-close_black.svg"
					width="26"
					height="26"				
					alt="">
				</amp-img>
			</a>
		</div>	
		<div style="display: flex; flex-direction: column;">			
			<h1 class="page-title" style="margin: 0 0 10px;">
				Заказать звонок
			</h1>
			<span class="page-subtitle" style="margin-bottom: 4.7vh;">
				Свяжитесь с&nbsp;нами для получения информации<br>по&nbsp;телефону или в&nbsp;мессенджерах
			</span>
			<form id="callbackForm" class="form" action="">
				<div class="input-block" style="padding-right: 40px;">
					<label class="input-label" for="name">Ваше имя</label>
					<input class="input" id="name" name="name" type="text" required>
				</div>
				<div class="input-block" style="padding-right: 40px;">
					<label id="tel_label" class="input-label" for="phone">Ваш номер телефона</label>
					<input class="input tel" id="tel" name="phone" type="text" required>
				</div>
				<button id="send_call_btn" class="btn btn_submit" style="margin-top: 4.7vh;">
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
	</div>
</amp-sidebar>