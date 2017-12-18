<?php include ROOT . '/views/head/head.php'; ?>

<!-- НОВОСТИ -->
<div class="news">
	<div style="width:100%; height:1px; clear:both;"></div>
	<?php foreach ($newsList as $newsItem): ?>
	<div class="wrapper_body">
			<div class="cbm_wrap">
			<a href="/news/<?php echo $newsItem['id']; ?>"><h1><?php echo $newsItem['title']; ?></h1></a>
			<img src="../images/news/<?php echo $newsItem['image']; ?>">
			<div class="short_content">
				<p>
					<?php echo $newsItem['short_content'].'...'; ?>
				</p>
			</div>
			<br />
			<div class="nfoot">
				<a href="/news/<?php echo $newsItem['id']; ?>">Читать далее..</a>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<div style="width:100%; height:1px; clear:both;"></div>
</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
