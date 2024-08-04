-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2024 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'job1122', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `administrative_popjob`
--

CREATE TABLE `administrative_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrative_popjob`
--

INSERT INTO `administrative_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `cv` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `a_date` datetime NOT NULL,
  `approve_status` tinyint(1) NOT NULL DEFAULT 0,
  `approve_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `company_name`, `user_id`, `name`, `gender`, `phone`, `email`, `dob`, `cv`, `category`, `job`, `a_date`, `approve_status`, `approve_date`) VALUES
(8, 'JT Aviation', 'A2Z8215247', 'raja ram', 0, '9876543210', 'agentcryash006@gmail.com', '1999-07-13', 'Internship certificate.pdf', 'healthcare', 'Junior Graphic Designer', '2024-07-13 11:28:22', 1, '2024-07-13 11:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `company_contact`
--

CREATE TABLE `company_contact` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_contact`
--

INSERT INTO `company_contact` (`id`, `address`, `phone`, `email`) VALUES
(1, 'Cromwell Road New Town London SW7 2RL', ' +44 (0)20 7942 2000', 'hello@username.ac.uk');

-- --------------------------------------------------------

--
-- Table structure for table `construction_popjob`
--

CREATE TABLE `construction_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `construction_popjob`
--

INSERT INTO `construction_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `send_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_service_popjob`
--

CREATE TABLE `customer_service_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_service_popjob`
--

INSERT INTO `customer_service_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `education_popjob`
--

CREATE TABLE `education_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_popjob`
--

INSERT INTO `education_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `finance_popjob`
--

CREATE TABLE `finance_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance_popjob`
--

INSERT INTO `finance_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare_popjob`
--

CREATE TABLE `healthcare_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthcare_popjob`
--

INSERT INTO `healthcare_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `hospitality_popjob`
--

CREATE TABLE `hospitality_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitality_popjob`
--

INSERT INTO `hospitality_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `hr_popjob`
--

CREATE TABLE `hr_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr_popjob`
--

INSERT INTO `hr_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `index_company`
--

CREATE TABLE `index_company` (
  `id` int(11) NOT NULL,
  `comp` varchar(30) NOT NULL,
  `company` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_company`
--

INSERT INTO `index_company` (`id`, `comp`, `company`) VALUES
(1, 'company_one', 'com-logo01.png'),
(2, 'company_two', 'com-logo02.png'),
(3, 'company_three', 'com-logo03.png'),
(4, 'company_four', 'com-logo04.png'),
(5, 'company_five', 'com-logo05.png');

-- --------------------------------------------------------

--
-- Table structure for table `index_pop`
--

CREATE TABLE `index_pop` (
  `id` int(11) NOT NULL,
  `pop_one` varchar(30) NOT NULL,
  `pop_two` varchar(30) NOT NULL,
  `pop_three` varchar(30) NOT NULL,
  `pop_four` varchar(30) NOT NULL,
  `pop_five` varchar(30) NOT NULL,
  `pop_six` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_pop`
--

INSERT INTO `index_pop` (`id`, `pop_one`, `pop_two`, `pop_three`, `pop_four`, `pop_five`, `pop_six`) VALUES
(1, 'Healthcare', 'Marketing ', 'Finance', 'Administrative', 'education', 'Human Resource');

-- --------------------------------------------------------

--
-- Table structure for table `index_popjob`
--

CREATE TABLE `index_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_popjob`
--

INSERT INTO `index_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Image Description Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo04.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `index_review`
--

CREATE TABLE `index_review` (
  `id` int(11) NOT NULL,
  `customer_img` varchar(200) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_review`
--

INSERT INTO `index_review` (`id`, `customer_img`, `customer_name`, `review`) VALUES
(1, 'img-client01.jpg', 'Linda Romania', 'Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.'),
(2, 'img-client03.jpg', 'Romi Roki', 'Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.'),
(3, 'img-client02.jpg', 'Janson Ilmoni', 'Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.'),
(4, 'img-client03.jpg', 'Linda Romania one', 'Vestibulum orci felis, ullamc lie orper non conum non, ultrices a ac nunc. Mauris non ligscipit, uie vulputate mi accumsan, dapi olv bus fe lam sed sapien dc nuncm uiem non porta.');

-- --------------------------------------------------------

--
-- Table structure for table `index_trend`
--

CREATE TABLE `index_trend` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_link` varchar(200) NOT NULL,
  `job_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_trend`
--

INSERT INTO `index_trend` (`id`, `job_icon`, `job_link`, `job_name`) VALUES
(1, 'line-icon01.png', 'administrative', 'Administrative'),
(2, 'line-icon02.png', 'marketing', 'Marketing'),
(3, 'line-icon03.png', 'finance', 'Finance'),
(4, 'line-icon04.png', 'heathcare', 'Health and Care'),
(5, 'line-icon05.png', 'construction', 'Construction'),
(6, 'line-icon03.png', 'retail', 'Retail');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_popjob`
--

CREATE TABLE `marketing_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marketing_popjob`
--

INSERT INTO `marketing_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `payid` varchar(50) NOT NULL,
  `shot` varchar(200) NOT NULL,
  `check_status` tinyint(1) NOT NULL DEFAULT 0,
  `pay_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `name`, `phone`, `email`, `category`, `job`, `payid`, `shot`, `check_status`, `pay_date`) VALUES
(4, 'A2Z8215247', 'raja ram', '9876543210', 'agentcryash006@gmail.com', 'healthcare', 'Junior Graphic Designer', '8753234567890', '20240227_113856.jpg', 1, '2024-07-13 11:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `retail_popjob`
--

CREATE TABLE `retail_popjob` (
  `id` int(11) NOT NULL,
  `job_icon` varchar(200) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_by` varchar(100) NOT NULL,
  `job_loc` varchar(200) NOT NULL,
  `job_tag_one` varchar(50) NOT NULL,
  `job_tag_two` varchar(50) NOT NULL,
  `job_tag_three` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `retail_popjob`
--

INSERT INTO `retail_popjob` (`id`, `job_icon`, `job_name`, `job_by`, `job_loc`, `job_tag_one`, `job_tag_two`, `job_tag_three`, `salary`) VALUES
(1, 'company-logo01.jpg', 'Product Marketing Manager', 'WebTechnology', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(2, 'company-logo02.jpg', 'Junior Graphic Designer', 'Websikon', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(3, 'company-logo03.jpg', 'Marketing Manager', 'Muxcorp', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(4, 'company-logo04.jpg', 'Finance Manager', 'Rokwebs', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(5, 'company-logo05.jpg', 'Restaurant Team', 'Develpersoft', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000'),
(6, 'company-logo06.jpg', 'Software Engineer', 'Geniouslab', 'Ranchi,Jharkhand', 'Remote', 'Full Time', 'Part Time', '₹10000 - ₹12000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `father` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL,
  `block_status` tinyint(1) NOT NULL DEFAULT 0,
  `job_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `gender`, `email`, `phone`, `dob`, `father`, `address`, `photo`, `cv`, `pass`, `reg_date`, `block_status`, `job_status`) VALUES
(7, 'A2Z8215247', 'raja ram', 0, 'agentcryash006@gmail.com', '9876543210', '1999-07-13', 'dashrath', 'ranchi , jharkhand', '20240227_113856.jpg', 'Internship certificate.pdf', '1234', '2024-07-12 17:48:32', 0, 0),
(10, 'A2Z6330338', 'Adarsh Singh', 0, 'adasrh@gmail.com', '9876543210', '2024-07-22', 'kekewfkfvb', 'rjn3rkgtnv3tnv3t', 'img.jpg', 'Internship certificate.pdf', '1234', '2024-07-13 13:15:54', 0, 0),
(11, 'A2Z5950236', 'lefvbk3r', 0, 'gamail@gmail.com', '8765432190', '2024-07-19', 'hshdkflgl', '3rlbn3l;rbn', '20823568_flappy1280.jpg', 'Internship certificate.pdf', '1234', '2024-07-13 13:18:15', 0, 0),
(12, 'A2Z5521595', 'kfjvejkn', 0, 'erbgrb@gmail.com', '9876543210', '2024-07-18', 'k3rtjg3ktn', 'tgkjt3gnk3jtgn', 'bg2.1.jpg', 'EAadhaar_0012145094090320230804143607_0908202391754.pdf', '1234', '2024-07-13 13:22:15', 0, 0),
(13, 'A2Z9938649', 'wkdwjfvbklf', 0, 'egknlrn@gmail.com', '9876543208', '2024-07-24', 'hr3tjgnjn', 'gt5kjgnkjgk4jg', '20240227_113856.jpg', 'Internship certificate.pdf', '1234', '2024-07-13 13:27:20', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrative_popjob`
--
ALTER TABLE `administrative_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_contact`
--
ALTER TABLE `company_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `construction_popjob`
--
ALTER TABLE `construction_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service_popjob`
--
ALTER TABLE `customer_service_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_popjob`
--
ALTER TABLE `education_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_popjob`
--
ALTER TABLE `finance_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthcare_popjob`
--
ALTER TABLE `healthcare_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitality_popjob`
--
ALTER TABLE `hospitality_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_popjob`
--
ALTER TABLE `hr_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_company`
--
ALTER TABLE `index_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_pop`
--
ALTER TABLE `index_pop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_popjob`
--
ALTER TABLE `index_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_review`
--
ALTER TABLE `index_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_trend`
--
ALTER TABLE `index_trend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_popjob`
--
ALTER TABLE `marketing_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_popjob`
--
ALTER TABLE `retail_popjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrative_popjob`
--
ALTER TABLE `administrative_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_contact`
--
ALTER TABLE `company_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `construction_popjob`
--
ALTER TABLE `construction_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_service_popjob`
--
ALTER TABLE `customer_service_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `education_popjob`
--
ALTER TABLE `education_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `finance_popjob`
--
ALTER TABLE `finance_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `healthcare_popjob`
--
ALTER TABLE `healthcare_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospitality_popjob`
--
ALTER TABLE `hospitality_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hr_popjob`
--
ALTER TABLE `hr_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `index_company`
--
ALTER TABLE `index_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `index_pop`
--
ALTER TABLE `index_pop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_popjob`
--
ALTER TABLE `index_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `index_review`
--
ALTER TABLE `index_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_trend`
--
ALTER TABLE `index_trend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marketing_popjob`
--
ALTER TABLE `marketing_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `retail_popjob`
--
ALTER TABLE `retail_popjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
