-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3307
-- 產生時間： 2020-11-29 17:17:54
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `dessert`
--

CREATE TABLE `dessert` (
  `id` int(255) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `dessert`
--

INSERT INTO `dessert` (`id`, `product`, `detail`, `price`) VALUES
(1, '檸檬蛋糕', '檸檬、麵粉、糖', 200),
(2, '草莓鬆餅', '香草精、草莓、麵粉', 100),
(3, '馬卡龍', '低筋麵粉、可可、雞蛋', 50);

-- --------------------------------------------------------

--
-- 資料表結構 `drink`
--

CREATE TABLE `drink` (
  `id` int(255) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `drink`
--

INSERT INTO `drink` (`id`, `product`, `detail`, `price`) VALUES
(1, '可口可樂', '碳酸、焦糖、糖', 10),
(2, '奶茶', '台灣高山茶、牛奶', 70);

-- --------------------------------------------------------

--
-- 資料表結構 `guest`
--

CREATE TABLE `guest` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `guest`
--

INSERT INTO `guest` (`id`, `username`, `password`) VALUES
(1, 'chen123', 'chen123456'),
(2, 'user147', 'user258');

-- --------------------------------------------------------

--
-- 資料表結構 `sushi`
--

CREATE TABLE `sushi` (
  `id` int(255) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `sushi`
--

INSERT INTO `sushi` (`id`, `product`, `detail`, `price`) VALUES
(1, '神秘壽司', '神秘配料、醋、鹽、米飯', 80),
(2, '鮭魚壽司', '鮭魚、醋、鹽、米飯', 50),
(3, '鯊魚壽司', '鯊魚皮、醋、鹽、米飯', 10),
(4, '鰻魚壽司', '鰻魚、醋、鹽、米飯', 20),
(5, '花枝壽司', '花枝、醋、米飯', 50);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
