<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<title>Миловид - Продукція</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<link rel="stylesheet" href="../style/reset.css">
	<link rel="stylesheet" href="../style/main.css">
	<link rel="stylesheet" href="../style/header.css">
	<link rel="stylesheet" href="../style/footer.css">
	<link rel="stylesheet" href="../style/production.css">
	<link rel="stylesheet" href="../style/respons.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/main.js"></script>
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="header-index">
		<div class="container">
			<div class="title">
				<a href="../index.php"><img src="../image/logo_milovid.png" alt="Logo"></a>
					<div class="name">
						<a href="../index.php">
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
						<img src="../image/phone.png" alt="phone">
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
						<a href="viber://chat?number=+380731604276"><img src="../image/viber_1-01.svg" alt="viber"></a>
					</div>
					<span><a href="viber://chat?number=+380731604276">Viber</a></span>
				</div>
			</a>
			<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">
				<div class="location">
					<div class="svggg">
						<img  src="../image/map.png" alt="location">
					</div>
					<span>
						м. Черкаси <br>
                        бул. Шевченка, 145, офіс 117 						
					</span>
				</div>
			</a>	
			<div class="mail">
				<div class="svggg">
				<img src="../image/mail.png" alt="mail">
			</div>
				<a href="mailto: milovid@ukr.net">
					<span>milovid@ukr.net</span>
				</a>
			</div>
			<div class="vk">
				<a href="https://www.instagram.com/milovid_com_ua/?hl=ru">
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="svg1">
						<use href="../image/instagram.svg#insta" width="22" height="22"></use>
					</svg>
				</a>
			</div>
			<div class="fb" id="Fb">
				<a href="https://www.facebook.com/com.milovid/">
					<img src="../image/facebook_logo.png" alt="Fb">
				</a>	
			</div>
			<div class="none_menu"  onclick="showMenu()">
				&#9776;
			</div>
		</div>
		</div>
		<div class="nav_container">
			<div class="nav">
				<ul id="one">
					<li><a href="../index.php">Головна</a></li>
                    <li><a href="production.php">Продукція</a></li>
                    <li><a href="portfolio.php">Наші роботи</a></li>
                    <li><a href="contacts.php">Контакти</a></li>
				</ul>
				<div class="dollar" id="two">
					Курс доллара: 
					<span>
						<?php $textfile = "http://milovid.com.ua/dollar.txt"; //путь к файлу

                        if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);

                        echo $quotes[$quote]; 

                        }else{echo ("Ошибка");} //вывод сообщения, если файл не найден 
                        ?>
					</span>
				</div>
			</div>
		</div>
	</header>
<div id="mobile-menu-block" style="display: none;">
	<ul>
		<li><a href="../index.php">Головна</a></li>
        <li><a href="production.php">Продукція</a></li>
        <li><a href="portfolio.php">Наші роботи</a></li>
        <li><a href="contacts.php">Контакти</a></li>
	</ul>
