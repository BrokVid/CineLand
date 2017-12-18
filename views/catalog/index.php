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
    <div class="cat">
        <h2>Последние товары</h2>
        <div class="cat_body">
        <?php foreach ($latestProducts as $product): ?>

            <div class="cat_wrap ">
              <?php if ($product['is_new']): ?>
              <img src="/images/catalog/new.png" class="new" alt="" />
              <?php endif; ?>
              <div class="image-cat">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
              </div>
                <h2><?php echo $product['price'];?>&#8381;</h2>
                <p>
                    <a href="/product/<?php echo $product['id'];?>">
                        <?php echo $product['name'];?>
                    </a>
                </p>

                <a href="#" data-id="<?php echo $product['id'];?>" class="btn">
                          В корзину
                      </a>
            </div>


        <?php endforeach;?>
        </div>
    </div>
</div>

<?php include ROOT . '/views/foot/footer.php'; ?>
