<?php 
$title = 'Книги';
require_once '/tpl/header.php'; 
?>
    <!-- *Main -->
    <main class="main">
        <div class="container">
            <div class="row">
                <aside class="aside col-xl-2">
                    <p class="main__text main__text_bold">Категории</p>
                    <ul>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Художественная литература</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Книги для детей</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Образование</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Наука и техника</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Общество</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Деловая литература</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Красота. Здоровье. Спорт</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Увлечения</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Психология</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Эзотерика</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Философия и религия</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Искусство</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Подарочные издания</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Книги на иностранных языках</a></li>
                    </ul>
                </aside>
                <section class="section col-xl-10">
                    <h2 class="main__title">Книги</h2>
                    <div class="card-deck">
                        <?php 
                        $cards = getCardsAll(); 
                        foreach ($cards as $card): ?>
                        <div class="card">
                            <div class="wrapper">
                                <img src="<?php echo $card["img"]; ?>" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card["title"]; ?></h5>
                                <p class="card-text"><?php echo $card["author"]; ?></p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold"><?php echo $card["price"]; ?> ₽</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div> 
                    <div class="card-deck">
                        <?php 
                        $cards2 = getCardsAll2(); 
                        foreach ($cards2 as $card2): ?>
                        <div class="card">
                            <div class="wrapper">
                                <img src="<?php echo $card2["img"]; ?>" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card2["title"]; ?></h5>
                                <p class="card-text"><?php echo $card2["author"]; ?></p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold"><?php echo $card2["price"]; ?> ₽</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- *Footer -->
<?php include_once '/tpl/footer.php'; ?>