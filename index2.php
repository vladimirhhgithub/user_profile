<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>
html {
	overflow-x: hidden;
}

body {
	background: #121516;
	margin: 0px;
}

.container {
	max-width: 100%;
	margin-left: auto;
	margin-right: auto;
}

.menu-header {
	/* background: #bf5c00; */
	background: #2f2f2f;
	z-index: 10000;
}

.menu-container {
	text-align: center;
}

.menu {
	display: flex;
	justify-content: center;
	height: 50px;
	align-items: center;
}

.menu-item {
	color: #00ffec;
	font-size: 20px;
	font-weight: bold;
	transition: 1s ease-out;
	transition-property: color;
	cursor: pointer;
}

.menu-item:hover {
	color: #ff8600;
	transition: 1s ease-out;
	transition-property: color;
}

.menu-item-header {
	padding-left: 50px;
}

.slider {
	position: relative;
	width: 100%;
	height: 500px;
	margin-top: 50px;
}

.img-slider {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
	background-position: center;
	background-size: contain;
	width: 100%;
	height: 100%;
}

.slider-arrow-left {
	position: absolute;
	top: 50%;
	left: 10px;
	width: auto;
	height: auto;
	border-top: 50px solid transparent;
	border-left: 50px solid transparent;
	border-right: 50px solid #00d9c7;
	border-bottom: 50px solid transparent;
	z-index: 10;
	cursor: pointer;
}

.slider-arrow-right {
	position: absolute;
	top: 50%;
	right: 10px;
	width: auto;
	height: auto;
	border-top: 50px solid transparent;
	border-left: 50px solid #00d9c7;
	border-right: 50px solid transparent;
	border-bottom: 50px solid transparent;
	z-index: 10;
	cursor: pointer;
}

.slider-bottom-hr {
	background: #da0100;
	width: 100%;
	height: 2px;
	margin-top: 20px;
}

.catalog {
	margin-top: 50px;
}

.catalog-h1 {
	color: #00d9c7;
	font-size: 50px;
	font-weight: bold;
	text-align: center;
}

.catalog-container {
	max-width: 1200px;
	margin-left: auto;
	margin-right: auto;
	padding-left: 50px;
	padding-right: 50px;
	margin-top: 50px;
}

.product-item-img {
	width: 100%;
	height: 300px;
	cursor: pointer;
}

.product-h1 {
	color: #00d9c7;
	font-size: 24px;
	font-weight: bold;
	text-align: center;
	cursor: pointer;
}

.product-description {
	margin-top: 20px;
}

.product-information {
	color: #00d9c7;
	font-size: 20px;
}

.product-img-description {
	background-position: center !important;
	background-size: contain !important;
	width: 100%;
	height: 100%;
}

.product > .product-item-img > .product-img:nth-child(1) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
}

.product > .product-item-img > .product-img:nth-child(2) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
	height: 100%;
}

.product > .product-item-img > .product-img:nth-child(3) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
}

.product > .product-item-img > .product-img:nth-child(4) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
}

.product > .product-item-img > .product-img:nth-child(5) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
}

.product > .product-item-img > .product-img:nth-child(6) {
	background: url("/templates/image/transfer-img1.jpg") no-repeat;
}

.grid-catalog {
	display: grid;
	grid-template-rows: 1fr;
	grid-template-columns: 1fr 1fr 1fr;
	grid-gap: 50px;
}

.menu-mobile-item {
	display: none;
}

.menu-item-hr1, .menu-item-hr2, .menu-item-hr3 {
	width: 50px;
	height: 5px;
	background: #bf5c00;
	transition: 0.5s ease-out;
	margin-top: 5px;
}

.menu-mobile-item-active .menu-item-hr1 {
	transform: rotateZ(-45deg) translate(-9px, 6px);
}

.menu-mobile-item-active .menu-item-hr3 {
	transform: rotateZ(45deg) translate(-8px, -8px);
}

.menu-mobile {
	position: relative;
	background: #2f2f2f;
	height: 50px;
	z-index: 10000;
	display: none;
}

