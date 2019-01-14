<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Миловид - Наші роботи</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/portfolio.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/respons.css">
    <link rel="stylesheet" href="../style/main.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/slides-portfolio.js"></script>
    <script src="../js/portfolioShowBlocks.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/gallary.js"></script>

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

                        echo $quotes[$quote]; //вывод рандомного текста

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
<div class="wrapper-portfolio">
    <div class="menu-portfolio">
        <h3 onclick="showMainPortfolioBlock()">Наші роботи</h3>
        <a onclick="showRoleCurtainsBlock()">Ролові штори</a>
        <a onclick="showGorizontalBlock()">Горизонтальні жалюзі</a>
        <a onclick="showVerticalBlock()">Вертикальні жалюзі</a>
        <a onclick="showPlisseBlock()">Пліссе</a>
        <a onclick="showRomanBlock()">Римські штори</a>
        <a onclick="showBambooBlock()">Бамбукові штори</a>
        <a onclick="showAntimosquitoBlock()">Антимоскітні сітки</a>
        <a onclick="showRollsBlock()">Ролети захисні</a>
        <a onclick="showWadBlock()">Вікна та двері ПВХ</a>
    </div>
    <div class="portfolio-galerry" id="portfolio-galerry">
        <h2>Наші роботи</h2>
        <h3>Відео</h3>
        <iframe width="870" height="488"
              src="https://www.youtube.com/embed/vNH3vK4KEh4">
        </iframe>
        <h3>Фотогалерея</h3>
        <div class="gallery-potfolio">
            <a><img src="../image/anti_mos/IMG_2396.JPG" alt="ANTI MOSQUITO"></a>
            <a><img src="../image/anti_mos/IMG_2397.JPG" alt="ANTI MOSQUITO"></a>
            <a><img src="../image/anti_mos/IMG_2402.JPG" alt="ANTI MOSQUITO"></a>
            <a><img src="../image/bamb/Hgn1JNi.jpeg" alt="BAMBOO"></a>
            <a><img src="../image/bamb/maitvCk.jpeg" alt="BAMBOO"></a>
            <a><img src="../image/bamb/Изображение%20003.jpg" alt="BAMBOO"></a>
            <a><img src="../image/bamb/Изображение%20005.jpg" alt="BAMBOO"></a>
            <a><img src="../image/bamb/Изображение%20009.jpg" alt="BAMBOO"></a>
            <a><img src="../image/bamb/Изображение%20013.jpg" alt="BAMBOO"></a>
            <a><img src="../image/gorizont/1K3Komv.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/5KyaU8u.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/a351GeY.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/EGaCWOw.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/FmIc5QI.jpeg" alt="GORIZONTAL"> <!-- 14 --></a>
            <a><img src="../image/gorizont/GRpAscJ.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/hk1Hg0n.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/jSzuBkg.jpeg" alt="GORIZONTAL"></a>
            <a><img src="../image/gorizont/xe7d1FU.jpeg" alt="GORIZONTAL"> <!-- 18 --></a>
            <a><img src="../image/okna_dveri/2ph-DQDm6bE.jpg" alt="WINDOWS and DOORS"></a>
            <a><img src="../image/okna_dveri/G6CLgT2asxM.jpg" alt="WINDOWS and DOORS"></a>
            <a><img src="../image/okna_dveri/JdCl7BW3a40.jpg" alt="WINDOWS and DOORS"></a>
            <a><img src="../image/okna_dveri/lehQBpbLsNo.jpg" alt="WINDOWS and DOORS"></a> <!-- 22 -->
            <a><img src="../image/plisse/bqvIaNH.jpeg" alt="PLISSE"></a>
            <a><img src="../image/plisse/FSKqJ8a.jpeg" alt="PLISSE"></a>
        </div>
        <!-- 2222222222222222222222222222 -->
        <div class="gallery-potfolio" style="display: none;">
            <a><img src="../image/rimskie/05.jpg" alt="ROMAN"></a>
            <a><img src="../image/rimskie/75874.jpeg" alt="ROMAN"></a>
            <a><img src="../image/rimskie/450877.jpeg" alt="ROMAN"></a> <!-- 3 -->
            <a><img src="../image/rimskie/алле.jpg" alt="ROMAN"></a>
            <a><img src="../image/rol_shtoru/universal/0fycd69.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/9anfwig.jpeg" alt="roleCurtains"> </a><!-- 6 -->
            <a><img src="../image/rol_shtoru/universal/AnXPQb8.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/jP3B2oR.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/JQ7iAMU.jpeg" alt="roleCurtains"> </a><!-- 9 -->
            <a><img src="../image/rol_shtoru/universal/nhXCrKy.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/ptda5UC.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/QOkQ9PB.jpeg" alt="roleCurtains"></a> <!-- 12 -->
            <a><img src="../image/rol_shtoru/universal/RCvaEzA.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/STDVtlQ.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/THnfAQA.jpeg" alt="roleCurtains"></a> <!-- 15 -->
            <a><img src="../image/rol_shtoru/universal/vt5q288.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/xcKruEh.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/universal/zB4g0CM.jpeg" alt="roleCurtains"></a> <!-- 18 -->
            <a><img src="../image/rol_shtoru/1OIjh87.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/3TVFHTX.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/92cc0qC.jpeg" alt="roleCurtains"></a> <!-- 21 -->
            <a><img src="../image/rol_shtoru/ANq41qf.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/CVHQxtu.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/d1biloH.jpeg" alt="roleCurtains"></a>
        </div>
        <!-- 333333333333333333333333333 -->
        <div class="gallery-potfolio" style="display: none;">
            <a><img src="../image/rol_shtoru/EP7DSkl.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/M13cEGG.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/MjExUVx.jpeg" alt="roleCurtains"></a> <!-- 3 -->
            <a><img src="../image/rol_shtoru/MnhfTtj.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/nfRI11Y.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/t1lvWuV.jpeg" alt="roleCurtains"></a> <!-- 6 -->
            <a><img src="../image/rol_shtoru/ufLdwM4.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/vpDoVit.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/Xf99P5u.jpeg" alt="roleCurtains"></a> <!-- 9 -->
            <a><img src="../image/rol_shtoru/xH6JyKt.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/ymukm40.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/zD8eYrD.jpeg" alt="roleCurtains"></a>
            <a><img src="../image/rol_shtoru/ZpEnmn7.jpeg" alt="roleCurtains"></a> <!-- 13 -->
            <a><img src="../image/rolletu/4FaN3YD5FCU.jpg" alt="rollerShutters"></a>
            <a><img src="../image/rolletu/Di08GnD0Xp0.jpg" alt="rollerShutters"></a>
            <a><img src="../image/rolletu/r7_XyZgzuDA.jpg" alt="rollerShutters"></a> <!-- 16 -->
            <a><img src="../image/vertical/9WPiIKY.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/AasvNID.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/CWk9tF2.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/e4DUh9p.jpeg" alt="VERTICAL"></a> <!-- 20 -->
            <a><img src="../image/vertical/ecsys5o.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/GuufvFe.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/k2WmtE6.jpeg" alt="VERTICAL"></a>
            <a><img src="../image/vertical/Mkx9YOq.jpeg" alt="VERTICAL"></a>
        </div>

        <div class="switch-gallery">
            <button onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
            <div class="selected-page-gallery selected-page-gallery1" style="background-color: #f2f3f9; color: #000000;"></div>
            <div class="selected-page-gallery selected-page-gallery2"></div>
            <div class="selected-page-gallery selected-page-gallery3"></div>
            <button onclick="plusDivs(+1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>
    <div class="subcategory-block" id="role-curtains-block" style="display: none">
        <h3>Ролові штори</h3>
        <a><img src="../image/rol_shtoru/EP7DSkl.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/M13cEGG.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/MjExUVx.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/MnhfTtj.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/nfRI11Y.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/t1lvWuV.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/ufLdwM4.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/vpDoVit.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/Xf99P5u.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/xH6JyKt.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/ymukm40.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/zD8eYrD.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/ZpEnmn7.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/3TVFHTX.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/92cc0qC.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/ANq41qf.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/CVHQxtu.jpeg" alt="roleCurtains"></a>
        <a><img src="../image/rol_shtoru/d1biloH.jpeg" alt="roleCurtains"></a>
    </div>

    <div class="subcategory-block" id="gorizontal" style="display: none">
        <h3>Горизонтальні жалюзі</h3>
        <a><img src="../image/gorizont/1K3Komv.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/5KyaU8u.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/a351GeY.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/EGaCWOw.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/FmIc5QI.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/GRpAscJ.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/hk1Hg0n.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/jSzuBkg.jpeg" alt="GORIZONTAL"></a>
        <a><img src="../image/gorizont/xe7d1FU.jpeg" alt="GORIZONTAL"></a> <!-- 9 -->
    </div>

    <div class="subcategory-block" id="vertical" style="display: none">
        <h3>Вертикальні жалюзі</h3>
        <a><img src="../image/vertical/9WPiIKY.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/AasvNID.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/CWk9tF2.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/e4DUh9p.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/ecsys5o.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/GuufvFe.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/k2WmtE6.jpeg" alt="VERTICAL"></a>
        <a><img src="../image/vertical/Mkx9YOq.jpeg" alt="VERTICAL"></a> <!-- 8 -->
    </div>

    <div class="subcategory-block" id="plisse" style="display: none">
        <h3>Пліссе</h3>
        <a><img src="../image/plisse/bqvIaNH.jpeg" alt="PLISSE"></a>
        <a><img src="../image/plisse/FSKqJ8a.jpeg" alt="PLISSE"></a>
        <a><img src="../image/plisse/pDBHKIn.jpeg" alt="PLISSE"></a>
        <a><img src="../image/plisse/TxqMziS.jpeg" alt="PLISSE"></a>
        <a><img src="../image/plisse/zjohNTz.jpeg" alt="PLISSE"></a>
    </div>

    <div class="subcategory-block" id="roman-curtains" style="display: none">
        <h3>Римські штори</h3>
        <a><img src="../image/rimskie/05.jpg" alt="ROMAN"></a>
        <a><img src="../image/rimskie/75874.jpeg" alt="ROMAN"></a>
        <a><img src="../image/rimskie/450877.jpeg" alt="ROMAN"></a> <!-- 3 -->
        <a><img src="../image/rimskie/алле.jpg" alt="ROMAN"></a>
        <a><iframe style="margin-top: 15px" width="280" height="210" src="https://www.youtube.com/embed/54khXUtp5KE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
    </div>

    <div class="subcategory-block" id="bamboo-curtains" style="display: none">
        <h3>Бамбукові штори</h3>
        <a><img src="../image/bamb/Hgn1JNi.jpeg" alt="BAMBOO"></a>
        <a><img src="../image/bamb/maitvCk.jpeg" alt="BAMBOO"></a>
        <a><img src="../image/bamb/Изображение%20003.jpg" alt="BAMBOO"></a>
        <a><img src="../image/bamb/Изображение%20005.jpg" alt="BAMBOO"></a>
        <a><img src="../image/bamb/Изображение%20009.jpg" alt="BAMBOO"></a>
        <a><img src="../image/bamb/Изображение%20013.jpg" alt="BAMBOO"></a>
    </div>

    <div class="subcategory-block" id="antimosquito" style="display: none">
        <h3>Антимоскітні сітки</h3>
        <a><img src="../image/anti_mos/IMG_2402.JPG" alt="ANTIMOSQUITO"></a>
        <a><img src="../image/anti_mos/IMG_2397.JPG" alt="ANTIMOSQUITO"></a>
        <a><img src="../image/anti_mos/IMG_2396.JPG" alt="ANTIMOSQUITO"></a>
        <a><img src="../image/anti_mos/kAaHDdV.jpeg" alt="ANTIMOSQUITO"></a>
        <a><img src="../image/anti_mos/moskitnaya-setka_1.jpg" alt="ANTIMOSQUITO"></a>
        <a><img src="../image/anti_mos/sBN8HzM.jpeg" alt="ANTIMOSQUITO"></a>
    </div>

    <div class="subcategory-block" id="rolls-protective" style="display: none">
        <h3>Ролети захисні</h3>
        <a><img src="../image/rolletu/4FaN3YD5FCU.jpg" alt="GORIZONTAL"></a>
        <a><img src="../image/rolletu/Di08GnD0Xp0.jpg" alt="GORIZONTAL"></a>
        <a><img src="../image/rolletu/r7_XyZgzuDA.jpg" alt="GORIZONTAL"></a>
    </div>

    <div class="subcategory-block" id="wad" style="display: none">
        <h3>Вікна та двері ПВХ</h3>
        <a><img src="../image/okna_dveri/2ph-DQDm6bE.jpg" alt="WINDOWS and DOORS"></a>
        <a><img src="../image/okna_dveri/G6CLgT2asxM.jpg" alt="WINDOWS and DOORS"></a>
        <a><img src="../image/okna_dveri/JdCl7BW3a40.jpg" alt="WINDOWS and DOORS"></a>
        <a><img src="../image/okna_dveri/lehQBpbLsNo.jpg" alt="WINDOWS and DOORS"></a>
    </div>
</div>
        <footer class="footer-portfolio">
    <div class="fot_container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917.0811247748902!2d32.05223493963703!3d49.44866127886595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c84944cee9f%3A0xadd4e3e0137247dc!2z0LHRg9C7LiDQqNC10LLRh9C10L3QutC-LCAxNDUsINCn0LXRgNC60LDRgdGB0YssINCn0LXRgNC60LDRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAxODAwMA!5e0!3m2!1sru!2sua!4v1544290995186" width="380" height="410" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
        <div class="contacts" >
            <h5>
                Ми підберемо найкраще рішення саме для Вас
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