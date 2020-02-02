--
-- Banco de dados: `crud_ci`
--

CREATE SCHEMA IF NOT EXISTS `crud_ci` DEFAULT CHARACTER SET utf8;
USE `crud_ci`;

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `criado`, `modificado`) VALUES
(1, 'Fullstack Developer', '2020-01-31 19:25:11', '2020-01-31 19:25:11'),
(2, 'Frontend Developer', '2020-01-31 19:25:17', '2020-01-31 19:25:17'),
(3, 'Backend Developer', '2020-01-31 19:25:24', '2020-01-31 19:25:24'),
(4, 'DevOps', '2020-01-31 19:25:28', '2020-01-31 19:25:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programador`
--

CREATE TABLE `programador` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `anos_exp` int(11) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `programador`
--
ALTER TABLE `programador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_programador_cargo_idx` (`cargo_id`);

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `programador`
--
ALTER TABLE `programador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limitadores para a tabela `programador`
--
ALTER TABLE `programador`
  ADD CONSTRAINT `fk_programador_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;