.menu-mobile-none {
	width: 0px !important;
	height: 0px !important;
	opacity: 0 !important;
	padding-top: 0px !important;
	padding-bottom: 0px !important;
	transition: 1s ease-out;
	transition-property: opacity, width, height;
}

.menu-mobile-container {
	background: #2f2f2f;
	padding-top: 20px;
	padding-bottom: 20px;
	opacity: 1;
	width: 100%;
	height: auto;
	transition: 1s ease-out;
	transition-property: opacity, width, height;
}

.menu-mobile-hr {
	background: red;
	width: 100%;
	height: 2px;
	margin-bottom: 20px;
}

.menu-mobile-header {
	color: #00d9c7;
	font-size: 20px;
	text-align: center;
	cursor: pointer;
}

.menu-mobile-item-header {
	margin-top: 20px;
}

.menu-header-fixed {
	position: fixed !important;
	top: 0px;
	width: 100%;
}

@media only screen and (min-width: 100px) and (max-width: 767px) {
.slider {
	position: relative;
	width: 100%;
	height: 350px;
	margin-top: 50px;
}

.img-slider {
	background-position: top;
}

.grid-catalog {
	display: grid;
	grid-template-rows: 1fr;
	grid-template-columns: 1fr;
	grid-gap: 50px;
}

.product-img-description {
	background-position: left !important;
	background-size: cover !important;
	width: 100%;
	height: 100%;
}

.menu {
	display: none;
}

.menu-mobile {
	display: block;
}

.menu-mobile-item {
	padding-top: 10px;
	padding-left: 10px;
	display: block;
	cursor: pointer;
	z-index: 10000;
}

.slider-arrow-left {
	position: absolute;
	top: 80%;
	left: 10px;
	width: 30px;
	height: auto;
	border-top: 30px solid transparent;
	border-left: 30px solid transparent;
	border-right: 30px solid #00d9c7;
	border-bottom: 30px solid transparent;
	z-index: 10;
	cursor: pointer;
}

.slider-arrow-right {
	position: absolute;
	top: 80%;
	right: 10px;
	width: 30px;
	height: auto;
	border-top: 30px solid transparent;
	border-left: 30px solid #00d9c7;
	border-right: 30px solid transparent;
	border-bottom: 30px solid transparent;
	z-index: 10;
	cursor: pointer;
}
}

@media only screen and (min-width: 767px) and (max-width: 1024px) {
.slider {
	position: relative;
	width: 100%;
	height: 350px;
	margin-top: 50px;
}

.img-slider {
	background-position: top;
}

.grid-catalog {
	display: grid;
	grid-template-rows: 1fr;
	grid-template-columns: 1fr 1fr;
	grid-gap: 50px;
}

.menu {
	display: none;
}

.menu-mobile {
	display: block;
}

.menu-mobile-item {
	padding-top: 10px;
	padding-left: 10px;
	display: block;
	cursor: pointer;
	z-index: 10000;
}

.slider-arrow-left {
	position: absolute;
	top: 80%;
	left: 10px;
	width: 30px;
	height: auto;
	border-top: 30px solid transparent;
	border-left: 30px solid transparent;
	border-right: 30px solid #00d9c7;
	border-bottom: 30px solid transparent;
	z-index: 10;
	cursor: pointer;
}

.slider-arrow-right {
	position: absolute;
	top: 80%;
	right: 10px;
	width: 30px;
	height: auto;
	border-top: 30px solid transparent;
	border-left: 30px solid #00d9c7;
	border-right: 30px solid transparent;
	border-bottom: 30px solid transparent;
	z-index: 10;
	cursor: pointer;
}
}
</style>
</head>
<body>
<div class="menu-header">
	<div class="menu-container">
		<div class="menu">
			<div class="menu-item">Главная</div>
			<div class="menu-item menu-item-header">Каталог</div>
			<div class="menu-item menu-item-header">Новости</div>
			<div class="menu-item menu-item-header">Контакты</div>
		</div>
	</div>
</div>

