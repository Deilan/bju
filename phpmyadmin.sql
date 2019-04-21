-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 31 2011 г., 16:09
-- Версия сервера: 5.1.46
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

--
-- Дамп данных таблицы `pma_designer_coords`
--

INSERT INTO `pma_designer_coords` (`db_name`, `table_name`, `x`, `y`, `v`, `h`) VALUES
('bju', 'age', 207, 145, 1, 1),
('bju', 'boss', 192, 191, 1, 1),
('bju', 'boss/year', 354, 250, 1, 1),
('bju', 'cloudy', 208, 364, 1, 1),
('bju', 'genus', 354, 106, 1, 1),
('bju', 'lakes', 19, 40, 1, 1),
('bju', 'monitoring', 18, 201, 1, 1),
('bju', 'precipitation', 25, 344, 1, 1),
('bju', 'result', 183, 39, 1, 1),
('bju', 'sex', 354, 159, 1, 1),
('bju', 'species', 354, 40, 1, 1),
('bju', 'temperature', 182, 261, 1, 1),
('bju', 'thunderstorm', 19, 389, 1, 1),
('bju', 'wind', 199, 306, 1, 1),
('bju', 'year', 354, 205, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Дамп данных таблицы `pma_relation`
--

INSERT INTO `pma_relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('bju', 'result', 'monitoring', 'bju', 'monitoring', 'ID'),
('bju', 'result', 'species', 'bju', 'species', 'ID'),
('bju', 'result', 'genus', 'bju', 'genus', 'ID'),
('bju', 'result', 'sex', 'bju', 'sex', 'ID'),
('bju', 'result', 'age', 'bju', 'age', 'ID'),
('bju', 'monitoring', 'boss', 'bju', 'boss', 'ID'),
('bju', 'monitoring', 'lakes', 'bju', 'lakes', 'ID'),
('bju', 'monitoring', 'temperature', 'bju', 'temperature', 'ID'),
('bju', 'monitoring', 'wind', 'bju', 'wind', 'ID'),
('bju', 'monitoring', 'cloudy', 'bju', 'cloudy', 'ID'),
('bju', 'monitoring', 'thunderstorm', 'bju', 'thunderstorm', 'ID'),
('bju', 'monitoring', 'precipitation', 'bju', 'precipitation', 'ID'),
('bju', 'boss/year', 'year', 'bju', 'year', 'ID'),
('bju', 'boss/year', 'boss', 'bju', 'boss', 'ID');
