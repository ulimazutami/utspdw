-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 06:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `confirm`) VALUES
(1, 'admin', '', 'admin123', ''),
(2, 'ulli', 'ulimazutami07@gmail.com', 'ulli123', 'ulli123'),
(3, 'della', 'della@gmail.com', 'della123', 'della123'),
(4, 'catharina', 'catharinafredella.2021@student.uny.ac.id', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `nama`, `email`, `pertanyaan`, `jawaban`) VALUES
(2, 'Ulimaz Budi Utami', 'ulimazutami07@gmail.com', 'cek 123 dicoba', 'oke, boleh'),
(3, 'uli', 'ulimazutami07@gmail.com', 'apa itu bilangan bulat?\r\n', 'bilangan yang ...'),
(4, 'della', 'della@gmail.com', 'apa itu bilangan rasional?', 'itu adalah sesuatu'),
(7, 'admin', 'math.ter@gmail.com', 'terima kasih telah mengunjungi website kami!', ''),
(8, 'jungkook', 'jungkook.ganteng@gmail.com', 'apa itu rasio?', ''),
(9, 'jungkook', 'jungkook.ganteng@gmail.com', 'apa itu kesebangunan?', ''),
(10, 'jungkook', 'jungkook.ganteng@gmail.com', 'kenapa harus menggunakan rasio?', ''),
(11, '', '', '', ''),
(12, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
