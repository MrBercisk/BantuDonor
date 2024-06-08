-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 08:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donordarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `goldar_id` int(11) NOT NULL,
  `tgl_donor` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goldar`
--

CREATE TABLE `goldar` (
  `id` int(11) NOT NULL,
  `nama_goldar` varchar(5) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goldar`
--

INSERT INTO `goldar` (`id`, `nama_goldar`, `deskripsi`) VALUES
(1, 'A', 'Golongan Darah A'),
(2, 'B', 'Golongan Darah B'),
(3, 'AB', 'Golongan Darah AB'),
(4, 'O', 'Golongan Darah O');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `goldar_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_id` int(16) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `goldar_id` int(11) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rs_id` (`rs_id`),
  ADD KEY `goldar_id` (`goldar_id`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_pendonor`),
  ADD KEY `pendonor_ibfk_1` (`goldar_id`),
  ADD KEY `rs_id` (`rs_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goldar_id` (`goldar_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donor_ibfk_2` FOREIGN KEY (`rs_id`) REFERENCES `rumahsakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donor_ibfk_3` FOREIGN KEY (`goldar_id`) REFERENCES `goldar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD CONSTRAINT `pendonor_ibfk_1` FOREIGN KEY (`goldar_id`) REFERENCES `goldar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendonor_ibfk_2` FOREIGN KEY (`rs_id`) REFERENCES `rumahsakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD CONSTRAINT `rumahsakit_ibfk_1` FOREIGN KEY (`goldar_id`) REFERENCES `goldar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
