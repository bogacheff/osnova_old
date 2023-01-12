<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>RED7</title>
	<link rel="canonical" href="index.html">	
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

	<style amp-custom>
		@keyframes imageScroll {
			from {
				transform: translateX(0);
			}
			to {
				transform: translateX(-100%);
			}
		}
		
		@font-face {
			font-family: 'CeraPro';
			src: url('./assets/fonts/CeraPro-Thin.ttf');
			font-style: normal;
			font-weight: 200;
		}
		
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
			margin-bottom: 40px;
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

		.page4-1-img-title {
			display: flex;
			align-items: flex-end;
			gap: 8px;
		}

		.page4-1-img-title__num {
			position: relative;
			bottom: -5px;
			font-size: 48px;
			font-weight: 200;
			line-height: 1;
			color: #E40613;
		}

		.page4-1-img-title__text {
			line-height: 1.14;
		}

		.page4-1-img-title {
			margin-bottom: 16px;
		}

		.images-container {		
			overflow-x: scroll;			
			width: calc(100% + 40px);						
			position: relative;
			left: -20px;			
			margin-bottom: 12px;
		}

		.images-container::-webkit-scrollbar {
			display: none;
		}

		.images-container amp-img {
			flex: none;	
		}

		.images-container__wrapper {
			display: flex;
			align-items: flex-start;
			gap: 16px;			
			animation-name: imageScroll;
			animation-duration: 10s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			animation-fill-mode: both;
			padding: 0 20px;
		}

		.images-caption {
			font-size: 12px;
			line-height: 1.5;
			text-transform: uppercase;
			color: #000000;
			align-self: flex-end;
			text-align: end;
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

			.page4-1-img-title {
				margin-bottom: 10px;
			}

			.page-4-1-image {
				display: flex;
				flex-direction: column;
				justify-content: flex-end;
				overflow-y: hidden;
				height: 180px;
			}

			.page-4-1-image amp-img {
				flex: none;
			}

			.images-container {
				align-items: flex-end;
				overflow-y: hidden;
				height: 260px;
			}

			.images-container amp-img {
				transform: scale(1);
			}

			.page-text {
				font-size: 14px;
				line-height: 1.57;
				color: #484748;
			}	

			.page-title {
				margin-bottom: 16px;
			}
		}
				
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page4-1">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div>
					<h1 class="page-title" style="font-size: 28px;">
						<span>Все апартаменты</span>
						<span style="align-self: flex-end;">с дизайнерской</span>
						<span style="align-self: flex-end;">отделкой</span>
					</h1>	
					<p class="page-text" style="margin-bottom: 10px;">
						Все апартаменты с&nbsp;отделкой от&nbsp;именитых бюро архитектуры и&nbsp;интерьера — <span style="color: rgba(227, 6, 19, 1);">i29 и OLEG KLODT</span>						
					</p>	
					<div class="page4-1-img-title">
						<span class="page4-1-img-title__num">2</span>
						<span class="page4-1-img-title__text page-text">
							стиля отделки с двумя<br>вариантами цветовой гаммы
						</span>
					</div>
					<div class="page-4-1-image">
						<amp-img src="./assets/page-4-1-image.jpg"
							width="320"
							height="219"
							layout="responsive"
							alt="">
						</amp-img>
					</div>						
				</div>				
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" onclick="window.location='#page=page4-2'" class="btn" grid-area="lower-third" style="margin-top: auto;">
					Современный минимализм
					<amp-img src="./assets/arrow-right.svg"
						width="30"
						height="7"						
						alt="">
					</amp-img>
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>		
		
		<!-- PAGE 2 -->
		<amp-story-page id="page4-2">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="font-size: 28px;">
						<span>Современный</span>
						<span style="align-self: flex-end;">
							минимализм
							<amp-img src="./assets/light-label.svg"
								width="53"
								height="19"							
								alt="">
							</amp-img>						
						</span>						
					</h1>
					<a role="button" class="images-container">
						<div class="images-container__wrapper">
							<amp-img src="./assets/page-4-2-images/img-4-2-1.jpg"
								width="278"
								height="321"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-2-images/img-4-2-2.jpg"
								width="278"
								height="321"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-2-images/img-4-2-3.jpg"
								width="340"
								height="191"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-2-images/img-4-2-4.jpg"
								width="279"
								height="279"							
								alt="">
							</amp-img>
						</div>						
					</a>	
					<span class="images-caption">
						СТУДИЯ АРХИТЕКТУРЫ
						<span style="color: #E40613;">i29</span>
					</span>				
				</div>				
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" onclick="window.location='#page=page4-3'" class="btn" grid-area="lower-third" style="margin-top: auto;">
					Вариант DARK
					<amp-img src="./assets/arrow-right.svg"
						width="30"
						height="7"						
						alt="">
					</amp-img>
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>	

		<!-- PAGE 3 -->
		<amp-story-page id="page4-3">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="font-size: 28px;">
						<span>Современный</span>
						<span style="align-self: flex-end;">
							минимализм
							<amp-img src="./assets/dark-label.svg"
								width="53"
								height="19"							
								alt="">
							</amp-img>						
						</span>						
					</h1>
					<a role="button" class="images-container">
						<div class="images-container__wrapper">
							<amp-img src="./assets/page-4-3-images/img-4-3-1.jpg"
								width="278"
								height="321"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-3-images/img-4-3-2.jpg"
								width="360"
								height="270"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-3-images/img-4-3-3.jpg"
								width="320"
								height="240"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-3-images/img-4-3-4.jpg"
								width="320"
								height="240"							
								alt="">
							</amp-img>					
						</div>						
					</a>	
					<span class="images-caption">
						СТУДИЯ АРХИТЕКТУРЫ
						<span style="color: #E40613;">i29</span>
					</span>				
				</div>				
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" onclick="window.location='#page=page4-4'" class="btn" grid-area="lower-third" style="margin-top: auto;">
					Лаконичная неоклассика
					<amp-img src="./assets/arrow-right.svg"
						width="30"
						height="7"						
						alt="">
					</amp-img>
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>	

		<!-- PAGE 4 -->
		<amp-story-page id="page4-4">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="font-size: 28px;">
						<span>Лаконичная</span>
						<span style="align-self: flex-end;">
							неоклассика
							<amp-img src="./assets/light-label.svg"
								width="53"
								height="19"							
								alt="">
							</amp-img>						
						</span>						
					</h1>
					<a role="button" class="images-container">
						<div class="images-container__wrapper">
							<amp-img src="./assets/page-4-4-images/img-4-4-1.jpg"
								width="278"
								height="321"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-4-images/img-4-4-2.jpg"
								width="240"
								height="320"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-4-images/img-4-4-3.jpg"
								width="320"
								height="257"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-4-images/img-4-4-4.jpg"
								width="320"
								height="256"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-4-images/img-4-4-5.jpg"
								width="320"
								height="256"							
								alt="">
							</amp-img>
						</div>												
					</a>	
					<span class="images-caption">
						Архитектурное бюро<br>
						<span style="color: #E40613;">Олега Клодта</span>
					</span>				
				</div>				
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" onclick="window.location='#page=page4-5'" class="btn" grid-area="lower-third" style="margin-top: auto;">
					Вариант DARK
					<amp-img src="./assets/arrow-right.svg"
						width="30"
						height="7"						
						alt="">
					</amp-img>
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>	

		<!-- PAGE 5 -->
		<amp-story-page id="page4-5">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>				
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div style="display: flex; flex-direction: column;">
					<h1 class="page-title" style="font-size: 28px;">
						<span>Лаконичная</span>
						<span style="align-self: flex-end;">
							неоклассика
							<amp-img src="./assets/dark-label.svg"
								width="53"
								height="19"							
								alt="">
							</amp-img>						
						</span>						
					</h1>
					<a role="button" class="images-container">
						<div class="images-container__wrapper">
							<amp-img src="./assets/page-4-5-images/img-4-5-1.jpg"
								width="278"
								height="321"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-5-images/img-4-5-2.jpg"
								width="240"
								height="320"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-5-images/img-4-5-3.jpg"
								width="320"
								height="257"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-5-images/img-4-5-4.jpg"
								width="320"
								height="256"							
								alt="">
							</amp-img>
							<amp-img src="./assets/page-4-5-images/img-4-5-5.jpg"
								width="320"
								height="256"							
								alt="">
							</amp-img>	
						</div>											
					</a>	
					<span class="images-caption">
						Архитектурное бюро<br>
						<span style="color: #E40613;">Олега Клодта</span>
					</span>				
				</div>				
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Записаться на показ				
				</a>
			</amp-story-grid-layer>	
		</amp-story-page>	
	</amp-story>	

	<style>
    #sidebar {
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

    #sidebar.shown {
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
			background-color: #fff;
			z-index: 999998;
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
      #sidebar {
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
      const sidebarEl = document.querySelector('#sidebar');
      const controlElems = document.querySelectorAll('.sidebar-control');
      const closeElem = document.querySelector('.sidebar-close');

      closeElem.onclick = () => {
        sidebarEl.classList.remove('shown');
        if (!!playerControlEl) {
          playerControlEl.dispatchEvent(new Event('click', {
            bubbles: true
          }));
        }
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
</body>

</html>