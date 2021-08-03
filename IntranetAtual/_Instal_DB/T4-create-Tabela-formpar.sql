CREATE TABLE IF NOT EXISTS `DB_INTRANET`.`formpar` (
  `par_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'índice exclusivo',
  `cod_depto` varchar(64) COLLATE utf8_general_ci NOT NULL COMMENT 'Departamento',
  `RF8_DJ` varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Descrição / Justificativa',
  `RF6_AtivoFixo` char(1) COLLATE utf8_general_ci NOT NULL COMMENT 'Ativo Fixo,',
  `RF5_POA` char(1) COLLATE utf8_general_ci NOT NULL COMMENT 'Previsão no orçamento Anual',
  `RF1_DATA_ATUAL`varchar(20) COLLATE utf8_general_ci NOT NULL COMMENT 'Data de Cadastro',
  `RF3_NUMEROPAR`int(6) COLLATE utf8_general_ci NOT NULL COMMENT 'Numero do PAR',
  `RF9_REDP`varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Retornos Estimados do Projeto',
  `RF10_VALORTOTAL`float(53) COLLATE utf8_general_ci NOT NULL COMMENT 'Valor do item',
  `user`varchar(24) COLLATE utf8_general_ci NOT NULL COMMENT 'user',
   PRIMARY KEY (`par_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados do PAR';
