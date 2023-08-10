-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 10 2023 г., 21:10
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
-- База данных: `pit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` text COLLATE utf8mb4_general_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `price` text COLLATE utf8mb4_general_ci,
  `description` text COLLATE utf8mb4_general_ci,
  `sort` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `price`, `description`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(236, '22222', '2222', '3333', '3333333', 'Сортир', '2023-07-31 17:15:01', '2023-08-10 17:55:27', NULL),
(243, '1111111', '22222', '1111111', '1111111', 'Сортировка', '2023-08-05 18:05:42', '2023-08-10 17:36:54', '2023-08-10 17:37:04'),
(259, '11111', 'asd', '111111', '1111111', NULL, '2023-08-06 18:30:41', NULL, NULL),
(260, '11111', 'dsadas', '111111', '111111111', NULL, '2023-08-06 18:42:20', NULL, NULL),
(261, '11111', '2222222', '111111', '111111111', NULL, '2023-08-06 18:42:39', NULL, NULL),
(262, '123123', 'ase', 'asdasd', 'asdasd', NULL, '2023-08-06 18:43:24', NULL, NULL),
(263, '111111', 'asd', 'asd', 'asd', NULL, '2023-08-06 18:57:47', NULL, NULL),
(264, '111111', '11111', 'asd', 'asd', NULL, '2023-08-06 19:00:04', NULL, NULL),
(265, '111111', '11111', 'asd', 'asd', NULL, '2023-08-06 19:01:44', NULL, NULL),
(266, '11111111', '11111111', '11111111', '11111111', NULL, '2023-08-06 19:01:56', NULL, NULL),
(267, '1111', 'мясо', '1111', '1111', NULL, '2023-08-06 19:04:21', NULL, NULL),
(268, '1', '1', '1', '1', NULL, '2023-08-08 18:16:55', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
