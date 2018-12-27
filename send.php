<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$question = $_POST['question'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$question = htmlspecialchars($question);
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$question = urldecode($question);
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$question = trim($question);

$page='
<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<title>Отправлено</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/reset.css">

	<style>
		body{background-color: #404780;
		 	display: flex;
		 	justify-content: center;
		 	align-items: center;
		 	flex-direction: column;
		 	font-family: Arimo, sans-serif;
		 	font-size: 49px;
		 	font-weight: bold;
		 	color: #ffffff;
		 	padding-top: 10%;
		 	text-align: center;
		 	line-height: 2;}
		#back-index{
			padding: 10px;
			background-color: #ffe700;
			font-size: 30px;
			border-radius: 15px;
			margin-top: 10%;
		}
		a{
		  text-decoration: none;
		  color: #404780;
		}
		#back-index:hover{
			background-color: #ccb800;
			border-radius: 1px solid #000;
			transition-duration: 0.2s;
		}
	</style>
</head>
<body>
<div id="mobile-menu-block" style="display: none;">
	<ul>
		<li><a href="index.php">Головна</a></li>
		<li><a href="./template/production.php">Продукція</a></li>
		<li><a href="./template/portfolio.php">Наші роботи</a></li>
		<li><a href="./template/contacts.php">Контакти</a></li>
	</ul>
</div>
<div>
		Відправлено, <br> чекайте на дзвінок!
</div>
<div id="back-index"><a href="index.php">Назад до сайту</a></div>
</body>
</html>
';

$error='
<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<title>Отправлено</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/reset.css">

	<style>
		body{background-color: #404780;
		 	display: flex;
		 	justify-content: center;
		 	align-items: center;
		 	flex-direction: column;
		 	font-family: Arimo, sans-serif;
		 	font-size: 49px;
		 	font-weight: bold;
		 	color: #ffffff;
		 	padding-top: 10%;
		 	text-align: center;
		 	line-height: 2;}
		#back-index{
			padding: 10px;
			background-color: #ffe700;
			font-size: 30px;
			border-radius: 15px;
			margin-top: 10%;
		}
		a{
		  text-decoration: none;
		  color: #404780;
		}
		#back-index:hover{
			background-color: #ccb800;
			border-radius: 1px solid #000;
			transition-duration: 0.2s;
		}
	</style>
</head>
<body>
<div>
		Помилка :(
</div>
<div id="back-index"><a href="index.php">Назад до сайту</a></div>
</body>
</html>
';

if (mail("alexkostenko67@gmail.com",
 "Форма с сайта, позвонить: ".$phone, 
 "ФИО:  ".$name."\r\nE-mail: ".$email."\r\nТелефон:  ".$phone. "\r\nВопрос:  ".$question,
 "From: index@unicode.kl.com.ua \r\n"))
 {     echo $page; 
} else { 
    echo $error;
}
?>