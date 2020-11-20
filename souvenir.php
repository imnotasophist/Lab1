<?php 
$title = "Сувениры";
require_once '/tpl/header.php'; 
?>

    <!-- *Main -->
    <main>
        <div class="container">
            <div class="row">
                <aside>
                    <p>Категории</p>
                    <ul>
                        <?php 
                        $aside3 = getAsideAll3(); 
                        foreach ($aside3 as $asideOne): ?>
                        <li><a href="#"><?php echo $asideOne["title"]; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
                <section class="col-xl-10">
                    <h2>Сувениры</h2>
                    <div class="card-deck">
                        <?php 
                        $cards5 = getCardsAll5(); 
                        foreach ($cards5 as $card): ?>
                        <div class="card">
                            <div class="wrapper">
                                <img src="<?php echo $card["img"]; ?>"  alt="...">
                            </div>
                            <div class="card-body">
                                <h5><?php echo $card["title"]; ?></h5>
                                <div class="card__footer">
                                    <button>Купить</button>
                                    <p><?php echo $card["price"]; ?> ₽</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div> 
                    <div class="card-deck">
                        <?php 
                        $cards6 = getCardsAll6(); 
                        foreach ($cards6 as $card): ?>
                        <div class="card">
                            <div class="wrapper">
                                <img src="<?php echo $card["img"]; ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5><?php echo $card["title"]; ?></h5>
                                <div class="card__footer">
                                    <button>Купить</button>
                                    <p><?php echo $card["price"]; ?> ₽</p>
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