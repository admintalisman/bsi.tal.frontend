<?php
$topssp_summary_product = array();
		$topssp_summary_product["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_report_summary_product"
	);
		$tables_data["sp_summary_product"][".operations"] = &$topssp_summary_product;
?>