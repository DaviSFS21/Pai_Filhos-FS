-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 12:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pai_e_filhos`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `cod_prod` int(11) NOT NULL,
  `nome_prod` varchar(120) NOT NULL,
  `desc_prod` varchar(450) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `path_img` varchar(120) NOT NULL,
  `categoria` varchar(16) NOT NULL,
  `preco` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`cod_prod`, `nome_prod`, `desc_prod`, `marca`, `path_img`, `categoria`, `preco`) VALUES
(71, 'Esponja poliéster', 'Ideal para vidros, cristais, aço inox, porcelanas e Antiaderente.', 'powermaid', '../assets/img_prod/6362cd3328968.jpg', 'panos', '8,97'),
(72, 'Travesseiro Látex Light', 'Para fronha 50 x 70cm\r\n\r\nAntiácaro\r\nEspuma 100% poliuretano\r\nAltura 16cm\r\nCapa Dry Fresh 100% algodão', 'Duoflex', '../assets/img_prod/636c3439c8ac2.jpg', 'Selecione...', '39,99'),
(73, 'Pano 2 em 1', 'esfrega e seca Microfibra 2 peças', 'powermaid', '../assets/img_prod/6364ec1faa5ab.jpg', 'panos', '9,97'),
(74, 'Luva Microfibra Mult', 'Indicado para limpeza de móveis, interiores, vidros e automóveis. Retém o pó sem espalhar.', 'powermaid', '../assets/img_prod/6364ebce800dc.jpg', 'panos', '18,97'),
(75, 'Jogo de banho Appel 5 peças algodão', '2 toalhas de banho 68cm X 1,35m\r\n2 toalhas de Rosto 45cm X 68cm\r\n1 toalha piso 45cm X 68cm', 'powermaid', '../assets/img_prod/6364f0938e31e.jpg', 'panos', '198,00'),
(76, 'Conjunto Caçarola 5pcs', '1 Caçarola ○16 plus tampa de vidro - 1,3L\r\n1 Caçarola ○18 plus tampa de vidro - 1,9L\r\n1 Caçarola ○20 plus tampa de vidro - 2,6L\r\n1 Caçarola ○22 plus tampa de vidro - 3,6L\r\n1 Caçarola ○24 plus tampa de vidro - 4,8L', 'Marcolar', '../assets/img_prod/636c34463ecc0.jpg', 'aluminios', '319,99');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tel` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_user`, `cpf`, `admin`, `email`, `nome`, `senha`, `tel`) VALUES
(1, '123.456.789-21', 1, 'davi21@email.com', 'Davi Soares', '24a33963e322e89d7dbc4ad6011769adbcfe43a7', '(12) 99857-3352'),
(7, '987.654.321-07', 0, 'nicole07@email.com', 'Nicole Rabello', 'f0c5ea8b2a5e4c91411a59bc7cb7ce45cea8fd6b', '(12) 99914-5862'),
(8, '564.789.255-12', 0, 'thais01@email.com', 'Thaís Soares', 'ad3b4c0a2e084c0131a821e447a3add28949448f', '(12) 99156-4899');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
