<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<title>Molovid - Продукція</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<link rel="stylesheet" href="../style/reset.css">
	<link rel="stylesheet" href="../style/main.css">
	<link rel="stylesheet" href="../style/header.css">
	<link rel="stylesheet" href="../style/footer.css">
	<link rel="stylesheet" href="../style/production.css">
	<link rel="stylesheet" href="../style/respons.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/main.js"></script>
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
								Рол-шторы, жалюзи,<br>
								окна, двери, роллеты
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
						г. Черкассы <br>
						бул. Шевченка, 145, офис 117					
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
				<a href=https://vk.com/>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="svg1">
						<use href="../image/instagram.svg#insta" width="22" height="22"></use>
					</svg>
				</a>
			</div>
			<div class="fb">
				<a href=https://www.facebook.com/>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="svg1">
						<use href="../image/facebook_logo.svg#Capa_1" width="22" height="22"></use>
					</svg>
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
					<li><a href="../index.php">Главная</a></li>
					<li><a href="production.php">Продукция</a></li>
                    <li><a href="portfolio.php">Наши роботы</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
				</ul>
				<div class="dollar" id="two">
					Курс доллара: 
					<span>
						<?php $textfile = "http://unicode.kl.com.ua/dollar.txt"; //путь к файлу

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
		<li><a href="../index.php">Главная</a></li>
		<li><a href="production.php">Продукция</a></li>
		<li><a href="portfolio.php">Наши роботы</a></li>
		<li><a href="contacts.php">Контакты</a></li>
	</ul>
</div>
	<section class="production">
		<div class="wrap_prod" id="showMain">
			<div class="nav_left">
				<h4>Роловые шторы</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритого типа</a></li>
						<li><a onclick="showClose()">Закритого типа</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<h5>Роловые шторы</h5>
				<div class="title">
					<p>
						Роловые шторы  предствляют собой тканевое полотно, наматывающееся на расположенный сверху горизонтальный вал. Подъем полотна может осуществляться как вручную, с помощью цепочного механизма или пружины, так и с помощью электропривода.
					</p>
					<p>
						Роловые шторы дают новые возможности в оформлении дизайна любых помещений -возможность придать офису или квартире неповторимость и оригинальность. Ваше окно будет выглядеть стильно.
					</p>
					<p>
						Роловые шторы защитят Вашу квартиру от посторонних взглядов с улицы и от попадания прямых солнечных лучей.Мы производим несколько систем роловых штор, разнообразных по дизайну, цвету, фактуре ткани. Состав тканей – хлопок, полиэстер , лен. Ткани пропитаны пылеотталкивающими , противовыгораемыми , противосминающими, водоотталкивающими пропитками а также ультратонкое покрытие с изнаночной стороны по технологии ламинирования полностью отбивает солнечные лучи. Основная функция роловых штор – светозащита.
					</p>
					<p>
						Сегодня большим спросом пользуются шторы  «День-ніч» - это новая разновидность системы роловой шторы.
					</p>
					<p>
						Оригинальное решение защиты помещения от солнца - круговое движение ткани и чередование полос в ней - обеспечивает плавно регулировать степень освещенности в помещении.
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
								Відкритого типа
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showClose()">
							<img src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
							<div class="bottom_wrap_roll">
								Закритого типа
							</div>
						</a>
					</div>
				</div>
			</div>	
		</div>
		<div class="wrap_prod" id="showUniversal" style="display: none;">
			<div class="nav_left">
				<h4>Роловые шторы</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритого типа</a></li>
						<li><a onclick="showClose()">Закритого типа</a></li>
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
					<a href="production_l2.php">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/universal/JQ7iAMU.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/THnfAQA.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/QOkQ9PB.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/9anfwig.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/AnXPQb8.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/jP3B2oR.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/ptda5UC.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img" src="../image/rol_shtoru/universal/STDVtlQ.jpeg" alt="roll_shtoru">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
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
				<h4>Роловые шторы</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритого типа</a></li>
						<li><a onclick="showClose()">Закритого типа</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
			<h5>Відкритого типа</h5>
			<div class="title">
				<p>
					Открытые рулонные жалюзи – это видный невооруженным глазом вал с намотанной тканью. Конструктивно нижняя планка фиксируется к створке при помощи мощных магнитов. Механизм всего устройства не прикрыт, отсюда и характерное название.
				</p>
			</div>
			<div class="wrap_card">
				<div class="card">
					<a href="production_l2.php">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>

					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/open/открытого.jpeg" alt="">
						</div>
					</a>
				</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showClose" style="display: none;">
			<div class="nav_left">
				<h4>Роловые шторы</h4>
				<ul class="nav_item">	
						<li><a onclick="showUniversal()">День-ніч</a></li>
						<li><a onclick="showOpen()">Відкритого типа</a></li>
						<li><a onclick="showClose()">Закритого типа</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
			<h5>Закритого типа</h5>
			<div class="title">
				<p>
					Закрытая система Наличие короба меняет внешний вид конструкции, делает ее обтекаемой и более презентабельной в общем интерьере помещения. Это закрытые рулонные жалюзи, которые по обеим сторонам полотна имеют направляющие. Присутствие короба отвлекает от вида вала, на ткань не садится пыль, продлевая тем самым срок службы этой современной занавески. Если сочетаются в цвете и текстуре классические и роликовые шторы, на окне они имеют вид цельного готового изделия.
				</p>
			</div>
			<div class="wrap_card">
				<div class="card">
					<a href="production_l2.php">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>

					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="card">
					<a href="#">
						<div class="black_bg">
							<img id="img"  src="../image/rol_shtoru/close/д-н_закрытого.jpg" alt="">
						</div>
					</a>
				</div>
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
					Мы подберем самое лучшее <br>
					решение именно для вас
				</h5>
				<ul>
					<li>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">
							<div class="cont_img">
								<img src="../image/map_foot.png" alt="map">
							</div>
						</a>
						<a href="https://goo.gl/maps/P3WDzGn8AUt" target="_blank">г. Черкассы, бул.Шевченка, 145,<br>
						офис 117, (1 -й этаж)</a>
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
				Пожалуйста, оставьте свои контакты<br>
				и ваш вопрос, мы с вами свяжемся!
				</h5>
				<form method="post" class="form-contacts" action="https://postman-echo.com/post">
						<p class="hint-form"><span>*</span> - поля обов'язкові для заповнення</p>
						<input type="text" placeholder="* Ваше ім'я" name="name">
						<input type="email" placeholder="* E-mail" name="email">
						<input type="tel" placeholder="* Телефон" name="phone">
						<input type="text" placeholder="* Ваш вопрос" name="question">
						<textarea name="text"placeholder="Ваш вопрос" maxlength="250" rows="4"></textarea>
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
						<h6>Изготовление и установка разных видов жалюзи, защитных роллет, гаражных ворот, москитных сеток, окна и двери ПВХ, рефлексоролы, маркизы, ремонт жалюзи.</h6>
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