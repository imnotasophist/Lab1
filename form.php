<?php 
$title = "Обратная связь";
require_once '/tpl/header.php'; 
?>

    <!-- *Main -->
    <main>
        <div class="container">
            <section>
                <h2>
                    Написать руководству федеральной книжной сети
                </h2>
                <form action="check.php" id="myForm" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Представьтесь</label>
                            <?php if (isset($errorName)) { ?>
                                <sup style="color:crimson;"><?php echo $errorName ?></sup>
                            <?php } ?>
                            <input name="name" type="text" value="<?php echo htmlspecialchars($name) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Ваш E-mail</label>
                            <?php if (isset($errorEmail)) { ?>
                                <sup style="color:crimson;"><?php echo $errorEmail ?></sup>
                            <?php } ?>
                            <input name="email" type="text" class="_email" value="<?php echo htmlspecialchars($email) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Текст сообщения</label>
                        <?php if (isset($errorMessage)) { ?>
                            <sup style="color:crimson;"><?php echo $errorMessage ?></sup>
                        <?php } ?>
                        <textarea name="message" rows="3"><?php echo htmlspecialchars($message) ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Город</label>
                            <?php if (isset($errorCity)) { ?>
                                <sup style="color:crimson;"><?php echo $errorCity ?></sup>
                            <?php } ?>
                            <select name="city">
                                <option selected><?php echo htmlspecialchars($city) ?></option>
                                <option>Волгоград</option>
                                <option>Саратов</option>
                                <option>Камышин</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input name="age" type="checkbox">
                            <label>
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