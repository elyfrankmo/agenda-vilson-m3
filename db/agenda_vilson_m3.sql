-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Maio-2018 às 14:23
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_vilson_m3`
--
CREATE DATABASE agenda_vilson_m3
-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_vilson_m3.tb_evento`
--

CREATE TABLE `agenda_vilson_m3.tb_evento` (
  `id` int(11) NOT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda_vilson_m3.tb_evento`
--

INSERT INTO `agenda_vilson_m3.tb_evento` (`id`, `timestamp`, `title`) VALUES
(2, 1526191200, 'Dias das Mães');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_vilson_m3.tb_evento`
--
ALTER TABLE `agenda_vilson_m3.tb_evento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_vilson_m3.tb_evento`
--
ALTER TABLE `agenda_vilson_m3.tb_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
