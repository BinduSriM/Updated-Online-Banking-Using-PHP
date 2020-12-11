-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `createacc`
--

CREATE TABLE `createacc` (
  `aadhar` int(20) DEFAULT NULL,
  `accountnum` int(20) DEFAULT NULL,
  `accounttype` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `balance` int(20) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `confirm` varchar(30) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mobile` int(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `pin` int(10) DEFAULT NULL,
  `pincode` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createacc`
--

INSERT INTO `createacc` (`aadhar`, `accountnum`, `accounttype`, `address`, `age`, `balance`, `blood`, `confirm`, `fullname`, `gender`, `mail`, `mobile`, `nationality`, `pass`, `pin`, `pincode`, `username`) VALUES
(5647, 3421, 'Savings', 'Delhi', 18, 62000, 'opos', '@Virat18', 'Virat Kohli', 'male', 'kohli@mail.com', 5421490, 'Indian', '@Virat18', 9532, 2345, 'Virat'),
(543210, 1234321, 'Savings', 'H.No: 4-14, Karlapudi(PO), Amaravathi(M)', 21, 9000, 'opos', '@Bindusri1234', 'M. Bindu Sri', 'Female', 'bindusrimanchikalapudi@gmail.com', 2147483647, 'Indian', '@Bindusri1234', 5489, 522016, 'BinduSri');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `accountnum` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`username`, `pass`, `fullname`, `accountnum`, `amount`, `date`) VALUES
('BinduSri', '@Bindusri1234', 'M. Bindu Sri', 1234321, 3000, '2020-11-22 07:55:59'),
('Virat', '@Virat18', 'Virat Kohli', 3421, 100, '2020-11-22 12:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `role`, `address`, `salary`) VALUES
('obsemp12', 'Bindu', 'Cashier', 'H.No: 4-14, Karlapudi(PO), Amaravathi(M)', 30000),
('obsemp24', 'Sri', 'Clerk', 'Guntur', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `loanapplication`
--

CREATE TABLE `loanapplication` (
  `loanid` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `aadhar` int(20) NOT NULL,
  `accountnum` int(20) NOT NULL,
  `present` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `years` int(20) NOT NULL,
  `income` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loanapplication`
--

INSERT INTO `loanapplication` (`loanid`, `fullname`, `aadhar`, `accountnum`, `present`, `occupation`, `years`, `income`) VALUES
('loan2342', 'M. Bindu Sri', 543210, 1234321, 'Infosys', 'Software Engineer', 1, 30000),
('loangold24', 'Virat Kohli', 5647, 3421, 'TCS', 'QA Analyst', 2, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loanid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`loanid`, `name`, `purpose`, `eligibility`, `details`) VALUES
('loan2342', 'Home loan', 'Home loans are investments that earn money based o', 'Nationality: Indian Residents\r\nAge limit: Minimum – 18 years Maximum – 70 years\r\nWork experience: At least 2 years  ', 'Home loans have an important purpose in the global economy. Besides helping to pay for the employment of bank staff, home builders and real estate agents, home loans also fuel mortgage-backed securities.'),
('loanedu98', 'Education loan', 'For students', 'Age limit: 18-25', 'Taking an education loan helps you in building a good credit score as this is the first loan in a persons life.'),
('loangold24', 'Gold Loan', 'Gold Loan can be availed by pledge of gold ornamen', 'Age : 18 years and above\r\nProfession : Any individual (singly or jointly) with Steady source of income including: Bank’s Employees, Pensioners. (No Proof of income required)', 'Maximum Loan Amount : Rs 50.00 lacs\r\nMinimum Loan Amount : Rs 20,000 /-\r\nMargin\r\nGold Loan: 25%\r\nLiquid Gold Loan: 25%\r\nBullet Repayment Gold Loan: 35%\r\nSecurity : Pledge of gold ornaments duly verified for quality & quantity.\r\nProcessing Fees : 0.25% of '),
('loanstu41', 'Student Loan', 'A term loan granted to Indian Nationals for pursui', 'Graduation, Post-graduation including regular technical and professional Degree/Diploma courses conducted by colleges/universities approved by UGC/ AICTE/IMC/Govt. etc Regular Degree/ Diploma Courses conducted by autonomous institutions like IIT, IIM etc', 'Studies in India\r\nMedical Courses: Upto Rs 30 lacs\r\nOther Courses: Upto Rs 10 lacs\r\n(Higher loan limit for studies in India may be considered on cases to case basis, maximum upto Rs 50 lacs\r\nStudies abroad\r\nUpto Rs 7.50 lacs\r\n(Higher loan limit for Studie');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `accountnum` int(20) NOT NULL,
  `transacc` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`username`, `pass`, `fullname`, `accountnum`, `transacc`, `amount`, `date`) VALUES
('BinduSri', '@Bindusri1234', 'M. Bindu Sri', 1234321, 3421, 800, '2020-11-22 07:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `accountnum` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`username`, `pass`, `fullname`, `accountnum`, `amount`, `date`) VALUES
('BinduSri', '@Bindusri1234', 'M. Bindu Sri', 1234321, 1000, '2020-11-22 08:06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loanid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
