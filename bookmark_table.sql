-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2020 at 02:06 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark_table`
--

CREATE TABLE `bookmark_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) NOT NULL,
  `point` varchar(1) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookmark_table`
--

INSERT INTO `bookmark_table` (`id`, `bookname`, `point`, `url`, `comment`, `datetime`) VALUES
(1, 'フランス料理―理論と実際 (1964年) ', '4', 'https://www.amazon.co.jp/gp/product/B000JAGR12?pf_rd_r=NKKG9FQK6B40A1N7AY38&pf_rd_p=7392bae8-7129-4d1a-96a9-1cfe0aa13ab3', '辻静雄の最初の本', '2020-06-13 06:11:10'),
(2, 'Visual Studio Code実践ガイド —— 最新コードエディタを使い倒すテクニック', '5', 'https://www.amazon.co.jp/gp/product/4297112019/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1', 'なかなかよかった', '2020-06-13 06:20:50'),
(3, 'React.js&Next.js超入門 (日本語) 単行本', '3', 'https://www.amazon.co.jp/React-js-Next-js%E8%B6%85%E5%85%A5%E9%96%80-%E6%8E%8C%E7%94%B0-%E6%B4%A5%E8%80%B6%E4%B9%83/dp/4798056928/ref=pd_rhf_gw_s_bmx_0_3/355-5255688-6085413?_encoding=UTF8&pd_rd_i=4798056928&pd_rd_r=b90062bb-fa24-4187-8e43-d0c578cf9e8d&pd_rd_w=IHtZu&pd_rd_wg=6DvfM&pf_rd_p=1081e053-728e-4c6b-ba25-9eafd9ed9d56&pf_rd_r=578FM2E1KPDK17N21CDD&psc=1&refRID=578FM2E1KPDK17N21CDD', 'いつか読もう', '2020-06-13 09:06:22'),
(4, 'アメリカ大統領選 勝負の分かれ目 (日経プレミアシリーズ) (日本語) 新書', '2', 'https://www.amazon.co.jp/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E5%A4%A7%E7%B5%B1%E9%A0%98%E9%81%B8-%E5%8B%9D%E8%B2%A0%E3%81%AE%E5%88%86%E3%81%8B%E3%82%8C%E7%9B%AE-%E6%97%A5%E7%B5%8C%E3%83%97%E3%83%AC%E3%83%9F%E3%82%A2%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA-%E5%A4%A7%E7%9F%B3-%E6%A0%BC/dp/4532264189?pf_rd_r=GX26BD7KQ6R9V9SF0S20&pf_rd_p=9ba2d11f-3446-46ae-8b1b-e4630a6e2391&pd_rd_r=5ee1191b-cccb-4022-9cc7-3a72e495f4de&pd_rd_w=uxPaA&pd_rd_wg=ppyZR&ref_=pd_gw_cr_cartx', '積ん読状態', '2020-06-13 10:26:38'),
(5, 'CSS設計完全ガイド ~詳細解説+実践的モジュール集 (日本語) 単行本', '4', 'https://www.amazon.co.jp/gp/product/429711173X/ref=crt_ewc_img_dp_4?ie=UTF8&psc=1&smid=AN1VRQENFRJN5', 'よさげ', '2020-06-13 10:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark_table`
--
ALTER TABLE `bookmark_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark_table`
--
ALTER TABLE `bookmark_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
