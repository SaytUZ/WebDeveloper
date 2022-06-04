-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2022 г., 12:28
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gr1230chorshan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `img_id` int NOT NULL,
  `user_id` int NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `img_select` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`img_id`, `user_id`, `img_path`, `img_select`) VALUES
(1, 1, './img/users/Albert - df62bec6e63fce017ca4894195f7c2b1.jpg', 1),
(2, 2, './img/users/Albert - 022d8773e30d71dff864d3fbab5ee97d.jpg', 1),
(3, 3, './img/users/Mike - 176d5f93fa39a524e1530fabea140872.jpg', 1),
(4, 4, './img/users/Micheal - 514fbd120104ca73facbc1f9c56b2c83.jfif', 1),
(5, 5, './img/users/default.png', 1),
(6, 6, './img/users/default.png', 1),
(7, 7, './img/users/Simon - b71fc62fe5a0b0ee712d59b8acc102fa.jfif', 1),
(8, 8, './img/users/Simon - a66d8236be39f5ce31c126e5f665ef5e.jfif', 1),
(9, 9, './img/users/Simon - dbb44b43fa181e8e2e5922c45a42073b.jfif', 1),
(10, 10, './img/users/default.png', 1),
(11, 11, './img/users/Jeki - 106a2543285b2491516164397e158773.jfif', 0),
(12, 11, './img/users/Jeki-f7bafe5d18de4713861330fb59c1184a.jfif', 0),
(13, 11, './img/users/Jeki-cf72d94b7c2402cb82ef379064a2ae83.jpg', 0),
(14, 11, './img/users/Jeki-9b0e66ffa735d2fd953df7fd7b0b14eb.jpg', 1),
(15, 11, './img/users/Jeki-b551a4de1c03555901fab7a06b05dd67.jpeg', 0),
(16, 11, './img/users/Jeki-c4d4261cc41b985ed7668a96b63cf905.jfif', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_login` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_name`, `user_pass`) VALUES
(1, 'Albert', 'Simon', '123456'),
(2, 'Albert', 'Simon', '123456'),
(3, 'Mike', 'Tyson', '123456'),
(4, 'Micheal', 'Jackson', '$2y$10$RVuUdgRRzUDIQE0iTl5HSOSHElAyX/ip8NgxQq82mOX5kFo1Pakha'),
(5, 'Jhon', '', '$2y$10$Itm7k1hdTOsErvwv/fM9LeOTbevJ/fOQ5/0s0P7dBvsRSSYPoDvSm'),
(6, 'Michael', '', '$2y$10$PAYPWjiLU11MT/RurkmX5.CnwzvCy0KRVEWiNPy8afuahl85nWFSy'),
(9, 'Simon', 'Max', '$2y$10$JK3p40mqz5chcRsyMyaxjehCIcoNVCIfh/78UYeoRjcxvMI.vOu76'),
(10, 'Mecheal', '', '$2y$10$9EwGemBn6sO3I0RId6JnHeIVCjjXowq13lvDTDRVXtw3Zzlls0EKC'),
(11, 'Jeki', 'Chan', '$2y$10$2D5GDwYnLH7nDsUm0CEbr.VjUsDmFWILKwl/15uE/j.pSvjM.TA8S');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
