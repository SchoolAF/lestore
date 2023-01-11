-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `le_admin`
--

CREATE TABLE `le_admin` (
  `id` int(8) NOT NULL,
  `admin_username` int(11) NOT NULL,
  `real_name` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `le_admin`
--

INSERT INTO `le_admin` (`id`, `admin_username`, `real_name`, `password`) VALUES
(1, 0, 0, 202);

-- --------------------------------------------------------

--
-- Table structure for table `le_order`
--

CREATE TABLE `le_order` (
  `order_id` int(8) NOT NULL,
  `order_username` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_fname` varchar(32) NOT NULL,
  `order_lname` varchar(32) NOT NULL,
  `order_address1` varchar(255) NOT NULL,
  `order_address2` varchar(255) NOT NULL,
  `order_city` varchar(255) NOT NULL,
  `order_district` varchar(255) NOT NULL,
  `order_province` varchar(255) NOT NULL,
  `order_postcode` varchar(255) NOT NULL,
  `order_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `le_order`
--

INSERT INTO `le_order` (`order_id`, `order_username`, `product_id`, `order_fname`, `order_lname`, `order_address1`, `order_address2`, `order_city`, `order_district`, `order_province`, `order_postcode`, `order_phone`) VALUES
(3, 'herobuxx', 11, 'Alif', 'Fathur', 'Sariasih IV', 'No.31 Lt.2', 'Bandung', 'Sukasari', 'West Java', '40151', '081234567898');

-- --------------------------------------------------------

--
-- Table structure for table `le_product`
--

CREATE TABLE `le_product` (
  `id` int(8) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `product_price` varchar(32) NOT NULL,
  `product_full_desc` text NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_picture` varchar(128) NOT NULL,
  `product_category` varchar(32) NOT NULL,
  `product_brand` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `le_product`
--

INSERT INTO `le_product` (`id`, `product_name`, `product_price`, `product_full_desc`, `product_short_desc`, `product_picture`, `product_category`, `product_brand`) VALUES
(1, 'MSI Kata GF66 - Intel Core i7 Gen 12th - 16 GB RAM', '15.499.000', '<b>Product Description</b>\r\nEquipped with the latest 11th generation Intel® Core™ i7 processor and NVIDIA® GeForce RTX™ 30 Series graphics card, the Katana GF66 is optimized for true performance during gaming. The new GF66 katana is created with the same\r\n\r\n<b>Product Specification</b>\r\nCPU: INTEL CORE i7-12700H\r\nRAM: 16GB DDR4\r\nSTORAGE: 1TB SSD\r\nGPU: NVIDIA RTX3070Ti Max-Q GPU 8GB DDR6\r\nDISPLAY: 15.6\r\n\r\n<b>What do we have here?</b>\r\nLorem\r\nIpsum\r\nDolor\r\nSit\r\nAmet', 'MSI Laptop with powerful Intel Core i7 12th Gen', 'preview.png', 'laptop', 'msi'),
(3, 'ASUS ROG Zephyrus Duo 15 - Intel Core i7 10th Generation - 2 TB SSD - 32 GB RAM', '53.599.000', '<b>Test Aja</b>Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.<b>Test Aja</b>Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.Lorem ipsum dolor sit amet aden dak ingek lai do.', 'Powered by Intel Core i7 10th Generation with amazing and immersive dual display', '../2/preview.png', 'laptop', 'ASUS'),
(8, 'Razer Pro Type Ultra', '2.689.0000', '<b>Product Specification</b>\r\n\r\nRazer™ Yellow Mechanical Switch\r\nWhite Backlight LED\r\nFull Size Keyboard', 'Razer™ Yellow Mechanical Switch\r\nWhite Backlight LED\r\nFull Size Keyboard', 'preview.png', 'keyboard', 'Razer'),
(9, 'Drop ENTR Mechanical Keyboard', '1.899.000', '<b>Product Specification</b>\r\n\r\nAvaialbe 3 Switches variant\r\nTKL Layout\r\n', 'Avaialbe 3 Switches variant\r\nTKL Layout', 'preview.png', 'keyboard', 'Drop ENTR'),
(10, 'Corsair K70 RGB Pro', '1.990.000', '<b>Product Specification</b>\r\n\r\nCherryRed Switch\r\nFull layout Keyvboard\r\nRGB Backlit LED\r\n', 'CherryRed Switch\r\nFull layout Keyvboard\r\nRGB Backlit LED', 'preview.png', 'keyboard', 'Corsair '),
(11, 'NZXT Function Mini ', 'TKL 1.699.000', '<b>Product Specification</b?\r\n\r\nGateron Red Switch\r\nRGB Backlit LED\r\nTKL Layout Keyboard', 'Gateron Red Switch\r\nRGB Backlit LED\r\nTKL Layout Keyboard', 'preview.png', 'keyboard', 'NZXT'),
(12, 'Fnatic Streak65 Gaming Keyboard', '1.749.000', '<b>Product Specification</b>\r\n\r\n60% Keyboard Layout\r\nRGB Backlit', '60% Keyboard Layout\r\nRGB Backlit', 'preview.png', 'keyboard', 'Fnatic '),
(13, 'Corsair K70 Pro Mini Wireless', '1.899.000', '<b>Product Specification/<b>\r\n\r\nCompact Design\r\nRGB Backlit\r\nCustomizeable RGB LED', 'Compact Design\r\nRGB Backlit\r\nCustomizeable RGB LED', 'preview.png', 'laptop', 'Corsair '),
(14, 'ASUS ROG G703GX - 17.3 inch - Intel® Core™ i9 - NVIDIA GeForce RTX 2080', '53.499.000', '<b>Product Description</b>\r\nPowerful Gaming Laptop from ASUS ROG only for Rp.53.499.000. Powered by Intel® Core™ i9-8950HK and NVIDIA GeForce RTX 2080.\r\n\r\n<b>Product Specification</b>\r\nDisplay Size : 17.3 inch Full HD\r\nTipe Prosesor : Intel® Core™ i9-8950HK\r\nRAM : 64 GB\r\nSSD : 1.5 TB \r\nHDD : 1 TB \r\nGraphic Card : NVIDIA GeForce RTX 2080 8 GB', 'Powerful Gaming Laptop from ASUS ROG Powered by Intel® Core™ i9-8950HK and NVIDIA GeForce RTX 2080,', 'preview.png', 'laptop', 'ASUS'),
(15, 'HP OMEN 15 - 15.6 inch - 16 GB RAM - Intel Core i7 - GeForce® RTX 2060', '15.349.000', '<b>Product Specification</b>\r\nDisplay :	15.6 inch Full HD\r\nCPU : Intel Core i7 10750H\r\nRAM : 16 GB\r\nSSD :512 GB\r\nHDD : 1 TB\r\nGraphic Card : NVIDIA GeForce® RTX 2060 6 GB', 'Affordable GeForce® RTX 2060 Laptop for Gaming by HP', 'preview.png', 'laptop', 'HP'),
(16, 'Lenovo Legion Y920 - 17 inch - Intel Core i7 7700HQ', '13.799.000', '<b>Product Specification</b>\r\n\r\nDisplay : 17 inch Full HD\r\nProcessor : Intel Core i7 7700HQ\r\nRAM : 32 GB\r\nSSD : 256 GB\r\nKapasitas HDD	  :    2 TB\r\nGraphic Card : NVIDIA GeForce GTX 1070 8 GB', 'Big screen laptop powered by Intel Core i7 7700HQ and GTX1070', 'preview.png', 'laptop', 'Lenovo'),
(17, 'Acer Predator Triton 500 (PT515-51) - 15.6 inch - Core i7', '18.699.000', '<b>Product Description</b>\r\n\r\nDisplay : 15.6 inch Full HD\r\nProcessor : Core i7 8750H\r\nRAM  :16 GB\r\nHDD : 512 GB\r\nGraphioc Card :	NVIDIA GeForce® RTX 2080 8 GB', 'Yet Another powerfull Acer Predator Laptop powered by Intel Core i7 and GeForce RTX2080', 'preview.png', 'laptop', 'Acer');

-- --------------------------------------------------------

--
-- Table structure for table `le_user`
--

CREATE TABLE `le_user` (
  `id` int(8) NOT NULL,
  `username` varchar(32) NOT NULL,
  `real_name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `le_user`
--

INSERT INTO `le_user` (`id`, `username`, `real_name`, `password`) VALUES
(1, 'admin', 'LeAdmin', 'admin123'),
(2, 'herobuxx', 'Alif Fathur', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'me', 'Me', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `le_admin`
--
ALTER TABLE `le_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `le_order`
--
ALTER TABLE `le_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `le_product`
--
ALTER TABLE `le_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `le_user`
--
ALTER TABLE `le_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `le_admin`
--
ALTER TABLE `le_admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `le_order`
--
ALTER TABLE `le_order`
  MODIFY `order_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `le_product`
--
ALTER TABLE `le_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `le_user`
--
ALTER TABLE `le_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
