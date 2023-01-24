<amp-sidebar id="sidebarPersonal" class="sidebar-el">	
	<div class="sidebar__cnt">
	<div class="sidebar__header">
			<amp-img src="./assets/mainstreet-logo.svg"
				width="120"
				height="25"			
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
							<input id="bedrooms_from" type="text" placeholder="1" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" required>
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="bedrooms_to num" type="text" placeholder="5" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" required>
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Стоимость</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="cost num" type="text" placeholder="70 078 296 ₽" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" required>
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Площадь</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<span>от</span>
							<input id="square_from num" type="num" placeholder="30" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" required>
						</div>
						<div class="whatsapp-form__input-block-item">
							<span>до</span>
							<input id="square_to num" type="num" placeholder="180" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" required>
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span class="whatsapp-form__row-title">Имя</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input id="name_pers" type="text" placeholder="Ваше имя">
						</div>
					</div>
				</div>
				<div class="whatsapp-form__row">
					<span id="tel_label_" class="whatsapp-form__row-title">Телефон</span>
					<div class="whatsapp-form__input-block">
						<div class="whatsapp-form__input-block-item">
							<input id="tel_pers" class="tel" type="tel" minlength="18" required />
						</div>
					</div>
				</div>
				<button type="submit" id="construct_btn_send" class="btn" style="text-transform: none; margin: 6px 0 16px;">Получить подборку</button>
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
				<span class="form-socials-text" style="color: black">
					Или просто напишите нам<br>в удобном для вас мессенджере
				</span>
			</div>
		</div>
	</div>
</amp-sidebar>