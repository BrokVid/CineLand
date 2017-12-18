<?php include ROOT . '/views/head/head_admin.php'; ?>

			<!-- НОВОСТИ -->
				<div class="form">
	        <form action="#" method="post">
						<p>Заголовок новости: <input type="text" name="title" autofocus="" required=""></p>
						Текст новости:
						<textarea name="editor1"></textarea>
						<script type="text/javascript">
							CKEDITOR.replace('editor1');
						</script>
						<p>Автор: <input type="text" name="autor" required=""></p>
						<p>Адрес картинки: <input type="text" name="image" placeholder="image_*.*"></p>
						<p><button class="bttn-fill  bttn-success" type="submit" name="submit_n">Отправить</button></p>
					</form>
				</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
