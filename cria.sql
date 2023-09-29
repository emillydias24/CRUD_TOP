-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2023 às 11:28
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brinks`
--

DROP TABLE IF EXISTS `brinks`;
CREATE TABLE IF NOT EXISTS `brinks` (
  `ID_brinks` int NOT NULL AUTO_INCREMENT,
  `nome_brinks` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `regras` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `faixa_etaria` int NOT NULL,
  `participantes` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_brinks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idade` int NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contado_responsa` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `children`
--

INSERT INTO `children` (`ID`, `nome`, `idade`, `sexo`, `responsavel`, `contado_responsa`) VALUES
(3, 'Bianca', 6, 'Fem', 'Emilly', 66586786);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
