<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://www.compshop.ml/images/icon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.compshop.ml/images/icon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.compshop.ml/images/icon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.compshop.ml/images/icon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://www.compshop.ml/images/icon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.compshop.ml/images/icon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://www.compshop.ml/images/icon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.compshop.ml/images/icon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="https://www.compshop.ml/images/icon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="https://www.compshop.ml/images/icon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="https://www.compshop.ml/images/icon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="https://www.compshop.ml/images/icon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="https://www.compshop.ml/images/icon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="CompShop" />
	<meta name="msapplication-TileColor" content="#A5D6A7" />
	<meta name="msapplication-TileImage" content="https://www.compshop.ml/images/icon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="https://www.compshop.ml/images/icon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="https://www.compshop.ml/images/icon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="https://www.compshop.ml/images/icon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="https://www.compshop.ml/images/icon/mstile-310x310.png" />
	<title>CompShop - <?php echo $pageTitle ?></title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all">
	<script src="../js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="../js/adpt_menu.js"></script>
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script src="https://vk.com/js/api/openapi.js?142" type="text/javascript"></script>
</head>

<body>
	<header>
		<div class="reg-log-newn">
			<?php if (isset($_SESSION['user'])) : ?>
				<?php
					// Получаем идентификатор пользователя из сессии
					$userId = User::checkLogged();

					// Получаем информацию о пользователе из БД
					$user = User::getUserById($userId);
				?>
				<?php echo '<p>Вы вошли как "'.$user['name'].'</p>';?>
				<p>
					<a href="https://www.compshop.ml/cabinet/">Личный кабинет</a>
				</p>
				<p>
					<a href="https://www.compshop.ml/user/logout">Выйти</a>
				</p>
			<?php else : ?>
				<p>
					<a href="http://www.compshop.ml/user/register">Регистрация</a>
				</p>
				<p>
					<a href="http://www.compshop.ml/user/login">Вход</a>
				</p>
			<?php endif; ?>
		</div>
	</header>
	<!-- БЛОК КОНТЕНТА -->
	<div class="container">
		<div class="logo">
			<img src="../images/logo.svg" alt="logotype">
		</div>
		<!-- МЕНЮ -->
		<nav id="menu">
			<a href="#" id="adpt_menu">Меню</a>
			<ul>
				<li><a href="http://www.compshop.ml/">Главная</a></li>
				<li><a href="http://www.compshop.ml/catalog">Каталог</a></li>
				<li><a href="#">Форум</a></li>
				<li><a href="#">Доставка</a></li>
				<li><a href="http://www.compshop.ml/contacts">Контакты</a></li>
			</ul>
		</nav>
