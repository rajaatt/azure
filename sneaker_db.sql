-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 03:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneaker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentbook`
--

CREATE TABLE `appointmentbook` (
  `APT_ID` int(11) NOT NULL,
  `APT_DATE` date NOT NULL,
  `APT_TIME` time NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUSTOMER_ID`, `FNAME`, `MNAME`, `LNAME`, `EMAIL_ID`, `PASSWORD`) VALUES
(1, 'pratik', 'pravin', 'kumbhar', 'kumbharpratik764@gmail.com', 'Pratik@2004'),
(2, 'rushi', 'sanjay', 'shinde', 'rushiop@gmail.com', 'Rushi123@123'),
(4, 'samee', 'rushi', 'shinde', 'Samee@764gmail.com', 'Samee@2003'),
(5, 'pravin', 'shankar', 'kumbhar', 'pravinkumbhar@gmail.com', 'Pravin@1967'),
(6, 'steven', '-', 'thomas', 'rujiihelpdesk@gmail.com', 'Steven@1212');

-- --------------------------------------------------------

--
-- Table structure for table `cust_add`
--

CREATE TABLE `cust_add` (
  `ADD_ID` int(11) NOT NULL,
  `HOUSE_NO` int(11) NOT NULL,
  `STREET` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `PINCODE` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_ID` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `PINCODE` int(11) NOT NULL,
  `BLDG` varchar(50) NOT NULL,
  `STREET_ADD` varchar(50) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `ROLE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_ID` int(11) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_TIME` time NOT NULL,
  `ORDER_STATUS` varchar(50) NOT NULL,
  `ADD_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `PRO_ID` int(11) DEFAULT NULL,
  `ORDER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `TRANS_ID` int(11) NOT NULL,
  `PAY_TYPE` varchar(50) DEFAULT NULL,
  `PAY_DATE` date NOT NULL,
  `PAY_TIME` time NOT NULL,
  `PAY_AMT` int(11) NOT NULL,
  `PAY_FOR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_s`
--

CREATE TABLE `personal_s` (
  `P_SCH_ID` int(11) NOT NULL,
  `P_SCH_DATE` date NOT NULL,
  `P_SCH_TIME` time NOT NULL,
  `EMP_ID` int(11) DEFAULT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_NAME` varchar(50) DEFAULT NULL,
  `PRO_DESC` varchar(50) DEFAULT NULL,
  `PRO_PRICE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rateandreview`
--

CREATE TABLE `rateandreview` (
  `RATING` int(11) DEFAULT NULL,
  `REVIEW` varchar(50) DEFAULT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL,
  `P_SCH_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trans_app`
--

CREATE TABLE `trans_app` (
  `APT_ID` int(11) DEFAULT NULL,
  `TRANS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trans_order`
--

CREATE TABLE `trans_order` (
  `TRANS_ID` int(11) DEFAULT NULL,
  `ORDER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trans_ps`
--

CREATE TABLE `trans_ps` (
  `P_SCH_ID` int(11) DEFAULT NULL,
  `TRANS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentbook`
--
ALTER TABLE `appointmentbook`
  ADD PRIMARY KEY (`APT_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `cust_add`
--
ALTER TABLE `cust_add`
  ADD PRIMARY KEY (`ADD_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `ADD_ID` (`ADD_ID`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD KEY `PRO_ID` (`PRO_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`TRANS_ID`);

--
-- Indexes for table `personal_s`
--
ALTER TABLE `personal_s`
  ADD PRIMARY KEY (`P_SCH_ID`),
  ADD KEY `EMP_ID` (`EMP_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indexes for table `rateandreview`
--
ALTER TABLE `rateandreview`
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `P_SCH_ID` (`P_SCH_ID`);

--
-- Indexes for table `trans_app`
--
ALTER TABLE `trans_app`
  ADD KEY `APT_ID` (`APT_ID`),
  ADD KEY `TRANS_ID` (`TRANS_ID`);

--
-- Indexes for table `trans_order`
--
ALTER TABLE `trans_order`
  ADD KEY `TRANS_ID` (`TRANS_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- Indexes for table `trans_ps`
--
ALTER TABLE `trans_ps`
  ADD KEY `P_SCH_ID` (`P_SCH_ID`),
  ADD KEY `TRANS_ID` (`TRANS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointmentbook`
--
ALTER TABLE `appointmentbook`
  ADD CONSTRAINT `appointmentbook_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`CUSTOMER_ID`);

--
-- Constraints for table `cust_add`
--
ALTER TABLE `cust_add`
  ADD CONSTRAINT `cust_add_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`CUSTOMER_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ADD_ID`) REFERENCES `cust_add` (`ADD_ID`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`PRO_ID`) REFERENCES `product` (`PRO_ID`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ORDER_ID`);

--
-- Constraints for table `personal_s`
--
ALTER TABLE `personal_s`
  ADD CONSTRAINT `personal_s_ibfk_1` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`),
  ADD CONSTRAINT `personal_s_ibfk_2` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`CUSTOMER_ID`);

--
-- Constraints for table `rateandreview`
--
ALTER TABLE `rateandreview`
  ADD CONSTRAINT `rateandreview_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`CUSTOMER_ID`),
  ADD CONSTRAINT `rateandreview_ibfk_2` FOREIGN KEY (`P_SCH_ID`) REFERENCES `personal_s` (`P_SCH_ID`);

--
-- Constraints for table `trans_app`
--
ALTER TABLE `trans_app`
  ADD CONSTRAINT `trans_app_ibfk_1` FOREIGN KEY (`APT_ID`) REFERENCES `appointmentbook` (`APT_ID`),
  ADD CONSTRAINT `trans_app_ibfk_2` FOREIGN KEY (`TRANS_ID`) REFERENCES `payment` (`TRANS_ID`);

--
-- Constraints for table `trans_order`
--
ALTER TABLE `trans_order`
  ADD CONSTRAINT `trans_order_ibfk_1` FOREIGN KEY (`TRANS_ID`) REFERENCES `payment` (`TRANS_ID`),
  ADD CONSTRAINT `trans_order_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ORDER_ID`);

--
-- Constraints for table `trans_ps`
--
ALTER TABLE `trans_ps`
  ADD CONSTRAINT `trans_ps_ibfk_1` FOREIGN KEY (`P_SCH_ID`) REFERENCES `personal_s` (`P_SCH_ID`),
  ADD CONSTRAINT `trans_ps_ibfk_2` FOREIGN KEY (`TRANS_ID`) REFERENCES `payment` (`TRANS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
