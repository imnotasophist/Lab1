<?php 
$title = "Канцтовары";
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
                        $aside2 = getAsideAll2(); 
                        foreach ($aside2 as $asideOne): ?>
                        <li><a href="#"><?php echo $asideOne["title"]; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
                <section class="col-xl-10">
                    <h2>Канцтовары</h2>
                    <div class="card-deck">
                        <?php 
                        $cards3 = getCardsAll3(); 
                        foreach ($cards3 as $card): ?>
                        <div class="card">
                            <div class="wrapper">
                                <img src="<?php echo $card["img"]; ?>" a alt="...">
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
                        $cards4 = getCardsAll4(); 
                        foreach ($cards4 as $card): ?>
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