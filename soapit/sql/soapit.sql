-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 07:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soapit`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagorie`
--

CREATE TABLE `catagorie` (
  `catagorieid` int(11) NOT NULL,
  `catagorie_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagorie`
--

INSERT INTO `catagorie` (`catagorieid`, `catagorie_name`) VALUES
(1, 'mens_collection'),
(2, 'womens_collection'),
(3, 'children_collection');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `cfname` varchar(100) DEFAULT NULL,
  `csname` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `pnum` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `cfname`, `csname`, `pincode`, `pnum`, `email`, `password`) VALUES
(1, 'shivam', 'raikar', 403601, 9584736475, 'shivam@gmail.com', 'shivam'),
(2, 'abhishek', 'dhumskr', 403606, 9584736434, 'abhishek@gmail.com', 'abhi'),
(3, 'sam', 'naik', 403001, 9528436434, 'sam@gmail.com', 'sam'),
(4, 'neil', 'naik', 403606, 9523456434, 'neil@gmail.com', 'neil'),
(5, 'aftab', 'khan', 403518, 1234567894, 'aftab@gmail.com', 'aftab'),
(6, 'suraj', 'shetty', 403701, 8753434765, 'suraj@gmail.com', 'surajj'),
(7, 'Ram', 'Naik', 403701, 2345324765, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `status`, `password`, `type`) VALUES
('abhishek@gmail.com', 'active', 'abhi', 'customer'),
('admin@gmail.com', 'active', 'admin', 'admin'),
('neil@gmail.com', 'active', 'neil', 'customer'),
('sam@gmail.com', 'active', 'sam', 'customer'),
('shivam@gmail.com', 'active', 'shivam', 'customer'),
('suraj@gmail.com', 'not_active', 'surajj', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `payment_type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `totalcost` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `payment_type`, `status`, `productid`, `quantity`, `totalcost`, `date`) VALUES
(1, 1, 'paypal', 'paid', 3, 1, 210, '2020-11-12'),
(2, 2, 'paypal', 'pending', 5, 3, 690, '2020-11-13'),
(3, 1, 'paypal', 'pending', 2, 5, 1275, '2020-11-14'),
(4, 3, 'paypal', 'paid', 8, 2, 460, '2020-11-14'),
(5, 5, 'paypal', 'paid', 7, 10, 2300, '2020-11-15'),
(6, 4, 'paypal', 'paid', 3, 4, 840, '2020-11-16'),
(7, 6, 'paypal', 'pending', 2, 3, 765, '2020-11-16'),
(8, 3, 'paypal', 'paid', 7, 6, 1380, '2020-11-17'),
(9, 1, 'paypal', 'paid', 4, 2, 440, '2020-12-05'),
(10, 1, 'paypal', 'paid', 1, 4, 1000, '2020-12-05'),
(15, 1, 'paypal', 'paid', 5, 2, 460, '2020-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `pincodetable`
--

CREATE TABLE `pincodetable` (
  `pincode` int(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pincodetable`
--

INSERT INTO `pincodetable` (`pincode`, `address`) VALUES
(403508, 'aldona'),
(403001, 'altinho'),
(403509, 'anjuna'),
(403518, 'arpora'),
(403701, 'assolna'),
(403606, 'churchorem'),
(403601, 'margao');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `productimage` varchar(250) DEFAULT NULL,
  `productdescription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `price`, `productimage`, `productdescription`) VALUES
(1, 'Charcoal Soap', 250, 'char.png', 'Formulated with activated Charcoal and moisturizing Shea Butter, this unique face and body soap is excellent for all skin types and reduces acne and excessive oiliness. It detoxifies the skin by deeply cleansing and reducing large pores and is ideal for everyday use. Yang Yang essential oil imparts a soothing and long lasting aroma to your skin.'),
(2, 'Rose Soap', 255, 'rose.png', 'A powerful anti-pigmentation formula, this soap clears dark spots and patches off your skin, as it cleanses it. English Rose’s astringency and rich Vitamin C content help fade pigmentation marks; while Mulberry’s arbutin inhibits melanin synthesis; thus preventing pigmentation.'),
(3, 'Lavender Soap', 210, 'lva.png', 'A refreshing and skin re-vitalizing complex of Lavender & Rosemary, this soap breathes new life into your skin. Together they boost the blood circulation; relieving congestion & puffiness. They also moisturize the skin and promote cellular regeneration.'),
(4, 'Peach Soap', 220, 'peach.jpg', 'It helps in cleaning the skin from dirt and impurities.Being a great source of Vitamin C, peach extracts helps to remove dark circles and blemishes.Its macronutrients also help in removing wrinkles and tightening the skin`s pores'),
(5, 'Beach Soap', 230, 'beachsoap.jpg', 'A fresh fragrance with notes of herbs and flowers. A fresh fragrance with notes of herbs and flowers. Price is for one bar of soap wrapped in Himalayan Lokta paper.'),
(6, 'Saffron Soap', 230, 'saff.png', 'Enriched with multi-mineral-rich content of Saffron & goat Milk, this soap lightens and evens your skin tone, while cleansing away pore-deep impurities. It gently fades away pigmentation marks and blemishes; and grants you a fairer & flawless complexion!'),
(7, 'Lemon and Basil Soap', 230, 'lemon.png', 'This vitamin-rich soap detoxifies, tones and brightens up your skin, while cleansing it. It rids the skin surface as well as pores of dirt, grime, excess oil and germs. It thus keeps your skin clean, while moisturizing and nourishing it.'),
(8, 'Elbow-Foot-Knee Scrub Soap', 230, 'footscrub.jpg', 'An innovative formula to give your elbows, feet & knees the extra attention they deserve. The finely ground Walnut & almond extract , together exfoliate even thick deposits of dead cells, while smoothing and lighting the areas; while Aloe Vera keeps the skin pampered.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagorie`
--
ALTER TABLE `catagorie`
  ADD PRIMARY KEY (`catagorieid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `pnum` (`pnum`),
  ADD KEY `pincode` (`pincode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `pincodetable`
--
ALTER TABLE `pincodetable`
  ADD PRIMARY KEY (`pincode`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD UNIQUE KEY `productname` (`productname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagorie`
--
ALTER TABLE `catagorie`
  MODIFY `catagorieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342342343;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`pincode`) REFERENCES `pincodetable` (`pincode`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