<div class="menu-mobile">
	<div class="menu-mobile-item">
		<div class="menu-item-hr1"></div>
		<div class="menu-item-hr2"></div>
		<div class="menu-item-hr3"></div>
	</div>

	<div class="menu-mobile-container menu-mobile-none">
	<div class="menu-mobile-hr"></div>
	<div class="menu-mobile-header">Главная</div>
	<div class="menu-mobile-header menu-mobile-item-header">Каталог</div>
	<div class="menu-mobile-header menu-mobile-item-header">Новости</div>
	<div class="menu-mobile-header menu-mobile-item-header">Контакты</div>
	</div>
</div>

<div class="container">
<div class="slider">
	<div class="slider-container">
		<div class="img-slider"></div>
	</div>

	<div class="slider-arrow-left"></div>
	<div class="slider-arrow-right"></div>
</div>

<div class="slider-bottom-hr"></div>

<div class="catalog">
	<div class="catalog-h1">Каталог</div>
	<div class="catalog-container">
		<div class="grid-catalog">
			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 1</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>

			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 2</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>

			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 3</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>

			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 4</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>

			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 5</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>

			<div class="product">
				<div class="product-item-img">
					<div class="product-img product-img-description"></div>
				</div>
				<div class="product-h1">Товар 6</div>
				<div class="product-description">
					<div class="product-information">Описание товара</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="margin-top: 50px; text-align: center; display: none;">
<img src="https://www.corsair.com/medias/sys_master/images/images/h73/h1f/9160261074974/-CO-9050082-WW-Gallery-AF120-02-WHITE.png" class="img" style="width: 200px;">
</div>
<div style="display: none; margin-bottom: 50px;">
<input type="button" class="btn-fan-default-start" value="Запустить вентилятор" style="color: #fff; font-size: 20px; background: #da0100; border: none; padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; cursor: pointer;">
<input type="button" class="btn-fan-default-stop" value="Остановить вентилятор" style="color: #fff; font-size: 20px; background: #da0100; border: none; margin-left: 50px; padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; cursor: pointer;">
<input type="button" class="btn-fan" value="x2" style="color: #fff; font-size: 20px; background: #da0100; border: none; margin-left: 50px; padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; cursor: pointer;">
</div>
</div>
<script>
$(document).ready(function() {
	let sec = new Date().getSeconds();

	//function start_fan() {
	let default_fan = setInterval(function() {
		$(".img").css({"transform": "rotateZ("+sec+"deg)"});
		sec++;
	}, 1
	);
	//}

	/*function start_fan_btn() {
	let default_fan_btn = setInterval(function() {
		$(".img").css({"transform": "rotateZ("+sec*10+"deg)"});
		sec++;
	}, 1
	);
	}

	function stop_fan() {
	clearInterval(default_fan);
	}*/
	/*let default_fan = function() {
		$(".img").css({"transform": "rotateZ("+sec+"deg)"});
		sec++;
	}

	let default_fan_btn = function() {
		$(".img").css({"transform": "rotateZ("+sec*10+"deg)"});
		sec++;
	}

	let default_fan_start = setInterval(default_fan, 1);*/

	$(document).on("click", ".btn-fan-default-start", function() {
		let default_fan = setInterval(function() {
			$(".img").css({"transform": "rotateZ("+sec+"deg)"});
			sec++;
		}, 1
		);

		//setInterval(default_fan_start, 1);

		//start_fan();
	}
	);

	$(document).on("click", ".btn-fan-default-stop", function() {
		clearInterval(default_fan);
		//stop_fan();
	}
	);

	$(document).on("click", ".btn-fan", function() {
		let default_fan_btn = setInterval(function() {
			$(".img").css({"transform": "rotateZ("+sec*10+"deg)"});
			sec++;
		}, 1
		);

		//setInterval(default_fan_btn, 1);

		//start_fan_btn();
	}
	);

	$(document).on("click", ".menu-mobile-item", function() {
		$(this).toggleClass("menu-mobile-item-active");
		$(".menu-mobile-container").toggleClass("menu-mobile-none");
	}
	);

	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 60) {
			//$(".menu-header").addClass("menu-header-fixed");
			$(".menu-mobile").addClass("menu-header-fixed");
		} else {
			//$(".menu-header").removeClass("menu-header-fixed");
			$(".menu-mobile").removeClass("menu-header-fixed");
		}
	}
	);
}
);
</script>
</body>
</html>