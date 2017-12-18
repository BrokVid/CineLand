<?php include ROOT . '/views/head/head.php'; ?>

<!-- ФОРМА -->
<div class="form">
	<h1>Вход</h1>
	<?php if (isset($errors) && is_array($errors)): ?>
	<?php foreach ($errors as $error): ?>
	<div class="attention">
		<?php echo $error; ?>
	</div>
	<?php endforeach; ?>
	<?php endif; ?>
	<form action="#" method="post">
		<p>E-mail: <input type="email" name="email" required="" value="<?php echo $email; ?>"></p>
		<p>Пароль: <input type="password" name="password" required=""></p>
		<p><button class="button" type="submit" name="submit_l">Войти</button></p>
	</form>

</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
