-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_observatorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aboutodms`
--

CREATE TABLE IF NOT EXISTS `aboutodms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `slug` varchar(40) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `aboutodms`
--

INSERT INTO `aboutodms` (`id`, `title`, `description`, `image_small`, `slug`, `image`) VALUES
(1, '1', '<p>Erradicar a extrema <strong>POBREZA</strong> e a <strong>FOME</strong></p>', '1-thumb.png', '1', '1.png'),
(2, '2 ', '<p>Atingir o ensino básico universal. (<strong>EDUCAÇÃO</strong>)</p>', '2-thumb.png', '2', '2.png'),
(3, '3', '<p>Promover a <strong>IGUALDADE DE GÊNERO</strong> e a <strong>AUTONOMIA DAS MULHERES</strong></p>', '3-thumb.png', '3', '3.png'),
(4, '4', '<p>Reduzir a <strong>MORTALIDADE INFANTIL</strong></p>', '4-thumb.png', '4', '4.png'),
(5, '5', '<p>Melhorar a <strong>SAÚDE MATERNA</strong></p>', '5-thumb.png', '5', '5.png'),
(6, '6', '<p>Combater a <strong>AIDS, MALÁRIA e OUTRAS DOEnÇAS</strong></p>', '6-thumb.png', '6', '6.png'),
(7, '7', '<p>Garantir a <strong>SUSTENTABILIDADE AMBIENTAL</strong></p>', '7-thumb.png', '7', '7.png'),
(8, '8', '<p>Estabelecer uma Parceiria Mundial para o <strong>DESENVOLVIMENTO</strong></p>', '8-thumb.png', '8', '8.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL,
  `message` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `date`, `name`, `email`, `message`, `created`, `updated`) VALUES
