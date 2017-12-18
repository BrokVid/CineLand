<?php include ROOT . '/views/head/head.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>

            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
                <li><?php if ($user['role'] == 'admin') {
                  echo '<a href="/admin">Перейти в админпанель</a>';  } ?></li>
            </ul>

        </div>
    </div>
</section>

<?php include ROOT . '/views/foot/footer.php'; ?>
