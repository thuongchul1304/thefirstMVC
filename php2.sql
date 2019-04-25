-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 05:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Table structure for table `grproduct`
--

CREATE TABLE `grproduct` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grproduct`
--

INSERT INTO `grproduct` (`Id`, `Name`, `link`) VALUES
(1, 'Nike', 'nike'),
(2, 'Adidas', 'adidas'),
(3, 'Converse', 'converse'),
(4, 'Jordan', 'jordan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ParentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Name`, `Link`, `ParentId`) VALUES
(1, 'Trang chủ', 'index', 1),
(2, 'Cửa hàng', 'shop', 2),
(3, 'About', 'About', 3),
(4, 'Đăng ký/Đăng nhập', 'register', 4),
(5, 'Liên Hệ', 'contact', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `ortransaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `ortransaction_id`, `product_id`, `qty`, `amount`, `data`, `status`, `Name`) VALUES
(21, 8, 9, 1, '90.00', '', 0, 'GIÀY NIKE AIR ZOOM PEGASUS 35 NAM - XANH ĐEN'),
(22, 8, 11, 1, '130.00', '', 0, 'GIÀY NIKE AIR ZOOM ULTRA-845007-116-NAM'),
(23, 8, 9, 1, '90.00', '', 0, 'GIÀY NIKE AIR ZOOM PEGASUS 35 NAM - XANH ĐEN'),
(24, 8, 11, 1, '130.00', '', 0, 'GIÀY NIKE AIR ZOOM ULTRA-845007-116-NAM');

-- --------------------------------------------------------

--
-- Table structure for table `ortransaction`
--

CREATE TABLE `ortransaction` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` int(11) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `security` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ortransaction`
--

INSERT INTO `ortransaction` (`Id`, `user_name`, `user_email`, `user_phone`, `amount`, `message`, `security`, `status`, `Address`, `created`) VALUES
(8, '123', '1123', 23123, '220.00', '12', 'ug0b1K4Il3diPJ7FnfqECCSer', 0, '12', '2019-02-27 14:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PriceNew` double NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `GroupProduct_It` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Detail`, `Price`, `Image`, `PriceNew`, `Date`, `sex`, `Quantity`, `GroupProduct_It`) VALUES
(9, 'GIÀY NIKE AIR ZOOM PEGASUS 35 NAM - XANH ĐEN', 'GIÀY NIKE AIR ZOOM PEGASUS 35 NAM - XANH ĐEN', 120, 'd1.jpg', 90, '2019-02-27 14:18:24', '1', 12, 1),
(11, 'GIÀY NIKE AIR ZOOM ULTRA-845007-116-NAM', '<p>GI&Agrave;Y NIKE AIR ZOOM ULTRA-845007-116-NAM</p>\r\n', 150, 'a1.jpg', 130, '2019-02-27 14:18:24', '1', 6, 1),
(12, 'GIÀY ZOOM TRAIN COMPLETE 2-922475-001-NAM', '<p>GI&Agrave;Y ZOOM TRAIN COMPLETE 2-922475-001-NAM</p>\r\n', 130, 'b1.jpg', 110, '2019-02-13 01:39:33', '1', 4, 1),
(13, 'GIÀY NIKE AIR ZOOM STRUCTURE 21 -904695-401-NAM', '<p>GI&Agrave;Y NIKE AIR ZOOM STRUCTURE 21 -904695-401-NAM</p>\r\n', 150, 'c1.jpg', 110, '2019-02-13 01:34:05', '1', 4, 1),
(16, 'NIKE AIR MAX 90- AUTHENTIC', '<p>Gi&agrave;y Nike Air Max 2017 l&agrave; mẫu gi&agrave;y được n&acirc;ng cấp hơn từ phi&ecirc;n bản kinh điển 2016, được đ&aacute;nh gi&aacute; l&agrave; một đ&ocirc;i gi&agrave;y kh&aacute;c biệt nhất từ trước tới nay. Với phần đế Air Max full-length quen thuộc, gi&agrave;y Nike Air Max 2017 vẫn đem đến một bộ đế đệm &ecirc;m &aacute;i, sức đ&agrave;n hồi v&agrave; linh hoạt cực tốt, cho cảm gi&aacute;c như bay khi di chuyển. Phi&ecirc;n bản Air Max 2017 đặc biệt được n&acirc;ng cấp tối ưu ở phần upper so với Air Max 2016, logo Swoosh kh&ocirc;ng c&ograve;n ở ph&iacute;a trước ch&acirc;n v&agrave; những sợi Flywire được ẩn đi, gi&uacute;p vẻ ngo&agrave;i của gi&agrave;y Nike Air Max 2017 th&ecirc;m bắt mắt v&agrave; thu h&uacute;t.</p>\r\n', 150, 'm1.jpg', 170, '2019-02-13 02:00:14', '1', 3, 1),
(17, 'NIKE Airmax 97 v.OG Sliver Bullet', '<p>Gi&agrave;y nam airmax 97 phi&ecirc;n bản OG m&agrave;u sliver bullet ch&iacute;nh h&atilde;ng Phi&ecirc;n bản og cực hiếm v&agrave; số lượng &iacute;t Gi&agrave;y được nhập trực tiếp từ US UK Số lượng c&oacute; sẵn kh&ocirc;ng nhiều đảm bảo authentic 100%</p>\r\n', 400, 'n1.jpg', 300, '2019-02-13 02:00:16', '1', 3, 1),
(18, 'GIÀY ADIDAS STAN SMITH - NỮ', '<h2>Gi&agrave;y adidas Stan Smith - Nữ</h2>\r\n\r\n<p><strong><em>adidas Stan Smith l&agrave; mẫu gi&agrave;y huyền thoại nổi tiếng bậc nhất của adidas. Xuất hiện lần đầu ti&ecirc;n v&agrave;o năm 1973 trải qua hơn 40 năm lịch sử n&oacute; đ&atilde; ghi dấu ấn tới h&agrave;ng triệu người tr&ecirc;n thế giới.&nbsp;adidas Stan Smith được đ&aacute;nh gi&aacute; một trong những mẫu gi&agrave;y biểu tượng kh&ocirc;ng bao giờ lỗi mốt.</em></strong></p>\r\n', 110, 'giay-adidas-Stan-Smith-01-800x800_0.jpg', 120, '2019-02-13 02:03:54', '2', 4, 2),
(19, 'GIÀY ADIDAS STAN SMITH - Nam', '<h2>Gi&agrave;y adidas Stan Smith - Nam</h2>\r\n\r\n<p><strong><em>adidas Stan Smith l&agrave; mẫu gi&agrave;y huyền thoại nổi tiếng bậc nhất của adidas. Xuất hiện lần đầu ti&ecirc;n v&agrave;o năm 1973 trải qua hơn 40 năm lịch sử n&oacute; đ&atilde; ghi dấu ấn tới h&agrave;ng triệu người tr&ecirc;n thế giới.&nbsp;adidas Stan Smith được đ&aacute;nh gi&aacute; một trong những mẫu gi&agrave;y biểu tượng kh&ocirc;ng bao giờ lỗi mốt.</em></strong></p>\r\n', 110, 'giay-adidas-Stan-Smith-01-800x800_0.jpg', 120, '2019-02-13 02:07:16', '1', 11, 2),
(20, 'YEEZY Adidas x Yeezy Boost 350 Turtle Dove', '<p><a href=\"https://www.farfetch.com/vn/shopping/men/yeezy/items.aspx\">YEEZY</a>Adidas x Yeezy Boost 350 Turtle Dove</p>\r\n', 3100, '12963719_13486634_480.jpg', 3299, '2019-02-13 02:10:41', '1', 3, 2),
(21, 'YEEZY Adidas x Yeezy 750 Boost OG', '<p><strong>YEEZY&nbsp;</strong>Adidas x Yeezy 750 Boost OG</p>\r\n', 5200, '12960341_14053931_480.jpg', 5707, '2019-02-13 02:12:30', '1', 1, 2),
(22, 'YEEZY Adidas x Yeezy Boost 700 OG', '<p><b>YEEZY</b> Adidas x Yeezy Boost 700 OG</p>\r\n', 550, '12960348_13503235_480.jpg', 504, '2019-02-13 02:14:18', '1', 2, 2),
(23, 'ADIDAS Mastodon Pro sneakers', '<p><b\">ADIDAS</b> Mastodon Pro sneakers</p>\r\n', 1200, '11574293_7398043_480.jpg', 1099, '2019-02-13 02:15:58', '1', 2, 2),
(24, 'One Star Love the Progress', '<h3>One Star Love the Progress</h3>\r\n', 100, '163193Cshot1.jpg', 80, '2019-02-13 10:52:20', '2', 4, 3),
(25, 'Chuck 70 Goretex', '<h3>Chuck 70 Goretex</h3>\r\n', 110, '162351.jpg', 100, '2019-02-13 10:59:55', '2', 4, 3),
(26, 'Chuck Taylor All Star Hello Kitty', '<h3>Chuck Taylor All Star Hello Kitty</h3>\r\n', 80, '164629C.jpg', 70, '2019-02-13 11:01:32', '2', 3, 3),
(27, 'One Star Sierra Leather Low Top', '<h3>One Star Sierra Leather Low Top</h3>\r\n', 110, '162544Cstandard.jpg', 123, '2019-02-13 11:05:30', '1', 7, 3),
(28, 'One Star Mid Camo', '<h3>One Star Mid Camo</h3>\r\n', 100, '159782shot1.jpg', 100, '2019-02-13 11:06:28', '1', 7, 3),
(29, 'Chuck Taylor All Star 70 Wordmark Wool', '<h3>Chuck Taylor All Star 70 Wordmark Wool</h3>\r\n', 130, 'SP18CTAS70WORDMARKWOOLWHITEMARSSTONE159679CLATERAL.jpg', 99, '2019-02-13 11:08:51', '1', 4, 3),
(30, 'JORDAN Air Jordan 4 Retro Kaws', '<p><b>JORDAN</b> Air Jordan 4 Retro Kaws</p>\r\n', 2400, '12959137_13486346_480.jpg', 2257, '2019-02-13 11:11:04', '1', 2, 4),
(31, 'JORDAN Air Jordan 1 Hi Retro sneakers', '<p><b>JORDAN</b> Air Jordan 1 Hi Retro sneakers</p>\r\n', 1900, '13157850_14625202_480.jpg', 1713, '2019-02-13 11:12:04', '1', 3, 4),
(32, 'JORDAN Air Jordan 1 Retro sneakers ', '<p><strong>JORDAN </strong>Air Jordan 1 Retro sneakers&nbsp;</p>\r\n', 1300, '13678521_16442930_480.jpg', 1142, '2019-02-13 11:13:12', '1', 3, 4),
(33, 'JORDAN Air Jordan 8 Retro sneakers ', '<h1><strong>JORDAN</strong> &nbsp;Air Jordan 8 Retro sneakers</h1>\r\n', 416, '13157685_14717145_480.jpg', 416, '2019-02-13 11:16:16', '2', 4, 4),
(34, 'JORDAN Air Jordan 11 Retro sneakers', '<p><strong>JORDAN</strong> Air Jordan 11 Retro sneakers&nbsp;</p>\r\n', 457, '13157801_14625079_480.jpg', 457, '2019-02-13 11:18:04', '2', 13, 4),
(35, 'JORDAN Air Jordan 1 Explorer XX sneakers', '<p><strong>JORDAN </strong>Air Jordan 1 Explorer XX sneakers</p>\r\n', 125, '13522612_15963969_480.jpg', 125, '2019-02-13 11:19:04', '2', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `slideshoes`
--

CREATE TABLE `slideshoes` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshoes`
--

INSERT INTO `slideshoes` (`Id`, `name`, `Image_id`) VALUES
(4, 'd1.jpg', 9),
(6, 'd2.jpg', 9),
(7, 'd3.jpg', 9),
(8, 'a1.jpg', 11),
(9, 'a2.jpg', 11),
(10, 'a3.jpg', 11),
(11, 'b1.jpg', 12),
(12, 'b2.jpg', 12),
(13, 'b3.jpg', 12),
(14, 'c1.jpg', 13),
(15, 'c2.jpg', 13),
(16, 'c3.jpg', 13),
(17, 'm1.jpg', 16),
(18, 'm2.jpg', 16),
(19, 'm3.jpg', 16),
(20, 'n1.jpg', 17),
(21, 'n2.jpg', 17),
(22, 'n3.jpg', 17),
(23, 'giay-adidas-Stan-Smith-01-800x800_0.jpg', 18),
(24, 'giay-adidas-Stan-Smith-02-800x800_0.jpg', 18),
(25, 'giay-adidas-Stan-Smith-04-800x800_0.jpg', 18),
(26, 'giay-adidas-Stan-Smith-01-800x800_0.jpg', 19),
(27, 'giay-adidas-Stan-Smith-02-800x800_0.jpg', 19),
(28, 'giay-adidas-Stan-Smith-04-800x800_0.jpg', 19),
(29, '12963719_13486634_480.jpg', 20),
(30, '12963719_13486637_480.jpg', 20),
(31, '12963719_13486638_480.jpg', 20),
(32, '12960341_14053931_480.jpg', 21),
(33, '12960341_14053933_480.jpg', 21),
(34, '12960341_14053938_480.jpg', 21),
(35, '12960348_13503235_480.jpg', 22),
(36, '12960348_13503242_480.jpg', 22),
(37, '12960348_13503247_480.jpg', 22),
(38, '11574293_7398043_480.jpg', 23),
(39, '11574293_7398044_480.jpg', 23),
(40, '11574293_7398045_480.jpg', 23),
(41, '163193Cshot1.jpg', 24),
(42, '163193Cshot1 (1).jpg', 24),
(43, '163193Cshot5.jpg', 24),
(44, '162351.jpg', 25),
(45, '162351Cshot3.jpg', 25),
(46, '162351Cshot4.jpg', 25),
(47, '164629C.jpg', 26),
(48, '164629C-2.jpg', 26),
(49, '164629C-5.jpg', 26),
(50, '162544Cstandard.jpg', 27),
(51, '162544Cshot2.jpg', 27),
(52, '162544Cshot3.jpg', 27),
(53, '159782shot1.jpg', 28),
(54, '159782shot4.jpg', 28),
(55, '159782standard.jpg', 28),
(56, 'SP18CTAS70WORDMARKWOOLWHITEMARSSTONE159679CLATERAL.jpg', 29),
(57, 'SP18CTAS70WORDMARKWOOLWHITEMARSSTONE159679CMEDIAL.jpg', 29),
(58, 'SP18CTAS70WORDMARKWOOLWHITEMARSSTONE159679CHEEL.jpg', 29),
(59, '12959137_13486346_480.jpg', 30),
(60, '12959137_13486349_480.jpg', 30),
(61, '12959137_13486358_480.jpg', 30),
(62, '13157850_14625202_480.jpg', 31),
(63, '13157850_14625203_480.jpg', 31),
(64, '13157850_14625206_480.jpg', 31),
(65, '13678521_16442930_480.jpg', 32),
(66, '13678521_16442931_480.jpg', 32),
(67, '13678521_16442933_480.jpg', 32),
(68, '13157685_14717145_480.jpg', 33),
(69, '13157685_14717147_480.jpg', 33),
(70, '13157685_14717153_480.jpg', 33),
(71, '13157801_14625079_480.jpg', 34),
(72, '13157801_14625080_480.jpg', 34),
(73, '13157801_14625083_480.jpg', 34),
(74, '13522612_15963969_480.jpg', 35),
(75, '13522612_15963970_480.jpg', 35),
(76, '13522612_15963973_480.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Role` tinyint(4) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Username`, `email`, `Password`, `Role`, `Created`) VALUES
(1, 'Nguyễn Thương', 'supperadmin', '', 'supperadmin', 1, '2019-02-11 15:38:29'),
(7, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '2019-02-11 16:23:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grproduct`
--
ALTER TABLE `grproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`ortransaction_id`);

--
-- Indexes for table `ortransaction`
--
ALTER TABLE `ortransaction`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `GroupProduct_It` (`GroupProduct_It`);

--
-- Indexes for table `slideshoes`
--
ALTER TABLE `slideshoes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grproduct`
--
ALTER TABLE `grproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ortransaction`
--
ALTER TABLE `ortransaction`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `slideshoes`
--
ALTER TABLE `slideshoes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`ortransaction_id`) REFERENCES `ortransaction` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`GroupProduct_It`) REFERENCES `grproduct` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
