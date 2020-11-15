<?php 
$title = "Канцтовары";
require_once '/tpl/header.php'; 
?>

    <!-- *Main -->
<?php
$category = '<li class="aside__item main__text"><a class="aside__link" href="#">Бумажные изделия</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Галантерея</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Прочие канцтовары</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Упаковка</a></li>
                        <li class="aside__item main__text"><a class="aside__link" href="#">Товары для художников</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Электротовары</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Пеналы</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Офисные принадлежности</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Письменные принадлежности</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Чертежные принадлежности</a></li>
                        <li class="aside__item main__text"><a href="#" class="aside__link">Школьные товары</a></li>';
$cards = '<div class="card-deck">
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/first.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">130 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/second.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">130 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/firth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">90 ₽</p>
            </div>
        </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/fourth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Птицы" нейтр., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">90 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/fivth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Прекрасных дней" жен., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">90 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/stationery/sixth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Пакет А5 23*18*10 "Счастья" жен., бум.мат.ламинат</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">90 ₽</p>
            </div>
        </div>
    </div>
</div>';
$subtitle = $title;
require '/tpl/main.php'; 
?>
    <!-- *Footer -->
<?php include_once '/tpl/footer.php'; ?>