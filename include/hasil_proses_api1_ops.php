<?php
$topshasil_proses_api1 = array();
			$topshasil_proses_api1["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "table=v_bsmcilem&action=list",
		"payload" => "[]"
	);
	$tables_data["hasil_proses_api1"][".operations"] = &$topshasil_proses_api1;
?>