<?php 
$title = 'Книги';
require '/tpl/header.php'; 
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
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/first.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Собачье сердце</h5>
                                <p class="card-text">Булгаков М.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">83 ₽</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/second.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Портрет Дориана Грея</h5>
                                <p class="card-text">Уайльд О.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">92 ₽</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/third.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Фауст</h5>
                                <p class="card-text">Гете И.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">117 ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/fourth.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Гранатовый браслет</h5>
                                <p class="card-text">Куприн А.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">137 ₽</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/fivth.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Замок</h5>
                                <p class="card-text">Кафка Ф.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">100 ₽</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="wrapper">
                                <img src="img/books/sixth.jpg" class="card-img-top card__img" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Преступление и наказание</h5>
                                <p class="card-text">Достоевский Ф.</p>
                                <div class="card__footer">
                                    <button class="btn btn-primary main__btn btn__text">Купить</button>
                                    <p class="main__text main__text_bold">117 ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- *Footer -->
<?php require '/tpl/footer.php'; ?>