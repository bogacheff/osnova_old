<amp-sidebar id="sidebar" class="sidebar-el">
	<a class="sidebar-close" role="button">
		<amp-img src="./assets/sidebar-close.svg"
			width="26"
			height="26"				
			alt="">
		</amp-img>
	</a>

	<div class="sidebar__cnt">
		<div style="display: flex; flex-direction: column;">
			<amp-img class="sidebar-logo" src="./assets/red7-logo.svg" width="57" height="26" alt="">
			</amp-img>
			<h1 class="page-title" style="margin-bottom: 7px;">
				Заказать звонок
			</h1>
			<span class="page-text" style="margin-bottom: 20px;">
				Свяжитесь с&nbsp;нами для получения информации по&nbsp;телефону или в&nbsp;мессенджерах
			</span>
			<form id="callbackForm" class="form" action="">
				<div class="input-block">
					<label class="input-label" for="name">Ваше имя</label>
					<input id="name" class="input" name="name" type="text" required>
				</div>
				<div class="input-block">
					<label id="tel_label" class="input-label" for="phone">Ваш номер телефона</label>
					<input id="tel" class="input tel" name="phone" type="text" required>
				</div>
				<button id="send_call_btn" class="btn btn_submit" type="submit">
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
	</div>
</amp-sidebar>