-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2024 às 03:19
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coffeezinho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `usuario_ID` int(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(15) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `cep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`usuario_ID`, `cpf`, `telefone`, `logradouro`, `numero`, `cidade`, `estado`, `cep`) VALUES
(44, 32442, 2344, 'sdf', '24', '24', '342', 234),
(36, 258741369, 0, 'sad', '12', 'dfdf', 'az', 213313),
(30, 325698741, 664654, 'dffsf', '324', 'sfdffzc', 'dsfdsf', 34242424),
(39, 654897123, 231, 'asda', '32', 'wd', 'asd', 213133),
(53, 2147483647, 564654, 'sdad', '152', 'sad', 'sd', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `usuario_ID` int(255) NOT NULL,
  `cnpj` int(14) NOT NULL,
  `telefone` int(15) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `cep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cnpj` int(14) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `quantidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_ID` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_ID`, `nome`, `email`, `senha`) VALUES
(1, 'Edinara', 'edinarastefane12@gmail.com', '$2y$10$ADy2E2np7xr4gjYEi8TZe.Osf1M0.g5aAguVMhYP8BQdt.DtgpITi'),
(5, 'teste update', 'update@gmail.com', '3ac340832f29c11538fbe2d6f75e8bcc'),
(9, 'Teste Cliente2', 'cliente@gmail.com', 'x123'),
(10, 'Teste Cliente2', 'cliente@gmail.com', 'x123'),
(11, 'Teste Cliente3', 'cliente@gmail.com', 'x123'),
(12, 'Teste Cliente5', 'cliente@gmail.com', '1233'),
(13, 'Teste Cliente5', 'cliente@gmail.com', '1233'),
(14, 'Teste Cliente 6 ', 'cliente@gmail.com', '231313'),
(15, 'Teste Cliente8', 'cliente@gmail.com', 'asdsad'),
(16, 'Teste Cliente8', 'cliente@gmail.com', 'asdsad'),
(25, 'Teste Cliente 14', 'sdfdfs@sakffalfj.com', 'sadd'),
(26, 'Teste Cliente 15', 'sdfdfs@sakffalfj.com', 'sadd'),
(27, 'Teste Cliente 16', 'sdfdfs@sakffalfj.com', 'sadd'),
(28, 'Teste Cliente 18', 'sdfdfs@sakffalfj.com', 'sadd'),
(29, 'Teste Cliente 18', 'sdfdfs@sakffalfj.com', 'sadd'),
(30, 'Teste Cliente 20', 'cliente@gmail.com', 'eafda'),
(31, 'Teste Cliente23', 'cliente23@gmail.com', '232214'),
(32, 'Teste Cliente23', 'cliente23@gmail.com', '232214'),
(33, 'Teste Cliente23', 'cliente23@gmail.com', '232214'),
(34, 'Teste Cliente23', 'cliente23@gmail.com', '232214'),
(35, 'Teste Cliente23', 'cliente23@gmail.com', '232214'),
(36, 'testeif', 'if@gmail.com', 'if2'),
(37, 'testeif', 'if@gmail.com', 'if2'),
(39, 'teste alert 3', 'alert3@gmail.com', 'asddas'),
(40, 'teste alert 4', 'alert4@gmail.com', '654'),
(41, 'teste alert 4', 'alert4@gmail.com', '654'),
(42, 'teste alert 5', 'alert4@gmail.com', '2344'),
(43, 'teste alert 5', 'alert4@gmail.com', '2344'),
(44, 'teste alert 6', 'alert5@gmail.com', '3424'),
(49, 'teste loja', 'loja@gmail.com', 'sadd'),
(50, 'teste50', 'teste@teste', 'teste'),
(51, 'teste20', 'teste@teste', '165151'),
(52, 'teste20', 'teste@teste', '165151'),
(53, 'teste20', 'teste@teste', '165151'),
(54, 'Edinara 2', 'edinara.candeia@gmail.com', 'c33367701511b4f6020ec61ded352059');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fk_id_usuario` (`usuario_ID`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `usuario_ID` (`usuario_ID`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_ID`),
  ADD KEY `usuario_ID` (`usuario_ID`),
  ADD KEY `usuario_ID_2` (`usuario_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`usuario_ID`) REFERENCES `usuario` (`usuario_ID`);

--
-- Limitadores para a tabela `loja`
--
ALTER TABLE `loja`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_ID`) REFERENCES `usuario` (`usuario_ID`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_cnpj` FOREIGN KEY (`cnpj`) REFERENCES `loja` (`cnpj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
