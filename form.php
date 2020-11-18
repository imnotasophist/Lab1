<?php 
$title = "Обратная связь";
require_once '/tpl/header.php'; 
?>

    <!-- *Main -->
    <main class="main">
        <div class="container">
            <section class="section">
                <h2 class="main__title">
                    Написать руководству федеральной книжной сети
                </h2>
                <form action="check.php" id="myForm" class="form" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="main__text">Представьтесь</label>
                            <?php if (isset($errorName)) { ?>
                                <sup style="color:crimson;"><?php echo $errorName ?></sup>
                            <?php } ?>
                            <input name="name" type="text" class="form-control _req" value="<?php echo htmlspecialchars($name) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="main__text">Ваш E-mail</label>
                            <?php if (isset($errorEmail)) { ?>
                                <sup style="color:crimson;"><?php echo $errorEmail ?></sup>
                            <?php } ?>
                            <input name="email" type="text" class="form-control _req _email" value="<?php echo htmlspecialchars($email) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="main__text">Текст сообщения</label>
                        <?php if (isset($errorMessage)) { ?>
                            <sup style="color:crimson;"><?php echo $errorMessage ?></sup>
                        <?php } ?>
                        <textarea name="message" class="form-control _req" rows="3"><?php echo htmlspecialchars($message) ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="main__text">Город</label>
                            <?php if (isset($errorCity)) { ?>
                                <sup style="color:crimson;"><?php echo $errorCity ?></sup>
                            <?php } ?>
                            <select name="city" class="form-control col-md-8">
                                <option selected><?php echo htmlspecialchars($city) ?></option>
                                <option>Волгоград</option>
                                <option>Саратов</option>
                                <option>Камышин</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input name="age" class="form-check-input  _req" type="checkbox">
                            <label class="form-check-label main__text">
                                Мне есть 18 лет
                            </label>
                            <?php if (isset($errorAge)) { ?>
                                <sup style="color:crimson;"><?php echo $errorAge ?></sup>
                            <?php } ?>
                        </div>
                    </div>
                    <button type="submit" class="main__btn btn btn-primary main__text">Отправить</button>
                    <button type="reset" class="btn btn-outline-secondary main__text">Очистить</button>
                </form>
            </section>
        </div>
    </main>
    <!-- *Footer -->
<?php include_once '/tpl/footer.php'; ?>