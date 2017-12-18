<?php
	define('ROOT',dirname(__FILE__));
	require (ROOT.'/function/db.php');
	$data = $_POST;
	if(isset($data['submit_s'])){
		if ($data['password']!=$data['password2']){
			$pass_bad = "<p>Пароли не совпадают!</p>";
		}
		else {

			if(R::count('users','email = ?',array($data['email'])) > 0){
				$email_bad = "<p>Пользователь с таким email уже существует</p>";
			}
				else {
					$user = R::dispense('users');
					$user->name = $data['name'];
					$user->email = $data['email'];
					$user->password = md5(md5($data['password']));
					R::store($user);
					header('Location:/pages/login.php');
				}


		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="../images/icon.png">
		<link rel="apple-touch-icon" href="../images/apple.png">
		<title>CompShop - регистрация</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/fill.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="robots" content="all">
	</head>
	<body>

		<!-- БЛОК КОНТЕНТА -->
		<div class="content">

			<!-- ШАПКА -->
			<header>
			<div class="logo">
				<img src="../images/logo.svg">
			</div>
			<div class="reg-log">
				<?php if (isset($_SESSION['logged_user'])) : ?>
					<?php echo '<p>Вы вошли как "'.$_SESSION['logged_user']->name.'"</p><a href="../function/logout.php">Выйти</a>'; ?>
				<?php else : ?>
				<a href="../pages/signup.php">Регистрация</a>
				<a href="../pages/login.php">Вход</a>
			<?php endif; ?>
			</div>
			<div class="korzina"></div>
			</header>

			<!-- МЕНЮ -->
			<div class="menu">
				<ul>
					<li><a href="../index.php"><button class="bttn-fill bttn-md bttn-success">Главная</button></a></li>
					<li><a href="#"><button class="bttn-fill bttn-md bttn-success">Каталог</button></a></li>
					<li><a href="#"><button class="bttn-fill bttn-md bttn-success">Форум</button></a></li>
					<li><a href="#"><button class="bttn-fill bttn-md bttn-success">Доставка</button></a></li>
					<li><a href="#"><button class="bttn-fill bttn-md bttn-success">Контакты</button></a></li>
				</ul>
			</div>

			<!-- ФОРМА -->
			<center>
			<div class="reg_form">
				<h1>Регистрация</h1>

				<?php echo $pass_bad.$email_bad; ?>
				<form action="signup.php" method="post">
					<p>Ваше имя: <input type="text" name="name" autofocus="" required="" value="<?php echo @$data['name']; ?>"></p>
					<p>Ваш E-mail: <input type="email" name="email" required="" value="<?php echo @$data['email']; ?>"></p>
					<p>Ваш пароль: <input type="password" name="password" required="" value="<?php echo @$data['password']; ?>"></p>
					<p>Повторите пароль: <input type="password" name="password2" required="" ></p>
					<p><button class="bttn-fill  bttn-success" type="submit" name="submit_s">Зарегистрироваться</button></p>
				</form>
			</div>

		</center>
		</div>
	</body>
</html>
