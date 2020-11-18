-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 08:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evalanches`
--

-- --------------------------------------------------------

--
-- Table structure for table `conta`
--

CREATE TABLE `conta` (
  `id_conta` int(11) NOT NULL,
  `clienteId` int(11) NOT NULL,
  `valorConta` decimal(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conta`
--

INSERT INTO `conta` (`id_conta`, `clienteId`, `valorConta`, `status`) VALUES
(23, 49, '132.19', 1),
(24, 50, '31.70', 1),
(25, 49, '121.88', 1),
(26, 49, '15.90', 1),
(27, 49, '18.90', 1),
(28, 49, '119.30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itens`
--

CREATE TABLE `itens` (
  `id_item` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` decimal(11,2) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `fornecedor` varchar(30) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itens`
--

INSERT INTO `itens` (`id_item`, `nome`, `preco`, `descricao`, `fornecedor`, `tipo`) VALUES
(11, 'Skol Lata 350ml', '3.50', '', 'Ambev', 'bebida'),
(14, 'Coca-Cola Lata', '2.99', '', '350ml.  Ambev', 'bebida'),
(15, 'Hamburguer PHP', '15.90', 'Queijo do bom, pao branco, maionese', '', 'comida'),
(16, 'Pastel de Frango', '7.90', 'Massa, queijo e frango', '', 'comida'),
(17, 'Kibe', '18.90', '8 minis kibes de carne', '', 'comida'),
(18, 'Batata Frita', '14.90', 'Porcao 400g', '', 'comida'),
(20, 'Suco de Laranja', '6.90', '', '500ml da fruta', 'bebida');

-- --------------------------------------------------------

--
-- Table structure for table `itenspedidos`
--

CREATE TABLE `itenspedidos` (
  `itensId` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(11,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pedidoId` int(11) NOT NULL,
  `precoUnit` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itenspedidos`
--

INSERT INTO `itenspedidos` (`itensId`, `nome`, `preco`, `quantidade`, `pedidoId`, `precoUnit`) VALUES
(53, 'Hamburguer PHP', '15.90', 1, 76, '0.00'),
(54, 'Pastel de Frango', '15.80', 2, 77, '0.00'),
(55, 'Coca-Cola Lata', '5.98', 2, 78, '0.00'),
(56, 'Hamburguer PHP', '15.90', 1, 79, '0.00'),
(57, 'Pastel de Frango', '7.90', 1, 80, '0.00'),
(58, 'Pastel de Frango', '7.90', 1, 81, '0.00'),
(59, 'Hamburguer PHP', '15.90', 1, 82, '0.00'),
(60, 'Hamburguer PHP', '15.90', 1, 83, '0.00'),
(61, 'Hamburguer PHP', '15.90', 1, 84, '0.00'),
(62, 'Hamburguer PHP', '15.90', 1, 85, '0.00'),
(63, 'Suco de Laranja', '6.90', 1, 86, '0.00'),
(64, 'Kibe', '18.90', 1, 87, '0.00'),
(65, 'Pastel de Frango', '7.90', 1, 88, '0.00'),
(66, 'Pastel de Frango', '7.90', 1, 89, '0.00'),
(67, 'Pastel de Frango', '7.90', 1, 90, '0.00'),
(68, 'Kibe', '37.80', 2, 91, '0.00'),
(69, 'Coca-Cola Lata', '2.99', 1, 92, '0.00'),
(70, 'Kibe', '37.80', 2, 92, '0.00'),
(71, 'Pastel de Frango', '7.90', 1, 93, '7.90'),
(72, 'Kibe', '37.80', 2, 94, '18.90'),
(73, 'Hamburguer PHP', '15.90', 1, 95, '15.90'),
(74, 'Pastel de Frango', '15.80', 2, 95, '7.90'),
(75, 'Skol Lata 350ml', '3.50', 1, 96, '3.50'),
(76, 'Coca-Cola Lata', '5.98', 2, 96, '2.99'),
(77, 'Kibe', '56.70', 3, 97, '18.90'),
(78, 'Skol Lata 350ml', '14.00', 4, 98, '3.50'),
(79, 'Batata Frita', '14.90', 1, 99, '14.90'),
(80, 'Pastel de Frango', '7.90', 1, 100, '7.90'),
(81, 'Kibe', '18.90', 1, 101, '18.90'),
(82, 'Hamburguer PHP', '15.90', 1, 102, '15.90'),
(83, 'Kibe', '18.90', 1, 103, '18.90'),
(84, 'Hamburguer PHP', '47.70', 3, 104, '15.90'),
(85, 'Kibe', '37.80', 2, 105, '18.90'),
(86, 'Kibe', '18.90', 1, 106, '18.90'),
(87, 'Batata Frita', '14.90', 1, 106, '14.90');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `Id` int(11) NOT NULL,
  `contaId` int(11) NOT NULL,
  `valorTotal` decimal(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`Id`, `contaId`, `valorTotal`, `status`) VALUES
(76, 19, '15.90', 1),
(77, 19, '15.80', 1),
(78, 19, '5.98', 1),
(79, 20, '15.90', 1),
(80, 20, '7.90', 1),
(81, 0, '7.90', 1),
(82, 0, '15.90', 1),
(83, 0, '15.90', 1),
(84, 21, '15.90', 1),
(85, 22, '15.90', 1),
(86, 22, '6.90', 1),
(87, 22, '18.90', 1),
(88, 22, '7.90', 1),
(89, 22, '7.90', 1),
(90, 23, '7.90', 1),
(91, 23, '37.80', 1),
(92, 23, '40.79', 1),
(93, 23, '7.90', 1),
(94, 23, '37.80', 1),
(95, 24, '31.70', 1),
(96, 25, '9.48', 1),
(97, 25, '56.70', 1),
(98, 25, '14.00', 1),
(99, 25, '14.90', 1),
(100, 25, '7.90', 1),
(101, 25, '18.90', 1),
(102, 26, '15.90', 1),
(103, 27, '18.90', 1),
(104, 28, '47.70', 1),
(105, 28, '37.80', 1),
(106, 28, '33.80', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `bonus` int(11) DEFAULT 0,
  `senha` varchar(32) DEFAULT NULL,
  `poder` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `cpf`, `email`, `bonus`, `senha`, `poder`) VALUES
(49, 'Eduardo Baruch Meireles', '1', 'eduardo_baruch@hotmail.com', 30, 'c4ca4238a0b923820dcc509a6f75849b', 0),
(50, 'Carina', '2', '1@1.com', 0, 'c81e728d9d4c2f636f067f89cc14862c', 0),
(51, 'gerente', 'gerente', 'gerente@evalanches.com.br', 0, 'd7403066713e9d99bcc97a8db69bfb67', 2),
(52, 'cozinha', 'cozinha', 'cozinha@evalanches.com.br', 0, 'b2c8d9b2d257dc40f04aff245a364cd8', 1),
(53, 'Linco', '1234', 'linco@gmail.com', 0, 'c4ca4238a0b923820dcc509a6f75849b', 0),
(54, 'Pedro Santos', '051151', 'teste@teste', 0, '814f06ab7f40b2cff77f2c7bdffd3415', 0),
(55, 'Teste do testador', '5', '5@d', 0, 'e4da3b7fbbce2345d7772b0674a318d5', 0),
(56, 'oioi', '55', '55@f', 0, 'b53b3a3d6ab90ce0268229151c9bde11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id_conta`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  ADD PRIMARY KEY (`itensId`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
