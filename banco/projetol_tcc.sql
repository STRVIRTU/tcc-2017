-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2017 às 17:49
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetol_tcc`
--
CREATE DATABASE IF NOT EXISTS `projetol_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetol_tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cgm` int(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `turma` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cgm`, `curso`, `turma`, `id`, `idpessoa`) VALUES
(2147483647, 'Informatica', '3A', 18, 35),
(756756756, 'Informatica', '4A', 19, 36),
(7657567, 'Informatica', '4A', 20, 38),
(556456465, 'Informatica', '4A', 21, 39),
(2147483647, 'Informatica', '4A', 22, 40),
(2147483647, 'Informatica', '4A', 23, 45),
(6767676, 'Informatica', '3a', 24, 46),
(4234234, 'Informatica', '4A', 28, 60),
(2147483647, 'Informatica', '4A', 29, 61),
(448807959, 'Informatica', '4a', 34, 68);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunozz`
--

CREATE TABLE `alunozz` (
  `id_aluno` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cgm` varchar(30) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turma` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `alunozz`
--

INSERT INTO `alunozz` (`id_aluno`, `nome`, `nascimento`, `rg`, `cgm`, `curso`, `turma`, `email`, `senha`) VALUES
(1, 'Vinícius', '24/06/1999', '12.584.317-4', '889409126', 'Informatica', '4 ano', 'vinistanoga@gmail.com', 123),
(2, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 123),
(3, 'Maria', '18/06/1999', '12121212', '121212', 'Informatica', '4 ano', 'maria@hotmail.com', 123),
(4, 'Andre', '20/04/1980', '131954921', '448807959', 'Eletronica', '4a', 'jandrey@jandrey', 123),
(6, 'Luan Teste', '05/03/1999', '131954921', '448807959', 'Informatica', '4A', 'luanrohde11@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`) VALUES
(1, 'Informatica'),
(2, 'Administracao'),
(3, 'Eletronica'),
(5, 'Enfermagem'),
(6, 'Meio Ambiente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome`, `curso`, `id_curso`) VALUES
(10, 'historia', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `cargo`, `cpf`, `idpessoa`) VALUES
(2, '3', '545.454.545-4', 37),
(4, '3', '545.454.545-4', 42),
(5, '3', '465.665.656-5', 43),
(6, '3', '645.456.456-4', 44),
(14, '3', '545.454.545-4', 54);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionariozz`
--

CREATE TABLE `funcionariozz` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `funcionariozz`
--

INSERT INTO `funcionariozz` (`id_funcionario`, `nome`, `nascimento`, `rg`, `cpf`, `cargo`, `email`, `senha`) VALUES
(1, 'Vinicius', '24/06/1999', '12.584.317-4', '069.368.299-02', 'Prof', 'vinicius@email.com', 123),
(2, 'Vinicius', '24/06/1999', '12.584.317-4', '069.368.299-02', 'Prof', 'vinicius@email.com', 123),
(3, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 123),
(4, 'Vinicius', '123', '123', '123', 'professor', 'vini.stanoga', 123),
(5, 'Luan', '1234', '1234', '1234', 'professor', 'luan.rohde', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_aluno`
--

CREATE TABLE `info_aluno` (
  `id_info_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `notas` float NOT NULL,
  `reclamacoes` varchar(255) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `elogios` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `email`, `senha`) VALUES
(1, '', '123'),
(2, '', '123'),
(3, 'teste', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id_obs` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `data` varchar(15) NOT NULL,
  `observacao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id_obs`, `id_aluno`, `id_funcionario`, `data`, `observacao`) VALUES
(2, 35, 54, '2017-11-15', 'Fica no Celular');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `nascimento` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pendente',
  `tipo` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `criacao` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `rg`, `cpf`, `nascimento`, `foto`, `email`, `senha`, `status`, `tipo`, `usuario`, `criacao`, `alteracao`) VALUES
