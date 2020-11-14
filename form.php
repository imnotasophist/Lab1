<?php 
$title = "Обратная связь";
require '/tpl/header.php'; 
?>

    <!-- *Main -->
    <main class="main">
        <div class="container">
            <section class="section">
                <h2 class="main__title">
                    Написать руководству федеральной книжной сети
                </h2>
                <form action="#" id="myForm" class="form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="main__text">Имя</label>
                            <input type="text" name="name" class="form-control _req">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="main__text">Email</label>
                            <input type="text" name="email" class="form-control _req _email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="main__text">Сообщение</label>
                        <textarea class="form-control _req" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label class="main__text">Город</label>
                            <select class="form-control _req">
                                <option selected></option>
                                <option>Волгоград</option>
                                <option>Саратов</option>
                                <option>Камышин</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input  _req" type="checkbox">
                            <label class="form-check-label main__text">
                                Мне есть 18 лет
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="main__btn btn btn-primary main__text">Отправить</button>
                    <button type="reset" class="btn btn-outline-secondary main__text">Очистить</button>
                </form>
            </section>
        </div>
    </main>
    <!-- *Footer -->
<?php 
$formJS = '<script src="js/form.js"></script>';
require '/tpl/footer.php'; 
?>