-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2017 às 18:50
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gean_marketing`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adminstradores`
--

CREATE TABLE `adminstradores` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adminstradores`
--

INSERT INTO `adminstradores` (`login`, `senha`) VALUES
('Geaneletro', 'G32211817g'),
('willer', 'willer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `identidade` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `sexo`, `cpf`, `identidade`, `data_nasc`, `email`) VALUES
('Grazielly Vasconcelos', 'F', '01104299402', '6015729', '1983-08-04', 'kx2431@yahoo.com.br'),
('Willer Amorim', 'M', '09060296435', '7432584', '1990-10-23', 'willersabino@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_residencial`
--

CREATE TABLE `endereco_residencial` (
  `cep` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome_rua` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `uf_end` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_res` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_cel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf_cliente` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco_residencial`
--

INSERT INTO `endereco_residencial` (`cep`, `nome_rua`, `numero`, `uf_end`, `cidade`, `bairro`, `complemento`, `tel_res`, `tel_cel`, `cpf_cliente`) VALUES
('50710480', 'Rua 1', '1', 'PE', 'Recife', 'Madalena', 'Casa', '8132217923', '81996676768', '01104299402'),
('53409-110', 'Rua Padre Antônio de Pádua Belarmino de Sena', '126', 'PE', 'Paulista', 'Jardim Paulista Baixo', 'primeiro andar', '8130106063', '8130106063', '09060296435');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guardaid`
--

CREATE TABLE `guardaid` (
  `id_venda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `guardaid`
--

INSERT INTO `guardaid` (`id_venda`) VALUES
(4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `modelo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `preco` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`modelo`, `descricao`, `preco`) VALUES
('BA190AR', 'COIFA VIDRO PLANO PAREDE 90CM', 2478),
('BA390AR', 'COIFA VIDRO CURVO ILHA 100CM', 3570),
('BAA60EB', 'DEPURADOR AR BRANCO 60 CM', 630),
('BAA80EB', 'DEPURADOR AR BRANCO 80 CM', 854),
('BAI60BR', 'COIFA BRASTEMP PIRAMIDAL INOX 60 CM', 1246),
('BAI91BR', 'COIFA BRASTEMP PIRAMIDAL INOX 90 CM', 1540),
('BDD61AE', 'COOKTOP VIDRO BRASTEMP ATIVE 4B', 714),
('BDD62AE', 'COOKTOP BRASTEMP ATIVE MEGACHAMA 4B', 826),
('BDD75AE', 'COOKTOP VIDRO BRASTEMP ATIVE 5B', 875),
('BDD85AE', 'COOKTOP BRASTEMP QUADRICHAMA 5B', 980),
('BDT62AE', 'COOKTOP BRASTEMP TIMER TOUCH 4B', 924),
('BDT85AE', 'COOKTOP BRASTEMP TIMER TOUCH 5B', 1162),
('BFD4NAB', 'FOGÃO ATIVE - 4 BOCAS MAXI DUPLO FORNO BRANCO', 1918),
('BFD4TAB', 'FOGÃO ATIVE TIMER - 4 BOCAS MAXI DUPLO FORNO BRANCO', 2324),
('BFD4TAR', 'FOGÃO ATIVE TIMER - 4 BOCAS MAXI DUPLO FORNO INOX', 2548),
('BFD5NBB', 'FOGÃO BRASTEMP CLEAN DUPLO FORNO - 5 BOCAS PISO BRANCO', 2380),
('BFD5NBR', 'FOGÃO BRASTEMP CLEAN DUPLO FORNO - 5 BOCAS PISO INOX', 2520),
('BFO4NAB', 'FOGÃO CLEAN 4 BOCAS BRANCO PISO', 1050),
('BFO4NAR', 'FOGÃO CLEAN 4 BOCAS INOX PISO', 1232),
('BFO4TAB', 'FOGÃO CLEAN TIMER 4 BOCAS BRANCO PISO', 1190),
('BFO4TAR', 'FOGÃO CLEAN TIMER 4 BOCAS INOX PISO', 1330),
('BFS5NBB', 'FOGÃO CLEAN - 5 BOCAS PISO BRANCO', 1750),
('BFS5NBR', 'FOGÃO CLEAN - 5 BOCAS PISO INOX', 1890),
('BFS5QBB', 'FOGÃO ATIVE QUADRICHAMA - 5 BOCAS PISO BRANCO', 1890),
('BFS5QBR', 'FOGÃO ATIVE QUADRICHAMA - 5 BOCAS PISO INOX', 2156),
('BFS5TAB', 'FOGÃO CLEAN TIMER - 5 BOCAS PISO BRANCO', 1918),
('BFS5TAR', 'FOGÃO CLEAN TIMER - 5 BOCAS PISO INOX', 2254),
('BFS6NBB', 'FOGÃO CLEAN - 6 BOCAS PISO BRANCO', 1750),
('BFS6NBR', 'FOGÃO CLEAN INOX - 6 BOCAS PISO', 2072),
('BLB06AR', 'LAVALOUÇAS 6 SERVIÇOS BUILT INOX', 4326),
('BLF08AB', 'LAVALOUÇAS COMPACTA 8 SERVIÇOS BRANCA', 1820),
('BLF08AS', 'LAVALOUÇAS COMPACTA 8 SERVIÇOS PRATA', 2030),
('BLF10AB', 'LAVALOUÇAS 10 SERVIÇOS BRANCA', 3094),
('BLF10AS', 'LAVALOUÇAS 10 SERVIÇOS ESPELHADA', 3640),
('BLF12AB', 'LAVA LOUÇAS BRASTEMP ATIVE! 12 SERVIÇOS - BRANCA', 3220),
('BLF12AE', 'LAVA LOUÇAS BRASTEMP ATIVE! 12 SERVIÇOS - PRETA', 3318),
('BLF12AR', 'LAVA LOUÇAS BRASTEMP ATIVE! 12 SERVIÇOS - INOX', 3360),
('BMA30AF', 'MICROONDAS BRASTEMP FUNÇÃO ADIAR PREPARO E VAPOREIRA CINZA', 868),
('BMJ38AR', 'MICRO-ONDAS BRASTEMP ATIVE! 38L INOX', 1064),
('BMS45BB', 'MICRO-ONDAS BRASTEMP ATIVE! 30 L FUNÇÃO ADIAR PREPARO BRANCO', 770),
('BMY45AR', 'MICROONDAS 30L INOX C/ GRILL', 980),
('BO360AR', 'FORNO ELÉTRICO EMBUTIR ATIVE INOX', 2870),
('BOA84AE', 'FORNO A GÁS EMBUTIR BRASTEMP PRETO', 2100),
('BOC84AE', 'FORNO ELÉTRICO EMBUTIR BRASTEMP PRETO', 2128),
('BRA08AE', 'FRIGOBAR RETRO 76L PRETO', 1428),
('BRA08AV', 'FRIGOBAR RETRO 76L VERMELHO', 1358),
('BRE50NB', 'REFRIGERADOR ATIVEINVERSE FROST FREE 422L BRANCA', 3710),
('BRE50NE', 'REFRIGERADOR BRASTEMP INVERSE ALL BLACK - PRETO 422L', 4340),
('BRE50NK', 'REFRIGERADOR ATIVEINVERSE FROST FREE 422L EVOX', 4060),
('BRE51NB', 'REFRIGERADOR BRASTEMP INVERSE VIVA! 422L BRANCA', 4130),
('BRE51NK', 'REFRIGERADOR BRASTEMP INVERSE VIVA! - EVOX 422L', 4340),
('BRM39EB', 'REFRIGERADOR CLEAN - FROST FREE 352 L BRANCA', 2310),
('BRM39EK', 'REFRIGERADOR CLEAN - FROST FREE 352L EVOX', 2520),
('BRM42EB', 'REFRIGERADOR CLEAN - FROST FREE 378L BRANCA', 2590),
('BRM42EK', 'REFRIGERADOR CLEAN - FROST FREE 378L EVOX', 2940),
('BRM48NB', 'REFRIGERADOR ATIVE - FROST FREE 403L BRANCO', 3080),
('BRM48NK', 'REFRIGERADOR ATIVE - FROST FREE 403L EVOX', 3430),
('BRM50NB', 'REFRIGERADOR ATIVE - FROST FREE 429L BRANCO', 3500),
('BRM50NK', 'REFRIGERADOR ATIVE - FROST FREE 429L EVOX', 4060),
('BVG24HB', 'FREEZER VERTICAL FROST FREE 197L BRANCA', 2520),
('BVR28HB', 'FREEZER VERTICAL FROST FREE ELETRONICO 228 - FLEX BRANCA', 2814),
('BVR28HR', 'FREEZER VERTICAL FROST FREE ELETRONICO 228 INOX - FLEX', 3108),
('BWC10BB', 'LAVADORA CLEAN 10KG BRANCA', 1708),
('BWG11AR', 'LAVADORA ATIVE INOX 11 KG', 2394),
('BWH15AB', 'LAVADORA BRASTEMP TOP LOAD 15KG BRANCA', 2506),
('BWJ09AB', 'LAVADORA BRASTEMP 09KG BRANCA', 1610),
('BWK11AB', 'LAVADORA ATIVE 11 KG BRANCA', 1778),
('BWK15AB', 'LAVADORA BRASTEMP TOP LOAD 15KG BRANCA', 2506),
('BWN15AK', 'LAVADORA BRASTEMP TOP LOAD 15KG EVOX', 2870),
('BWT12AB', 'LAVADORA BRASTEMP 12KG BRANCA', 1960),
('BYO4TAB', 'FOGÃO CLEAN TIMER 4 BOCAS BRANCO EMBUTIR', 1470),
('BYO4TAR', 'FOGÃO CLEAN TIMER 4 BOCAS INOX EMBUTIR', 1610),
('BYS5QBR', 'FOGÃO ATIVE QUADRICHAMA - 5 BOCAS EMBUTIR INOX', 2660),
('BYS5TAR', 'FOGÃO CLEAN TIMER - 5 BOCAS EMBUTIR INOX', 2548),
('BYS6NBB', 'FOGÃO CLEAN - 6 BOCAS EMBUTIR BRANCO', 2240),
('BZC12BE', 'ADEGA CLIMATIZADA 12 GARRAFAS PRETA', 1190),
('C1B12BB', 'CONDICIONADOR DE AR PORTÁTIL CONSUL 12000 BTUS QUENTE/FRIO', 3990),
('C1F07AB', 'CLIMATIZADOR PORTATIL CONSUL BEM ESTAR - FRIO - BRANCO', 700),
('C1R07AB', 'CLIMATIZADOR PORTATIL CONSUL BEM ESTAR - QUENTE/FRIO - BRANCO', 868),
('CA060BR', 'COIFA INOX PAREDE PIRAMIDAL CONSUL 60CM', 1302),
('CA090BR', 'COIFA INOX PAREDE PIRAMIDAL CONSUL 90CM', 1470),
('CAT60GB', 'DEPURADOR CONSUL BRANCO 60 CM', 560),
('CAT60GR', 'DEPURADOR CONSUL INOX 60 CM', 910),
('CAT80GB', 'DEPURADOR CONSUL BRANCO 80 CM', 700),
('CAT80GR', 'DEPURADOR CONSUL INOX 80 CM', 1050),
('CBA07CB', 'SPLIT CONSUL ON-OFF 7.000 BTU/H - FRIO - UNID. INTERNA', 1750),
('CBA09CB', 'SPLIT CONSUL ON-OFF 9.000 BTU/H - FRIO - UNID. INTERNA', 1960),
('CBA12CB', 'SPLIT CONSUL ON-OFF 12000 BTU/H - FRIO - UNID. INTERNA', 2100),
('CBA18CB', 'SPLIT CONSUL ON-OFF 18.000 BTU/H - FRIO - UNID. INTERNA', 2940),
('CBA22CB', 'SPLIT CONSUL ON-OFF 22000 BTU/H - FRIO - UNID. INTERNA', 3640),
('CBF09DB', 'SPLIT CONSUL INVERTER 9.000 BTU/H - FRIO - UNID. INTERNA', 3220),
('CBF12DB', 'SPLIT CONSUL INVERTER 12000 BTU/H - FRIO - UNID. INTERNA', 3640),
('CBF18DB', 'SPLIT CONSUL INVERTER 18.000 BTU/H - FRIO - UNID. INTERNA', 3892),
('CD060AE', 'COOKTOP FACILITE CONSUL 4B', 602),
('CD075AE', 'COOKTOP FACILITE CONSUL 5B', 686),
('CDD75AE', 'COOKTOP FACILITE CONSUL 5 BOCAS QUADRICHAMA', 812),
('CFO4MAB', 'FOGÃO PISO 4B TIMER ANALÓGICO BRANCO', 1260),
('CFO4MAR', 'FOGÃO PISO 4B TIMER ANALÓGICO INOX', 1372),
('CFO4NAB', 'FOGÃO PISO 4B BRANCO', 1029),
('CFO4NAR', 'FOGÃO PISO 4B INOX', 1092),
('CFO4TAB', 'FOGÃO PISO 4B TIMER DIGITAL BRANCO', 1085),
('CFO4TAR', 'FOGÃO PISO 4B TIMER DIGITAL INOX', 1288),
('CFO4VAB', 'FOGÃO PISO 4B MESA DE VIDRO TEMPERADO BRANCO', 1400),
('CFO4VAR', 'FOGÃO PISO 4B MESA DE VIDRO TEMPERADO INOX', 1540),
('CFO4VAT', 'FOGÃO PISO 4B MEVA DE VIDRO TEMPERADO TIMER E TOUCH TITANIUM', 1540),
('CHA22DB', 'FREEZER HORIZONTAL 213 - 1 TAMPA', 1960),
('CHA31C', 'REEZER HORIZONTAL 305 - 1 TAMPA', 2100),
('CHB42DB', 'FREEZER HORIZONTAL 404 - 2 TAMPAS', 2730),
('CHB53C', 'REEZER HORIZONTAL 519 - 2 TAMPAS', 2940),
('CLC06AB', 'LAVALOUÇAS FACILITE 6 SERVIÇOS BRANCA', 1820),
('CLC06AS', 'LAVALOUÇAS FACILITE 6 SERVIÇOS PRATA', 1960),
('CLF12AB', 'LAVA LOUÇAS CONSUL 12 SERVIÇOS BRANCA', 2548),
('CLF12AS', 'LAVA LOUÇAS CONSUL 12 SERVIÇOS PRATA', 2660),
('CMA20BB', 'MICROONDAS CONSUL - 20L BRANCO', 588),
('CMK38AB', 'MICRO-ONDAS CONSUL BEM- ESTAR 38L BRANCO', 840),
('COB84AR', 'FORNO ELÉTRICO EMBUTIR INOX', 1750),
('CRA30FB', 'REFRIGERADOR DEGELO SECO 261L BRANCA', 1400),
('CRB36AB', 'REFRIGERADOR CONSUL FACILITE 1 PORTA FROST FREE 300L BRANCA', 1750),
('CRB39AB', 'REFRIGERADOR CONSUL FACILITE 1 PORTA FROST FREE 342L BRANCA', 2030),
('CRC08CB', 'FRIGOBAR COMPACTO 76L BRANCO', 1022),
('CRC12CB', 'FRIGOBAR COMPACTO 120L BRANCO', 1106),
('CRC28FB', 'REFRIGERADOR CONSUL DEGELO MANUAL 239L BRANCO', 1358),
('CRD37EB', 'REFRIGERADOR CONSUL BIPLEX 334L BRANCO', 1890),
('CRD46AB', 'REFRIGERADOR DUPLEX CONSUL - 415L BRANCO', 2380),
('CRD49AB', 'REFRIGERADOR DUPLEX CONSUL - 450L BRANCO', 2520),
('CRD49AK', 'REFRIGERADOR DUPLEX CONSUL - 450L EVOX', 2758),
('CRM35NB', 'REFRIGERADOR FROST FREE CONSUL 275L BRANCA', 2030),
('CRM35NK', 'REFRIGERADOR FROST FREE CONSUL 275L EVOX', 2198),
('CRM38NB', 'REFRIGERADOR FROST FREE CONSUL 340L BRANCA', 2310),
('CRM38NK', 'REFRIGERADOR FROST FREE CONSUL 340L EVOX', 2450),
('CRM43NB', 'REFRIGERADOR FROST FREE CONSUL 386L BRANCA', 2590),
('CRM43NK', 'REFRIGERADOR FROST FREE CONSUL 386L EVOX', 2800),
('CRM51AB', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 405L BRANCA', 2800),
('CRM51AK', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 405L EVOX', 3178),
('CRM52AB', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 405L C/ HORTA BRANCA', 2940),
('CRM52AK', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 405L C/ HORTA EVOX', 3290),
('CRM54BB', 'REFRIGERADOR CONSUL FROST FREE 441L BRANCA', 3080),
('CRM55AB', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 437L C/ HORTA BRANCA', 3220),
('CRM55AK', 'REFRIGERADOR BEM ESTAR FROST FREE 2 PORTAS 437L C/ HORTA EVOX', 3500),
('CVU20GB', 'FREEZER VERTICAL CONSUL 142L BRANCA', 1890),
('CVU26EB', 'FREEZER VERTICAL CONSUL 231L BRANCA', 2450),
('CVU30EB', 'FREEZER VERTICAL CONSUL 246L BRANCA', 2660),
('CWC08AB', 'LAVADORA CONSUL 8KG BRANCA', 1470),
('CWE08AB', 'LAVADORA CONSUL FACILITE 8KG BRANCA', 1512),
('CWE09AB', 'LAVADORA CONSUL FACILITE 9KG BRANCA', 1610),
('CWE10AB', 'LAVADORA CONSUL FACILITE 10KG BRANCA', 1750),
('CWE11AB', 'LAVADORA CONSUL FACILITE 11KG BRANCA', 1820),
('CWG11AB', 'LAVADORA AUTOMÁTICA CONSUL FACILITE 11KG BRANCA', 1890),
('CWG12AB', 'LAVADORA CONSUL FACILITE 11,5 KG BRANCA', 1918),
('CWL16AB', 'LAVADORA CONSUL 16 KG BRANCA', 2380),
('CZD12AT', 'CERVEJEIRA CONSUL MAIS TITANIUM', 2660),
('CZD12AV', 'CERVEJEIRA CONSUL MAIS VERMELHA', 2520),
('CZD12AY', 'CERVEJEIRA CONSUL MAIS AMARELA', 2520),
('teste2', 'teste2', 222);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(12) NOT NULL,
  `codigo_venda` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_cliente` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_funcionario` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_produto` varchar(20) CHARACTER SET utf8 NOT NULL,
  `data_venda` date NOT NULL,
  `observacao` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `codigo_venda`, `cpf_cliente`, `cpf_funcionario`, `modelo_produto`, `data_venda`, `observacao`) VALUES
(1, '1', '09060296435', '1231456', 'BA190AR', '2005-10-23', 'obs1'),
(2, '1', '09060296435', '5555555', 'BAA60EB', '2005-10-23', 'obs2'),
(3, '2', '01104299402', '5555555', 'BMJ38AR', '2017-10-03', 'Casa'),
(4, '2', '01104299402', '5555555', 'BAA60EB', '2017-10-03', 'Casa'),
(5, '2', '01104299402', '5555555', 'BAA80EB', '2017-10-03', 'Casa'),
(6, '3', '01104299402', '5555555', 'BFD4NAB', '2017-04-12', 'Casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto_parcela`
--

CREATE TABLE `venda_produto_parcela` (
  `id` int(12) NOT NULL,
  `id_venda_produto` varchar(6) NOT NULL,
  `num_parcela` varchar(25) DEFAULT NULL,
  `codigo_venda` varchar(13) NOT NULL,
  `cpf_cliente` varchar(12) NOT NULL,
  `modelo_produto` varchar(20) NOT NULL,
  `data_vencimento` date NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  `status_parcela` varchar(20) NOT NULL DEFAULT 'A VENCER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda_produto_parcela`
--

INSERT INTO `venda_produto_parcela` (`id`, `id_venda_produto`, `num_parcela`, `codigo_venda`, `cpf_cliente`, `modelo_produto`, `data_vencimento`, `data_pagamento`, `status_parcela`) VALUES
(1, '1', '1', '1', '09060296435', 'BA190AR', '2005-11-02', '2017-04-03', 'PAGO'),
(2, '1', '2', '1', '09060296435', 'BA190AR', '2005-12-02', '2017-04-04', 'A VENCER'),
(3, '1', '3', '1', '09060296435', 'BA190AR', '2006-01-01', '2017-04-11', 'A VENCER'),
(4, '1', '4', '1', '09060296435', 'BA190AR', '2006-01-31', '0000-00-00', 'A VENCER'),
(5, '1', '5', '1', '09060296435', 'BA190AR', '2006-03-02', '0000-00-00', 'A VENCER'),
(6, '1', '6', '1', '09060296435', 'BA190AR', '2006-04-01', '0000-00-00', 'A VENCER'),
(7, '1', '7', '1', '09060296435', 'BA190AR', '2006-05-01', '0000-00-00', 'A VENCER'),
(8, '1', '8', '1', '09060296435', 'BA190AR', '2006-05-31', '0000-00-00', 'A VENCER'),
(9, '1', '9', '1', '09060296435', 'BA190AR', '2006-06-30', '0000-00-00', 'A VENCER'),
(10, '1', '10', '1', '09060296435', 'BA190AR', '2006-07-30', '0000-00-00', 'A VENCER'),
(11, '1', '11', '1', '09060296435', 'BA190AR', '2006-08-29', '0000-00-00', 'A VENCER'),
(12, '1', '12', '1', '09060296435', 'BA190AR', '2006-09-28', '0000-00-00', 'A VENCER'),
(13, '2', '1', '1', '09060296435', 'BAA60EB', '2005-11-02', '2005-11-01', 'PAGO'),
(14, '2', '2', '1', '09060296435', 'BAA60EB', '2005-12-02', '0000-00-00', 'A VENCER'),
(15, '2', '3', '1', '09060296435', 'BAA60EB', '2006-01-01', '0000-00-00', 'A VENCER'),
(16, '2', '4', '1', '09060296435', 'BAA60EB', '2006-01-31', '0000-00-00', 'A VENCER'),
(17, '2', '5', '1', '09060296435', 'BAA60EB', '2006-03-02', '0000-00-00', 'A VENCER'),
(18, '2', '6', '1', '09060296435', 'BAA60EB', '2006-04-01', '0000-00-00', 'A VENCER'),
(19, '2', '7', '1', '09060296435', 'BAA60EB', '2006-05-01', '0000-00-00', 'A VENCER'),
(20, '2', '8', '1', '09060296435', 'BAA60EB', '2006-05-31', '0000-00-00', 'A VENCER'),
(21, '2', '9', '1', '09060296435', 'BAA60EB', '2006-06-30', '0000-00-00', 'A VENCER'),
(22, '2', '10', '1', '09060296435', 'BAA60EB', '2006-07-30', '0000-00-00', 'A VENCER'),
(23, '2', '11', '1', '09060296435', 'BAA60EB', '2006-08-29', '0000-00-00', 'A VENCER'),
(24, '2', '12', '1', '09060296435', 'BAA60EB', '2006-09-28', '0000-00-00', 'A VENCER'),
(25, '1', '1', '2', '01104299402', 'BMJ38AR', '2017-10-13', '2017-03-02', 'ATRASADO'),
(26, '1', '2', '2', '01104299402', 'BMJ38AR', '2017-11-12', '0000-00-00', 'A VENCER'),
(27, '1', '3', '2', '01104299402', 'BMJ38AR', '2017-12-12', '0000-00-00', 'A VENCER'),
(28, '1', '4', '2', '01104299402', 'BMJ38AR', '2018-01-11', '0000-00-00', 'A VENCER'),
(29, '1', '5', '2', '01104299402', 'BMJ38AR', '2018-02-10', '0000-00-00', 'A VENCER'),
(30, '1', '6', '2', '01104299402', 'BMJ38AR', '2018-03-12', '0000-00-00', 'A VENCER'),
(31, '1', '7', '2', '01104299402', 'BMJ38AR', '2018-04-11', '0000-00-00', 'A VENCER'),
(32, '1', '8', '2', '01104299402', 'BMJ38AR', '2018-05-11', '0000-00-00', 'A VENCER'),
(33, '1', '9', '2', '01104299402', 'BMJ38AR', '2018-06-10', '0000-00-00', 'A VENCER'),
(34, '1', '10', '2', '01104299402', 'BMJ38AR', '2018-07-10', '0000-00-00', 'A VENCER'),
(35, '1', '11', '2', '01104299402', 'BMJ38AR', '2018-08-09', '0000-00-00', 'A VENCER'),
(36, '1', '12', '2', '01104299402', 'BMJ38AR', '2018-09-08', '0000-00-00', 'A VENCER'),
(37, '2', '1', '2', '01104299402', 'BAA60EB', '2017-10-13', '0000-00-00', 'A VENCER'),
(38, '2', '2', '2', '01104299402', 'BAA60EB', '2017-11-12', '0000-00-00', 'A VENCER'),
(39, '2', '3', '2', '01104299402', 'BAA60EB', '2017-12-12', '0000-00-00', 'A VENCER'),
(40, '2', '4', '2', '01104299402', 'BAA60EB', '2018-01-11', '0000-00-00', 'A VENCER'),
(41, '2', '5', '2', '01104299402', 'BAA60EB', '2018-02-10', '0000-00-00', 'A VENCER'),
(42, '2', '6', '2', '01104299402', 'BAA60EB', '2018-03-12', '0000-00-00', 'A VENCER'),
(43, '2', '7', '2', '01104299402', 'BAA60EB', '2018-04-11', '0000-00-00', 'A VENCER'),
(44, '2', '8', '2', '01104299402', 'BAA60EB', '2018-05-11', '0000-00-00', 'A VENCER'),
(45, '2', '9', '2', '01104299402', 'BAA60EB', '2018-06-10', '0000-00-00', 'A VENCER'),
(46, '2', '10', '2', '01104299402', 'BAA60EB', '2018-07-10', '0000-00-00', 'A VENCER'),
(47, '2', '11', '2', '01104299402', 'BAA60EB', '2018-08-09', '0000-00-00', 'A VENCER'),
(48, '2', '12', '2', '01104299402', 'BAA60EB', '2018-09-08', '0000-00-00', 'A VENCER'),
(49, '3', '1', '2', '01104299402', 'BAA80EB', '2017-10-13', '0000-00-00', 'A VENCER'),
(50, '3', '2', '2', '01104299402', 'BAA80EB', '2017-11-12', '0000-00-00', 'A VENCER'),
(51, '3', '3', '2', '01104299402', 'BAA80EB', '2017-12-12', '0000-00-00', 'A VENCER'),
(52, '3', '4', '2', '01104299402', 'BAA80EB', '2018-01-11', '0000-00-00', 'A VENCER'),
(53, '3', '5', '2', '01104299402', 'BAA80EB', '2018-02-10', '0000-00-00', 'A VENCER'),
(54, '3', '6', '2', '01104299402', 'BAA80EB', '2018-03-12', '0000-00-00', 'A VENCER'),
(55, '3', '7', '2', '01104299402', 'BAA80EB', '2018-04-11', '0000-00-00', 'A VENCER'),
(56, '3', '8', '2', '01104299402', 'BAA80EB', '2018-05-11', '0000-00-00', 'A VENCER'),
(57, '3', '9', '2', '01104299402', 'BAA80EB', '2018-06-10', '0000-00-00', 'A VENCER'),
(58, '3', '10', '2', '01104299402', 'BAA80EB', '2018-07-10', '0000-00-00', 'A VENCER'),
(59, '3', '11', '2', '01104299402', 'BAA80EB', '2018-08-09', '0000-00-00', 'A VENCER'),
(60, '3', '12', '2', '01104299402', 'BAA80EB', '2018-09-08', '0000-00-00', 'A VENCER'),
(61, '1', '1', '3', '01104299402', 'BFD4NAB', '2017-04-22', NULL, 'A VENCER'),
(62, '1', '2', '3', '01104299402', 'BFD4NAB', '2017-05-22', NULL, 'A VENCER'),
(63, '1', '3', '3', '01104299402', 'BFD4NAB', '2017-06-21', NULL, 'A VENCER'),
(64, '1', '4', '3', '01104299402', 'BFD4NAB', '2017-07-21', NULL, 'A VENCER'),
(65, '1', '5', '3', '01104299402', 'BFD4NAB', '2017-08-20', NULL, 'A VENCER'),
(66, '1', '6', '3', '01104299402', 'BFD4NAB', '2017-09-19', NULL, 'A VENCER'),
(67, '1', '7', '3', '01104299402', 'BFD4NAB', '2017-10-19', NULL, 'A VENCER'),
(68, '1', '8', '3', '01104299402', 'BFD4NAB', '2017-11-18', NULL, 'A VENCER'),
(69, '1', '9', '3', '01104299402', 'BFD4NAB', '2017-12-18', NULL, 'A VENCER'),
(70, '1', '10', '3', '01104299402', 'BFD4NAB', '2018-01-17', NULL, 'A VENCER'),
(71, '1', '11', '3', '01104299402', 'BFD4NAB', '2018-02-16', NULL, 'A VENCER'),
(72, '1', '12', '3', '01104299402', 'BFD4NAB', '2018-03-18', NULL, 'A VENCER');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`cpf`, `nome`) VALUES
('1231456', 'Vendedor teste'),
('5555555', 'Fúlano da Silva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminstradores`
--
ALTER TABLE `adminstradores`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `endereco_residencial`
--
ALTER TABLE `endereco_residencial`
  ADD PRIMARY KEY (`cep`,`numero`),
  ADD KEY `endereco_fk` (`cpf_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`modelo`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpf_cliente_fk` (`cpf_cliente`),
  ADD KEY `cpf_funcionario_fk` (`cpf_funcionario`),
  ADD KEY `modelo_produto_fk` (`modelo_produto`);

--
-- Indexes for table `venda_produto_parcela`
--
ALTER TABLE `venda_produto_parcela`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `venda_produto_parcela`
--
ALTER TABLE `venda_produto_parcela`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco_residencial`
--
ALTER TABLE `endereco_residencial`
  ADD CONSTRAINT `endereco_fk` FOREIGN KEY (`cpf_cliente`) REFERENCES `cliente` (`cpf`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `cpf_cliente_fk` FOREIGN KEY (`cpf_cliente`) REFERENCES `cliente` (`cpf`),
  ADD CONSTRAINT `cpf_funcionario_fk` FOREIGN KEY (`cpf_funcionario`) REFERENCES `vendedor` (`cpf`),
  ADD CONSTRAINT `modelo_produto_fk` FOREIGN KEY (`modelo_produto`) REFERENCES `produto` (`modelo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;