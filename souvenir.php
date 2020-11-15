<?php 
$title = "Сувениры";
require_once '/tpl/header.php'; 
?>

    <!-- *Main -->
<?php
$category = '<li class="aside__item main__text"><a class="aside__link" href="#">Сувениры к празднику</a></li>
            <li class="aside__item main__text"><a class="aside__link" href="#">Дом, Быт, Декор</a></li>
            <li class="aside__item main__text"><a class="aside__link" href="#">Игры и Игрушки</a></li>
            <li class="aside__item main__text"><a class="aside__link" href="#">Личные вещи</a></li>
            <li class="aside__item main__text"><a class="aside__link" href="#">Мелочи сувенирные</a></li>
            <li class="aside__item main__text"><a href="#" class="aside__link">Предсказания, пожелания, астрология, эзотерика</a></li>
            <li class="aside__item main__text"><a href="#" class="aside__link">Сувенирные канцелярские и офисные принадлежности</a></li>
            <li class="aside__item main__text"><a href="#" class="aside__link">Поздравительная атрибутика</a></li>
            <li class="aside__item main__text"><a href="#" class="aside__link">Открытки и постеры</a></li>
            <li class="aside__item main__text"><a href="#" class="aside__link">Календари на 2021 год</a></li>';
$cards = '<div class="card-deck">
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/first.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка Динозаврик в полосочку (45х35)</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1290 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/second.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка Динозаврик с гребешком (43х35)</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1190 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/thrith.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка Динозаврик Зубастик (38х28)</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1290 ₽</p>
            </div>
        </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/fourth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка Котик Сарделька (60х30)</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1490 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/fivth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка Лисичка с лапками (45х30)</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1290 ₽</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapper">
            <img src="img/souvenirs/sixth.jpg" class="card-img-top card__img" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Мягкая игрушка "Енотик", 40 х 25 см</h5>
            <div class="card__footer">
                <button class="btn btn-primary main__btn btn__text">Купить</button>
                <p class="main__text main__text_bold">1290 ₽</p>
            </div>
        </div>
    </div>
</div>';
$subtitle = $title;
require '/tpl/main.php'; 
?>
    <!-- *Footer -->
<?php include_once '/tpl/footer.php'; ?>