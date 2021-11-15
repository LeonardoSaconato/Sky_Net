/* --*------------------------------------------*--
--* dir parent	: php	     	   	 	   	 *--
--* File name	: conexao.php     	   	     *--
--* Created by 	: Ricardo Italo		         *--
--* Discord		: ShadowJr#5627			     *--
--*------------------------------------------*-- */

/* Setup:
Criar uma nova DB com o nome "Project" então executar todo esse script no Consola do phpmyadmin */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Estrutura para tabela `Project`
--

CREATE TABLE `Project` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `Project`
--

INSERT INTO `Project` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Ricardo', 'Ricardo@hotmail.com.br', 'teste1'),
(2, 'Ricardo', 'Ricardo@hotmail.com.br', 'teste2');


--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Project`
--
ALTER TABLE `Project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Project`
--
ALTER TABLE `Project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
