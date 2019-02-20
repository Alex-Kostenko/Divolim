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
	<link rel="stylesheet" href="../style/respons.css">
	<link rel="stylesheet" href="../style/production.css">
	<script src="../js/main.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
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
	<section class="production" id="production">
		<div class="wrap_prod" id="showMain">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<h5>Продукція</h5>
				<div class="title">
					Ми пропонуємо виготовлення та встановлення різних видів жалюзі, захисних ролетів, гаражних воріт, москітних сіток, вікон і дверей ПВХ, рефлексороллов, маркізів, ремонт жалюзі.
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="production_l2.php">
							<div class="black_bg">
								<img id="img"  src="../image/rol_shtoru/ymukm40.jpeg" alt="">
							</div>
							
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Ролові штори
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showGorizontal()">
							<div class="black_bg">
								<img id="img" src="../image/gorizont/xe7d1FU.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Горизонтальні жалюзі
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showAlign()">
							<div class="black_bg">
								<img id="img" src="../image/vertical/GuufvFe.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Вертикальні жалюзі
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showPlisse()">
							<div class="black_bg">
								<img id="img" src="../image/plisse/pDBHKIn.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Плісе
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showRim()">
							<div class="black_bg">
								<img id="img" src="../image/rimskie/450877.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Римські штори
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showBamb()">
							<div class="black_bg">
								<img id="img" src="../image/bamb/maitvCk.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Бамбукові штори
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showAnti()">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/kAaHDdV.jpeg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Протимоскитні сітки
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showRoletu()">
							<div class="black_bg">
								<img id="img" src="../image/rolletu/Di08GnD0Xp0.jpg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Ролети захисні
							</div>
						</a>
					</div>
					<div class="card">
						<a onclick="showOkna_dv()">
							<div class="black_bg">
								<img id="img" src="../image/okna_dveri/JdCl7BW3a40.jpg" alt="">
							</div>
							<div class="bottom_wrap">
								<img src="../image/rolls-01.svg" alt="">
								Вікна і двері ПВХ
							</div>
						</a>
					</div>
				</div>
				<div class="remont_prod">
					<img src="../image/remont_prod.png" alt="">

					<div class="text">
						<div class="text_title">
							Ремонт жалюзей всіх видів, заміна деталей
						</div>
						<div class="text_text">
							Наші фахівці професійно і оперативно підберуть всі необхідні деталі і виконають ремонт жалюзі будь-якої складності.
						</div>
						<div class="text_rem">
							Потрібен ремонт жалюзі? Телефонуйте нам і ми допоможемо!
						</div>
						<div class="text_contact">
							(0472) 382-117    (067) 239-6114    (073) 160-4276 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showGorizontal" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>ГОРИЗОНТАЛЬНІ ЖАЛЮЗІ</h5>
				<div class="title">
					<p>
						Замовляючи горизонтальні жалюзі, ви робите прекрасний вибір для вікон. Стандартні жалюзі, ламелі яких завширшки 16 мм і 25 мм, одні з найбільш популярних і затребуваних систем, що застосовуються в самих різних стилях і інтер'єрах.
					</p>
					<p>
						 Для виготовлення використовується тільки алюміній: завдяки його вогнестійкості і екологічної безпеки конструкції з алюмінію надійніше, комфортніше і довговічніше, ніж жалюзі пластикові горизонтальні.
					</p>
					<p>
						Візуально розширюють і «оживлюють» простір, прості в управлінні і не вимагають особливих зусиль для прибирання, а широка палітра кольорів дозволяє вибрати бажаний відтінок.
					</p>
					<p>
						Алюмінієві горизонтальні жалюзі можна встановлювати безпосередньо на будь-яке вікно. Такий тип підходить для оформлення не тільки стандартних вікон, але й аркових.
					</p>
					<p>
						Ціна на горизонтальні жалюзі досить доступна, що робить їх популярними на ринку товарів для вікон.
					</p>
					<p>
						Горизонтальні жалюзі системи Венус на пластикові вікна кріпляться впритул до скла, зводячи до мінімуму так званий «парниковий ефект», коли тепло накопичується в зазорі між ламелями і склом. Мають спрощену систему управління і забезпечують практично ідеальну світлоізоляцію. Вірний вибір для спалень, фотостудій і місць, де потрібне ретельне затемнення. Текстури та кольори ламелей аналогічні стандартним жалюзі.
					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="production_l2.php">
							<div class="black_bg">
								<img id="img"  src="../image/gorizont/1K3Komv.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showAlign" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>Вертикальні жалюзі</h5>
				<div class="title">
					У наявності є різна ширина ламелей: 127 мм (5 дюймів) і 89 мм (3,5 дюйма) <br><br>
					Переваги вертикальних жалюзі:
				<ul>
					<li>- виглядають затишно,</li>
					<li>- плавне регулювання світлового потоку,</li>
					<li>- різноманітний вибір матеріалів: від легкої прозорості до непроникності портьєри,</li>
					<li>- можливе повне, або часткове відкриття та вивільнення вікон,</li>
					<li>- тканини мають антистатичні та пилонепроникні властивості,</li>
					<li>- зі можуть заповнювати великі віконні, або дверні отвори: ширина до 5,8 м, висота – не обмежується,</li>
					<li>- великий вибір кольорів та фактури тканин.</li>
				</ul>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/vertical/9WPiIKY.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/AasvNID.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/CWk9tF2.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/e4DUh9p.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/ecsys5o.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/GuufvFe.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/k2WmtE6.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/VNqoSpk.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/vertical/Mkx9YOq.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showPlisse" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>ЖАЛЮЗІ ПЛІСЕ</h5>
				<div class="title">
					<p>
						Штopи пліcce - цe дуже opігінaльний і унікaльний cпocіб зaхисту від coнячниx променів, a тaкож гарне дoпoвнeння до інтepьepу. Вони дуже ніжні і незвичні.  
					</p>
					<p>
						Штори плісе — вдалий вибір для вікон з нестандартними формами та розмірами . Придбати сонцезахисні системи для таких вікон може бути проблематично, а штори плісе допоможуть закрити найбільші віконні отвори. Також немає труднощів із встановленням жалюзі на різних віконних поверхнях, які мають нахил – мансардне вікно, чи частина скляного даху.
					</p>
					<p>
						Штори плісе, дуже схожі за своїм виглядом на жалюзі горизонтальні, тільки замість стандартних смужок-ламелей використовується тканина, яка збирається в невеликі складки (схоже на гармошку).
					</p>
					<p>
						Матеріал з якого виготовляється тканина - поліестер, закріплюється на невеликий алюмінієвий профіль, який практично не помітний на вікні. Це компромісне рішення між звичайними шторами і жалюзі, плісе має незаперечну перевагу перед іншими, збираючись при складанні в щільні складки і стаючи практично непомітними на вікні.
					</p>
					<p>
						Тканини безпечні і не виділяють шкідливих речовин при нагріванні на сонці, не притягують пил, зберігають колір і форму.
					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/plisse/bqvIaNH.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/plisse/FSKqJ8a.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/plisse/pDBHKIn.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/plisse/TxqMziS.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/plisse/zjohNTz.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div> 
		<div class="wrap_prod" id="showRim" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>Римські штори</h5>
				<div class="title">
					<p>
						Римські штори – унікальна річ, яка втілює у собі лаконізм, мінімально можливі витрати тканин з відмінними функціональними характеристиками. Римські штори - оптимальне та стильне рішення захисту приміщення від сонячних променів, сторонніх поглядів з вулиці. Римська штора складається з ряду сегментів із тканини, яка являє собою щільний  екран;  коли штора піднімається вверх, сегменти тканини складаються у горизонтальні смуги, які групуються у верхній частині вікна.  Механізми, що використовуються для римських штор, відрізняються надійністю та довговічністю.  Римські штори виготовляються із різних видів тканин, що дозволяє зробити вашу оселю стильною та неповторною.
 					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/rimskie/05.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/rimskie/450877.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/rimskie/75874.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/rimskie/алле.jpg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showBamb" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>Бамбукові штори</h5>
				<div class="title">
					<p>
						Бамбукові штори – це цільне полотно, сплетене різними способами з бамбукового очерету, джутової соломки, льону, всі тканини натуральні.
					</p>
					<p>
						Підйом полотна відбувається за допомогою шнура (механізм розташований ліворуч або праворуч від штори). Ця техніка управління має два види: рулонна та римська. Мінус бамбукових ролет - вони пропускають світло.
					</p>
					<p>
						Бамбуковий варіант декора вікна довговічний і практичний завдяки вологостійкості й міцності, він екзотично декорує приміщення.
					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/bamb/Hgn1JNi.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/bamb/maitvCk.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/bamb/Изображение 003.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/bamb/Изображение 005.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/bamb/Изображение 009.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/bamb/Изображение 013.jpg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showAnti" style="display: none;">
			<div class="nav_left">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<h5>Протимоскитні сітки</h5>
				<div class="title">
					<p>
						Сучасні антимоскітні сітки являють собою фіксовані конструкції, які складаються з рамки і сітки, натягнутої на неї. Такі нескладні конструкції служать надійним захистом від будь-яких (включаючи самих дрібних) комах. Крім того,протимоскітні сітки не допускають попадання в будинок тополиного пуху, сміття, викинутого з верхніх поверхів, пилу та інших небажаних факторів нормального життя. Основною перевагою протимоскітні сіток є їх висока ефективність: вони насправді здатні надійно захистити будинок від шкідливих порушників мирного спокою. Важливо і те, що протимоскітні сітки мають довгий термін служби: як правило, кілька років бездоганної роботи. Крім того, вони мають невисоку ціну і дуже прості в експлуатації. <br>
						Наша виробнича компанія, пропонує великий вибір комплектуючих і москітні сітки на вікна, двері, балкони та будь-які інші отвори різної конфігурації і типу конструкції.
 					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/anti_mos/IMG_2396.JPG" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/IMG_2397.JPG" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/IMG_2402.JPG" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/kAaHDdV.jpeg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/moskitnaya-setka_1.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/anti_mos/sBN8HzM.jpeg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showRoletu" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>Ролети захисні</h5>
				<div class="title">
					<p>
						Навідміну від залізних грат, захисні ролети - ідеально вписуються в загальне архітектурне рішення, стильно  доповнюючи його.
 					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/rolletu/4FaN3YD5FCU.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/rolletu/Di08GnD0Xp0.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/rolletu/r7_XyZgzuDA.jpg" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_prod" id="showOkna_dv" style="display: none;">
			<div class="nav_left">
				<h4>Продукція</h4>
				<ul class="nav_item">	
						<li><a href="production_l2.php">Ролові штори</a></li>
						<li><a onclick="showGorizontal()">Горизонтальні жалюзі</a></li>
						<li><a onclick="showAlign()">Вертикальні жалюзі</a></li>
						<li><a onclick="showPlisse()">Плісе</a></li>
						<li><a onclick="showRim()">Римські штори </a></li>
						<li><a onclick="showBamb()">Бамбукові штори</a></li>
						<li><a onclick="showAnti()">Протимоскитні сітки</a></li>
						<li><a onclick="showRoletu()">Ролети захисні</a> </li>
						<li><a onclick="showOkna_dv()">Вікна і двері ПВХ</a></li>
				</ul>
			</div>
			<div class="main_prod">
				<div class="back_prod">
					<a onclick="showMain()">&larr;</a>	
				</div>
				<h5>Вікна і двері ПВХ</h5>
				<div class="title">
					<p>
						Сьогодні сучасні дверні та віконні блоки ПВХ відповідають запиту багатьох споживачів – вони функціональні, естетичні та забезпечують захист від пилу і шуму. Вони мають високі теплоізоляційні якості, надійні і зручні в застосуванні і мають доступну вартість. Сучасний дизайн і технології, різна колірна палітра і форма дозволяють застосувати ПВХ вікна та двері не тільки по головному їх призначенню, а також і для дизайнерських рішень.
 					</p>
				</div>
				<div class="wrap_card">
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img"  src="../image/okna_dveri/2ph-DQDm6bE.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/okna_dveri/G6CLgT2asxM.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/okna_dveri/JdCl7BW3a40.jpg" alt="">
							</div>
						</a>
					</div>
					<div class="card">
						<a href="">
							<div class="black_bg">
								<img id="img" src="../image/okna_dveri/lehQBpbLsNo.jpg" alt="">
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
