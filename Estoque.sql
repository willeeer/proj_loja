-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2015 at 09:14 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'Estoque'
--

-- --------------------------------------------------------

--
-- Table structure for table 'Clientes'
--

CREATE TABLE IF NOT EXISTS 'Clientes' (
  'ID' int(10) NOT NULL DEFAULT '0',
  'Nome' varchar(15) DEFAULT NULL,
  'Matricula' int(10) DEFAULT NULL,
  'Departamento' varchar(15) DEFAULT NULL,
  'Email' varchar(20) DEFAULT NULL,
  PRIMARY KEY ('ID')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table 'Fornecedores'
--

CREATE TABLE IF NOT EXISTS 'Fornecedores' (
  'ID' int(10) NOT NULL DEFAULT '0',
  'Nome' varchar(15) DEFAULT NULL,
  'CNPJ' int(15) DEFAULT NULL,
  'Telefone' int(15) DEFAULT NULL,
  'Email' varchar(20) DEFAULT NULL,
  'Endereço' varchar(40) DEFAULT NULL,
  PRIMARY KEY ('ID')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table 'Perfis'
--

CREATE TABLE IF NOT EXISTS 'Perfis' (
  'ID' int(10) NOT NULL DEFAULT '0',
  'Nome_Perfil' varchar(15) DEFAULT NULL,
  'Funções' varchar(15) DEFAULT NULL,
  PRIMARY KEY ('ID')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table 'Produtos'
--

CREATE TABLE IF NOT EXISTS 'Produtos' (
  'ID' int(10) NOT NULL DEFAULT '0',
  'Descrição' varchar(15) DEFAULT NULL,
  'Código' int(10) DEFAULT NULL,
  'Preço' float DEFAULT NULL,
  'ID_Fornecedor' int(10) DEFAULT NULL,
  'Observação' varchar(20) DEFAULT NULL,
  PRIMARY KEY ('ID'),
  KEY 'ID_Fornecedor' ('ID_Fornecedor')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table 'Usuarios'
--

CREATE TABLE IF NOT EXISTS 'Usuarios' (
  'ID' int(10) NOT NULL DEFAULT '0',
  'Nome' varchar(15) DEFAULT NULL,
  'Matricula' int(10) DEFAULT NULL,
  'Departamento' varchar(15) DEFAULT NULL,
  'Email' varchar(20) DEFAULT NULL,
  'Perfil' varchar(10) DEFAULT NULL,
  'Login' varchar(10) DEFAULT NULL,
  'Senha' varchar(10) DEFAULT NULL,
  PRIMARY KEY ('ID')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table 'Produtos'
--
ALTER TABLE 'Produtos'
  ADD CONSTRAINT 'Produtos_ibfk_1' FOREIGN KEY ('ID_Fornecedor') REFERENCES 'Fornecedores' ('ID');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
