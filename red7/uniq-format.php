<!doctype html>
<html ⚡>

<head>
	<meta charset="utf-8">
	<title>RED7</title>
	<link rel="canonical" href="index.html">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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
			line-height: 1.33;
			color: #484748;
		}

		.slider {
			position: relative;
			left: -30px;
			width: calc(100% + 60px);
		}		

		.slider__navigation {
			display: flex;
			align-items: center;
			justify-content: space-between;			
			padding: 0 30px 0 0;
			margin-top: 20px;
		}
		
		.slider__controls {
			display: flex;
			align-items: center;
			gap: 18px;
			height: 37px;
			position: relative;
		}

		.slider__control {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 37px;
			height: 37px;
			border-radius: 50%;
			border: 1px solid #D3D7DA;
			position: static;			
			margin: 0;
		}

		.slider__control::after {
			content: '';
			width: 8px;
			height: 14px;
			background: no-repeat center;
			background-size: contain;
		}

		.swiper-button-prev::after {
			background-image: url('./assets/nav-arrow-left.svg');
		}

		.swiper-button-next::after {
			background-image: url('./assets/nav-arrow-right.svg');
		}

		.swiper-pagination {
			position: static;
			display: flex;
			align-items: flex-start;
			width: fit-content;			
			color: rgba(0,0,0,.25);
			font-size: 18px;
			line-height: 1;			
		}

		.swiper-pagination-current {
			color: rgba(0,0,0,1);
			margin-right: 10px;
		}

		.swiper-pagination-total {
			margin-left: 10px;
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

		.swiper-slide {			
			display: flex;
			flex-direction: column;
			align-items: flex-end;
			gap: 16px;
			width: auto;			
		}		

		.swiper-slide span {
			font-size: 14px;
			line-height: 1.43;
			text-align: right;
		}	

		.page-1-4-content {
			border: 1px solid rgba(213, 219, 222, 0.45);
			padding: 20px;
		}

		.page-1-4-content__item {
			display: flex;
			align-items: flex-start;
			gap: 28px;
		}

		.page-1-4-content__item:not(:last-child) {
			border-bottom: 1px solid #ECEEF0;
		}

		.page-1-4-content__text {
			display: flex;
			flex-direction: column;
			gap: 8px;
		}

		.page-1-4-content__text p {
			display: flex;
			flex-direction: column;
			font-size: 14px;
			margin: 0;
		}

		.page-1-4-content__item-img {
			display: flex;
			align-items: center;
			flex-direction: column;
			gap: 4px;
			font-size: 14px;
			width: 50px;
		}

		.page-2-1-content__block {
			display: flex;	
			border-top: 1px solid #ECEEF0;
			padding: 15px 0;		
		}

		.page-2-1-content__block:last-child {			
			border-bottom: 1px solid #ECEEF0;			
		}

		.page-2-1-content__item {
			display: flex;
			flex-direction: column;
			gap: 8px;
			width: 50%;
			font-size: 12px;
			line-height: 1.33;
			color: #484748;
		}

		.page-2-1-content__img {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 50px;
			height: 50px;
			border: 1px solid rgba(0, 0, 0, 0.15);
		}

		.page-2-2-content {
			border-top: 1px solid black;
			border-bottom: 1px solid black;
			padding: 42px 0;
			margin-top: 24vh;
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

		.story-2-title {
			margin: 0 0 42px;
		}

		.image-block {
			position: relative;
			left: -20px;
			width: calc(100% + 40px);		
			margin-bottom: 18px;
		}

		.page-3-3-image {
			position: relative;			
		}

		.page-3-3-image__author {
			position: absolute;
			bottom: calc(59vw + 20px);
			left: 0;
			font-size: 12px;
			line-height: 1.5;			
			text-transform: uppercase;
			color: #000000;
			z-index: 10;
		}

		.page-3-3-image__subscription {
			position: absolute;
			top: calc(58vw + 20px);		
			right: 0;
			width: 60%;
			z-index: 10;
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
			
			.swiper-slide img {
				height: 170px;
				object-fit: cover;
				object-position: left top;
			}

			.swiper-slide span {
				font-size: 12px;
				line-height: 1.33;				
			}	

			.slider__navigation {				
				margin-top: 16px;
			}

			.cta-layer {			
				padding-bottom: 20px;
			}

			.page-2-1-content__img {				
				width: 30px;
				height: 30px;				
			}

			.page-2-1-content__img amp-img {				
				scale: .6;
			}

			.story-2-title {
				margin: 0 0 16px;
			}

			.image-block {				
				height: 170px;
				overflow-y: hidden;				
			}

			.page-3-2-image {
				display: flex;
				flex-direction: column;
				justify-content: flex-end;
				height: 200px;
				overflow-y: hidden;
				margin-top: 20px;
			}

			.page-3-2-image amp-img {
				flex: none;
			}

			.page-3-3-image {
				display: flex;
				flex-direction: column;
				justify-content: center;
				height: 270px;
				overflow-y: hidden;
			}

			.page-3-3-image amp-img {
				flex: none;
			}

			.page-3-3-image__author {				
				bottom: calc(49vw + 20px);				
			}

			.page-3-3-image__subscription {				
				top: calc(43vw + 20px);						
			}

			.page-text {
				font-size: 14px;				
			}
		}
				
	</style>
</head>

<body>
	<amp-story standalone canShowSystemLayerButtons="false" title="Very" publisher="Main Street">

		<?php require_once('sidebar.php'); ?>

		<!-- PAGE 1 -->
		<amp-story-page id="page7-1">			
			<amp-story-grid-layer template="fill">
				<amp-img src="./assets/page-7-1-bg.jpg"
					width="360"
					height="640"
					layout="responsive"
					alt="">
				</amp-img>				
			</amp-story-grid-layer>
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div>
					<h1 class="page-title" style="font-size: 30px; margin: 0 0 20px;">
						<span>Апартаменты</span>
						<span>с собственной</span>
						<span style="align-self: flex-end;">террасой</span>
					</h1>						
					<p class="page-text">В RED7 на&nbsp;Ваш выбор представлено несколько вариантов апартаментов с&nbsp;террасами площадью от&nbsp;43 до 74,5 кв.м.</p>
				</div>				
			</amp-story-grid-layer>	
			<amp-story-grid-layer template="thirds" class="cta-layer">
				<a role="button" class="btn sidebar-control" grid-area="lower-third" style="margin-top: auto;">
					Получить подборку с&nbsp;планировками					
				</a>
			</amp-story-grid-layer>					
		</amp-story-page>	
		
		<!-- PAGE 2 -->
		<amp-story-page id="page7-2">						
			<amp-story-grid-layer template="vertical" class="logo-layer">
				<amp-img src="./assets/red7-logo.svg"
					width="57"
					height="26"					
					alt="">
				</amp-img>
			</amp-story-grid-layer>		
			<amp-story-grid-layer template="vertical" class="content-layer">
				<div>
					<h1 class="page-title" style="font-size: 30px; margin: 0 0 20px;">
						<span>Двухуровневые</span>						
						<span style="align-self: flex-end;">апартаменты</span>
					</h1>						
					<amp-img src="./assets/page-7-2-image.jpg"
						width="320"
						height="402"
						layout="responsive"
						alt="">
					</amp-img>
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