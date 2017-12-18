<?php include ROOT . '/views/head/head.php'; ?>

			<!-- НОВОСТИ -->
  			<div class="current-n">
					<h1><?php echo $newsItem['title']; ?></h1>
					<div class="subinfo"><p>Опубликовал&nbsp;</p><p class="subcolor"><?php echo $newsItem['autor']; ?></p><p>&nbsp;Дата:&nbsp;</p><p class="subcolor"><?php echo $newsItem['date']; ?></p></div>
  				<img  src="../images/news/<?php echo $newsItem['image']; ?>" alt="<?php echo $newsItem['title']; ?>">

  				<p><?php echo $newsItem['content']; ?></p>
        </div>

<?php include ROOT . '/views/foot/footer.php'; ?>
