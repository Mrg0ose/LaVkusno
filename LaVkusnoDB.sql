-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2022 г., 02:32
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LaVkusnoDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id_book` smallint NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_guess` smallint NOT NULL,
  `id_table` smallint NOT NULL,
  `id_time` smallint NOT NULL,
  `daten` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id_book`, `name`, `id_guess`, `id_table`, `id_time`, `daten`, `comment`, `email`, `status`) VALUES
(94, 'Владислав', 1, 1, 1, '2022-12-07', 'Кофе к приходу', 'Pestov.vvv@yandex.ru', 1),
(95, 'Владимир', 1, 2, 1, '2022-12-07', 'Мяса мне', 'vova@mail.com', 1),
(96, 'Vlad', 1, 1, 20, '2022-12-09', '', 'afasdfdsf@mail.com', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` smallint NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Салаты/Супы'),
(2, 'Десерт'),
(3, 'Горячее'),
(4, 'Алкогольные напитки'),
(5, 'Безалкогольные напитки'),
(6, 'Суши'),
(7, 'Пицца');

-- --------------------------------------------------------

--
-- Структура таблицы `guesses`
--

CREATE TABLE `guesses` (
  `guess_id` smallint NOT NULL,
  `guess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `guesses`
--

INSERT INTO `guesses` (`guess_id`, `guess`) VALUES
(1, '1 человек'),
(2, '2 человека'),
(3, '3 человека'),
(4, '4 человека');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id_product` smallint NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `category_product` smallint NOT NULL,
  `count` varchar(255) NOT NULL,
  `unit` enum('гр','см','шт','мл') DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_product`, `name_product`, `category_product`, `count`, `unit`, `price`) VALUES
(1, 'Цезарь с курицей', 1, '200', 'гр', '225'),
(2, 'Грибной суп', 1, '350', 'гр', '175'),
(3, 'Мясное ассорти', 2, '200', 'гр', '325'),
(4, 'Мороженое', 2, '75', 'гр', '125'),
(5, 'Стейк', 3, '300', 'гр', '400'),
(6, 'Жаркое с цыпленком', 3, '300', 'гр', '550'),
(7, 'Пиво \"Heineken\"', 4, '500', 'мл', '150'),
(8, 'Вино красное/белое', 4, '200', 'мл', '300'),
(9, 'Pepsi', 5, '500', 'мл', '100'),
(11, 'Суши \"Филадельфия\"', 6, '8', 'шт', '450'),
(12, 'Суши \"Чебаркуль\"', 6, '12', 'шт', '500'),
(13, 'Пицца \"Маргарита\"', 7, '30', 'см', '300'),
(15, 'Пицца \"Галина\"', 7, '25', 'см', '300');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id_status` smallint NOT NULL,
  `statuss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id_status`, `statuss`) VALUES
(1, 'Забронирован'),
(2, 'За столом'),
(3, 'Завершен');

-- --------------------------------------------------------

--
-- Структура таблицы `tables`
--

CREATE TABLE `tables` (
  `table_id` smallint NOT NULL,
  `tablee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tables`
--

INSERT INTO `tables` (`table_id`, `tablee`) VALUES
(1, '1 столик'),
(2, '2 столик'),
(3, '3 столик'),
(4, '4 столик'),
(5, '5 столик'),
(6, '6 столик');

-- --------------------------------------------------------

--
-- Структура таблицы `timess`
--

CREATE TABLE `timess` (
  `time_id` smallint NOT NULL,
  `timee` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `timess`
--

INSERT INTO `timess` (`time_id`, `timee`) VALUES
(1, '10:00:00'),
(2, '10:30:00'),
(3, '11:00:00'),
(4, '11:30:00'),
(5, '12:00:00'),
(6, '12:30:00'),
(7, '13:00:00'),
(8, '13:30:00'),
(9, '14:00:00'),
(10, '14:30:00'),
(11, '15:00:00'),
(12, '15:30:00'),
(13, '16:00:00'),
(14, '16:30:00'),
(15, '17:00:00'),
(16, '17:30:00'),
(17, '18:00:00'),
(18, '18:30:00'),
(19, '19:00:00'),
(20, '19:30:00'),
(21, '20:00:00'),
(22, '20:30:00'),
(23, '21:00:00'),
(24, '21:30:00'),
(25, '22:00:00'),
(26, '22:30:00'),
(27, '23:00:00'),
(28, '23:30:00'),
(29, '00:00:00'),
(30, '00:30:00'),
(31, '01:00:00'),
(32, '01:30:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `rights` enum('m','a') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `fio`, `rights`) VALUES
(3, 'admin', 'admin', 'Пестов Владислав Юрьевич', 'a'),
(4, 'tester', 'tester', 'Павлов Михаил Сергеевич', 'm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_guess` (`id_guess`),
  ADD KEY `id_table` (`id_table`),
  ADD KEY `id_time` (`id_time`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `guesses`
--
ALTER TABLE `guesses`
  ADD PRIMARY KEY (`guess_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_product` (`id_product`,`category_product`),
  ADD KEY `category_product` (`category_product`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Индексы таблицы `timess`
--
ALTER TABLE `timess`
  ADD PRIMARY KEY (`time_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id_book` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `guesses`
--
ALTER TABLE `guesses`
  MODIFY `guess_id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id_product` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id_status` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tables`
--
ALTER TABLE `tables`
  MODIFY `table_id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `timess`
--
ALTER TABLE `timess`
  MODIFY `time_id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_table`) REFERENCES `tables` (`table_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_time`) REFERENCES `timess` (`time_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`status`) REFERENCES `statuses` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`id_guess`) REFERENCES `guesses` (`guess_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`category_product`) REFERENCES `categories` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
