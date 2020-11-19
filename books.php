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
                        <?php 
                        $aside = getAsideAll(); 
                        foreach ($aside as $asideOne): ?>
                        <li class="aside__item main__text"><a class="aside__link" href="#"><?php echo $asideOne["title"]; ?></a></li>
                        <?php endforeach; ?>
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
                        foreach ($cards2 as $card): ?>
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
                </section>
            </div>
        </div>
    </main>
    <!-- *Footer -->
<?php include_once '/tpl/footer.php'; ?>