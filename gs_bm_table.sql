-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 07 日 18:40
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `fly_mark`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `recipeName` varchar(64) NOT NULL,
  `recipeURL` text NOT NULL,
  `category` text NOT NULL,
  `season` text NOT NULL,
  `area` text NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `recipeName`, `recipeURL`, `category`, `season`, `area`, `comment`, `date`) VALUES
(4, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:44:12'),
(5, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:46:02'),
(6, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:46:48'),
(7, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:47:11'),
(8, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:47:16'),
(9, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:48:39'),
(10, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:48:45'),
(11, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:48:59'),
(12, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:49:07'),
(13, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:49:52'),
(14, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:50:44'),
(15, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:50:57'),
(16, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:51:13'),
(17, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:51:31'),
(18, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:52:34'),
(19, 'マシュマロカディス', 'https://test', 'nymph', 'winter', 'area', 'てすとてすと。', '2023-07-01 03:52:36'),
(20, 'マシュマロカディス', 'https://test', 'wet', 'autumn', 'lake', 'テストです！', '2023-07-01 12:50:44'),
(21, 'マシュマロカディス', 'https://test', 'wet', 'winter', 'lake', 'テスト', '2023-07-01 13:07:21'),
(22, 'マシュマロカディス', 'https://test', 'dry', 'summer', 'mainStream', 'test', '2023-07-04 23:29:15'),
(25, 'マシュマロカディス（更新）', 'https://test', 'wet', 'autumn', 'mainStream', 'てすとてすと。更新した内容です。', '2023-07-08 01:38:22'),
(26, 'マシュマロカディス', 'https://test', 'wet', 'autumn', 'mainStream', 'aaa', '2023-07-08 01:39:24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
