<?php include ROOT . '/views/head/head.php'; ?>

<div class="content">
    <div class="sidebar">
        <h2>Каталог</h2>
        <div class="list">
            <?php foreach ($categories as $categoryItem): ?>
            <div class="item">
                <a href="/category/<?php echo $categoryItem['id'];?>">
                    <?php echo $categoryItem['name'];?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<div class="product">
    <h1><?php echo $product['name']; ?></h1>
    <img src="../images/catalog/<?php echo $product['id']; ?>.jpg" alt="">
    <p>Производтель: <?php echo $product['brand']; ?></p>
    <p>Описание: <br><?php echo $product['description']; ?></p>
    <p>Цена: <?php echo $product['price']; ?></p>
    <p>На складе штук: <?php echo $product['aviability']; ?></p>
</div>
</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
