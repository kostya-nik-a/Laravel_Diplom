-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 10 2018 г., 16:06
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Mobile'),
(2, 'Разное');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `email_author` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `author`, `email_author`, `category_id`, `status`, `answer`, `date_created`, `date_updated`) VALUES
(1, 'Какие модели телефонов самые надежные?', 'Аноним', '', 1, '1', 'Новый ответ', '2018-05-09 07:42:55', '2018-05-09 04:39:00'),
(3, 'Какая средняя цена мобильного телефона?', 'Аноним', '', 1, '1', 'Средней цены нет', '2018-05-09 16:08:19', '2018-05-09 16:08:19'),
(4, 'Задаю свой вопрос?', 'Карабас Барабас', 'non@mail.ru', 2, '1', 'Получаешь на него ответ', '2018-05-09 10:04:18', '2018-05-09 10:05:30');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `fio`, `date_created`, `date_updated`, `date_deleted`, `remember_token`) VALUES
(3, 'admin', '$2y$10$RO47VKzQ6u5NQvGq3JJS.unaKlDUzDexzaw8HW3c0g7Kh77bcEPfa', 'main_admin@ya.ru', 'Самый главный администратор', '2018-05-06 09:10:54', '0000-00-00 00:00:00', '2018-05-06 13:09:38', 'DQh3OfvcIN0hJvmxJRXsyGzvxuNQnoqu1055SV3SnYjNBgCAnLyYmzxGKYeq'),
(4, 'admin2', '$2y$10$8iyokygEz79AKqmdM1hSfO7myzGeHo5lqmUyK7tQvnSjkWFBzxj1m', 'admin2@mail.ru', 'Admin2 Adminich', '2018-05-06 08:59:37', '2018-05-09 00:10:20', '2018-05-06 15:59:37', 'iNrrBxYY5elgCTpPZykcQbGeeB27FJhwdkLD7FhEaAzq9BieRrXudp4iMGv2'),
(6, 'admin3', '$2y$10$suidfHcXHYQfgLUypgL.feZ28yIyK8F3gkHI.kC2vWXXxwF.aGiLW', 'admin3@mail.ru', 'Adminich3', '2018-05-09 00:30:11', '2018-05-09 00:30:11', '2018-05-09 07:30:11', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
