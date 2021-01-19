-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 06:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status` enum('paid','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `id_user`, `id_lapangan`, `id_harga`, `nama_tim`, `tgl`, `jam_mulai`, `jam_selesai`, `status`) VALUES
(2, 1, 1, 1, 'Ndas Krewak', '2021-01-12', '22:00:00', '23:00:00', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` enum('siang','malam') NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `dp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `jumlah`, `jenis`, `id_lapangan`, `dp`) VALUES
(1, 70000, 'siang', 1, 20000),
(2, 120000, 'malam', 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapangan`
--

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `id_stadion` int(11) NOT NULL,
  `nama_lapangan` varchar(30) NOT NULL,
  `jenis` enum('floring','sintetis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lapangan`
--

INSERT INTO `tb_lapangan` (`id_lapangan`, `id_stadion`, `nama_lapangan`, `jenis`) VALUES
(1, 3, 'Champions Futsal A', 'sintetis'),
(2, 3, 'Champions Futsal B', 'sintetis'),
(3, 4, 'Angkasa Futsal Stadium Gotri A', 'sintetis'),
(4, 4, 'Angkasa Futsal Stadium Gotri B', 'sintetis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_notifikasi`
--

CREATE TABLE `tb_notifikasi` (
  `id_notif` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id_operator` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `akta_pendirian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `id_user`, `jk`, `alamat`, `ktp`, `akta_pendirian`) VALUES
(1, 1, 'L', 'Purwogondo', '3320130108990001', 'Kepo ya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stadion`
--

CREATE TABLE `tb_stadion` (
  `id_stadion` int(11) NOT NULL,
  `id_operator` int(11) NOT NULL,
  `nama_stadion` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stadion`
--

INSERT INTO `tb_stadion` (`id_stadion`, `id_operator`, `nama_stadion`, `alamat`, `kontak`) VALUES
(3, 1, 'Champion Futsal Stadium', 'Jl. Raya Jepara-Kudus, Desa Krasak Pecangaan Jepara', ''),
(4, 1, 'Angkasa Futsal Stadium Gotri', 'Jl. Raya Jepara-Kudus, Desa Margoyoso Kalinyamatan Jepara', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `role_id` int(11) NOT NULL,
  `profil` varchar(40) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `profil`, `is_active`, `date_created`) VALUES
(1, 'Nur Wakhid Bagus Riyanto', 'nurwakhidbagusriyanto@gmail.com', '$2y$10$gQqSWF5fDZJSH5pMa6JH6uEVuPioSjXhzvmXMazTnLOf9j/uowWTy', 1, 'avatar.png', 1, 1605538723),
(2, 'Faiz Hidayatullah', 'faishid@gmail.com', '$2y$10$qAB1KThdo.R2EMhoK7eM6.3BUa.be20MFCpPzlYHl/j8Kq/bkIs5C', 2, 'avatar.png', 1, 1606124311),
(4, 'Ngardi Sudadi', 'ngardisudadi@gmail.com', '$2y$10$rk.psLI6ysLuE5qUH2ZYIuMhm8R1Qwq.ot60sZZKG8N18xS9T9lKS', 3, 'avatar.png', 1, 1606146119),
(5, 'Ragil', 'ragil@gmail.com', '$2y$10$y0OrF8SmFwKzcx6sXEA4PuNfSIPohDkiYZL3FyP2IQd77vVHNtOna', 1, 'avatar.png', 0, 1606186108),
(6, 'Nur Wakhid B R', 'nwbr1899@gmail.com', '$2y$10$Aq/bf52If//S.7rT5C3yB.VB16datd49PZTNnfD49uyKCNKG6ecFq', 3, 'avatar.png', 1, 1606195049),
(7, 'Faiz Hid', 'faiz@smkw9jepara.sch.id', '$2y$10$ZwCMMBX8FxzsedMTbF7aBujwB/rRtimGvzI0ZN8GklFXdqEDHKNM2', 3, 'avatar.png', 1, 1606632436);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operator'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `tb_booking_ibfk_1` (`id_harga`),
  ADD KEY `id_lapangan` (`id_lapangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `id_lapangan` (`id_lapangan`);

--
-- Indexes for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  ADD PRIMARY KEY (`id_lapangan`),
  ADD KEY `id_stadion` (`id_stadion`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_stadion`
--
ALTER TABLE `tb_stadion`
  ADD PRIMARY KEY (`id_stadion`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_stadion`
--
ALTER TABLE `tb_stadion`
  MODIFY `id_stadion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `tb_harga` (`id_harga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `tb_lapangan` (`id_lapangan`),
  ADD CONSTRAINT `tb_booking_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD CONSTRAINT `tb_harga_ibfk_1` FOREIGN KEY (`id_lapangan`) REFERENCES `tb_lapangan` (`id_lapangan`);

--
-- Constraints for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  ADD CONSTRAINT `tb_lapangan_ibfk_1` FOREIGN KEY (`id_stadion`) REFERENCES `tb_stadion` (`id_stadion`);

--
-- Constraints for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD CONSTRAINT `tb_member_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD CONSTRAINT `tb_notifikasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD CONSTRAINT `tb_operator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_stadion`
--
ALTER TABLE `tb_stadion`
  ADD CONSTRAINT `tb_stadion_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
