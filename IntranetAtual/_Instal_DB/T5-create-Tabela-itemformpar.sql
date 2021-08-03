CREATE TABLE IF NOT EXISTS `DB_INTRANET`.`formpar_item` (
`par_item_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing paritem_id de cada item do PAR, índice exclusivo',
 `RF3_NUMEROPAR`int(6) COLLATE utf8_general_ci NOT NULL COMMENT 'Numero do PAR',
 `RF10_VALORITEM`float(12) COLLATE utf8_general_ci NOT NULL COMMENT 'Valor do item',
 `RF10_DATAITEM`date COLLATE utf8_general_ci NOT NULL COMMENT 'Previsão de Desembolso do item',
 `RF10_DDITEM`varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Descrição da Despesa do item',
  PRIMARY KEY (`par_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados do PAR';
