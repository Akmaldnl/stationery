-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 04:51 AM
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
-- Database: `stationery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_update`
--

CREATE TABLE `admin_update` (
  `full_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `date_value` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'Mechanical section'),
(2, 'Engineering section'),
(3, 'Postgraduate section'),
(4, 'Workshop section'),
(5, 'Mesra section'),
(6, 'Campus lifestyle section'),
(7, 'Student development section'),
(8, 'Technoputra section'),
(9, 'Industrial linkages section'),
(10, 'International partnership section'),
(11, 'Electrical section'),
(12, 'Electronics section'),
(13, 'Automation section'),
(14, 'Manufacturing section'),
(15, 'Finance unit'),
(16, 'PMTC unit'),
(17, 'Procurement unit'),
(18, 'Administration & Facilities Management unit'),
(19, 'Information Technology unit'),
(20, 'HSE & Security unit'),
(21, 'Research & Innovation section'),
(22, 'Quality Assurance section'),
(23, 'Academic Services section'),
(24, 'Library section'),
(25, 'ACE section'),
(26, 'Deputy Dean (Academic & Technology)'),
(27, 'Deputy Dean (Student Development & Campus Style)'),
(28, 'Deputy Dean (International, Industrial & Institutional Partnership)'),
(29, 'Head of Management & Finance');

-- --------------------------------------------------------

--
-- Table structure for table `full_name`
--

CREATE TABLE `full_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `full_name`
--

INSERT INTO `full_name` (`id`, `name`) VALUES
(1, 'IR. DR MOHD NIZAM BIN AHMAD'),
(2, 'MOHD SHAFIE BIN MOHD ARIF'),
(3, 'NORLIZA BINTI AMRAN'),
(4, 'NORASHIDAH BINTO MD KHALID'),
(5, 'NAZIRAH BINTI AHAMAD'),
(6, 'SITI NUR SYAZWANI BINTI JAAFAR'),
(7, 'SYAZRAH ILYANA BINTI ABDULLAH'),
(8, 'TS. DR. MOHD NORZAIMI BIN CHE ANI'),
(9, 'MOHD NIZAM BIN MD ROZI'),
(10, 'MOHAMAD SHAKIR BIN YAHYA'),
(11, 'MOHD AZLAN BIN ISMAIL'),
(12, 'MOHAMAD NOOR FIRDAUS BIN MOHAMAD ANUAR'),
(13, 'NORAZUANI BINTI CHU TAN'),
(14, 'NOR LIYANA BINTI OZELAN'),
(15, 'NOORA\'IN BINTI ABD WAHAB'),
(16, 'JULAIDA BINTI ABDUL JALIL'),
(17, 'MOHD FAUZI BIN ABU HASSAN'),
(18, 'NORHALIMATUL SADIAH BINTI KAMRUDDIN'),
(19, 'TS. NORZALINA BINTO OTHMAN'),
(20, 'FATHUL HAZRIMY BINTI AHMAD'),
(21, 'TS.DR. NURAZLIN BINTI MOHD.YAAKOP'),
(22, 'SHAHRUL BIN AROF'),
(23, 'TS. MOHD.IZWAN BIN MAMAT'),
(24, 'TS.DR. HARIS FAZILAH BIN HASSAN');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`) VALUES
(1, 'Pen Merah'),
(2, 'Pen Hitam'),
(3, 'Pen Biru'),
(4, 'Marker Merah'),
(5, 'Marker Biru'),
(6, 'Marker Hitam'),
(7, 'Refill Marker Hitam'),
(8, 'Refill Marker Merah'),
(9, 'Refill Marker Biru'),
(10, 'Stamp Pad'),
(11, 'Stamp Pad Refill Hitam'),
(12, 'Stamp Pad Refill Biru'),
(13, 'Duster'),
(14, 'Clip Small'),
(15, 'Clip Large'),
(16, 'Binder Clip Small'),
(17, 'Binder Clip Large'),
(18, 'Calculator'),
(19, 'Fastener'),
(20, 'Stapler & Bullet'),
(21, 'Punch'),
(22, 'Binding Tape'),
(23, 'Masking Tape'),
(24, 'Double Tape'),
(25, 'CD'),
(26, 'Stick Note'),
(27, 'A4 Colour'),
(28, 'Letter Head'),
(29, 'Sijil Attendance'),
(30, 'Sijil Penghargaan'),
(31, 'Kertas Graf'),
(32, 'L Shape Folder'),
(33, 'Index Divider'),
(34, 'A4 Clear Case'),
(35, 'Laminating Film'),
(36, 'Plastic Binding'),
(37, 'Management File'),
(38, 'Clear Holder File'),
(39, 'Business Card Holder'),
(40, 'Manila File'),
(41, 'Book Stand'),
(42, 'Punch Card'),
(43, 'Sampul Surat Kecik Window'),
(44, 'Sampul Surat Kecik W/O'),
(45, 'Sampul Surat Besar Window'),
(46, 'Sampul Surat Besar W/O'),
(47, 'INK/TONER PRINTER');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `quantity_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `quantity_value` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stationery_request`
--

CREATE TABLE `stationery_request` (
  `id` int(11) NOT NULL,
  `full_name` varchar(110) NOT NULL,
  `department` varchar(110) NOT NULL,
  `item` varchar(110) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stationery_request`
--

INSERT INTO `stationery_request` (`id`, `full_name`, `department`, `item`, `date`, `quantity`) VALUES
(2, '5', '1', '1', '2024-01-16', 10),
(3, 'IR. DR MOHD NIZAM BIN AHMAD', '1', '1', '2024-01-16', 12),
(4, 'IR. DR MOHD NIZAM BIN AHMAD', 'Mechanical section', 'Pen Hitam', '2024-01-16', 11),
(5, 'NAZIRAH BINTI AHAMAD', 'Mesra section', 'Stamp Pad', '2024-01-16', 5),
(6, 'IR. DR MOHD NIZAM BIN AHMAD', 'Mechanical section', 'Pen Merah', '2024-01-16', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_update`
--
ALTER TABLE `admin_update`
  ADD PRIMARY KEY (`full_name`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_name`
--
ALTER TABLE `full_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`quantity_id`);

--
-- Indexes for table `stationery_request`
--
ALTER TABLE `stationery_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `full_name` (`full_name`),
  ADD KEY `department` (`department`),
  ADD KEY `item` (`item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `full_name`
--
ALTER TABLE `full_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `quantity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stationery_request`
--
ALTER TABLE `stationery_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
