-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 01:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `number`, `detail`, `price`, `image`, `file`, `created_at`, `updated_at`) VALUES
(1, 'ช็อกโกแลต (Chocolate)', 5, 'ผลิตภัณฑ์ที่ทำมาจากผลของพืชโกโก้ มีรสชาติขม ผ่านการผลิตโดยใช้เครื่องบดเป็นผงละเอียด หลังจากนั้นนำมาผสมกับวัตถุดิบต่าง ๆ ออกมาเป็นอาหาร ขนม เครื่องดื่มที่สามารถรับประทานได้ง่ายขึ้น นอกจากนี้ยังมีสารมากมายที่ให้คุณประโยชน์ หากบริโภคอย่างถูกวิธีจะส่งผลดีต่อสุขภาพและจิตใจ', 15, 'chocolate', 'jpeg', '2023-08-17 06:30:07', '2023-08-16 06:30:07'),
(2, 'นม (Milk)', 10, 'เป็นเครื่องดื่มที่อุดมไปด้วยแคลเซียม ทำมาจากทั้งสัตว์ เช่น วัว แพะ กระบือ พืชก็เช่นกันทั้งจากอัลมอนด์ ถั่วเหลือง ข้าวโพด แม้ว่าจะมีประโยชน์ทั้งเด็กถึงผู้สูงอายุ รวมทั้งสตรีตั้งครรภ์ แต่ไม่ใช่ทุกรายที่จะสามารถดื่มได้ตามความต้องการของตนเอง หากบริโภคให้เหมาะสมกับช่วงวัยจะส่งผลดีต่อสุขภาพ', 20, 'milk', 'jpg', '2023-08-17 06:30:07', '2023-08-16 06:30:07'),
(3, 'น้ำส้ม (orange juice)', 20, 'ทานผลส้มบ่อยๆเมื่อเบื่อก็เปลี่ยนมาทานน้ำส้ม ถึงแม้ว่าประโยชน์ที่ได้รับจะไม่เทียบเท่าผลส้มแต่น้ำส้ม ก็ยังช่วยบำรุงผม ช่วยให้รากผมแข็งแรง ป้องกันผมร่วงและช่วยกระตุ้นการงอกใหม่ของเส้นผม', 25, 'orange', 'jpg', '2023-08-17 06:30:07', '2023-08-16 06:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'user A', 1, '2023-08-06 08:33:10', '2023-08-06 08:33:30'),
(2, 'user A', 2, '2023-08-06 08:33:10', '2023-08-06 08:33:30'),
(3, 'user B', 3, '2023-08-06 08:33:10', '2023-08-06 08:33:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
