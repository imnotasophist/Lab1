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
    <header class="menu-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="index.php"><img src="img/logo.svg" alt="Читай-город"></a>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="books.php">Книги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stationery.php">Канцтовары</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="souvenir.php">Сувениры</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="form.php" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Обратная связь
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="form.php">Написать</a>
                                <a class="dropdown-item" href="form.php">Предложить</a>
                                <a class="dropdown-item" href="form.php">Пожаловаться</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Размер</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>