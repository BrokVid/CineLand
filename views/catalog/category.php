<?php include ROOT . '/views/head/head.php'; ?>

<div class="content">
    <div class="sidebar">
        <h2>Каталог</h2>
        <div class="list">
            <?php foreach ($categories as $categoryItem): ?>
            <div class="item">
                <a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) {
    echo 'active';
} ?>">
                    <?php echo $categoryItem['name']; ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="cat">
        <h2>Последние товары</h2>
        <div class="cat_body">
            <?php foreach ($categoryProducts as $product): ?>
            <div class="cat_wrap ">
                <?php if ($product['is_new']): ?>
                <img src="/images/catalog/new.png" class="new" alt="" />
                <?php endif; ?>
                <div class="image-cat">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
              </div>
                <h2>$<?php echo $product['price']; ?>&#8381;</h2>
                <p>
                    <a href="/product/<?php echo $product['id']; ?>">
                        <?php echo $product['name']; ?>
                    </a>
                </p>
                <a href="/cart/add/<?php echo $product['id']; ?>" class="btn" data-id="<?php echo $product['id']; ?>">В корзину</a>
            </div>
            <?php endforeach; ?>

        </div>
        <div>
        <!-- Постраничная навигация -->
        <?php echo $pagination->get(); ?>
      </div>
    </div>
</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
