-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 03:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_product_type`
--

CREATE TABLE `all_product_type` (
  `type_id` int(5) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_product_type`
--

INSERT INTO `all_product_type` (`type_id`, `type_name`) VALUES
(1, 'จอภาพ'),
(2, 'เคส'),
(3, 'พาวเวอร์ซัพพลาย'),
(4, 'คีย์บอร์ด'),
(5, 'เมาส์'),
(6, 'เมนบอร์ด'),
(7, 'ซีพียู'),
(8, 'การ์ดแสดงผล'),
(9, 'แรม'),
(10, 'ฮาร์ดดิสก์'),
(11, 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `Cart_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `user_id`, `user_name`, `product_id`, `product_name`, `product_price`, `product_img`, `Cart_status`) VALUES
(1, 0, 'ภาคิน คุง    ', 3, 'KINGSTON Hyper-X DDR3 8GB 1600    ', 3090, '20210309903619848.jpg', 'รอดำเนินการ'),
(8, 2, 'ต๊ะ ไงละ    ', 11, 'โอ่ง    ', 50, '20210309591111633.jpg', 'รอดำเนินการ'),
(9, 2, 'ต๊ะ ไงละ    ', 3, 'KINGSTON Hyper-X DDR3 8GB 1600    ', 3090, '20210309903619848.jpg', 'รอดำเนินการ'),
(23, 13, 'สรัณธร เอียดแก้ว', 13, 'จอภาพ', 452000, '202103101498765196.jpg', 'รอดำเนินการ'),
(25, 13, 'สรัณธร เอียดแก้ว', 14, 'ขนมปังภาคิน', 1250, '202103101063658209.jpg', 'รอดำเนินการ');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `all_price` int(20) NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL,
  `order_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `user_id`, `user_name`, `address`, `phone`, `product_name`, `all_price`, `dateup`, `status`, `order_img`) VALUES
(11, 12, 'ภาคิน คุง', 'ร้านขนมปัง', '02147483647', 'จอภาพ , ASUS VIVO MINI VC66-CB5628ZN (', 452022, '2021-03-10 01:45:23', 'ใบเสร็จถูกต้องกำลังส่ง', '202103101494700345.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `product_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `product_price`, `product_detail`, `product_img`) VALUES
(3, 'KINGSTON Hyper-X DDR3 8GB 1600', 'แรม', 3090, 'ram pc,KINGSTON ram,KINGSTON Hyper-X DDR3 8GB 1600,ram pc DDR3,ram 8gb 1600mhz,ram 8gb ', '20210309903619848.jpg'),
(13, 'จอภาพ', 'จอภาพ', 452000, 'จอภาพที่ทำให้คุณต้องหมดเงิน', '202103101498765196.jpg'),
(14, 'ขนมปังภาคิน', 'อื่นๆ', 1250, 'ขนมปังอะครับ', '202103101063658209.jpg'),
(16, 'ASUS VIVO MINI VC66-CB5628ZN (', 'ซีพียู', 22, '    Intel Core i5-9400\r\n8GB DDR4 / 128GB SSD + 1TB\r\nIntel UHD Graphics 630\r\nWindows 10 Home    ', '20210310166202089.jpg'),
(17, 'INTEl CORE I3 10100 3.60GHz', 'ซีพียู', 4550, 'Cores 4\r\nThreads 8\r\nProcessor Base Frequency 3.60 GHz\r\nMax Turbo Frequency 4.30 GHz\r\nCache 6 MB Intel? Smart Cache\r\nBus Speed 8 GT/s\r\nTDP 65 W', '20210310837432886.jpg'),
(19, 'ASUS ROG Z590 MAXIMUS XIII HER', 'เมนบอร์ด', 17490, '    Intel® Socket LGA 1200 for 11th Gen Intel® Core™ processors and 10th Gen Intel® CoreTM, Pentium® Gold and Celeron® Processors\r\nIntelligent Control: ASUS-exclusive software and firmware utilities that simplify setup and improve performance: AI Overclocking,', '202103101767723523.png'),
(20, 'AMD RYZEN5 3600 AM4', 'ซีพียู', 6990, 'AMD Ryzen 5 3600\r\nSpecifications\r\n# of CPU Cores:6\r\n# of Threads:12\r\nBase Clock:3.6GHz\r\nMax Boost Clock:4.2GHz\r\nTotal L2 Cache:3MB\r\nTotal L3 Cache:32MB\r\nUnlocked:Yes\r\nCMOS:TSMC 7nm FinFET\r\nPackage:AM4', '202103102139682207.jpg'),
(21, 'ACER Nitro Gaming Monitor 23.8', 'จอภาพ', 5990, 'ACER Nitro Gaming Monitor 23.8\"VG240YSbmiipx IPS 165Hz\r\nModel : VG240YSbmiipx \r\nCategory : Gaming Monitor\r\nScreen Size : 23.8\" \r\nResolution : 1920 x 1080 (FHD)\r\nAspect Ratio : 16 : 9\r\nPanel Type : IPS\r\nRefresh Rate : 165Hz (Refresh Rate) in Overclock Mode\r\nResponse Time : 2ms', '202103102072794396.jpg'),
(22, 'HP V20 - 19.5\"/TN/60Hz', 'จอภาพ', 2290, '19.5” TN 1600x900, 5ms response time, VGA/HDMI\r\n\r\n', '202103101091658717.png'),
(23, 'โอ่ง', 'อื่นๆ', 1000, 'โอ่ง', '20210310184927870.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_name` varchar(50) NOT NULL,
  `report_who` varchar(100) NOT NULL,
  `report_phone` varchar(20) NOT NULL,
  `report_detail` varchar(500) NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `report_who`, `report_phone`, `report_detail`, `dateup`) VALUES
(2, 'ระบบสมาชิกมีปัญหา', 'ภาคิน', '0874697748', '                                    มันเท่เกินอะครับ', '2021-03-09 22:17:46'),
(3, 'ต้องการเปลี่ยนสินค้า', 'ไอ้พี', '0846145874', '                                    ขนมปังไม่สะอาด', '2021-03-10 01:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `address`, `phone`, `password`, `email`, `status`) VALUES
(1, 'กิตติธัช', 'กลิ่นธูป', '120/5', '0878621587', 'mareshah123', 'kititads1111@gmail.com', 'Admin'),
(2, 'ต๊ะ', 'ไงละ', '120/7', '0878625587', '02072542', 'kititads@gmail.com', 'User'),
(3, 'ไทย', 'ชนะ', '120/55', '0878621587', '02072542', 'kititads4@gmail.com', 'User'),
(4, 'ชนะ', 'ไทย', '465/78', '0678621587', 'mareshah123', 'kititads15@gmail.com', 'User'),
(10, 'อนาวิล', 'ไม่เข้าใจ', 'บางพรม ตลิ่งชัน', '0846521458', '02072542', 'game1111@gmail.com', 'User'),
(12, 'ภาคิน', 'คุง', 'ร้านขนมปัง', '02147483647', '1234', 'pakin@gmail.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_product_type`
--
ALTER TABLE `all_product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
