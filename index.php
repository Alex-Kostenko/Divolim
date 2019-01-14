<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<title>Миловид - Головна</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<link rel="stylesheet" href="style/reset.css">
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/header.css">
	<link rel="stylesheet" href="style/footer.css">
	<link rel="stylesheet" href="style/respons.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link href="style/index.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
	<link rel="icon" href="image/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header class="header-index">
		<div class="container">
			<div class="title">
				<a href="index.php"><img src="image/logo_milovid.png" alt="Logo"></a>
					<div class="name">
						<a href="index.php">
							<h1>Миловид</h1>
							<h2>
								Рол-штори, жалюзі,<br>
								вікна, двері, роллети
							</h2>
						</a>	
					</div>	 
			</div>
			<div class="nav_elem">
				<div class="phone">
					<div class="svggg">
						<img src="image/phone.png" alt="phone">
					</div>
				<span>
					<a href="tel: +380472382117">(0472) 382-117</a>
					<a href="tel: +380672396114">(067) 239-6114</a>
					<a href="tel: +380731604276">(073) 160-4276</a>
				</span>
			</div>
			<a href="#">
				<div class="viber">
					<div class="svggg">
						<a href="viber://chat?number=+380731604276"><img src="image/viber_1-01.svg" alt="viber"></a>
					</div>
					<span><a href="viber://chat?number=+380731604276">Viber</a></span>
				</div>
			</a>
			<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">
				<div class="location">
					<div class="svggg">
					<img  src="image/map.png" alt="location">
				</div>
					<span>
						м. Черкаси <br>
						бул. Шевченка, 145, офіс 117					
					</span>
				</div>
			</a>	
			<div class="mail">
				<div class="svggg">
				<img src="image/mail.png" alt="mail">
			</div>
				<a href="mailto: milovid@ukr.net">
					<span>milovid@ukr.net</span>
				</a>
			</div>
			<div class="vk">
				<a href="https://www.instagram.com/milovid_com_ua/?hl=ru">
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="svg1">
						<use href="image/instagram.svg#insta" width="22" height="22"></use>
					</svg>
				</a>
			</div>
			<div class="fb" id="Fb">
				<a href="https://www.facebook.com/com.milovid/">
					<img src="image/facebook_logo.png" alt="Fb">
				</a>	
			</div>
			<div class="none_menu" onclick="showMenu()">
				&#9776;
			</div>
		</div>
		</div>
		<div class="nav_container">
			<div class="nav">
				<ul id="one">
					<li><a href="index.php">Головна</a></li>
					<li><a href="./template/production.php">Продукція</a></li>
					<li><a href="./template/portfolio.php">Наші роботи</a></li>
					<li><a href="./template/contacts.php">Контакти</a></li>
				</ul>
				<div class="dollar" id="two">
					Курс доллара: 
					<span id="dollar">
						
						<?php $textfile = "http://milovid.com.ua/dollar.txt"; //путь к файлу

						if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);

						echo $quotes[$quote]; //вывод рандомного текста

						}else{echo ("Нет рандомного контента");} //вывод сообщения, если файл не найден 
						?>

					</span>
				</div>
			</div>
		</div>
	</header>
	<div id="mobile-menu-block" style="display: none;">
		<ul>
			<li><a href="index.php">Головна</a></li>
			<li><a href="./template/production.php">Продукція</a></li>
			<li><a href="./template/portfolio.php">Наші роботи</a></li>
			<li><a href="./template/contacts.php">Контакти</a></li>
		</ul>
	</div>
	<script src="js/slides-start-page.js"></script>
	<div class="slider-main-page"> <!-- FIRST SLIDE 11111-->
		<div class="slider-item">
			<div class="slider-text">
				<h2 class="slider-head">
					Ролові штори
				</h2>
				<div class="slider-description">
					Ролові штори дають нові можливості в оформленні дизайну будь-яких приміщень – можливість надати офісу
					або квартирі неповторність і оригінальність. Ваше вікно буде виглядати стильно.
				</div>
				<button class="slider-button">Більш детально</button>
				<div class="slide-change-block">
					<button class="slide-change-block-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
					<button class="slide-change-block-right" onclick="plusDivs(+1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="slider-photo slider-photo1">
			</div>
		</div>

		<div class="slider-item" style="display: none;"> <!-- SECOND SLIDE 22222-->
			<div class="slider-text">
				<h2 class="slider-head">Бамбукові штори</h2>
				<div class="slider-description">
					Бамбукові штори – це цільне полотно, сплетене різними способами з бамбукового очерету, джутової
					соломки, льону, всі тканини натуральні. Бамбуковий варіант декора вікна довговічний і практичний
					завдяки вологостійкості й міцності, він екзотично декорує приміщення.
				</div>
				<button class="slider-button">Більш детально</button>
				<div class="slide-change-block">
					<button class="slide-change-block-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
					<button  class="slide-change-block-right" onclick="plusDivs(+1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="slider-photo slider-photo2">
			</div>
		</div>

		<div class="slider-item" style="display: none;"> <!-- THIRD SLIDE 33333-->
			<div class="slider-text">
				<h2 class="slider-head">Римські штори</h2>
				<div class="slider-description">
					Римські штори – унікальна річ, яка втілює у собі лаконізм, мінімально можливі витрати тканин з
					відмінними функціональними характеристиками. Римські штори – оптимальне та стильне рішення захисту
					приміщення від сонячних променів, сторонніх поглядів з вулиці.
				</div>
				<button class="slider-button">Більш детально</button>
				<div class="slide-change-block">
					<button  class="slide-change-block-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
					<button  class="slide-change-block-right" onclick="plusDivs(+1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="slider-photo slider-photo3">
			</div>
		</div>

		<div class="slider-item" style="display: none;"> <!-- FOURTH SLIDE 44444-->
			<div class="slider-text">
				<h2 class="slider-head">Штори плісе</h2>
				<div class="slider-description">
					Вдалий вибір для вікон з нестандартними формами та розмірами. Придбати сонцезахисні системи для
					таких вікон може бути проблематично, а штори плісе допоможуть закрити найбільші віконні отвори.
					Також немає труднощів із встановленням жалюзі на різних віконних поверхнях, які мають нахил –
					мансардне вікно чи частина скляного даху.
				</div>
				<button class="slider-button">Більш детально</button>
				<div class="slide-change-block">
					<button class="slide-change-block-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
					<button class="slide-change-block-right" onclick="plusDivs(+1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="slider-photo slider-photo4">
			</div>
		</div>
	</div>

	<div class="production-news">
		<div class="production">
			<h2>Продукція</h2>
			<div class="svg-menu">
				<div class="svg-str">
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/rolls-01.svg#Шар_1" width="80" height="80" class="fill-hover"></use>
							</svg>
							<button>Ролові штори</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/jalousie_horizontzl-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Горизонтальні жалюзі</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/jalousie_vertical-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Вертикальні жалюзі</button>
						</a>
					</div>
				</div>
				<div class="svg-str">
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/plisse-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Пліссе</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/roman-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Римські штори</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/bamboo-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Бамбукові штори</button>
						</a>
					</div>
				</div>
				<div class="svg-str">
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/mosquito-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Антимоскітні сітки</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/rollet-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Роллети захисні</button>
						</a>
					</div>
					<div class="svg-item">
						<a href="template/production.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80">
								<use href="image/window_door-01.svg#Шар_1" width="80" height="80"></use>
							</svg>
							<button>Вікна та двері ПВХ</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="news">
			<h2>Акції та новини</h2>
			<article>
				<h3>Нова колекція</h3>
				<p>Нова колекція тканини для вертикальних жалюзі 127мм, 89мм</p>
				<p class="date">01/07/2017</p>
			</article>
			<article>
				<h3>Знижки %</h3>
				<p>З 1-го жовтня нові ціни на ролові штори !!! Ну дуже низькі ціни!</p>
				<p class="date">01/07/2017</p>
			</article>
			<article>
				<h3>Знижки %</h3>
				<p>З 1-го жовтня нові ціни на ролові штори !!! Ну дуже низькі ціни!</p>
				<p class="date">01/07/2017</p>
			</article>
			<article>
				<h3>Знижки %</h3>
				<p>З 1-го жовтня нові ціни на ролові штори !!! Ну дуже низькі ціни!</p>
				<p class="date">01/07/2017</p>
			</article>
		</div>
	</div>
	<div class="repair">
		<div class="repair-image">
			<div class="repair-icon">
				<svg width="60" height="60">
					<use xlink:href="image/repair-01.svg#Capa_1" width="60" height="60" style="stroke: #000000"></use>
				</svg>
			</div>
		</div>
		<div class="repair-text">
			<h2>Ремонт жалюзей всіх видів, заміна деталей</h2>
			<p class="repair-description">Наші спеціалісти професійно та оперативно підберуть всі необхідні деталі і виконають ремонт жалюзей
				будь-якої складності. Дадуть цінні поради щодо правильної експлуатації та догляду за ними.</p>
			<p class="repair-phone-us">Потрібен ремонт жалюзей? Телефонуйте нам і ми Вам допоможемо!</p>
			<p class="mobile-phone"><a href="tel: +380472382117">(0472) 382-117</a></p>
			<p class="mobile-phone"><a href="tel: +380672396114">(067) 239-6114</a></p>
			<p class="mobile-phone"><a href="tel: +380731604276">(073) 160-4276</a></p>
		</div>
	</div>
	<div class="gallery-main-page">
		<div class="wrapper-gallery">
			<div class="gallery-on">
				<h2>Наші роботи</h2>
				<div class="gallery-str">
					<div class="twoXtwo">
						<div class="str-gallery">
							<p class="twoXtwo1Element twoXtwoElementSize"></p>
							<p class="twoXtwo2Element twoXtwoElementSize"></p>
						</div>
						<div class="str-gallery">
							<p class="twoXtwo3Element twoXtwoElementSize"></p>
							<p class="twoXtwo4Element twoXtwoElementSize"></p>
						</div>
					</div>
					<iframe width="577" height="434"
							src="https://www.youtube.com/embed/vNH3vK4KEh4">
					</iframe>
				</div>
				<div class="gallery-str">
					<p class="twoXtwo5Element twoXtwoElementSize"></p>
					<p class="twoXtwo6Element twoXtwoElementSize"></p>
					<p class="twoXtwo7Element twoXtwoElementSize"></p>
					<p class="twoXtwo8Element twoXtwoElementSize"></p>
				</div>
				<div class="button-center">
					<a href="/template/portfolio.php"><button class="more-photo-button">Ще фото &#8194;
						<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="fot_container">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917.0811247748902!2d32.05223493963703!3d49.44866127886595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c84944cee9f%3A0xadd4e3e0137247dc!2z0LHRg9C7LiDQqNC10LLRh9C10L3QutC-LCAxNDUsINCn0LXRgNC60LDRgdGB0YssINCn0LXRgNC60LDRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAxODAwMA!5e0!3m2!1sru!2sua!4v1544290995186" width="380" height="410" frameborder="0" style="border:0" allowfullscreen>
				</iframe>
			</div>
			<div class="contacts" >
				<h5>
					Ми підберемо найкраще <br>
					рішення саме для вас
				</h5>
				<ul>
					<li>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">
							<div class="cont_img">
								<img src="image/map_foot.png" alt="map">
							</div>
						</a>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">м. Черкаси, бул.Шевченка, 145,
						офіс 117, (1-й поверх)</a>
					</li>
					<li>
						<a href="https://goo.gl/maps/P3WDzGn8AUt">
							<div class="cont_img">
								<img src="image/time.png" alt="time">
							</div>
						</a>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">пн-пт: 9-00 – 18-00</a>
					</li>
					<li>
						<a href="#">
							<div class="cont_img">
								<a href="tel: +380472382117"><img src="image/phone_foot.png" alt="phone"></a>
							</div>
						</a>
						<div class="wrapper">
							<a href="tel: +380472382117">(0472) 382-117</a><br>
							<a href="tel: +380672396114">(067) 239-6114</a><br>
							<a href="tel: +380731604276">(073) 160-4276</a><br>
						</div>
					</li>
					<li>
						<a href="#">
							<div class="cont_img">
								<a href="viber://chat?number=380672396114"><img src="image/viber_1-01.svg" alt="viber"></a>
							</div>
						</a>
						<a href="viber://chat?number=380672396114">Viber</a>
					</li>
					<li>
						<a href="mailto: milovid@ukr.net">
							<div class="cont_img">
								<img src="image/mail_foot.png" alt="mail">
							</div>
						</a>
						<a href="mailto: milovid@ukr.net">milovid@ukr.net</a>
					</li>
				</ul>
			</div>
			<div class="forms">
				<h5>
				Будь ласка, залиште свої контакти<br>
				і ваше запитання, ми з вами зв'яжемося!
				</h5>
				<form method="post" class="form-contacts" action="send.php">
						<p class="hint-form"><span>*</span> - поля обов'язкові для заповнення</p>
						<input type="text" placeholder="* Ваше ім'я" name="name">
						<input type="email" placeholder="* E-mail" name="email">
						<input type="tel" placeholder="* Телефон" name="phone">
						<input type="text" placeholder="* Ваш вопрос" name="question">
						<button type="submit">Надіслати</button>
				</form>
			</div>
		</div>
		<div class="bottom_container">
			<div class="unicode_st">
				<div class="footer_title">
					<img src="image/logo_milovid.png" alt="logo">
					<div class="wrapper">
						<h5>Миловид</h5>
						<h6>Виготовлення та встановлення різних видів жалюзі, захисних ролет, гаражних воріт, москітних сіток, вікна і двері ПВХ, рефлексороли, маркізи, ремонт жалюзі.</h6>
					</div>
				</div>
				<div class="copyright">
					Copyright © 2015-2018. Миловид
				</div>
				
			</div>
		</div>
	</footer>
</body>
</html>
