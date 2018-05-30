-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 16:30
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estrutura_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `titulo`) VALUES
(1, 'Titulo 1 - teste BD àãê'),
(2, 'Titulo 2 - Tétstê BD {uuhhu}'),
(3, 'Tetse de mais um terceiro título');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelapaginacao`
--

CREATE TABLE `tabelapaginacao` (
  `id` int(11) NOT NULL,
  `texto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabelapaginacao`
--

INSERT INTO `tabelapaginacao` (`id`, `texto`) VALUES
(1, 'Lorem ipsum'),
(2, 'dolor sit amet'),
(3, 'consectetur adipiscing'),
(4, 'elit. Maecenas'),
(5, 'faucibus arcu sem'),
(6, 'eget efficitur dui'),
(7, 'cdapibus at. Vivamus'),
(8, 'quis arcu orci. '),
(9, 'Vestibulum ante'),
(10, 'ipsum primis in'),
(11, 'faucibus orci luctus'),
(12, 'et ultrices posuere'),
(13, 'cubilia Curae; Sed'),
(14, 'in enim ac mauris'),
(15, 'maximus dictum id'),
(16, 'eget quam'),
(17, 'Morbi fermentum purus'),
(18, 'nec ante tempor, id'),
(19, 'ultricies magna facilisis'),
(20, 'Fusce a maximus enim'),
(21, 'eget tempor elit'),
(22, 'In porttitor dignissim'),
(23, 'purus condimentum'),
(24, 'elementum. Suspendisse'),
(25, 'potenti. Donec'),
(26, 'et tortor a leo'),
(27, 'porta dignissim eget'),
(28, 'sit amet diam'),
(29, 'Suspendisse dictum fermentum'),
(30, 'pulvinar. Mauris quis'),
(31, 'libero pellentesque justo'),
(32, 'aliquet bibendum. Mauris'),
(33, 'porta pharetra nibh ac tempus.'),
(34, 'Donec nec placerat'),
(35, 'turpis. Curabitur'),
(36, 'et leo lectus'),
(37, 'Aliquam congue erat'),
(38, 'ante, eget interdum'),
(39, 'justo viverra et.'),
(40, 'Quisque vulputate gravida '),
(41, 'semper'),
(42, 'Maecenas euismod nunc '),
(43, ' ut dolor tempus'),
(44, 'id varius dui rutrum'),
(45, 'Nam eget orci in'),
(46, 'orci molestie tempor'),
(47, 'et et ligula'),
(48, 'Donec nec placerat'),
(49, 'Nam mi eros'),
(50, 'interdum vitae erat'),
(51, 'dictum commodo elit'),
(52, 'Duis id pulvinar sem'),
(53, 'Proin erat eros'),
(54, 'laoreet vitae ante ut'),
(55, 'fringilla blandit dui'),
(56, 'Sed non finibus urna'),
(57, 'ac egestas mauris'),
(58, 'Phasellus vel nunc'),
(59, ' iaculis faucibus dui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelapaginacao`
--
ALTER TABLE `tabelapaginacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabelapaginacao`
--
ALTER TABLE `tabelapaginacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
