-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 21:46
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
-- База данных: `testsystem`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int NOT NULL,
  `question_id` int NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `score`) VALUES
(19, 7, 'object', 1),
(20, 7, 'this', 0),
(21, 7, 'prototype', 0),
(22, 8, 'reverse()', 1),
(23, 8, 'join()', 0),
(24, 8, 'sort()', 0),
(25, 9, 'if (i != 2)', 1),
(26, 9, 'if i <> 2', 0),
(27, 9, 'if (i <> 2)', 0),
(28, 9, 'if i != 2 then', 0),
(29, 10, 'while (i <= 7)', 1),
(30, 10, 'while (i=0; i <= 7; i--)', 0),
(31, 10, 'while i = 1 to 7', 0),
(32, 11, '1', 0),
(33, 11, 'NaN', 0),
(34, 11, 'true', 1),
(35, 11, 'false', 0),
(36, 12, 'call function myFunction()', 0),
(37, 12, 'call myFunction()', 0),
(38, 12, 'myFunction()', 1),
(39, 13, 'onmouseclick', 0),
(40, 13, 'onchange', 0),
(41, 13, 'onclick', 1),
(42, 14, 'alert(\'Hello World\');', 1),
(43, 14, 'msg(\'Hello World\');', 0),
(44, 14, 'alertBox(\'Hello World\');', 0),
(45, 14, 'msgBox(\'Hello World\')', 0),
(46, 14, 'alertBox(\"Hello World\")', 0),
(47, 15, 'for i = 1 to 10', 0),
(48, 15, 'for (i = 0; i <= 10)', 0),
(49, 15, 'for (i = 0; i <= 10; i++)', 1),
(50, 16, 'if i == 2 then', 0),
(51, 16, 'if i = 2', 0),
(52, 16, 'if (i == 2)', 1),
(53, 17, 'title', 0),
(54, 17, 'alt', 1),
(55, 17, 'src', 0),
(56, 18, 'Атрибуты событий', 1),
(57, 18, 'HTML-элементы', 0),
(58, 18, 'Стилевые атрибуты', 0),
(59, 19, 'menu, font, span', 0),
(60, 19, 'center, span, div', 0),
(61, 19, 'u, b, s', 0),
(62, 19, 'strike, font, center', 1),
(63, 20, '&lt;a href=&lt;url&lt; target=&lt;_blank&lt;&gt;', 1),
(64, 20, '&lt;a href=&lt;url&lt; target=&lt;new&lt;&gt;', 0),
(65, 20, '&lt;a href=&lt;url&lt;new&gt;', 0),
(66, 21, 'Нет', 0),
(67, 21, 'Нет такого элемента &lt;iframe&gt;', 0),
(68, 21, 'Да', 1),
(69, 22, 'audio', 1),
(70, 22, 'sound', 0),
(71, 22, 'mp3', 0),
(72, 23, 'XML', 1),
(73, 23, 'HTML', 0),
(74, 23, 'CSS', 0),
(75, 24, 'Microsoft', 0),
(76, 24, 'Mozilla', 0),
(77, 24, 'Google', 0),
(78, 24, 'World Wide Web Consortium (W3C)', 1),
(79, 25, 'b', 0),
(80, 25, 'strong', 1),
(81, 25, 'i', 0),
(82, 25, 'important', 0),
(83, 26, 'object', 0),
(84, 26, 'client', 0),
(85, 26, 'applet', 0),
(86, 26, 'script', 1),
(90, 29, 'Нет', 1),
(91, 31, 'Да', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `test_id` int NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES
(7, 5, 'Какое ключевое слово позволяет создавать объекты общего вида:'),
(8, 5, 'Какой метод позволяет изменять порядок элементов массива на противоположный:'),
(9, 5, 'Правильный вариант для IF, где i должно отличаться от 2:'),
(10, 5, 'Как начать цикл WHILE?'),
(11, 5, 'Что вернет следующий код: Boolean (10> 9)'),
(12, 5, 'Как вызвать функцию \"myFunction\"?'),
(13, 5, 'Какое происходит событие, когда пользователь нажимает на элемент HTML?'),
(14, 5, 'Как можно вывести сообщение \"Hello World!\" с помощью JavaScript?'),
(15, 5, 'Как начать FOR цикл?'),
(16, 5, 'Какой правильный способ использование оператора IF в JavaScript?'),
(17, 6, 'Какой атрибут определяет альтернативный текст для изображения, если изображение не может быть отображено?'),
(18, 6, 'В HTML \"onblur\" и \"onfocus\" это:'),
(19, 6, 'Выберите перечень, в котором все теги являются устаревшими.'),
(20, 6, 'Как открыть ссылку в новой вкладке / окне браузера?'),
(21, 6, 'Тег &lt;iframe&gt; используется для отображения веб-страницы внутри веб-страницы.'),
(22, 6, 'Какой тег служит для воспроизведения аудиофайлов?'),
(23, 6, 'В каком формате определяется графика SVG?'),
(24, 6, 'Кто создает веб-стандарты?'),
(25, 6, 'Выберите тег определяющий важность текста'),
(26, 6, 'Укажите тег позволяющий подключить к HTML документу скрипты выполняющиеся на стороне клиента.'),
(29, 13, 'Ты знаешь CSS');

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int NOT NULL,
  `test_id` int NOT NULL,
  `score_min` int NOT NULL,
  `score_max` int NOT NULL,
  `result` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `test_id`, `score_min`, `score_max`, `result`) VALUES
(7, 5, 8, 10, 'Ты бог'),
(8, 5, 0, 4, ' Низкий балл'),
(9, 5, 4, 7, 'Срединй балл'),
(10, 6, 8, 10, 'Высший балл'),
(12, 6, 4, 7, 'Средний балл'),
(15, 13, 0, 1, 'Ты крутой)');

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `title`, `type_language`) VALUES
(5, 'Тест JavaScript', 'JavaScript'),
(6, 'Тест HTML', 'HTML'),
(13, 'Теcт CSS', 'CSS');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(10, 'Кит Иван Васильевич', 'ivan_kit', 'ivankit@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