</div>
	<section class="production">
		<div class="wrap_prod" id="showMain">
			<div class="nav_left">
				<h4>Ролові штори</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритий тип</a></li>
						<li><a onclick="showClose()">Закритий тип</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<h5>РОЛОВІ ШТОРИ</h5>
				<div class="title">
					<p>
						Ролові штори являють собою тканинне полотно, яке намотується на розташований вгорі горизонтальний вал. Підйом полотна може здійснюватися як вручну, за допомогою механізму ланцюжка або пружини, так і за допомогою електроприводу.
					</p>
					<p>
						Ролові штори дають нові можливості в оформленні дизайну будь-яких приміщень - можливість надати офісу або квартирі неповторність і оригінальність. Ваше вікно буде виглядати стильно.
					</p>
					<p>
						Основна функція ролових штор - світлозахист. Ролові штори захистять Вашу квартиру від сторонніх поглядів з вулиці і від попадання прямих сонячних променів. Ми робимо кілька систем ролових штор, різноманітних за дизайном, кольором, фактурою тканини. Склад тканин: бавовна, поліестер, льон. Тканини мають здатність відштовхувати пил, воду, не вигоряють, не мнуться, а також мають ультратонке покриття з виворітного боку по технології ламінування, яке повністю відбиває сонячні промені
					</p>
					<p>
						Сьогодні великий попит мають штори «День-ніч» - це новий різновид системи ролових штор.
					</p>
					<p>
						Оригінальне рішення захисту приміщення від сонця - круговий рух тканини і чергування смуг в ній - забезпечує плавне регулювання ступені освітленості в приміщенні
					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a onclick="showUniversal()">
							<img src="../image/rol_shtoru/universal/JQ7iAMU.jpeg" alt="">
							<div class="bottom_wrap_roll">
								День-ніч
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showOpen()">
							<img src="../image/rol_shtoru/open/открытого.jpeg" alt="">
							<div class="bottom_wrap_roll">
								Відкритий тип
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showClose()">
							<img src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
							<div class="bottom_wrap_roll">
								Закритий тип
							</div>
						</a>
					</div>
				</div>
			</div>	
		</div>
		<div class="wrap_prod" id="showUniversal" style="display: none;">
			<div class="nav_left">
				<h4>Ролові штори</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритий тип</a></li>
						<li><a onclick="showClose()">Закритий тип</a></li>
				</ul>
			</div>
			<div class="main_prod">
			<div class="back_prod">
				<a onclick="showMain()">&larr;</a>	
			</div>
			<h5>День-ніч</h5>
			<div class="title">
				<p>
					Сьогодні великим попитом користуються штори «День-ніч» - це новий різновид системи ролової штори, оптимальне та стильне рішення захисту приміщення від сонячних променів, круговий рух тканини та чергування смуг дає можливість плавно регулювати ступінь освітлення в приміщенні.
				</p>
				<p>	
					Ролові штори захистять вашу квартиру від сторонніх поглядів з вулиці та потрапляння прямих сонячних променів. Ми виготовляємо декілька систем ролових штор, різних за дизайном, кольору, фактурі тканини. Склад тканин – льон, бавовна, поліестр. Тканини  просочені пиловідштовхуючими, водовідштовхувальними просоченнями, не вигоряють  та мають  ультратонкі покриття з виворітного боку по технології ламінування, які  відбивають сонячні промені. Основна функція ролових штор – захист від світла.
				</p>
			</div>
			<div class="wrap_card">
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/universal/JQ7iAMU.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/THnfAQA.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/QOkQ9PB.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/9anfwig.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/AnXPQb8.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/jP3B2oR.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/ptda5UC.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/STDVtlQ.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/xcKruEh.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
			</div>
			</div>
		</div>
		<div class="wrap_prod" id="showOpen" style="display: none;">
			<div class="nav_left">
				<h4>Ролові штори</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритий тип</a></li>
						<li><a onclick="showClose()">Закритий тип</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
			<h5>ВІДКРИТИЙ ТИП</h5>
			<div class="title">
				<p>
					Ролові штори відкритого типу складаються з верхнього робочого валу, на якому закріплене тканинне полотно. Нижня частина полотна також має металеву планку, що дозволяє зберегти форму штори. Завдяки механічній системі, полотно намотується на верхній вал. Таким чином, ви можете регулювати рівень затемнення в кімнаті. Багато в чому ця здатність залежить від типу тканини. Вона може бути прозорою, напівпрозорою і абсолютно не пропускати світло.
				</p>
			</div>
			<div class="wrap_card">
				<div class="card">
					<a >
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a >
							<div class="black_bg">
								<img id="img"  src="../image/rol_shtoru/open/Xf99P5u.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a >
							<div class="black_bg">
								<img id="img"  src="../image/rol_shtoru/open/ufLdwM4.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="wrap_prod" id="showClose" style="display: none;">
			<div class="nav_left">
				<h4>Ролові штори</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритий тип</a></li>
						<li><a onclick="showClose()">Закритий тип</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
			<h5>ЗАКРИТИЙ ТИП</h5>
			<div class="title">
				<p>
					Ролети закритого типу мають короб, що приховує полотно в зібраному вигляді. Короб виконує не тільки декоративну функцію, але і захисну, запобігаючи пошкодженню, попаданню пилу і бруду в робочий механізм, що істотно подовжує термін служби рулонних штор.
				</p>
			</div>
			<div class="wrap_card">
				<div class="card">
					<a>
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>

					</a>
				</div>
				<div class="card">
					<a>
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/4.jpg" alt="">
						</div>
					</a>
				</div>
			</div>
			</div>
		</div>
	</section>
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
								<img src="../image/map_foot.png" alt="map">
							</div>
						</a>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">м Черкаси, бул.Шевченка, 145,
                    офіс 117, (1-й поверх)</a>
					</li>
					<li>
						<a href="https://goo.gl/maps/P3WDzGn8AUt">
							<div class="cont_img">
								<img src="../image/time.png" alt="time">
							</div>
						</a>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">пн-пт: 9-00 – 18-00</a>
					</li>
					<li>
						<a href="#">
							<div class="cont_img">
								<a href="tel: +380472382117"><img src="../image/phone_foot.png" alt="phone"></a>
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
								<a href="viber://chat?number=380672396114"><img src="../image/viber_1-01.svg" alt="viber"></a>
							</div>
						</a>
						<a href="viber://chat?number=380672396114">Viber</a>
					</li>
					<li>
						<a href="mailto: milovid@ukr.net">
							<div class="cont_img">
								<img src="../image/mail_foot.png" alt="mail">
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
				<form method="post" class="form-contacts" action="../send.php">
						<p class="hint-form"><span>*</span> - поля обов'язкові для заповнення</p>
						<input type="text" placeholder="* Ваше ім'я" name="name">
						<input type="email" placeholder="* E-mail" name="email">
						<input type="tel" placeholder="* Телефон" name="phone">
						<input type="text" placeholder="* Ваше запитання" name="question">
						<button type="submit">Надіслати</button>
				</form>
			</div>
		</div>
		<div class="bottom_container">
			<div class="unicode_st">
				<div class="footer_title">
					<img src="../image/logo_milovid.png" alt="logo">
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
