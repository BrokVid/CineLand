<?php include ROOT . '/views/head/head.php'; ?>

<!-- ФОРМА -->
<?php if ($result): ?>
	<p class="ok">
		Вы успешно зарегистрированы!
	</p>
<?php else: ?>
<div class="form">
	<h1>Регистрация</h1>
	<?php if (isset($errors) && is_array($errors)): ?>
	<?php foreach ($errors as $error): ?>
	<div class="attention">
		<?php echo $error; ?>
	</div>
	<?php endforeach; ?>
	<?php endif; ?>
	<form action="#" method="post">
		<p><input type="text" name="name" autofocus="" placeholder="Ваше имя" required="" value="<?php echo $name; ?>"></p>
		<p><input type="email" name="email" placeholder="Ваш email" required="" value="<?php echo $email; ?>"></p>
		<p><input type="password" name="password" placeholder="Ваш пароль" required="" value="<?php echo $password; ?>"></p>
		<p><input type="password" name="password2" placeholder="Повторите пароль" required=""></p>
		<p><button class="button" type="submit" name="submit_s">Зарегистрироваться</button></p>
	</form>
</div>
<?php endif; ?>

<?php include ROOT . '/views/foot/footer.php'; ?>
