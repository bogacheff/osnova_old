<amp-sidebar id="sidebarPersonal" class="sidebar-el">	
	<div class="sidebar__cnt">
		<div class="sidebar__header">
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
			<h1 class="block-title">
				Получите<br>
				индивидуальную подборку
			</h1>
			<form class="whatsapp-form" id="formPersonal">
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Количество спален</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>от</span>
							<input type="text" placeholder="1" id="bedrooms_from">
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input type="text" placeholder="5" id="bedrooms_to">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Стоимость</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input type="text" placeholder="70 078 296 ₽" id="cost">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Площадь</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>от</span>
							<input type="text" placeholder="30" id="square_from">
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input type="text" placeholder="180" id="square_to">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Имя</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input type="text" placeholder="Ваше имя" id="name_pers">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Телефон</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input class="tel" type="tel" id="tel_pers">
						</div>
					</div>
				</div>
				<button id="send_call_btn" type="submit" class="whatsapp-form__submit-btn btn btn_small-font">Получить подборку</button>
			</form>
			<div class="form-socials">
				<a role="button" onclick="window.location='https://t.me/OsnovaChatPlatformBot'">
					<amp-img src="./assets/telegram-icon.svg" width="40" height="40" alt="">
					</amp-img>
				</a>
				<a role="button" onclick="window.location='https://wa.me/79030155954'">
					<amp-img src="./assets/whatsapp-icon.svg" width="40" height="40" alt="">
					</amp-img>
				</a>
				<span class="form-socials-text" style="margin: -8px 0 0 20px;">
					Или просто свяжитесь<br>с&nbsp;нами в&nbsp;мессенджере
				</span>
			</div>
		</div>
	</div>
</amp-sidebar>