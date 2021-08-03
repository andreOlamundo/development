CREATE TABLE IF NOT EXISTS `sdb_intranet`.`formpar_item` (
`par_item_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto incrementing paritem_id de cada item do PAR, índice exclusivo',
 `rf3_numero_par`int(6) COLLATE utf8_general_ci NOT NULL COMMENT 'Numero do PAR',
 `rf10_valor_item`float(12) COLLATE utf8_general_ci NOT NULL COMMENT 'Valor do item',
 `rf10_data_item`date COLLATE utf8_general_ci NOT NULL COMMENT 'Previsão de Desembolso do item',
 `rf10_dd_item`varchar(50) COLLATE utf8_general_ci NOT NULL COMMENT 'Descrição da Despesa do item',
  PRIMARY KEY (`par_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='dados do PAR';
