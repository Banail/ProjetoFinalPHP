-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2016 às 16:12
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutricao4`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `anoNasc` year(4) NOT NULL,
  `telefone1` varchar(15) NOT NULL,
  `telefone2` varchar(15) NOT NULL,
  `email` varchar(120) NOT NULL,
  `altura` varchar(4) NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `meta` varchar(30) NOT NULL,
  `obs` text NOT NULL,
  `idade` varchar(3) NOT NULL,
  `imc` decimal(10,0) NOT NULL,
  `vImc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nome`, `anoNasc`, `telefone1`, `telefone2`, `email`, `altura`, `peso`, `meta`, `obs`, `idade`, `imc`, `vImc`) VALUES
(14, 'Luan Luan', 1997, '29929292929', '929292929229', 'luan@hotmail.com', '1.60', '50', 'perdaPeso', '', '19', '20', 'Peso Normal'),
(15, 'Lara Ludwig', 1999, '191919191919', '9191919191991', 'laraludwig@hotmail.com', '1.55', '55', 'perdaPeso', '', '17', '23', 'Peso Normal'),
(16, 'Fabio Fabio', 0000, '191919119191', '9191919191', 'laraludwig18@gmail.com', '1.90', '45', 'perdaPeso', '', '117', '12', 'Muito Abaixo do Peso'),
(17, 'Lara Ludwig', 1999, '92928382983', '928329398383', 'laraludwig@hotmail.com', '1.45', '34', 'perdaPeso', '', '17', '16', 'Muito Abaixo do Peso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
