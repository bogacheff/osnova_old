<amp-sidebar id="sidebarPersonal" class="sidebar-el">
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
			<h1 class="page-title" style="margin: 0 0 12px;">
				Получите<br>
				индивидуальную<br>
				<span style="align-self: flex-end;">подборку</span>
			</h1>
			<form id="formPersonal" class="whatsapp-form">
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Количество спален</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>от</span>
							<input id="bedrooms_from" type="text" placeholder="1">
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="bedrooms_to" type="text" placeholder="5">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Стоимость</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="cost" type="text" placeholder="70 078 296 ₽">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Площадь</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>от</span>
							<input id="square_from" type="text" placeholder="30">
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="square_to" type="text" placeholder="180">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Имя</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input id="name_pers" name="name" type="text" placeholder="Ваше имя">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span id="tel_label_" class="whatsapp-form__row-title">Телефон</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input id="tel_pers" name="tel" type="text" placeholder="+7 900 123 45 67">
						</div>
					</div>
				</div>
				<button id="construct_btn_send" type="submit" class="btn" style="text-transform: none; margin: 6px 0 16px;">Получить подборку</button>
			</form>
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
					Или просто напишите нам<br>в удобном для вас мессенджере
				</span>
			</div>
		</div>
	</div>
</amp-sidebar>