-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2022 às 12:34
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pai_e_filhos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
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
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_prod`, `nome_prod`, `desc_prod`, `marca`, `path_img`, `categoria`, `preco`) VALUES
(71, 'Esponja poliéster', 'Ideal para vidros, cristais, aço inox, porcelanas e Antiaderente.', 'powermaid', '../assets/img_prod/6362cd3328968.jpg', 'panos', '8,97'),
(72, 'Travesseiro Látex Light', 'Para fronha 50 x 70cm\r\n\r\nAntiácaro\r\nEspuma 100% poliuretano\r\nAltura 16cm\r\nCapa Dry Fresh 100% algodão', 'Duoflex', '../assets/img_prod/636c3439c8ac2.jpg', 'Selecione...', '39,99'),
(73, 'Pano 2 em 1', 'esfrega e seca Microfibra 2 peças', 'powermaid', '../assets/img_prod/6364ec1faa5ab.jpg', 'panos', '9,97'),
(74, 'Luva Microfibra Mult', 'Indicado para limpeza de móveis, interiores, vidros e automóveis. Retém o pó sem espalhar.', 'powermaid', '../assets/img_prod/6364ebce800dc.jpg', 'panos', '18,97'),
(75, 'Jogo de banho Appel 5 peças algodão', '2 toalhas de banho 68cm X 1,35m\r\n2 toalhas de Rosto 45cm X 68cm\r\n1 toalha piso 45cm X 68cm', 'powermaid', '../assets/img_prod/6364f0938e31e.jpg', 'panos', '198,00'),
(76, 'Conjunto Caçarola 5pcs', '1 Caçarola ○16 plus tampa de vidro - 1,3L\n1 Caçarola ○18 plus tampa de vidro - 1,9L\n1 Caçarola ○20 plus tampa de vidro - 2,6L\n1 Caçarola ○22 plus tampa de vidro - 3,6L\n1 Caçarola ○24 plus tampa de vidro - 4,8L', 'Marcolar', '../assets/img_prod/636c34463ecc0.jpg', 'aluminios', '319,99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `cpf`, `admin`, `email`, `nome`, `senha`, `tel`) VALUES
(1, '123.456.789-21', 1, 'davi21@email.com', 'Davi Soares', '24a33963e322e89d7dbc4ad6011769adbcfe43a7', '(12) 99857-3352'),
(7, '987.654.321-07', 0, 'nicole07@email.com', 'Nicole Rabello', 'f0c5ea8b2a5e4c91411a59bc7cb7ce45cea8fd6b', '(12) 99914-5862'),
(8, '564.789.255-12', 0, 'thais01@email.com', 'Thaís Soares', 'ad3b4c0a2e084c0131a821e447a3add28949448f', '(12) 99156-4899'),
(9, '456.123.789-52', 1, 'matheus08@email.com', 'Matheus Schiavão', '9aa99616b975bd1cfa0cbd143739db0d270eed9f', '(12) 98358-7952'),
(10, '789.652.389-52', 1, 'gustavo10@email.com', 'Gustavo Varella', '7c96b41274561b0e627ca1eac9f31d3bdf13445f', '(12) 39584-5494');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
