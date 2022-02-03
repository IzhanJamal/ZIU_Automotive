-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 08:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziu`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `CID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`CID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Izhan Jamal', 'iza@gmail.com', 'Hello', 'Hello '),
(2, 'Izhan Jamal', 'a', 'a', 'a'),
(3, 'a', 'a', 'a', 'a'),
(4, 'Zorain', 'zo@gmail.com', 'Hello', 'a'),
(5, 'Zorain', 'zo@gmail.com', 'Hello', 'a'),
(6, 'Khan', 'khan@gmail.com', 'Appointment ', 'Hello WOrld '),
(7, 'Zorain', 'zo@gmail.com', 'a', 'a'),
(8, '', 'zo1@gmail.com', 'a', 'a'),
(9, 'ZIU', 'z@hotmail.com', 'Testing', 'Final '),
(10, 'Zorain', 'zo@gmail.com', 'Hello', 'Hello '),
(11, 'Test', 't@gmail.com', 'Test', '	Test '),
(12, 'Zorain', 'zo@gmail.com', 'Hello', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_register`
--

CREATE TABLE `dealer_register` (
  `D_ID` int(11) NOT NULL,
  `Owner Name` varchar(50) NOT NULL,
  `CNIC` varchar(50) NOT NULL,
  `Fax Number` varchar(50) NOT NULL,
  `Phone Number` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `New Password` varchar(50) NOT NULL,
  `Business Name` varchar(50) NOT NULL,
  `Partnership` varchar(20) NOT NULL,
  `Address 1` varchar(100) NOT NULL,
  `Address 2` varchar(100) NOT NULL,
  `Landline Number` varchar(20) NOT NULL,
  `Postcode` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Bank Name` varchar(50) NOT NULL,
  `Account Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer_register`
--

INSERT INTO `dealer_register` (`D_ID`, `Owner Name`, `CNIC`, `Fax Number`, `Phone Number`, `Gender`, `Date Of Birth`, `Email`, `New Password`, `Business Name`, `Partnership`, `Address 1`, `Address 2`, `Landline Number`, `Postcode`, `City`, `Country`, `Bank Name`, `Account Number`) VALUES
(2, 'Izhan Jamaluddin ', '123-123-123', '1234567', '03001234567', 'Male', '2021-11-01', 'izh@gmail.com', '12345', 'ZIU', 'Yes', '21 commercial street', '212', '123456', '75500', 'Karachi', 'Pakistan', 'Habib Bank', '123-123-123-123'),
(4, 'Zorain', '12345', '111111', '01234567', 'Male', '2022-01-21', 'zo@gmail.com', '11111', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(5, 'Zorain', '12345', '111111', '01234567', 'Female', '2022-01-01', 'zo1@gmail.com', '12345', 'ZIU', 'Yes', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(6, 'Khan', '12345', '111111', '01234567', 'Male', '2022-01-07', 'khan123@gmail.com', '123456789', 'ZIU', 'Yes', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(7, 'fatima', '12345', '111111', '01234567', 'Female', '2022-01-07', 'fatima@gmail.com', '1234567890', 'ZIU', 'Yes', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(8, 'fatima Khan', '12345', '111111', '01234567', 'Female', '2022-01-07', 'fatima123@gmail.com', '123456789', 'ZIU', 'Yes', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(9, 'Abdullah ', '12345', '111111', '01234567', 'Male', '2022-01-07', 'ab@gmail.com', '123456789asdfg', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(10, 'Abdullah ', '12345', '111111', '01234567', 'Male', '2022-01-07', 'ab123@gmail.com', '111111', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(11, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'a@gmail.com', '123456789', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(12, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'hello@gmail.com', '1222222222', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(13, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'h12@gmail.com', 'A111111111', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(14, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'h12234@gmail.com', 'a123asdfgqwerty', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(15, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'iz123456@gmail.com', '1234azwsxcdett', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(16, 'Kamran', '12345', '111111', '01234567', 'Male', '2022-01-07', 'iz1234567@gmail.com', 'AAAAAAAAAA', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(17, 'Kamran123', '12345', '111111', '01234567', 'Male', '2022-01-07', 'kamran123@gmail.com', 'aaaaaaaaaaaaaa', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111'),
(18, 'Kamran123', '12345', '111111', '01234567', 'Male', '2022-01-07', 'kamran1235@gmail.com', 'Aaaaaa111111A', 'ZIU', 'No', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan', 'Habib Bank', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inv_id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `landline` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `carbrand` varchar(20) NOT NULL,
  `plateno` varchar(20) NOT NULL,
  `registrationno` varchar(30) NOT NULL,
  `mileage` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `modelno` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `payordernumber` varchar(30) NOT NULL,
  `carprice` varchar(20) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `totalamount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv_id`, `fullname`, `cnic`, `company`, `email`, `address`, `country`, `city`, `zipcode`, `mobile`, `landline`, `dob`, `carbrand`, `plateno`, `registrationno`, `mileage`, `year`, `modelno`, `color`, `payordernumber`, `carprice`, `tax`, `totalamount`) VALUES
(1, 'Izhan Jamal', '111-111-111-111', 'ZIU', 'iz@gmail.com', 'Block 2', 'Pakistan', 'Karachi', '111111', '12132411', '121212121', '2022-02-16', 'honda', '11-112-ba', '111111', '1000', '2021', '1221', 'red', '111111111', '200000', '10000', '2010000'),
(2, '', '12345', 'ZIU', 'zo@gmail.com', 'FB.Area', 'Pakistan', 'Karachi', '', '01234567', '12346', '2022-02-24', '', '1111', '111', '111', '11', '111', '111', '11', '11', '11', '11'),
(3, 'Ali Khan', '11111111', 'ZIU', 'zo@gmail.com', 'FB.Area', 'Pakistan', 'Karachi', '11-1-1', '01234567', '12346', '1998-01-01', 'Toyota', 'BA-123', 'r123', '2000', '2021', '2000', 'White', 'p1212121', '100000', '0', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `salesman_register`
--

CREATE TABLE `salesman_register` (
  `S_ID` int(20) NOT NULL,
  `Dealer_ID` int(50) NOT NULL,
  `Salesman Name` varchar(50) NOT NULL,
  `CNIC` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Currently Employed` varchar(20) NOT NULL,
  `Years of Experience` varchar(20) NOT NULL,
  `Available Start Date` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address 1` varchar(50) NOT NULL,
  `Address 2` varchar(50) NOT NULL,
  `Landline` varchar(20) NOT NULL,
  `Postal` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesman_register`
--

INSERT INTO `salesman_register` (`S_ID`, `Dealer_ID`, `Salesman Name`, `CNIC`, `Email`, `Phone Number`, `Gender`, `DOB`, `Currently Employed`, `Years of Experience`, `Available Start Date`, `Password`, `Address 1`, `Address 2`, `Landline`, `Postal`, `City`, `Country`) VALUES
(1, 2, 'Khan Ali', '111111', 'iza@gmail.com', '12345', 'Male', '', 'Yes', '1', '2022-01-11', '12345', 'Block 2', 'Add ', '`12335', '11111', 'Karaci', 'Pakistan'),
(2, 5, 'Khan', '111111', 'k@gmail.com', '12345', 'Male', '21-09-2000', 'Yes', '1', '2022-01-29', '12345', 'Block 2', 'Add ', '`12335', '11111', 'Karaci', 'Pakistan'),
(9, 2, 'Khan', '111111', 'kaa@gmail.com', '12345', 'Male', '21-09-2000', 'Yes', '1', '2022-01-29', '12345', 'Block 2', 'Add ', '`12335', '11111', 'Karaci', 'Pakistan'),
(11, 4, 'Khan', '111111', 'aaa@hotmail.com', '12345', 'Male', '21-09-2000', 'Yes', '1', '2022-01-11', '12345', 'Block 2', 'Add ', '`12335', '11111', 'Karaci', 'Pakistan'),
(20, 15, 'Khan', '111111', 'kali@gmail.com', '12345', 'Male', '21-09-2000', 'Yes', '1', '2022-01-19', '12345', 'Block 2', 'Add ', '`12335', '11111', 'Karaci', 'Pakistan'),
(21, 2, 'Izhan Jamal', '123', '12izh@gmail.com', '01234567', 'Male', '2022-01-26', 'No', '1', '2022-01-29', '11111', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan'),
(22, 2, 'Izhan Jamal', '123', '123izh@gmail.com', '01234567', 'Male', '2022-01-26', 'No', '1', '2022-01-29', '111111111', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan'),
(23, 2, 'Zorain', '12345', 'zo1@gmail.com', '01234567', 'Male', '2022-02-09', 'No', '1', '2022-02-12', '1111111111111', 'FB.Area', 'Block-2', '12346', '11-1-1', 'Karachi', 'Pakistan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `CID` (`CID`);

--
-- Indexes for table `dealer_register`
--
ALTER TABLE `dealer_register`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `salesman_register`
--
ALTER TABLE `salesman_register`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `Dealer_ID` (`Dealer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `CID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dealer_register`
--
ALTER TABLE `dealer_register`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salesman_register`
--
ALTER TABLE `salesman_register`
  MODIFY `S_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salesman_register`
--
ALTER TABLE `salesman_register`
  ADD CONSTRAINT `salesman_register_ibfk_1` FOREIGN KEY (`Dealer_ID`) REFERENCES `dealer_register` (`D_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
