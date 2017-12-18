<?php
	define('ROOT',dirname(__FILE__));
	require (ROOT.'/function/db.php');

  $data = $_POST;
  	if(isset($data['submit_l'])){
      $user = R::findOne('users','email = ?', array ($data['email']));
      if ($user){
        if(md5(md5($data['password'])) == $user->password){
          $_SESSION['logged_user']=$user;
          header('Location:/');
        }
        else {
          $bad_pass="Неправильный пароль!";
        }
      }
      else {
        $bad_login="Пользователь с таким логином не найден!";
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
      <br><br><br><br>
      <center>
  			<form action="login.php" method="post">
  				<p><input type="email" name="email" autofocus="" required="" placeholder="Ваш email" value="<?php echo @$data['email']; ?>"></p>
  				<p><input type="password" name="password" required="" placeholder="Ваш пароль"></p>
  				<p><button type="submit" name="submit_l">Войти</button></p>
  			</form>
  			<?php echo $bad_login.$bad_pass.$login_yes; ?>
  		</center>
		</div>
	</body>
</html>
