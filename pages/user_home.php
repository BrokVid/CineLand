<?php
	define('ROOT',dirname(__FILE__));
  require (ROOT.'/function/db.php');
  if(isset( $_POST['submit_remove'])){
   $user = $_SESSION['logged_user'];
    R::trash($user);
    unset($_SESSION['logged_user']);
    header('Location:/');
  }
	?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="../images/icon.png">
		<link rel="apple-touch-icon" href="../images/apple.png">
		<title>CompShop - интернет магазин компьютерной техники</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/fill.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<?php echo '<p>Вы вошли как "'.$_SESSION['logged_user']->name.'"<a href="../pages/logout.php">Выйти</a></p>'; ?>
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

			<!-- НОВОСТИ -->
			<center>
      <div class="lk">
				<h2>Панель управления аккаунтом<h2>
        	<form action="user_home.php" method="post">
            <p><button class="bttn-fill  bttn-success" type="submit" name="submit_remove">Удалить аккаунт</button></p>
          </form>
      </div>
		</center>
    </div>
	</body>
</html>
