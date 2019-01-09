<html>
<head>
    <title>Milovid - Контакти</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/contacts.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/respons.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
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
                    <h1>Міловід</h1>

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
            <div class="none_menu" onclick="showMenu()">
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
        <li><a href="contacts.php">Контакты</a></li>
    </ul>
</div>
<div class="main-wrapper-contacts">
    <div class="contacts-all-content">
    <h2 class="h2-contacts">Контакти</h2>
    <div class="contacts-content">
            <div class="text-contacts">
                <p class="company-description">Компанія «Міловід» пропонує  виготовлення та встановлення різних видів жалюзі, захисних ролетів,  гаражних воріт, протимоскітних сіток,  вікон та дверей ПВХ, рефлексоролів, маркизів, ремонт жалюзі</p>
                <div class="contacts-str">
                    <div class="contacts-element">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        <div class="description-contacts">
                            <p class="contacts-header">Адреса</p>
                            <p class="description-contacts-description">м. Черкаси, бул. Шевченка, 145, офіс 117 (1-ий поверх)</p>
                        </div>
                    </div>
                    <div class="contacts-element">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <div class="description-contacts">
                            <p class="contacts-header">Графік роботи</p>
                            <p class="description-contacts-description">пн-пт: 9-00 - 18-00</p>
                        </div>
                    </div>
                </div>
                <div class="contacts-str">
                    <div class="contacts-element">
                        <i class="fas fa-phone"></i>
                        <div class="description-contacts">
                            <p class="contacts-header">Телефони</p>
                            <p class="description-contacts-description">(0472) 382-117, (067) 239-6114</p>
                            <p class="description-contacts-description">(073) 160-4276</p>
                        </div>
                    </div>
                    <div class="contacts-element">
                        <i class="fas fa-envelope"></i>
                        <div class="description-contacts">
                            <p class="contacts-header">Електронна пошта</p>
                            <p class="description-contacts-description">milovid@ukr.net</p>
                        </div>
                    </div>
                </div>
                <div class="contacts-str">
                    <div class="contacts-element">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                            <use href="../image/viber_1-01.svg#Шар_1" width="16" height="16"></use>
                        </svg>
                        <div class="description-contacts">
                            <p class="contacts-header">Viber</p>
                            <p class="description-contacts-description">(073) 160-4276</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-contacts">
                <p class="form-description">Будь ласка, залишіть Ваші контакти і Ваше питання, ми з Вами зв'яжемось!</p>
                <form method="post" class="form-contacts" action="../send.php">
                    <p class="hint-form"><span>*</span> - поля обов'язкові для заповнення</p>
                    <input type="text" placeholder="* Ваше ім'я" name="name">
                    <input type="email" placeholder="* E-mail" name="email">
                    <input type="tel" placeholder="* Телефон" name="phone">
                    <input type="text" placeholder="* Ваш вопрос" name="question">
                    <button type="submit">Надіслати</button>
                </form>
            </div>
    </div>
</div>
</div>
<footer class="footer-contacts">
    <div class="fot_container fot_container-contacts">
        <img src="../image/contact.jpg" class="footer-contacts-image">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917.0811247748902!2d32.05223493963703!3d49.44866127886595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c84944cee9f%3A0xadd4e3e0137247dc!2z0LHRg9C7LiDQqNC10LLRh9C10L3QutC-LCAxNDUsINCn0LXRgNC60LDRgdGB0YssINCn0LXRgNC60LDRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAxODAwMA!5e0!3m2!1sru!2sua!4v1544290995186" width="585" height="469" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>
    <div class="bottom_container contacts-page-bottom_container">
        <div class="unicode_st">
            <div class="footer_title">
                <img src="../image/logo_milovid.png" alt="logo">
                <div class="wrapper">
                    <h5>Міловід</h5>
                    <h6>Виготовлення та встановлення різних видів жалюзі, захисних ролет, гаражних воріт, москітних сіток, вікна і двері ПВХ, рефлексороли, маркізи, ремонт жалюзі.</h6>
                </div>
            </div>

            <div class="copyright">
                Copyright © 2015-2018. Міловід
            </div>

        </div>
    </div>
</footer>
</body>
</html>