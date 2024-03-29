-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 07 2019 г., 00:52
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `moomilk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Популярное'),
(2, 'Молоко'),
(3, 'Кефир'),
(4, 'Йогурт'),
(5, 'Сметана'),
(6, 'Ряженка');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `img`, `note`, `profession`) VALUES
(1, 'Александр Семенов', '+7-911-777-77-7', 'happyFamily2.png', '', 'Лучший папа'),
(2, 'Василий', '+7-911-777-77-8', '', '', 'Директор'),
(3, '', '', '', '', ''),
(4, 'new kek', '+7(911) 111-11-', '', '12rfsdffds', '');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(5) unsigned NOT NULL,
  `header` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `header`, `text`, `img`, `date`) VALUES
(1, 1, 'Отличное качество и вкус!', 'Вкусный и полезный завтрак — залог продуктивного дня, поэтому каждое утро мы начинаем с фермерских  молочных продуктов. Доброжелательный курьер каждый день без опозданий радует нас свежим  творогом и молоком, а дети обожают йогурты и ряженку. Лучшее начал', 'happyFamily2.png', '2019-08-15 05:41:56');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` int(5) unsigned NOT NULL DEFAULT '1',
  `price` decimal(8,2) NOT NULL,
  `special_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `special_price`, `img`) VALUES
(1, 'Молоко козье', 1, '280.00', '0.00', 'cows_milk.png'),
(2, 'Сметана 15%', 1, '78.00', '0.00', 'sour cream.png'),
(3, 'Кефир', 1, '115.00', '0.00', 'kefir.png'),
(4, 'Молоко коровье', 1, '260.00', '0.00', 'cows_milk.png'),
(5, 'Молоко 5%', 2, '290.00', '0.00', 'cows_milk.png'),
(6, 'Молоко 2,5%', 2, '280.00', '0.00', 'cows_milk.png'),
(7, 'Молоко 1%', 2, '270.00', '0.00', 'cows_milk.png'),
(8, 'Молоко 1,5%', 2, '275.00', '0.00', 'cows_milk.png'),
(9, 'Кефир 1%', 3, '100.00', '0.00', 'kefir.png'),
(10, 'Кефир 2%', 3, '115.00', '0.00', 'kefir.png'),
(11, 'Йогурт с клубникой', 4, '65.00', '0.00', 'yogurt.png'),
(12, 'Йогурт с малиной', 4, '65.00', '0.00', 'yogurt.png'),
(13, 'Сметана 20%', 5, '85.00', '0.00', 'sour cream.png'),
(14, 'Сметана 10%', 5, '65.00', '0.00', 'sour cream.png'),
(15, 'Сметана 13%', 5, '75.00', '0.00', 'sour cream.png'),
(16, 'Ряженка', 6, '85.00', '0.00', 'ryazhenka.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
