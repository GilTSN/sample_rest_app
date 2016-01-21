CREATE DATABASE IF NOT EXISTS `sintegra` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `sintegra`;


-- Dumping structure for table sintegra.sintegra
CREATE TABLE IF NOT EXISTS `sintegra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inscricao_estadual` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razao_social` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logradouro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `municipio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uf` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atividade_economica` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_inicio_atividade` date DEFAULT NULL,
  `situacao_cadastral_vigente` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_situacao_cadastral` date DEFAULT NULL,
  `regime_apuracao` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emitente_nfe_desde` date DEFAULT NULL,
  `data_consulta` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
