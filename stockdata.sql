-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 06:50 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavachfashions`
--

-- --------------------------------------------------------

--
-- Table structure for table `stockdata`
--

CREATE TABLE `stockdata` (
  `id` int(11) NOT NULL,
  `StyleCode` varchar(100) NOT NULL,
  `Fabric` varchar(150) NOT NULL,
  `Mill` varchar(150) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `StoreInMeter` float NOT NULL,
  `StoreInPieces` int(11) NOT NULL,
  `StoreInDate` date NOT NULL,
  `StoreOutMeter` float NOT NULL,
  `StoreOutPieces` int(11) NOT NULL,
  `StoreOutDate` date NOT NULL,
  `CuttingOutMeters` float NOT NULL,
  `CuttingOutPieces` int(11) NOT NULL,
  `CuttingOutDate` date NOT NULL,
  `WasteMeter` float NOT NULL,
  `WastePieces` int(11) NOT NULL,
  `ProductionOutMeters` float NOT NULL,
  `ProductionOutPieces` int(11) NOT NULL,
  `ProductionOutDate` date NOT NULL,
  `QualityOutMeters` float NOT NULL,
  `QualityOutPieces` int(11) NOT NULL,
  `QualityOutDate` date NOT NULL,
  `ExcessPieces` int(11) NOT NULL,
  `ClientDeliveredMeters` float NOT NULL,
  `ClientDeliveredPieces` int(11) NOT NULL,
  `ClientDeliveredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockdata`
--

INSERT INTO `stockdata` (`id`, `StyleCode`, `Fabric`, `Mill`, `Brand`, `StoreInMeter`, `StoreInPieces`, `StoreInDate`, `StoreOutMeter`, `StoreOutPieces`, `StoreOutDate`, `CuttingOutMeters`, `CuttingOutPieces`, `CuttingOutDate`, `WasteMeter`, `WastePieces`, `ProductionOutMeters`, `ProductionOutPieces`, `ProductionOutDate`, `QualityOutMeters`, `QualityOutPieces`, `QualityOutDate`, `ExcessPieces`, `ClientDeliveredMeters`, `ClientDeliveredPieces`, `ClientDeliveredDate`) VALUES
(517, 'ABC111', 'Denim', 'Raymond', 'XYZ111', 1000, 0, '2017-06-22', 800, 0, '2017-06-23', 500, 0, '2017-06-23', 300, 0, 0, 0, '0000-00-00', 0, 0, '0000-00-00', 10, 0, 0, '0000-00-00'),
(518, 'ABC222', 'Denim2', 'Raymond', 'XYZ222', 5000, 0, '2017-06-22', 4000, 0, '2017-06-23', 3000, 0, '2017-06-24', 1000, 0, 2000, 200, '2017-06-24', 0, 0, '0000-00-00', 20, 0, 0, '0000-00-00'),
(519, 'ABC333', 'Denim', 'Arvind', 'XYZ111', 6000, 60, '2017-06-13', 3000, 30, '2017-06-22', 1500, 15, '2017-06-23', 0, 0, 0, 0, '0000-00-00', 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00'),
(520, 'DHA111', 'Denim', 'Arvind', 'XYZ111', 500, 0, '2017-06-22', 400, 0, '2017-06-23', 300, 0, '2017-06-24', 100, 0, 300, 200, '2017-06-02', 0, 0, '0000-00-00', 20, 0, 0, '0000-00-00'),
(521, 'DHA111', 'Denim', 'Raymond', 'XYZ111', 10000, 100, '2017-06-22', 8000, 80, '2017-06-29', 7000, 70, '2017-06-30', 0, 0, 0, 0, '0000-00-00', 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00'),
(522, 'ABC444', 'Denim', 'Arvind2', 'Raymond', 1000, 1000, '2017-06-05', 0, 0, '2017-06-05', 0, 0, '0000-00-00', 0, 0, 0, 0, '0000-00-00', 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00'),
(523, 'ABC666', 'Linen', 'Dave Mills', 'Raymond', 1000, 0, '2017-06-12', 1000, 0, '2017-06-12', 900, 0, '2017-06-10', 100, 0, 900, 90, '2017-06-12', 0, 0, '0000-00-00', 10, 0, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stockdata`
--
ALTER TABLE `stockdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockdata`
--
ALTER TABLE `stockdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
