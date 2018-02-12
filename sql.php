
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `pais` varchar(25) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `idUsuario`, `pais`, `estado`, `cidade`, `logradouro`) VALUES
(1, 1, 'Brasil', 'RJ', 'Niteroi', 'Av. Prefeito Augusto'),
(2, 2, 'Brasil', 'SP', 'Belem', 'Rua Augusto'),
(3, 3, 'Brasil', 'MG', 'Viana', 'Praça XV'),
(4, 3, 'Brasil', 'AM', 'City', 'Destiny');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `sobrenome` varchar(40) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `idade`, `sexo`) VALUES
(1, 'Abel', 'Cabral de Arruda', 26, 'Masculino'),
(2, 'Dheymes', 'Jose Silva', 28, 'Masculino'),
(3, 'Regina', 'Duarte Afonso', 30, 'Feminino'),
(4, 'Veronica', 'Pascoa Medeiros', 15, 'Feminino'),
(5, 'Daniel', 'Rimoaldo', 20, 'Masculino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