(30, 'Luan Rohde', '', '', '', 'perfil.jpg', 'luan.rohde@ceepcascavel.com.br', 'admin', 'ativo', 1, 'admin', '0000-00-00 00:00:00', '2017-10-31 10:35:17'),
(35, 'Maria', '75.675.675-6', '', '98/89/8989', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'maria.ceep@ceepcascavel.com.br', '123', 'ativo', 2, 'maria.ceep', '0000-00-00 00:00:00', '2017-10-19 20:42:25'),
(36, 'JoÃ£o', '86.787.686-7', '', '64/56/6778', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'joao.joao@ceepcascavel.com.br', '123', 'ativo', 2, 'joao.joao', '0000-00-00 00:00:00', '2017-10-19 20:42:25'),
(37, 'Lucas', '34.234.342-1', '', '05/03/1980', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'lucas.cari@ceepcascavel.com.br', 'seco123', 'ativo', 3, 'lucas.cari', '0000-00-00 00:00:00', '2017-10-19 21:00:30'),
(38, 'Laura', '86.787.686-7', '', '87/87/8787', 'teste.jpeg', 'laura.laura@ceepcascavel.com.br', '123', 'ativo', 2, 'laura.laura', '0000-00-00 00:00:00', '2017-11-02 21:20:00'),
(39, 'Nathan', '45.454.335-4', '', '46/76/7654', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'nathan.moura@ceepcascavel.com.br', '123', 'ativo', 2, 'Nathan.nathan', '2017-10-17 15:22:24', '2017-10-19 20:42:25'),
(40, 'Eduardo', '75.657.577-6', '', '67/67/6767', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'eduardo.eduardo@ceepcascavel.com.br', '123', 'ativo', 2, 'eduardo.edu', '2017-10-17 15:23:46', '2017-10-19 20:42:25'),
(42, 'Gabriel Menon', '65.654.665-6', '', '68/76/7676', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'gabriel.menon@ceepcascavel.com.br', 'teste', 'ativo', 3, 'gabriel.menon', '2017-10-19 06:47:20', '2017-10-19 20:47:41'),
(43, 'Celma', '54.545.454-5', '', '65/56/5656', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'celma.burille@ceepcascavel.com.br', '123', 'ativo', 3, 'celma.burille', '2017-10-19 06:54:26', '2017-10-19 20:54:50'),
(44, 'Vander', '65.656.767-6', '', '76/76/7676', 'WhatsApp Image 2017-10-09 at 7.47.33 PM.jpeg', 'vander.ceep@ceepcascavel.com.br', 'vander123', 'ativo', 3, 'vander.ceep', '2017-10-19 06:58:36', '2017-10-19 20:58:51'),
(45, 'AurÃ©lio', '76.767.676-7', '', '56/75/6756', 'teste.jpeg', 'vini.aurelio@ceepcascavel.com.br', '12345', 'ativo', 2, 'vini.aurelio', '2017-10-19 07:20:03', '2017-10-19 21:20:53'),
(46, 'Florisbelo', '56.767.767-6', '', '45/65/4665', 'teste.jpeg', 'floris.belo@ceepcascavel.com.br', '123', 'ativo', 2, 'floris.belo', '2017-10-20 08:35:56', '2017-10-20 22:38:10'),
(54, 'Jandrey', '34.234.342-1', '', '45/34/5454', NULL, 'andre.jandrey@ceepcascavel.com.br', '1234', 'ativo', 3, 'andre.jandrey', '2017-10-29 11:51:27', '2017-11-26 15:53:18'),
(60, 'teste', '45.446.466-3', '', '54/63/4636', NULL, 'teste.teste@ceepcascavel.com.br', '123', 'ativo', 2, 'teste.teste', '2017-10-31 10:44:01', '2017-11-07 17:01:21'),
(61, 'Luan', '13.195.492-1', '', '05/03/1999', NULL, 'luan.sgu@ceepcascavel.com.br', '123', 'ativo', 2, 'luan.sgu', '2017-11-02 04:21:28', '2017-11-07 17:01:21'),
(68, 'Luan Rohde', '13.195.492-1', '088.035.059-89', '05/03/1999', 'perfil.jpg', 'luan.rohde@ceepcascavel.com.br', '123', 'ativo', 2, 'luan.rohde', '2017-11-07 03:21:07', '2017-11-09 10:30:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `ano` int(10) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `id_curso` int(100) NOT NULL,
  `data_inicio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `alunozz`
--
ALTER TABLE `alunozz`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `funcionariozz`
--
ALTER TABLE `funcionariozz`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `info_aluno`
--
ALTER TABLE `info_aluno`
  ADD PRIMARY KEY (`id_info_aluno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id_obs`),
  ADD KEY `id_funcionario` (`id_funcionario`),
  ADD KEY `id_aluno` (`id_aluno`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `id_curso` (`id_curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `alunozz`
--
ALTER TABLE `alunozz`
  MODIFY `id_aluno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `funcionariozz`
--
ALTER TABLE `funcionariozz`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `info_aluno`
--
ALTER TABLE `info_aluno`
  MODIFY `id_info_aluno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id_obs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`id`);

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`id`);

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `ocorrencia_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`idpessoa`),
  ADD CONSTRAINT `ocorrencia_ibfk_2` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`idpessoa`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
