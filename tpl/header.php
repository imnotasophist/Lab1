<?php require 'db.php';  ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php"><img src="img/logo.svg" alt="Читай-город"></a>
                <div id="navbarNavDropdown">
                    <ul>
                        <li>
                            <a href="books.php">Книги</a>
                        </li>
                        <li>
                            <a href="stationery.php">Канцтовары</a>
                        </li>
                        <li>
                            <a href="souvenir.php">Сувениры</a>
                        </li>
                        <li class="dropdown">
                            <a href="form.php" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Обратная связь
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="form.php">Написать</a>
                                <a class="dropdown-item" href="form.php">Предложить</a>
                                <a class="dropdown-item" href="form.php">Пожаловаться</a>
                            </div>
                        </li>
                        <li>
                            <a href="about.php">Размер</a>
                        </li>
                        <li>
                            <a href="/autorization.php">Войти</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>