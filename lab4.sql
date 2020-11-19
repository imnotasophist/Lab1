-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2020 г., 18:47
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lab4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aside`
--

CREATE TABLE IF NOT EXISTS `aside` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `aside`
--

INSERT INTO `aside` (`id`, `title`) VALUES
(1, 'Художественная литература'),
(2, 'Книги для детей'),
(3, 'Образование'),
(4, 'Наука и техника'),
(5, 'Общество'),
(6, 'Деловая литература'),
(7, 'Красота. Здоровье. Спорт'),
(8, 'Увлечения'),
(9, 'Психология'),
(10, 'Эзотерика'),
(11, 'Философия и религия'),
(12, 'Искусство'),
(13, 'Подарочные издания'),
(14, 'Книги на иностранных языках'),
(15, 'Книги на иностранных языках');

-- --------------------------------------------------------

--
-- Структура таблицы `aside2`
--

CREATE TABLE IF NOT EXISTS `aside2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `aside2`
--

INSERT INTO `aside2` (`id`, `title`) VALUES
(1, 'Бумажные изделия'),
(2, 'Галантерея'),
(3, 'Прочие канцтовары'),
(4, 'Упаковка'),
(5, 'Товары для художников'),
(6, 'Электротовары'),
(7, 'Пеналы'),
(8, 'Офисные принадлежности'),
(9, 'Письменные принадлежности'),
(10, 'Чертежные принадлежности'),
(11, 'Школьные товары');

-- --------------------------------------------------------

--
-- Структура таблицы `aside3`
--

CREATE TABLE IF NOT EXISTS `aside3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `aside3`
--

INSERT INTO `aside3` (`id`, `title`) VALUES
(1, 'Сувениры к празднику'),
(2, 'Дом, Быт, Декор'),
(3, 'Игры и Игрушки'),
(4, 'Личные вещи'),
(5, 'Мелочи сувенирные'),
(6, 'Предсказания, пожелания, астрология, эзотерика'),
(7, 'Сувенирные канцелярские и офисные принадлежности'),
(8, 'Поздравительная атрибутика'),
(9, 'Открытки и постеры'),
(10, 'Календари на 2021 год');

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `title`, `author`, `img`, `price`) VALUES
(1, 'Собачье сердце', 'Булгаков М.', 'img/books/first.jpg', 92),
(2, 'Портрет Дориана Грея', 'Уайльд О.', 'img/books/second.jpg', 117),
(3, 'Фауст', 'Гете И.', 'img/books/third.jpg', 137);

-- --------------------------------------------------------

--
-- Структура таблицы `cards2`
--

CREATE TABLE IF NOT EXISTS `cards2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards2`
--

INSERT INTO `cards2` (`id`, `title`, `author`, `img`, `price`) VALUES
(1, 'Гранатовый браслет', 'Куприн А.', 'img/books/fourth.jpg', 137),
(2, 'Замок', 'Кафка Ф.', 'img/books/fivth.jpg', 100),
(3, 'Преступление и наказание', 'Достоевский Ф.', 'img/books/sixth.jpg', 117);

-- --------------------------------------------------------

--
-- Структура таблицы `cards3`
--

CREATE TABLE IF NOT EXISTS `cards3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards3`
--

INSERT INTO `cards3` (`id`, `title`, `img`, `price`) VALUES
(1, 'Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат', 'img/stationery/first.jpg', 130),
(2, 'Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат', 'img/stationery/second.jpg', 130),
(3, 'Пакет А5 23*18*10 "Фиалки" жен., бум.мат.ламинат', 'img/stationery/firth.jpg', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `cards4`
--

CREATE TABLE IF NOT EXISTS `cards4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards4`
--

INSERT INTO `cards4` (`id`, `title`, `img`, `price`) VALUES
(1, 'Пакет А5 23*18*10 "Птицы" нейтр., бум.мат.ламинат', 'img/stationery/fourth.jpg', 90),
(2, 'Пакет А5 23*18*10 "Прекрасных дней" жен., бум.мат.ламинат', 'img/stationery/fivth.jpg', 90),
(3, 'Пакет А5 23*18*10 "Счастья" жен., бум.мат.ламинат', 'img/stationery/sixth.jpg', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `cards5`
--

CREATE TABLE IF NOT EXISTS `cards5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards5`
--

INSERT INTO `cards5` (`id`, `title`, `img`, `price`) VALUES
(1, 'Мягкая игрушка Динозаврик в полосочку (45х35)', 'img/souvenirs/first.jpg', 1290),
(2, 'Мягкая игрушка Динозаврик с гребешком (43х35)', 'img/souvenirs/second.jpg', 1190),
(3, 'Мягкая игрушка Динозаврик Зубастик (38х28)', 'img/souvenirs/thrith.jpg', 1290);

-- --------------------------------------------------------

--
-- Структура таблицы `cards6`
--

CREATE TABLE IF NOT EXISTS `cards6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cards6`
--

INSERT INTO `cards6` (`id`, `title`, `img`, `price`) VALUES
(1, 'Мягкая игрушка Котик Сарделька (60х30)', 'img/souvenirs/fourth.jpg', 1490),
(2, 'Мягкая игрушка Лисичка с лапками (45х30)', 'img/souvenirs/fivth.jpg', 1290),
(3, 'Мягкая игрушка "Енотик", 40 х 25 см', 'img/souvenirs/sixth.jpg', 1290);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