(1, '0000-00-00', 'Rogerio Nunes', 'rogerionunes90@gmail.com', 'testando aeuhaeua auehae.', '2013-11-21 17:27:15', '2013-11-21 17:27:15'),
(2, '0000-00-00', 'Rogerio', 'daniw@gmail.com', 'adaudhuawd', '2013-11-22 16:56:05', '2013-11-22 16:56:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `good_practices`
--

CREATE TABLE IF NOT EXISTS `good_practices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `county` varchar(45) NOT NULL DEFAULT '',
  `title` varchar(45) NOT NULL DEFAULT '',
  `briefDescription` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `observations` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `libraries`
--

CREATE TABLE IF NOT EXISTS `libraries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `category` varchar(15) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `name` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `slug` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `libraries`
--

INSERT INTO `libraries` (`id`, `odm`, `category`, `title`, `image`, `file`, `created`, `updated`, `name`, `date`, `image_small`, `slug`) VALUES
(1, 1, 'teste', 'etetste tete', 'etetste-tete.jpg', NULL, '2013-11-21 17:16:04', '2013-11-21 17:16:04', '', NULL, 'etetste-tete-thumb.jpg', 'etetste-tete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `title` varchar(45) NOT NULL DEFAULT '',
  `image_small` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `briefDescription` text NOT NULL,
  `noticesInIntegra` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `slug` varchar(40) NOT NULL,
  `image_medium` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `notices`
--

INSERT INTO `notices` (`id`, `odm`, `title`, `image_small`, `image`, `briefDescription`, `noticesInIntegra`, `created`, `updated`, `slug`, `image_medium`) VALUES
(6, 1, 'A água-viva pode ser fatal para o ser humano?', 'a-noticia-muito-doida-small.jpg', 'a-noticia-muito-doida.jpg', '<h2 style="margin: 15px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 1.2em; vertical-align: baseline; color: #47423a; line-height: 15px; font-family: Arial, Helvetica, sans-serif;">Existem mais de mil espécies de águas-vivas espalhadas pelo mundo, mas duas delas têm causado alguns problemas para os banhistas no litoral do Brasil, principalmente em São Paulo, como a <em style="margin: 0px; padding: 0px; border: 0px; outline: #000000; font-size: 14px; vertical-align: baseline; background-color: transparent;">Chiropsalmus quadrumanus</em> e a <em style="margin: 0px; padding: 0px; border: 0px; outline: #000000; font-size: 14px; vertical-align: baseline; background-color: transparent;">Tamoya haplonema</em>.</h2>', '<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;">Mas segundo o biólogo Guilherme Domenichelli, a água-viva e a caravela portuguesa, encontradas na costa brasileira, são pouco perigosas e, até hoje, não existem relatos de contatos fatais entre esses animais marinhos e os seres humanos.</p>\r\n<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;">Segundo ele, estas espécies possuem tentáculos responsáveis pela produção do cisto, substância que, se colocada em contato com o homem, libera um veneno urticante que causa irritação, inchaço e vermelhidão na pele.</p>\r\n<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;">As águas-vivas e as caravelas pertencem ao grupo dos cnidários, o mesmo das medusas. Felizmente, as existentes no Brasil não estão entre as espécies que podem levar à morte, como as que habitam a Austrália, onde vários casos fatais foram registrados nos últimos anos.</p>\r\n<h2 style="margin: 15px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 1.2em; vertical-align: baseline; color: #47423a; line-height: 15px; font-family: Arial, Helvetica, sans-serif;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; color: #5d5850; line-height: 13px;">Invasão</strong></h2>\r\n<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;">Sobre a invasão de águas-vivas no litoral paulista durante o feriado de ano-novo, quando cerca de 300 pessoas sofreram queimaduras, o biólogo explicou que as alterações climáticas ou o desequilíbrio ambiental no habitat da espécie, incomum nessa época do ano, podem ter sido os principais fatores para a proliferação do animal na região.</p>\r\n<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;">"É uma inverdade quando dizem que estes animais marinhos atacam as pessoas. As ocorrências não podem ser chamadas de ataque porque as águas-vivas são carregadas pela maré e liberam o seu veneno apenas quando se sentem ameaçadas por predadores", afirmou.</p>\r\n<p style="margin: 16px 0px 0px; padding: 0px; border: 0px; outline: #000000; font-size: 12px; vertical-align: baseline; line-height: 14px; color: #5d5850; font-weight: normal;"><em style="margin: 0px; padding: 0px; border: 0px; outline: #000000; vertical-align: baseline; background-color: transparent;">Você tem dúvidas sobre algo curioso ou inusitado? Então participe do Você Sabia?. <a style="margin: 0px; padding: 0px; border: 0px; outline: #000000; vertical-align: baseline; background-color: transparent; color: #ff9900; text-decoration: none;" href="http://noticias.terra.com.br/educacao/vocesabia/faleconosco.html"><strong style="margin: 0px; padding: 0px; border: 0px; outline: #000000; vertical-align: baseline; background-color: transparent;">Clique aqui</strong></a> e envie já a sua pergunta.</em></p>', '2013-11-19 15:13:47', '2013-11-19 15:13:47', 'a-agua-viva-pode-ser-fatal-para-o-ser-hu', 'a-noticia-muito-doida-medium.jpg'),
(7, 1, 'Bebê coala sobrevive a ataque com 15 tiros na', 'bebe-coala-sobrevive-a-ataque-com-15-tiros-na-small.jpg', 'bebe-coala-sobrevive-a-ataque-com-15-tiros-na.jpg', '<p><span style="color: #47423a; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; line-height: 16px;">O bebê fêmea foi encontrado ferido, ao lado da mãe morta, e levado para tratamento, em Queensland</span></p>', '<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">Um bebê coala sobreviveu a um ataque com 15 tiros, em Queensland, na Austrália. O animal foi encontrado por um morador ao lado da mãe morta, na última sexta-feira, e levado para tratamento no hospital do Australia Zoo.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">O bebê fêmea de pouco mais de um ano de idade, agora batizado de Frodo, parecia ter levado apenas tiros de raspão, mas depois de um raio-X os veterinários descobriram que havia aproximadamente 15 balas espalhadas por seu corpo, causando danos a seu estômago e intestinos.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">"O estado de Frodo é extremamente grave e vai exigir monitoramento e cuidado intensivos nos próximos dias", disse a veterinária do zoológico Amber Gillet.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">O coala também sofreu uma fratura no crânio e teve que passar por duas cirurgias. Na primeira operação, foram retiradas três balas. Na segunda, outros quatro projéteis foram removidos.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; background-color: transparent;">"Crueldade"</strong><br style="display: block;" />O animal está sendo tratado com antibióticos, fluídos e analgésicos fortes. O raio X mostrou que cerca de 15 balas atingiram o coala.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">"Estamos chocados de ver esse tipo de crueldade contra os animais e não conseguimos entender por que alguém poderia querer atirar em um coala que não representa nenhuma ameaça", disse Gillet.</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">"As populações de coala já estão em sério declínio e incidentes como este criam uma pressão desnecessária sobre uma espécie que já está lutando para sobreviver."</p>\r\n<p style="margin: 0px 0px 17px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: #5d5850; line-height: 25px; font-family: Arial, Helvetica, sans-serif;">O Australia Zoo, criado pelo falecido caçador de crocodilos Steve Irwin, criou uma conta para levantar fundos para o bebê Frodo e outros animais aos cuidados do hospital do zoológico. O ataque está sendo investigado pela polícia de Queensland.</p>', '2013-11-19 16:26:40', '2013-11-19 16:26:40', 'bebe-coala-sobrevive-a-ataque-com-15-tir', 'bebe-coala-sobrevive-a-ataque-com-15-tiros-na-medium.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `slug` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `partners`
--

INSERT INTO `partners` (`id`, `name`, `address`, `phone`, `email`, `link`, `image`, `created`, `updated`, `image_small`, `slug`) VALUES
(1, 'UNIPE', 'dawdaw', '8388604152', 'roger@gmail.com', 'www.google.com', 'unipe.jpg', '2013-11-13 16:57:04', '2013-11-13 16:57:04', 'unipe-thumb.jpg', 'unipe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` char(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `is_active`) VALUES
(2, 'adm', '$2a$10$OiB2yP0/Zb5upvKFMr8xcOhL1xK2Hrey0tkKdzoie/s8/a1aMCiRy', 'adm@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `whoweares`
--

CREATE TABLE IF NOT EXISTS `whoweares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `whoweares`
--

INSERT INTO `whoweares` (`id`, `description`, `title`) VALUES
(2, '<p style="text-align: left;">ro eriejr   ad adw daw daw daw daw aduwna daid awdiand adiuwad awida dad ada di awda wud aw dawd aw doaod aw doa wo daowmdoaw d aod oaod ao doa oda  djaw di ad a idaiw dia wid aid ai daiwd ia d ia diaw</p>', 'Quem somos');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
