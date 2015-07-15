-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2015 г., 21:35
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chanels`
--

CREATE TABLE IF NOT EXISTS `chanels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameChanel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `chanels`
--

INSERT INTO `chanels` (`id`, `nameChanel`) VALUES
(1, 'chanel-1'),
(2, 'chanel-22'),
(3, 'chanel-3'),
(7, 'chanel-5'),
(8, 'chanel-6'),
(15, 'Приватный');

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `chanel` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `autor` (`autor`),
  KEY `chanel` (`chanel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `chats`
--

INSERT INTO `chats` (`id`, `autor`, `target`, `chanel`, `text`) VALUES
(1, 1, 0, 1, 'Всем привет'),
(2, 1, 0, 2, 'Всем привет2'),
(3, 1, 0, 3, 'Всем привет'),
(4, 3, 0, 2, 'привет'),
(5, 2, 0, 1, 'привет'),
(6, 1, 0, 2, 'Ytkj'),
(7, 2, 0, 1, 'Hello'),
(8, 2, 0, 1, 'Hello'),
(9, 0, 0, 2, 'dfdgdgdgg'),
(10, 0, 0, 1, 'gjgjggj'),
(11, 0, 0, 1, ''),
(12, 0, 0, 1, ''),
(13, 0, 0, 1, ''),
(14, 1, 0, 2, 'qqqq'),
(15, 1, 0, 3, 'qqqq'),
(29, 0, 0, 1, ''),
(30, 0, 0, 1, ''),
(31, 0, 0, 1, ''),
(32, 1, 0, 1, ''),
(33, 1, 0, 1, ''),
(34, 1, 0, 2, ''),
(36, 1, 0, 1, ''),
(37, 1, 0, 1, 'vxvcb'),
(38, 1, 0, 1, 'vbxvb'),
(39, 1, 0, 1, 'xfbxcbxcvb'),
(40, 1, 0, 1, 'cvbxcbxcbxcbxcvbxcvb'),
(41, 2, 0, 1, 'xdfgxgx'),
(42, 2, 0, 3, 'fxxgx'),
(43, 2, 0, 3, 'xbxbx'),
(44, 2, 0, 8, '7777777777777'),
(45, 2, 0, 12, 'bxbxnbx'),
(46, 1, 2, 15, 'fghgghgfhj'),
(47, 1, 2, 2, 'xgbxfh'),
(48, 1, 2, 15, 'привет юзер1'),
(49, 3, 1, 15, 'Helo Admin'),
(50, 3, 2, 15, 'Helo user1'),
(51, 1, 3, 15, 'привет юзер2'),
(53, 1, 2, 1, '5555555');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `status`) VALUES
(1, 'Admin', 'Admin', 'test', 'Admin'),
(2, 'user1', 'user1', 'test', 'user'),
(3, 'user2', 'user2', 'test', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
